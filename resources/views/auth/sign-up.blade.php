@extends('layouts.main')

@section('content')

<div id="signUpTop">
    <div class="row">
        <div class="col l12" >
            <div id="signUpPageTitle">
                <h1>Sign Up! </h1>
                <div class="title-underline"></div>
                <p class="title-tag-line" >Thank you for business!</p>
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

<div id="signUp" >
    <div class="row">
        <div class="container" id="contactForm" >
            <div class="row form-container">
                <div id="signUpForm">
                    <div id="signUpFormTitle"><h4>Sign Up!</h4></div>
                    <form action="/auth/login" method="POST" id="">
                    	<input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="row">
                            <div class="col s6">
                                <div id="oldUser" >
                                    <div id="signUpFormTitle"><h5>Existing User</h5></div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="username" type="text" name="username" class="validate" value="{{old('username')}}">
                                            <label for="username">Username</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="password" type="password" name="password" class="validate">
                                            <label for="password">Password</label>
                                        </div>
                                    </div>
                                    <button class="btn waves-effect waves-light right" type="submit" name="action">Sign-in
                                    </button>
                                </div>
                            </div>
                        </form>
                        <form method="post" action="/auth/register">
                        	<input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="vdivider"></div>

                            <div class="col s6" >
                                <div id="newUser">
                                    <div id="signUpFormTitle"><h5>New User</h5></div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="username" type="text" name="username" class="validate"  value="{{old('username')}}">
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
                                            <input id="email" type="email" name="email" class="validate"  value="{{old('email')}}">
                                            <label for="email">Email</label>
                                        </div>
                                    </div>
                                    <button class="btn waves-effect waves-light right" type="submit" name="action">Register
                                    </button>
                                </div>
                            </div>

                        </div>

                    </form>
                </div>
                <div class="dope-shadow"></div>
            </div>
        </div>
    </div>
</div>
@endsection

