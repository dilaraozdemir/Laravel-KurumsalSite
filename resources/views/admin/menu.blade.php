@extends('layouts.admin')
@section('title','Admin Panel Home Page')

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h1>Menu</h1>

                </div>
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Mebnu Table</div>
                    </div>
                    <div class="card-body">
                        <div class="card-sub">
                            <a href="{{ route('admin_menu_add') }}" class="btn btn-default" style="width: 200px;">Add Menu</a>
                        </div>
                        <table class="table mt-3">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Parent</th>
                                <th scope="col">Keywords</th>
                                <th scope="col">Description</th>
                                <th scope="col">Title</th>
                                <th scope="col">Status</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $datalist as $rs)
                            <tr>
                                <td>{{ $rs->id }}</td>
                                <td> {{\App\Http\Controllers\Admin\MenuController::getParentsTree($rs,$rs->title)}}</td>
                                <td>{{ $rs->keywords }}</td>
                                <td>{{ $rs->description }}</td>
                                <td>{{ $rs->title }}</td>
                                <td>{{ $rs->status }}</td>
                                <td><a href="{{ route('admin_menu_edit', ['id' => $rs->id]) }}">Edit</a></td>
                                <td><a href="{{ route('admin_menu_delete', ['id' => $rs->id]) }}" onclick="return confirm('Delete. Are you sure?')">Delete</a></td>
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
