@extends('layouts.home')
@section('title','User Content Add')

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
            <h2 class="title text-center">Add Content</h2>
            <div class="single-blog-post">

                <form role="form" action=" {{ route('user_content_store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title"></div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Category</label>
                                    <select name="menu_id" class="form-control">
                                        @foreach( $datalist as $rs)
                                            <option value="{{ $rs->id }}">{{\App\Http\Controllers\Admin\MenuController::getParentsTree($rs,$rs->title)}}</option>
                                            <! parent_id -->
                                        @endforeach

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Title</label>
                                    <input id="title" type="text" name="title" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Keywords</label>
                                    <input type="text" name="keywords" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Description</label>
                                    <input type="text" name="description" class="form-control">
                                </div>


                                <div class="form-group">
                                    <label>Detail</label>
                                    <textarea id="detail" name="detail"></textarea>
                                    <script>
                                            CKEDITOR.replace( 'detail' );
                                    </script>

                                </div>

                                <div class="form-group">
                                    <label>type</label>
                                    <select name="type" class="form-control" id="exampleFormControlSelect1">

                                        <option>Haber</option>
                                        <option>Duyuru</option>
                                        <option>Etkinlik</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" name="image" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>UserID</label>
                                    <input type="text" name="userid" class="form-control">
                                </div>


                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control" id="exampleFormControlSelect1">
                                        <option>False</option>
                                        <option>True</option>
                                    </select>
                                </div>

                                <div class="card-action">
                                    <button type="submit" class="btn btn-success">Add Content</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </form>
                <br>
        </div><!--/blog-post-area-->
    </div>

@endsection
