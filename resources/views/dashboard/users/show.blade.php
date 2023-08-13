@extends('dashboard.layouts.main')

@section('container')

<style>
  .btn{
    border-radius: 7px;
  }
</style>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom main">
        <h1 class="h2">Pertinjau User</h1>
    </div>
    
    <div class="row">
      <div class="col-lg-4">
        @if($user->image)
          <div style="height: auto; width: 320px; margin-bottom: 20px;">
            <img src="{{ asset('storage/' . $user->image) }}" class="img-fluid mb-3 rounded-3" alt="{{ $user->name }}">
          </div>
        @else
          <div style="height: 320px; width: 320px; margin-bottom: 20px;">
            <img src="https://source.unsplash.com/500x500/?person" class="card-img-top img-hero" style="border-radius: 10px;" alt="{{ $user->id }}">
          </div>
        @endif
      </div>
      <div class="col-lg-6 p-0">
        <div class="mb-4">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name" required value="{{ old('name', $user->name) }}">
        </div>
        <div class="mb-4">
          <label for="username" class="form-label">Username</label>
          <input type="text" class="form-control" id="username" name="username" required value="{{ old('username', $user->username) }}">
        </div>
        <div class="mb-4">
          <label for="email" class="form-label">Email</label>
          <input type="text" class="form-control" id="email" name="email" required value="{{ old('email', $user->email) }}">
        </div>
        <div class="btn-action mt-4">
          <a href="/dashboard/users/{{ $user->id }}/edit" class="btn btn-md btn-primary mx-1"><i class="ti ti-edit"></i></a>
          <form action="/dashboard/users/{{ $user->id }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="btn btn-md btn-danger mx-1 border-0" onclick="return confirm('Are you sure?')"><i class="ti ti-trash"></i></button>
          </form>
        </div>
      </div>
    </div>
    
    
    <script>
      window.addEventListener("DOMContentLoaded", function () {
        const togglePassword = document.querySelector("#togglePassword");

        togglePassword.addEventListener("click", function (e) {
        // toggle the type attribute
        const type = password.getAttribute("type") === "password" ? "text" : "password";
                     password.setAttribute("type", type);
        // toggle the eye / eye slash icon
        this.classList.toggle("bi-eye");
        });
      });
    </script>
@endsection