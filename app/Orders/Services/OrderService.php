<?php namespace TGL\Orders\Services;


use TGL\Orders\Repositories\OrderRepository;
use TGL\Users\Repositories\UserRepository;

class OrderService
{
    protected $userRepo;
    protected $orderRepo;

    function __construct(UserRepository $userRepo, OrderRepository $orderRepo)
    {
        $this->userRepo = $userRepo;
        $this->orderRepo = $orderRepo;
    }

    public function getUserOrders($username)
    {
        $user = $this->userRepo->getBySlug($username);

        return $this->orderRepo->getUserOrders($user->id);
    }

    public function getOrders()
    {
        return $this->orderRepo->getOrders();
    }

    public function getOrder($order_number)
    {
        return $this->orderRepo->getOrder($order_number);
    }

    public function addPrice($order_number, $price)
    {
        $this->orderRepo->addPrice($order_number, $price);
    }

    public function acceptOrder($order_number)
    {
        $this->orderRepo->acceptOrder($order_number);
    }

    public function declineOrder($order_number)
    {
        $this->orderRepo->declineOrder($order_number);
    }
}