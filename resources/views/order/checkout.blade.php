@extends('layouts.main')

@section('content')

    @if (count($errors) > 0)
            <div data-alert class="alert-box alert">
        	    <strong>Whoops!</strong> There were some problems with your input.<br><br>
        	    <ul>
        		    @foreach ($errors->all() as $error)
        		        <li>{{ $error }}</li>
        		    @endforeach
        	    </ul>
        	    <a href="#" class="close">×</a>
            </div>
        @endif
<?php

if($user->full_name !== "")
{
  $boom = explode(' ', $user->full_name);
  $first_name = $boom[0];
  $last_name = $boom[1];
}
?>
  <div id="checkOutTop">
      <div class="row">
          <div class="col l12" >
              <div id="checkOutPageTitle">
                  <h1>Check Out </h1>
                  <div class="title-underline"></div>
                  <p class="title-tag-line" >Thank you for your order!</p>
              </div>
          </div>
      </div>
  </div>
@if($user->full_name == "")
<div id="checkOut" >
      <div class="row">
          <div class="container" id="contactForm" >
              <div class="row form-container">
                  <div id="checkOutForm">
                      <div id="checkOutFormTitle"><h4>Billing Information</h4></div>
                      <form action="" method="POST" id="payment-form">
                          <span class="payment-errors"></span>
                          <input type="hidden" name="_token" value="{{csrf_token()}}">
                          <div class="row">
                              <div class="input-field col s6">
                                  <input id="first_name" type="text" name="first_name" class="validate" value="">
                                  <label for="first_name">First Name</label>
                              </div>
                              <div class="input-field col s6">
                                  <input id="last_name" type="text" name="last_name" class="validate">
                                  <label for="last_name">Last Name</label>
                              </div>
                          </div>
                          <div class="row">
                              <div class="input-field col s4">
                                  <input id="address" type="text" name="address" class="validate">
                                  <label for="address">Address</label>
                              </div>
                              <div class="input-field col s4">
                                  <input id="city" type="text" name="city" class="validate">
                                  <label for="city">City</label>
                              </div>
                              <div class="input-field col s4">
                                  <input id="state" type="text" name="state" class="validate">
                                  <label for="state">State</label>
                              </div>
                              <div class="input-field col s12">
                                  <input id="cardNumber" type="text" data-stripe="number">
                                  <label for="cardNumber">Card Number</label>
                              </div>
                              <div class="input-field col s12">
                                  <input id="cvc" type="text" data-stripe="cvc">
                                  <label for="cvc">CVC</label>
                              </div>
                          </div>
                          <div class="row">
                              <div class="input-field col s6">
                                  <input id="month" type="text" class="validate" data-stripe="exp-month">
                                  <label for="month">Expiration Month</label>
                              </div>
                              <div class="input-field col s6">
                                  <input id="year" type="text" class="validate" data-stripe="exp-year">
                                  <label for="year">Expiration Year</label>
                              </div>
                          </div>
                          <button class="btn waves-effect waves-light right" type="submit" name="action">Submit
                              <i class="mdi-content-send right"></i>
                          </button>
                      </form>
                  </div>
                  <div class="dope-shadow"></div>
              </div>
          </div>
      </div>
  </div>
@else
<div id="checkOut" >
      <div class="row">
          <div class="container" id="contactForm" >
              <div class="row form-container">
                  <div id="checkOutForm">
                      <div id="checkOutFormTitle"><h4>Billing Information</h4></div>
                      <form action="" method="POST" id="payment-form">
                          <span class="payment-errors"></span>
                          <input type="hidden" name="_token" value="{{csrf_token()}}">
                          <div class="row">
                              <div class="input-field col s6">
                                  <input id="first_name" type="text" name="first_name" class="validate" value="{{$first_name}}">
                                  <label for="first_name">First Name</label>
                              </div>
                              <div class="input-field col s6">
                                  <input id="last_name" type="text" name="last_name" class="validate"  value="{{$last_name}}">
                                  <label for="last_name">Last Name</label>
                              </div>
                          </div>
                          <div class="row">
                              <div class="input-field col s4">
                                  <input id="address" type="text" name="address" class="validate"  value="{{$user->address}}">
                                  <label for="address">Address</label>
                              </div>
                              <div class="input-field col s4">
                                  <input id="city" type="text" name="city" class="validate" value="{{$user->city}}">
                                  <label for="city">City</label>
                              </div>
                              <div class="input-field col s4">
                                  <input id="state" type="text" name="state" class="validate" value="{{$user->state}}">
                                  <label for="state">State</label>
                              </div>
                              <div class="input-field col s12">
                                  <input id="cardNumber" type="text" data-stripe="number">
                                  <label for="cardNumber">Card Number</label>
                              </div>
                              <div class="input-field col s12">
                                  <input id="cvc" type="text" data-stripe="cvc">
                                  <label for="cvc">CVC</label>
                              </div>
                          </div>
                          <div class="row">
                              <div class="input-field col s6">
                                  <input id="month" type="text" class="validate" data-stripe="exp-month">
                                  <label for="month">Expiration Month</label>
                              </div>
                              <div class="input-field col s6">
                                  <input id="year" type="text" class="validate" data-stripe="exp-year">
                                  <label for="year">Expiration Year</label>
                              </div>
                          </div>
                          <button class="btn waves-effect waves-light right" type="submit" name="action">Submit
                              <i class="mdi-content-send right"></i>
                          </button>
                      </form>
                  </div>
                  <div class="dope-shadow"></div>
              </div>
          </div>
      </div>
  </div>
@endif
@endsection