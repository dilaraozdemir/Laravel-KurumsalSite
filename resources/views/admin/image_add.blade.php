@extends('layouts.admin')
@section('title','Add Images Gallery')

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h1>Add Image</h1>
                </div>
                <form role="form" action="{{route('admin_image_store', ['content_id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">{{ $data->title }}</div>
                            </div>
                            <div class="card-body">

                                <div class="form-group">
                                    <label>Title</label>
                                    <input id="title" type="text" name="title" class="form-control">
                                </div>



                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" name="image" class="form-control">
                                </div>





                                <div class="card-action">
                                    <button type="submit" class="btn btn-success">Add Imge</button>
                                    <button class="btn btn-danger">Cancel</button>
                                </div>
                                <table class="table mt-3">
                                    <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Image</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach( $images as $rs)
                                        <tr>
                                            <td>{{ $rs->id }}</td>
                                            <td>{{ $rs->title }}</td>

                                            <td>

                                                @if( $rs->image )
                                                    <img src="{{ Storage::url($rs->image) }}" height="100" alt="">
                                                @endif

                                            </td>

                                            <td><a href="{{ route('admin_image_delete', ['id' => $rs->id, 'content_id'=>$data->id]) }}" onclick="return confirm('Delete. Are you sure?')">Delete</a></td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

@endsection
