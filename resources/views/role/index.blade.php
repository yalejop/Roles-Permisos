@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>List of Roles</h2></div>

                <div class="card-body">

                    <a href="{{ route('role.create')}}"
                    class="btn btn-primary float-right"
                    >Create</a>
                    <br><br>

                    @include('custom.message')

                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Description</th>
                            <th scope="col">Full-access</th>
                            <th colspan="3"></th>
                          </tr>
                        </thead>
                        <tbody>
                              @foreach ($roles as $role)
                              <tr>
                                <th scope="row">{{ $role->id }}</th>
                                <td>{{ $role->name }}</td>
                                <td>{{ $role->slug }}</td>
                                <td>{{ $role->description }}</td>
                                <td>{{ $role['full-access'] }}</td>
                                <td><a href="{{route('role.show', $role->id)}}" class="btn btn-info">Show</a></td>
                                <td><a href="{{route('role.edit', $role->id)}}" class="btn btn-success">Edit</a></td>
                                <td><a href="{{route('role.destroy', $role->id)}}" class="btn btn-danger">Delete</a></td>
                              </tr>
                              @endforeach
                        </tbody>
                      </table>
                      {{ $roles->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
