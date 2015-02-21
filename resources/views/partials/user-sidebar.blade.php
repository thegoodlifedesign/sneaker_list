<div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Fill out below!</h4>
      <form method="post" action="/user/add-details">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="row">
          <div class="input-field col s6">
            <input id="firstName" type="text" name="first_name" class="validate">
            <label for="firstName">First Name</label>
          </div>
          <div class="input-field col s6">
            <input id="lastName" type="text" name="last_name" class="validate">
            <label for="lastName">Last Name</label>
          </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input type="text" name="address" id="address">
                <label for="address">Street Address</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input type="text" name="city" id="city">
                <label for="city">City</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input type="text" name="state" id="state">
                <label for="state">State</label>
            </div>
        </div>
        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
            <i class="mdi-content-send right"></i>
          </button>
      </form>
    </div>
    <div class="modal-footer">
      <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close">Close</a>
    </div>
  </div>


<div class="col s2 no-padding">
    <div id="userSidebar">
        @if($user->full_name == "")
        <div class="user-admin-info-wrapper">
            <h2>Add Info:</h2>
            <div class="user-admin-info">
                <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Add Your Info!</a>
            </div>
        </div>
        @else
            <div class="user-admin-info-wrapper">
                <h2>Full Name:</h2>
                <div class="user-admin-info">
                    <h6>{{$user->full_name}}</h6>
                </div>
            </div>
            <div class="user-admin-info-wrapper">
                <h2>Username:</h2>
                <div class="user-admin-info">
                    <h6>{{$user->username}}</h6>
                </div>
            </div>
            <div class="user-admin-info-wrapper">
                <h2>Email:</h2>
                <div class="user-admin-info">
                    <h6>{{$user->email}}</h6>
                </div>
            </div>
            <div class="user-admin-info-wrapper">
                <h2>Address:</h2>
                <div class="user-admin-info">
                    <h6>{{$user->address}}, {{$user->city}}, {{$user->state}}</h6>
                </div>
            </div>
            @endif
        </div>
</div>



