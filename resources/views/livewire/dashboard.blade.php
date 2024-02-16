<div>
@if (session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
@if(session('warningmessage'))
    <div class="alert alert-danger fs-6">
        {{ session('warningmessage')}}
    </div>
@endif
<div class=" p-2 bottom-radious bg-light shadow-lg">
  <h1 class="display-6">Welcome to Dashboard, {{ Auth::user()?->name }} <span class="fs-5">({{ Auth::user()?->user_type}})</span></h1>
  <hr class="my-2">
  <div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-md-2 mt-md-2 align-items-center">
      <div class="col">
        <div class="card small my-3 shadow rounded border-0">
            <div class="card-header bg-white text-primary">
              Your Profile Photo
            </div>

            <div class="card-body">
                @if(is_null(Auth::user()->profile))
                  <img class="dashimage" src="{{ asset('storage/photos/default.png')}}" alt="">
                @else
                  <img class="dashimage" src="{{ asset('storage/'. Auth::user()->profile ) }}" alt="">
                 @endif
                  <div class="d-grid gap-2">
                    <a href="{{ route('upload')}}" class="text-center btn btn-success">Change Profile</a>
                  </div>
            </div>
          </div>
       </div>
       <div class="col">
        <div class="card small my-3 shadow rounded border-0">
          <div class="card-header bg-white text-primary">
          Your Personal Info
          </div>
          <div class="card-body">
            <div class="d-flex justify-content-between">
              <h6>Name</h6>
              <h5>{{ Auth::user()?->name }}</h5>
            </div>
            <hr>
            <div class="d-flex justify-content-between">
              <h6>E-mail</h6>
              <h5>{{ Auth::user()->email }}</h5>
            </div>
            <hr>
            <div class="d-flex justify-content-between">
              <h6>Age</h6>
              <h5>{{ Auth::user()?->age }}</h5>
            </div>
            <hr>
            <div class="d-flex justify-content-between">
              <h6>Contact No</h6>
              <h5>{{ Auth::user()?->phone }}</h5>
            </div>
            <hr>
            <div class="d-flex justify-content-between">
              <h6>Gender</h6>
              <h5>{{ Auth::user()?->gender }}</h5>
            </div>
            <br>
            <div class="d-grid gap-2">
            <a 
                href="{{ route('edit-profile')}}"
                class="btn fs-6 btn-success btn-sm mb-1 text-decoration-none"><i class="bi bi-pencil-square"></i> Edit Profile</a>
                <a 
                href=""
                class="btn fs-6 btn-warning btn-sm mb-1 text-decoration-none"><i class="bi bi-key"></i> Change Password</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
