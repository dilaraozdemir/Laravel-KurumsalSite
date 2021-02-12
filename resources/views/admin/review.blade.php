@extends('layouts.admin')
@section('title','Review List')

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h1>Reviews</h1>

                </div>
                <div class="card">
                    <div class="card-header">
                        @include('home.message')
                    </div>
                    <div class="card-body">
                        <table class="table mt-3">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Subject</th>
                                <th scope="col">Review</th>
                                <th scope="col">Rate</th>
                                <th scope="col">Status</th>
                                <th scope="col">Date</th>


                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $datalist as $rs)
                                <tr>
                                    <td>{{ $rs->id }}</td>
                                    <td>
                                        <a href="{{ route('admin_user_show', ['id' => $rs->user->id]) }}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100, height=700')">
                                            {{ $rs->user->name }}
                                        </a>
                                    </td>
                                    <td>{{ $rs->subject }}</td>
                                    <td>{{ $rs->review }}</td>
                                    <td>{{ $rs->rate }}</td>
                                    <td>{{ $rs->status }}</td>
                                    <td>{{ $rs->created_at }}</td>
                                    <td><a href="{{ route('admin_review_show', ['id' => $rs->id]) }}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100, height=700')">
                                            Edit
                                        </a>
                                    </td>
                                    <td><a href="{{ route('admin_review_delete', ['id' => $rs->id]) }}" onclick="return confirm('Delete. Are you sure?')">Delete</a></td>

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
