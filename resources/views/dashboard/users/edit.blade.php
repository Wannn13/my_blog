@extends('dashboard.layouts.main')

@section('container')

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom main">
      <h1 class="h2">Edit User</h1>
  </div>

  <form method="post" action="/dashboard/users/{{ $user->id }}" enctype="multipart/form-data">
    @method('put')
      @csrf
      <div class="mb-3">
        <label for="image" class="form-label">Profile Image</label>
        <input type="hidden" name="oldImage" value="{{ $user->image }}">
          @if($user->image)
            <img src="{{ asset('storage/' . $user->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
          @else
            <img class="img-preview img-fluid mb-3 col-sm-5">
          @endif
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="PreviewImage()">
            @error('image')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
      </div>
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name', $user->name) }}">
        @error('name')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" required value="{{ old('username', $user->username) }}">
        @error('username')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required value="{{ old('email', $user->email) }}">
        @error('email')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="text" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required value="{{ old('password', $user->password) }}">
        @error('password')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      
      {{-- <div class="row mb-3">
        <div class="col-lg-6">
          <label for="password" class="form-label">Old Password</label>
          <input type="text" class="form-control" id="password" name="password">
        </div>
        <div class="col-lg-6">
          <label for="password" class="form-label">New Password</label>
          <input type="text" class="form-control" id="password" name="password">
        </div>
      </div> --}}

      <button type="submit" class="btn btn-primary mb-5">Update</button>
  </form>
    
@endsection