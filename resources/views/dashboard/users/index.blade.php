@extends('dashboard.layouts.main')

@section('container')

    <style>
        tr .header th{
            /* padding: 20px !important; */
        }
        .btn{
            border-radius: 10px;
            /* padding: 5px 10px; */
        }
    </style>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom main">
        <h1 class="h2">Users</h1>
    </div>

    @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <a href="/dashboard/users/create" class="btn btn-md btn-primary mx-3 my-3"><i class="ti ti-plus"></i></a>
        <table class="table table-md">
          <thead>
            <tr class="text-center header">
              <th scope="col">No</th>
              <th scope="col">Name</th>
              <th scope="col">Username</th>
              <th scope="col">Email</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($users as $user)
            <tr>
                <td class=" text-center pt-3">{{ $loop->iteration }}</td>
                <td class="pt-3">{{ $user->name }}</td>
                <td class="text-center pt-3">{{ $user->username }}</td>
                <td class="text-center pt-3">{{ $user->email }}</td>
                <td class="text-center">
                    <a href="/dashboard/users/{{ $user->id }}" class="btn btn-sm btn-warning text-light">Detail</a>
                    <a href="/dashboard/users/{{ $user->id }}/edit" class="btn btn-sm btn-primary mx-1">Edit</a>
                    <form action="/dashboard/users/{{ $user->id }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-sm btn-danger border-0" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
      </div>

@endsection
