@extends('...layouts.main')

@section('content')
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

@if (count($errors) > 0)
	<div class="alert alert-danger">
		<strong>Whoops!</strong> There were some problems with your input.<br><br>
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif

<div id="checkOut" >
    <div class="container">
        <h4 id="howWeWork">Check out our <u><em><a href="howitworks.html">How It Works Page</a></em></u> to learn how we work!</h4>
        <p id="disclaimer"><em>*<span>DISCLAIMER</span> - The $14.99 Shoe Request Fee is a Finders Fee <span>not the actual price of the shoes</span>!!</em> </p>
    </div>
    <div class="row">
        <div class="container" id="contactForm" >
            <div class="row form-container">
                <div id="sneakerConForm">
                    <div id="checkOutFormTitle"><h4>Billing Information</h4></div>
                    <form class="col s12" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="username" type="text" name="username" class="validate">
                                                <label for="username">Username</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="password" type="password" name="password" class="validate">
                                                <label for="password">Password</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="email" type="email" name="email" class="validate">
                                                <label for="email">Email Address</label>
                                            </div>
                                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="shoeBrand" type="text" name="brand" class="validate">
                                <label for="shoeBrand">Shoe Brand</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="model" type="text" name="model" class="validate">
                                <label for="model">Shoe Model</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field  col s12">
                                <input id="size" type="text" name="size" class="validate">
                                <label for="size">Shoe Size</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="url" type="url" name="url" class="validate">
                                <label for="url">Shoe Link</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="textarea" name="message" class="materialize-textarea"></textarea>
                                <label for="textarea">Message:</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col sm6 left">
                                <span class="Request-price">Shoe Request Fee: $14.99 </span>
                            </div>
                            <div class="col sm3 right">
                                <button class="btn waves-effect waves-light" type="submit" name="action">Buy Now!
                            </button>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection




