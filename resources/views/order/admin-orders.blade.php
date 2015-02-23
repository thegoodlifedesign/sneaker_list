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
            <table class="full-width striped" id="ordersTable">
                <thead>
                    <tr>
                        <th>Order #</th>
                        <th>User</th>
                        <th>Time</th>
                        <th>Brand</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Price Quote</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                        <tr>
                                <td><a href="/admin/order/{{$order->order_number}}">{{$order->order_number}}</a></td>
                                <td>{{$order->user->username}}</td>
                                <td>{{$order->created_at}}</td>
                                <td>{{$order->brand}}</td>
                                <td>{{$order->model}}</td>
                                <td>{{$order->status->name}}</td>
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
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection