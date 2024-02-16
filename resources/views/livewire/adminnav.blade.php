<div>
<nav class="navbar navbar-expand-lg bg-light border border-bottom">
  <div class="container-fluid">
  <a class="navbar-brand text-success fs-3" href="{{ route('home')}}"><b><span class="text-primary">BYTE</span>WEBSTER</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-dark" href="{{ route('home')}}">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="{{ route('gallery')}}">GALLERY</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="{{ route('about')}}">ABOUT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="{{ route('contact')}}">CONTACT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="{{ route('purchase')}}">PURCHASE</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            ADMIN LINKS
          </a>
          <ul class="dropdown-menu">
            <li><a class="fs-6 nav-link text-dark" href="{{ route('users')}}">ALL USERS</a></li>
            <li><a class="fs-6 nav-link text-dark" href="{{ route('show-messages')}}">ALL MESSAGES</a></li>
            <li><a class="fs-6 nav-link text-dark" href="{{ route('add-products')}}">ADD PRODUCTS</a></li>
            <li><a class="fs-6 nav-link text-dark" href="{{ route('show-products')}}">SHOW PRODUCTS</a></li>
          </ul>
        </li>
      </ul>
      
      @if( strlen(Auth::user()?->name)>0)
        <div class="d-flex">
          @if(is_null(Auth::user()->profile))
          
            <a class="m-2 fs-5 text-decoration-none text-dark" href="{{route('dashboard')}}">
              <img 
              src="{{ asset('storage/photos/default.png')}}" 
              alt="" height="30" width="30" class="rounded-circle" > 
              {{ Auth::user()?->name }}</a>&nbsp
          @else
          <a class="m-2 fs-5 text-decoration-none text-dark" href="{{route('dashboard')}}">
            <img src="{{ asset('storage/'. Auth::user()->profile ) }}" alt="" height="30" width="30" class="rounded-circle" > {{ Auth::user()?->name }}</a>&nbsp
          @endif
          <a class="btn btn-info fs-5" href="{{route('logout')}}">Logout</a>&nbsp      
        </div>        
      @else 
        <div class="d-flex">
          <a class="btn btn-info" href="{{route('login')}}">Login</a>&nbsp
          <a class="btn btn-info" href="{{route('register')}}">Register</a>
        </div> 
      @endif
    </div>
  </div>
</nav>
</div>
