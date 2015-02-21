@extends('...layouts.main')

@section('content')
<div id="shoeRequestTop">
    <div class="row">
        <div class="col l12" >
            <div id="contactPageTitle">
                <h1>Shoe Request</h1>
                <div class="title-underline"></div>
                <p class="title-tag-line" >You want it. We find it!</p>
            </div>
        </div>
    </div>
</div>

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


    <div class="row">
      <div class="container">
        <div id="shoeRequestForm">
            <form class="col s12" method="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
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
              <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                  <i class="mdi-content-send right"></i>
              </button>
            </form>
        </div>
      </div>
    </div>
@endsection




