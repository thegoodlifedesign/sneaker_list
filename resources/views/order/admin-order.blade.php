@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col s2 no-padding">
        <div id="adminSidebar">
            <ul class="list-admin-sidebar">
                <li><a href="/admin/orders">Orders</a></li>
                <li><a href="">Gallery</a></li>
                <li><a href="">Blog</a></li>
                <li><a href="">Messages</a></li>
            </ul>
        </div>
    </div>
    <div class="col s10 no-padding">
        <div id="adminBody">
            <div id="userInfo">
                <div class="user-info-title order-title">
                    <a></a><h2><i class="fa fa-chevron-left"></i>User Info</h2>
                </div>
                <div class="row">
                    <div class="col s2">
                        <img src="http://placehold.it/250x250">
                    </div>
                    <div class="col s10">
                        <ul class="list-user-info">
                            <li><strong>Username: </strong>{{$order->user->username}}</li>
                            <li><strong>Full Name: </strong>{{$order->user->full_name}}</li>
                            <li><strong>Email: </strong>{{$order->user->email}}</li>
                            <li><strong>Address: </strong>{{$order->user->address}}, {{$order->user->city}}, {{$order->user->state}}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="orderDetails">
                <table class="full-width striped"  id="orderTable">
                    <thead>
                        <tr>
                            <th>Order Info</th>
                            <th>Shoe Info</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Order #: </strong>{{$order->order_number}}</td>
                            <td><strong>Brand: </strong>{{$order->brand}}</td>
                        </tr>
                        <tr>
                            @if(is_null($order->price))
                                <td>
                                        <form action="/admin/order/add-price" method="post">
                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                            <input type="hidden" name="order_number" value="{{$order->order_number}}">
                                            <div class="input-field col s6">
                                                <input id="inputShoePrice" type="text" name="price" class="validate">
                                                <label for="inputShoePrice">Price</label>
                                            </div>
                                            <input type="submit" value="Submit" id="inputShoePriceBtn">
                                        </form>
                                </td>
                            @else
                                <td><strong>Price: </strong>${{$order->price}}</td>
                            @endif
                            <td><strong>Model: </strong>{{$order->model}}</td>
                        </tr>
                        <tr>
                            <td><strong>Status: </strong>{{$order->status->name}}</td>
                            <td><strong>Shoe Size: </strong>{{$order->size}}</td>
                        </tr>
                        <tr>
                            <td><strong>Date: </strong>{{$order->created_at}}</td>
                            <td><strong>Noted: </strong>{{$order->msg}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection