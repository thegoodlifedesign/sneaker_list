<?php namespace TGL\Http\Controllers;


use TGL\Http\Requests\AddUserDetailsRequest;
use TGL\Users\Repositories\UserRepository;

class UserController extends Controller
{
    /**
     * @var UserRepository
     */
    protected $userRepo;

    function __construct(UserRepository $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    public function postAddDetails(AddUserDetailsRequest $request)
    {
        $this->userRepo->addDetails($request);

        return redirect()->back();
    }
}