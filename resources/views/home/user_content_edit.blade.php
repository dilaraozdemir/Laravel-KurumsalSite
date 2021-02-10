@extends('layouts.home')
@section('title','User Content Edit')

@php
    $seting = \App\Http\Controllers\HomeController::getseting()

@endphp
@section('headerjs')
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
@endsection

@section('content')
    @include('home.usermenu')

    <div class="col-sm-9">
        <div class="blog-post-area">
            <h2 class="title text-center">Edit Content</h2>
            <div class="single-blog-post">
                <form class="card" role="form" action="{{ route('user_content_update',['id'=>$data->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div >
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Category</label>
                                    <select name="menu_id" class="form-control">
                                        @foreach( $datalist as $rs)
                                            <option value="{{ $rs->id }}"@if ($rs->id == $data->parent_id) selected="selected" @endif>{{\App\Http\Controllers\Admin\MenuController::getParentsTree($rs,$rs->title)}}</option>
                                            <! parent_id -->
                                        @endforeach

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Title</label>
                                    <input id="title" type="text" value="{{$data->title}}" name="title" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Keywords</label>
                                    <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Description</label>
                                    <input type="text" name="description" value="{{$data->description}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Detail</label>
                                    <textarea id="detail" name="detail">{{$data->detail}}</textarea>
                                    <script>
                                            CKEDITOR.replace( 'detail' );
                                    </script>

                                </div>


                                <div class="form-group">
                                    <label>Type</label>
                                    <select name="type" class="form-control" id="exampleFormControlSelect1">
                                        <option selected="selected">{{$data->type}} </option>
                                        <option>Haber</option>
                                        <option>Duyuru</option>
                                        <option>Etkinlik</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" name="image" class="form-control">

                                    @if( $data->image )
                                        <img src="{{ Storage::url($data->image) }}" height="30" alt="">
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label>UserID</label>
                                    <input type="text" name="user_id" value="{{$data->user_id}}" class="form-control">
                                </div>


                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control" id="exampleFormControlSelect1">
                                        <option selected="selected">{{$data->status}} </option>
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                </div>

                                <div class="card-action">
                                    <button type="submit" class="btn btn-success">Update Content</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </form>
                <br>


        </div><!--/blog-post-area-->
    </div>

@endsection
