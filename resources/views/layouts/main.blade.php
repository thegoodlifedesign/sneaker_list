
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sneaker List | Welcome</title>
    <link rel="stylesheet" href="/static/css/materialize.css" />
    <link rel="stylesheet" href="/static/css/styles.css" />
    <link rel="stylesheet" href="/static/css/carlos.css" />
    <link rel="stylesheet" href="/static/css/testimonials-slider.css" />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  </head>
  <body>

   <nav>
       <div class="nav-wrapper">
         <a href="/" class="brand-logo"><img id="logo" src="/static/img/logo.png"></a>
         <ul id="nav-mobile" class="right hide-on-med-and-down">
           <li><a href="/shoe-request">Shoe Request</a></li>
           <li><a href="http://contourbeta.com/sneaker-list/1054-2/">How It Works</a></li>
           <li><a href="/gallery">Gallery</a></li>
           <li><a href="/contact">Contact Us</a></li>
           @if(Auth::check())
            <li><a href="/{{Auth::user()->username}}/orders">Orders</a></li>
            <li><a href="/auth/logout">Logout</a></li>
           @else
            <li><a href="/auth/sign-up">Sign Up</a></li>
           @endif
         </ul>
       </div>
     </nav>

    @if (Session::has('flash_notification.message'))
        <div data-alert class="alert-box alert-{{ Session::get('flash_notification.level') }}">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{ Session::get('flash_notification.message') }}
        </div>
   @endif

    @yield('content')

     <footer class="page-footer">
              <div class="container">
                <div class="row">
                  <div class="col l6 s12">
                    <h5 class="white-text">The Sneaker List</h5>
                    <p class="grey-text text-lighten-4">Want.Request.Receive</p>
                  </div>
                  <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Links</h5>
                    <ul>
                      <li><a href="/shoe-request">Shoe Request</a></li>
                                 <li><a href="http://contourbeta.com/sneaker-list/1054-2/">How It Works</a></li>
                                 <li><a href="/gallery">Gallery</a></li>
                                 <li><a href="/contact">Contact Us</a></li>
                                 @if(Auth::check())
                                  <li><a href="/{{Auth::user()->slug}}/orders">Orders</a></li>
                                  <li><a href="/auth/logout">Logout</a></li>
                                 @else
                                  <li><a href="/auth/sign-up">Sign Up</a></li>
                                 @endif
                    </ul>
                  </div>
                </div>
              </div>
              <div class="footer-copyright">
                <div class="container">
                © 2014 Copyright Text
                <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
                </div>
              </div>
            </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="/static/js/materialize.js"></script>
    <script>
      $(document).foundation();
    </script>

    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>

    <script type="text/javascript">
      // This identifies your website in the createToken call below
      Stripe.setPublishableKey('pk_live_qk5xeN9lts3hKtA9Rg1Nzjdw');
      // ...
    </script>
    <script>
    $(document).ready(function(){
        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
        $('.modal-trigger').leanModal();
      });
    </script>
    <script src="/static/js/shoe-request.js"></script>
    <script src="/static/js/carlos.js"></script>
    <script src="/static/js/shoutoutslider.js"></script>
    <script src="/static/js/typed.js"></script>
  </body>
</html>
