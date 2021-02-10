@extends('layouts.admin')
@section('title','Messages List')

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h1>Messages</h1>

                </div>
                <div class="card">
                    <div class="card-header">
                    </div>
                    <div class="card-body">
                        <div class="card-sub">
                            @include('home.message')
                        </div>
                        <table class="table mt-3">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Subject</th>
                                <th scope="col">Message</th>
                                <th scope="col">Note</th>
                                <th scope="col">Status</th>


                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $datalist as $rs)
                                <tr>
                                    <td>{{ $rs->id }}</td>
                                    <td>{{ $rs->name }}</td>
                                    <td>{{ $rs->email}}</td>

                                    <td>{{ $rs->phone }}</td>
                                    <td>{{ $rs->subject }}</td>
                                    <td>{{ $rs->message }}</td>
                                    <td>{{ $rs->note }}</td>
                                    <td>{{ $rs->status }}</td>
                                    <td><a href="{{ route('admin_message_edit', ['id' => $rs->id]) }}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100, height=700')">
                                            Edit
                                        </a>
                                    </td>
                                    <td><a href="{{ route('admin_message_delete', ['id' => $rs->id]) }}" onclick="return confirm('Delete. Are you sure?')">Delete</a></td>

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
