<?php namespace TGL\Orders\Repositories;


use TGL\Orders\Entities\Order;

class OrderRepository
{
    protected $model;

    function __construct(Order $model)
    {
        $this->model = $model;
    }

    public function getUserOrders($user_id)
    {
        return $this->model->with('user')->where('user_id', '=', $user_id)->get();
    }

    public function getOrders()
    {
        return $this->model->with('user')->get();
    }

    public function getOrder($order_number)
    {
        return $this->model->with('user')->where('order_number', '=', $order_number)->first();
    }

    public function addPrice($order_number, $price)
    {
        $order = $this->getOrder($order_number);

        $order->price = $price;
        $order->status_id = 2;

        $order->save();

        return $order;
    }

    public function acceptOrder($order_number)
    {
        $order = $this->getOrder($order_number);
        $order->status_id = 3;
        $order->save();
    }

    public function declineOrder($order_number)
    {
        $order = $this->getOrder($order_number);
        $order->status_id = 4;
        $order->save();
    }
}