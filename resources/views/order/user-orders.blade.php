@extends('layouts.main')

@section('content')
<div class="row">
    @include('partials.user-sidebar')
    <div class="col s10 no-padding">
        <div id="userBody">
            <table class="full-width  striped" id="ordersTable">
                <thead>
                    <tr>
                        <th>Order #</th>
                        <th>User</th>
                        <th>Time</th>
                        <th>Brand</th>
                        <th>Model</th>
                        <th>Price Quote</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                        <tr>
                                <td><a href="/{{$order->user->slug}}/order/{{$order->order_number}}">{{$order->order_number}}</a></td>
                                <td>{{$order->user->username}}</td>
                                <td>{{$order->created_at}}</td>
                                <td>{{$order->brand}}</td>
                                <td>{{$order->model}}</td>
                                @if(is_null($order->price))
                                    <td><strong>Price: </strong>Not Set Yet</td>
                                @else
                                    <td><strong>Price: </strong>${{$order->price}}</td>
                                @endif
                                @if($order->status_id ==1)
                                    <td><button class="order-btn not-found-btn">Not Found Yet</button></td>
                                @elseif($order->status_id == 2)
                                    <?php $price = $order->price * 100 ?>
                                    <td>
                                        <div class="row">
                                            <div class="col s3">
                                                <form action="/{{Auth::user()->slug}}/order/accept-order" method="POST">
                                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                    <input type="hidden" name="order_number" value="{{$order->order_number}}">
                                                    <input type="hidden" name="price" value="{{$price}}">
                                                  <script
                                                      src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                                      data-key="pk_test_W1r9jEKs1xdjHjm24kcncrLj"
                                                      data-amount="{{$price}}"
                                                      data-name="The Sneaker List"
                                                      data-description="{{$order->brand}}, {{$order->model}}"
                                                      data-image="/128x128.png">
                                                    </script>
                                                </form>
                                            </div>
                                            <div class="col s3">
                                                <a href="#"><button class="order-btn new-request-btn">New Request</button></a>
                                            </div>
                                            <div class="col s6">
                                                <form method="post" action="/{{Auth::user()->slug}}/order/decline-order">
                                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                    <input type="hidden" name="order_number" value="{{$order->order_number}}">
                                                    <input type="submit" class="order-btn right decline-btn" value="Decline">
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                @elseif($order->status_id == 3)
                                    <td><button class="order-btn not-found-btn">Accepted</button></td>
                                @elseif($order->status_id == 4)
                                    <td><button class="order-btn not-found-btn">Declined</button></td>
                                @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

