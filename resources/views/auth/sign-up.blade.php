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

<div class="container">
    <h4 id="howWeWork">Sign in or create a new account to move forward.</h4>
</div>

<div id="signUp" >
    <div class="row">
        <div class="container" id="contactForm" >
            <div class="row form-container">
                <div class="s12 m6 offset-m3 col">
                <div id="signUpForm">
                    <div id="signUpFormTitle">
                        <div class="user-form-toggle s6 col offset-s3">
                                <div class="switch">
                                    <label>
                                        Sign In
                                        <input id="formChange" type="checkbox">
                                        <span class="lever"></span>
                                        Register!
                                    </label>
                                </div>
                            </div>
                        </div>


                        <form action="/auth/login" method="POST" class="sign-up-form">
                            <div class="row">
                                <div class="col s12">
                                    <div id="oldUser" >
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="username" type="text" class="validate">
                                                <label for="username">Username</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="password" type="password" class="validate">
                                                <label for="password">Password</label>
                                            </div>
                                        </div>
                                        <div class="row email-register">
                                            <div class="input-field col s12">
                                                <input id="email" type="email" class="validate">
                                                <label for="email">Email Address</label>
                                            </div>
                                        </div>
                                        <button id="signUpBtn" class="btn waves-effect waves-light right" type="submit" name="action">Sign-in
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

