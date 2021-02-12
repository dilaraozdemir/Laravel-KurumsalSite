@extends('layouts.admin')
@section('title','User List')

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h1>Users</h1>
                </div>
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Users Table</div>
                    </div>
                    <div class="card-body">
                        <div class="card-sub">
                            @include('home.message')
                        </div>

                        <table class="table mt-3">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col"> </th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Address</th>
                                <th scope="col">Roles</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $datalist as $rs)
                                <tr>
                                    <td>{{ $rs->id }}</td>
                                    <td>

                                        @if( $rs->profile_photo_path )
                                            <img src="{{ Storage::url($rs->profile_photo_path) }}" height="40" alt="">
                                        @endif

                                    </td>


                                    <td>{{ $rs->name }}</td>
                                    <td>{{ $rs->email }}</td>
                                    <td>{{ $rs->phone }}</td>
                                    <td>{{ $rs->address }}</td>
                                    <td>
                                        @foreach($rs->roles as $row)
                                            {{$row->name}},
                                        @endforeach
                                        <a href="{{ route('admin_user_roles', ['id' => $rs->id]) }}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100, height=700')">
                                            <strong>add roles</strong>
                                        </a>
                                    </td>
                                    <td><a href="{{ route('admin_user_edit', ['id' => $rs->id]) }}">Edit</a></td>
                                    <td><a href="{{ route('admin_user_delete', ['id' => $rs->id]) }}" onclick="return confirm('Delete. Are you sure?')">Delete</a></td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>

    </div>

@endsection
