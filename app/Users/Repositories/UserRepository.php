<?php namespace TGL\Users\Repositories;


use Illuminate\Contracts\Auth\Guard;
use Illuminate\Session\SessionManager;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use TGL\Orders\Entities\Order;
use TGL\Tools\Slugger\Slugger;
use TGL\Users\Entities\User;

class UserRepository
{
    use Slugger;

    protected $model;
    protected $auth;
    protected $session;

    function __construct(User $model, Guard $auth, SessionManager $session)
    {
        $this->model = $model;
        $this->auth = $auth;
        $this->session = $session;
    }

    public function persist($user)
    {
        $this->model->username = $user->username;
        $this->model->email = $user->email;
        $this->model->password = Hash::make($user->password);
        $this->model->slug = $this->sluggify($user->username);

        $this->model->save();

        return $this->model;
    }

    public function placeOrder($command)
    {
        $user = $this->model->where('id', '=', $this->auth->user()->id)->first();

        $user->full_name = $command->first_name." ".$command->last_name;
        $user->address = $command->address;
        $user->city = $command->city;
        $user->state = $command->state;

        $user->save();

        $order = new Order([
            'order_number' => rand(10000,99999),
            'size' => $this->session->get('order')['size'],
            'brand' => $this->session->get('order')['brand'],
            'model' => $this->session->get('order')['model'],
            'url' => $this->session->get('order')['url'],
            'msg' => $this->session->get('order')['msg'],
            'status_id' => 1,
        ]);

        $user->orders()->save($order);
    }

    public function getBySlug($slug)
    {
        $user = $this->model->where('slug', '=', $slug)->first();

        if( ! $user) throw new UsernameNotFoundException;

        return $user;
    }
}