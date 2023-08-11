<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4" style="margin-top: -1.5rem; color: #fff !important;">
    <div class="container pt-4 pb-1">
      <a class="navbar-brand" href="/" class="fw-bold">Myblog</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
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

        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
          @auth
          <p class="mt-3">
            Hallo, {{ auth()->user()->username }}
          </p>
          <li class="nav-item dropdown" style="margin-right: 50px">
            <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
              aria-expanded="false">
              <img src="https://source.unsplash.com/500x500/?person" class="rounded-circle" width="35" height="35">
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
                <div class="d-flex justify-content-center">
                  <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="btn btn-outline-primary mt-2 mb-2 px-5 d-block btn-logout"> Logout </button>
                  </form>
                </div>
              </div>
            </div>
          </li>
          @else 
          <li class="nav-item">
            <a href="/login" class="nav-link {{ ($active === "login") ? 'active' : '' }} btn btn-light px-4 py-1 btn-login border-0">Login</a>
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
  .nav-link:hover{
    color: #fff;
  }
  .btn-login{
    color: #5D87FF !important;
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