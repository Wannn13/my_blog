<nav class="navbar navbar-expand-lg bg-primary py-3 mb-4" style="color: #fff !important!;">
  <div class="container">
    <a class="navbar-brand" href="/">MyBlog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link {{ ($active === "home") ? 'active' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === "about") ? 'active' : '' }}" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === "posts") ? 'active' : '' }}" href="/posts">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === "categories") ? 'active' : '' }}" href="/categories">Categories</a>
        </li>
      </ul>
      
      <ul class="navbar-nav ms-auto">
        @auth
        <p class="mt-3">
          Hallo, {{ auth()->user()->username }}
        </p>
        <li class="nav-item dropdown" style="margin-right: 50px">
          <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
            aria-expanded="false">
            @if(Auth::user()->image)
              <img src="{{ asset('storage/' . Auth::user()->image) }}" class="rounded-circle" width="35" height="35" alt="{{ Auth::user()->name }}">
            @else
              <img src="https://source.unsplash.com/500x500/?person" class="rounded-circle" width="35" height="35" alt="{{ Auth::user()->id }}">
            @endif
            {{-- <img src="https://source.unsplash.com/500x500/?person" class="rounded-circle" width="35" height="35"> --}}
          </a>
          <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
            <div class="message-body">
              <a href="/dashboard" class="d-flex align-items-center gap-2 dropdown-item">
                <i class="ti ti-layout-dashboard fs-6"></i>
                <p class="mb-0 fs-3">Dashboard</p>
              </a>
              <a href="/dashboard/user" class="d-flex align-items-center gap-2 dropdown-item">
                <i class="ti ti-user fs-6"></i>
                <p class="mb-0 fs-3">My Profile</p>
              </a>
              <a href="/dashboard/posts" class="d-flex align-items-center gap-2 dropdown-item">
                <i class="ti ti-article fs-6"></i>
                <p class="mb-0 fs-3">My Posts</p>
              </a>
              <form action="/logout" method="post" class="d-grid gap-2">
                @csrf
                <button type="submit" class="btn btn-outline-primary mx-3 my-2 d-block btn-logout">Logout</button>
              </form>
            </div>
          </div>
        </li>
        @else 
        <li class="nav-item">
          <a href="/login" class="nav-link {{ ($active === "login") ? 'active' : '' }} btn btn-sm btn-outline-light btn-login d-block px-4 py-1 text-white rounded-4">Login</a>
        </li>
        @endauth
      </ul>

        {{-- <ul class="navbar-nav ms-auto">
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome {{ auth()->user()->username }}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/logout" method="post">
                @csrf
                  <button type="submit" class="dropdown-item">Logout</button>
                </form>
              </li>
            </ul>
          </li>
          @else   
          <li class="nav-item">
            <a href="/login" class="nav-link {{ ($active === "login") ? 'active' : '' }} btn btn-light px-4 py-1 btn-login border-0">Login</a>
          </li>
          @endauth
        </ul> --}}

      </div>
    </div>
</nav>
<style>
  .nav-link, .nav-link .active, .navbar-brand{
    color: #fff !important;
  }
  .nav-item a{
    font-size: 16px ;
  }
  .nav-link:hover{
    color: #fff;
  }
  .btn-login{
    color: #fff !important;
  }
  .btn-login:hover{
    color: #5D87FF !important;
    background-color: #fff !important;
  }
  .btn-login.active{
    color: #5D87FF !important;
    background-color: #fff;
  }
</style>