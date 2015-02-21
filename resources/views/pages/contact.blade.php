@extends('layouts.main')

@section('content')
<div id="contactTop">
    <div class="row">
        <div class="col l12" >
            <div id="contactPageTitle">
                <h1>Contact Us</h1>
                <div class="title-underline"></div>
                <p class="title-tag-line" >Got any questions? We&#39;re always glad to help!</p>
            </div>
        </div>
    </div>
</div>

<div id="contactUs" >
    <div class="row">
        <div class="col l12" >
            <div class="contact-info">
                <div class="container">
                    <div class="col s4 center" >
                        <img  src="/static/img/phone.png">
                        <h5 >(954) 000-0000</h5>
                    </div>
                    <div class="col s4 center" >
                        <img  src="/static/img/ig.png">
                        <h5>@Sneakerlistinc</h5>
                    </div>
                    <div class="col s4 center" >
                        <img  src="/static/img/mail.png">
                        <h5 >Contact@thesneakerlist.com</h5>
                    </div>
                </div>
            </div>
            <div class="container" id="contactForm" >
                <div class="row">
                    <form class="col s12 center-align">
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="first_name" type="text" class="validate">
                                <label for="first_name">First Name</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="email" type="email" class="validate">
                                <label for="email">Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="subject" type="text" class="validate">
                                <label for="subject">Subject</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
                                <label for="icon_prefix2">Message</label>
                            </div>
                        </div>
                        <button class="btn waves-effect waves-light right" type="submit" name="action">Submit
                            <i class="mdi-content-send right"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection