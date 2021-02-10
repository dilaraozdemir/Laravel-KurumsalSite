@extends('layouts.admin')
@section('title','Faq')

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h1>Frequently Ask Questions</h1>

                </div>
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Faq Table</div>
                    </div>
                    <div class="card-body">
                        <div class="card-sub">
                            <a href="{{ route('admin_faq_add')}}" class="btn btn-default" style="width: 200px;">Add Faq</a>
                            @include('home.message')
                        </div>
                        <table class="table mt-3">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Position</th>
                                <th scope="col">Question</th>
                                <th scope="col">Answer</th>
                                <th scope="col">Status</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $datalist as $rs)
                                <tr>
                                    <td>{{ $rs->id }}</td>
                                    <td>{{ $rs->position }}</td>
                                    <td>{{ $rs->question }}</td>
                                    <td>{!! $rs->answer !!}</td>
                                    <td>{{ $rs->status }}</td>

                                    <td><a href="{{ route('admin_faq_edit', ['id' => $rs->id]) }}">Edit</a></td>
                                    <td><a href="{{ route('admin_faq_delete', ['id' => $rs->id]) }}" onclick="return confirm('Delete. Are you sure?')">Delete</a></td>

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
