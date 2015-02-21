@extends('layouts.main')

@section('content')
 <div id="homeTop">
             <div class="row">
                 <div class="col l12">
                         <div id="homeTitle">
                             <h1>Want. Request. Receive.</h1>
                         </div>

                     <div class="type-wrap">
                         <span id="typeStyle" ></span>
                     </div>

                 </div>
                 <div class="col l12">
                     <div class="center-align">
                         <div id="howToVid">

                                 <img id="vidPosition" src="/static/img/Process.gif" />
                                 <div class="content">

                                 </div>

                         </div>
                     </div>
                 </div>
             </div>
         </div>

         <div id="aboutContent">
             <div class="row">
                 <div class="col m12 l12">
                         <div class="valign" id="aboutTitle">
                             <h1>About Us</h1>
                             <div class="title-underline"></div>
                             <div class="title-tag-line" id="clientsTagLine">
                                 <em>Get To Know us a Little Better</em>
                             </div>
                         </div>
                 </div>
                 <div class="col m12 l12 valign-wrapper">
                     <div class="row">
                         <div class="col m12 l6">
                             <img class="valign" id="aboutImg" src="/static/img/aboutImg.png" />
                         </div>
                         <div class="col m12 l6">
                             <div id="aboutTextWrapper">
                                 <p id="aboutText">We are a professional group of individuals that live for and by the sneaker industry. For years we have strengthened relationships with the top distributors in our field in order to provide our clients with only the finest products in the market. At our disposition, we have thousands of authentic sneakers which we hand select and examine to specifically exceed your expectations. Virtually no pair, no matter how rare, can hide from us. We are obsessive and diligent in our craft that&#39;s why we consider each pair to be a work of wearable art. We are obsessive and diligent in our craft that&#39;s why we handle each pair as piece of wearable art. However, at the end of the day we are sneaker-heads, just like you&#133;</p>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

         <div id="ourClients">
             <div class="row">
                 <div class="col m12 l12">
                         <div id="clientsTitle">
                             <h1>Our Clients</h1>
                             <div class="title-underline"></div>
                             <div id="clientsTagLine">
                                 <em><p class="title-tag-line" >Here are some shout-outs from some of our awesome clients.</p><em>
                             </div>
                         </div>
                 </div>
                 <div class="col m12 l12 valign-wrapper">
                     <div class="">
                         <div id="shoutOutSlider">
                             <div id="iphone-border">
                                 <div id="off-button"></div>
                                 <div id="mute-button"></div>
                                 <div id="volume-up-button"></div>
                                 <div id="volume-down-button"></div>
                                 <div id="side-lines-1"></div>
                                 <div id="side-lines-2"></div>
                                 <div id="iphone-color">
                                     <div id="topEffect"></div>
                                     <div id="leftSideLine"></div>
                                     <div id="rightSideLine"></div>
                                     <div id="camera"></div>
                                     <div id="sensor"></div>
                                     <div id="speaker"></div>
                                     <div id="iphoneScreen" >
                                         <div class="step step-1" id="step1"></div><!-- #home-screen closing div -->

                                         <div class="step step-2" id="step2"></div><!-- #home-screen closing div -->

                                         <div class="step step-3" id="step3"></div><!-- #home-screen closing div -->

                                         <div class="step step-4" id="step4"></div><!-- #home-screen closing div -->

                                         <div class="step step-5" id="step5"></div><!-- #home-screen closing div -->

                                         <div class="step step-6" id="step6"></div><!-- #home-screen closing div -->

                                         <div class="step step-7" id="step7"></div><!-- #home-screen closing div -->

                                         <div class="step step-8" id="step8"></div><!-- #home-screen closing div -->

                                         <div class="step step-9" id="step9"></div><!-- #home-screen closing div -->

                                         <div class="step step-10" id="step10"></div><!-- #home-screen closing div -->
                                     </div><!-- #iphone-screen closing div -->
                                     <div id="bottomEffect"></div>
                                     <div id="home-button-border" >
                                         <div id="home-button-color"></div>
                                     </div>
                                 </div><!-- #iphone-color closing div -->
                             </div><!-- #iphone-color closing div -->
                         </div>
                     </div>
                 </div>
             </div>
         </div>

         <div class="z-depth-1" id="foundSold" >
             <div class="row">
                 <div class="col l12" >
                     <div id="foundTitle">
                         <h1>Found &amp; Sold </h1>
                         <div class="title-underline"></div>
                         <p class="title-tag-line" >Here are some of the hundreds of fresh kicks <br/> we have found and sold over the years.</p>
                     </div>
                     <div class="valign-wrapper found-shoes ">
                         <div class="container">
                             <div class="row">
                                 <div class="col s12 m4 img-resize-half">
                                     <img src="/static/img/Shoe2.png"/>
                                 </div>
                                 <div class="col s12 m4 img-resize-half">
                                     <img src="/static/img/shoe3.png"/>
                                 </div>
                                 <div class="col s12 m4 img-resize-half">
                                     <img src="/static/img/shoe4.png"/>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

         <div id="contactUs" >
             <div class="row">
                 <div class="col l12" >
                     <div id="contactTitle">
                         <h1>Contact Us</h1>
                         <div class="title-underline"></div>
                         <p class="title-tag-line" >Got any questions? We&#39;re always glad to help!</p>
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
@endsection