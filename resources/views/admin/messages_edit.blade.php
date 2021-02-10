@extends('layouts.admin')
@section('title','Messages Edit')

@section('javascript')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
@endsection

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h1>Message Detail</h1>
                    @include('home.message')
                </div>
                <form class="card" role="form" action="{{ route('admin_message_update',['id'=>$data->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card">

                            <div class="card-body">
                                <table class="table mt-3">
                                    <tr>
                                        <th scope="col">ID</th><td>{{ $data->id }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Name</th><td>{{ $data->name }}</td>

                                    </tr>
                                    <tr>
                                        <th scope="col">Email</th><td>{{ $data->email}}</td>
                                    <tr>
                                        <th scope="col">Phone</th><td>{{ $data->phone }}</td>

                                    </tr>
                                    </tr>
                                    <tr>
                                        <th scope="col">Subject</th><td>{{ $data->subject }}</td>

                                    </tr>
                                    <tr>
                                        <th scope="col">Message</th><td>{{ $data->message }}</td>

                                    </tr>
                                    <tr>
                                        <th scope="col">Note</th>
                                        <td><textarea id="note" name="note">{{ $data->note }}</textarea></td>

                                    </tr>
                                    <tr><td>


                                    <div class="card-action">
                                        <button type="submit" class="btn btn-success">Update Content</button>
                                    </div>
                                        </td></tr>


                                </table>
                            </div>

                        </div>
                    </div>
                    </div>
                </form>
        </div>
    </div>
@endsection
