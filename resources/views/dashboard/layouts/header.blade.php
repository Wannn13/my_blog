{{-- <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/">MyBlog</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <form action="/logout" method="post">
          @csrf
            <button type="submit" class="dropdown-item nav-link px-3">Logout</button>
        </form>
      </div>
    </div>
</header> --}}


<header class="app-header">
  <nav class="navbar navbar-expand-lg navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item d-block d-xl-none">
        <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
          <i class="ti ti-menu-2"></i>
        </a>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link nav-icon-hover" href="javascript:void(0)">
          <i class="ti ti-bell-ringing"></i>
          <div class="notification bg-primary rounded-circle"></div>
        </a>
      </li> --}}
    </ul>
    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
      <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
        <p class="mt-3">
          Hallo, {{ auth()->user()->username }}
        </p>
        <li class="nav-item dropdown">
          <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
            aria-expanded="false">
            @if(Auth::user()->image)
              <img src="{{ asset('storage/' . Auth::user()->image) }}" class="rounded-circle" width="35" height="35" alt="{{ Auth::user()->name }}">
            @else
              <img src="https://source.unsplash.com/500x500/?person" class="rounded-circle" width="35" height="35" alt="{{ Auth::user()->id }}">
            @endif
          </a>
          <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
            <div class="message-body">
              <a href="/" class="d-flex align-items-center gap-2 dropdown-item">
                <i class="ti ti-home fs-6"></i>
                <p class="mb-0 fs-3">Home</p>
              </a>
              <a href="/dashboard/user" class="d-flex align-items-center gap-2 dropdown-item">
                <i class="ti ti-user fs-6"></i>
                <p class="mb-0 fs-3">Profile</p>
              </a>
              <a href="/dashboard/posts" class="d-flex align-items-center gap-2 dropdown-item">
                <i class="ti ti-article fs-6"></i>
                <p class="mb-0 fs-3">Posts</p>
              </a>
              <form action="/logout" method="post" class="d-grid gap-2">
                @csrf
                <button type="submit" class="btn btn-outline-primary mx-3 my-2 d-block btn-logout">Logout</button>
              </form>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </nav>
</header>