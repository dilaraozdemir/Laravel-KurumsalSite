@extends('layouts.admin')
@section('title','Edit Users')


@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h1>Edit Users</h1>
                </div>
                <form class="card" role="form" action="{{ route('admin_user_update',['id'=>$data->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div>
                        <div class="card">
                            <div class="card-body">

                                <div class="form-group">
                                    <label>Name</label>
                                    <input id="name" type="text" value="{{$data->name}}" name="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" value="{{$data->email}}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" name="phone" value="{{$data->phone}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" name="address" value="{{$data->address}}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" name="image" class="form-control">

                                    @if( $data->profile_photo_path )
                                        <img src="{{ Storage::url($data->profile_photo_path) }}" height="30" alt="">
                                    @endif
                                </div>


                                <div class="card-action">
                                <button type="submit" class="btn btn-success">Update User</button>
                            </div>

                        </div>
                    </div>
                    </div>
                </form>
        </div>
    </div>
@endsection
