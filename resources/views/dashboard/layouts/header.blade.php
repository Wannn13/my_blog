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

<div class="body-wrapper">
  <header class="app-header">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
          <p class="mt-3">
            Hallo, {{ auth()->user()->username }}
          </p>
          <li class="nav-item dropdown" style="margin-right: 50px">
            <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
              aria-expanded="false">

              {{-- Ieu kondisi gambar lamun hnte ngaupload user na, jadi make ti API --}}
              {{-- @if($user->image)
                <img src="{{ asset('storage/' . $user->image) }}" class="rounded-circle" width="35" height="35" alt="{{ $user->name }}">
              @else
                <img src="https://source.unsplash.com/500x500/?person" class="rounded-circle" width="35" height="35" alt="{{ $user->id }}">
              @endif --}}

              {{-- ieu mh API doang --}}
              <img src="https://source.unsplash.com/500x500/?person" class="rounded-circle" width="35" height="35">
              
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
              <div class="message-body">
                <a href="/" class="d-flex align-items-center gap-2 dropdown-item">
                  <i class="ti ti-home fs-6"></i>
                  <p class="mb-0 fs-3">Home</p>
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
        </ul>
      </div>
    </nav>
  </header>
</div>