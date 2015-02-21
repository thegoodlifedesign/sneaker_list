<?php namespace TGL\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Routing\Router;

class IsOwner
{
    protected $auth;

    /**
     * @var Router
     */
    protected $router;

    function __construct(Guard $auth, Router $router)
    {
        $this->auth = $auth;
        $this->router = $router;
    }

    /**
     * Run the request filter.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($this->auth->user()->username !== $this->router->input('username'))
        {
            return redirect()->to('/');
        }

        return $next($request);
    }
}