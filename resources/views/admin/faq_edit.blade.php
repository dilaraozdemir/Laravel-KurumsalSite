@extends('layouts.admin')
@section('title','Edit Faq')

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
                    <h1>Edit Faq</h1>
                </div>
                <form class="card" role="form" action="{{ route('admin_content_update',['id'=>$data->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div >
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Base Form Control</div>
                            </div>
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
                                    <textarea id="summernote" name="detail">{{$data->detail}}</textarea>
                                    <script>
                                        $('#summernote').summernote({
                                            placeholder: 'Hello Bootstrap 4',
                                            tabsize: 2,
                                            height: 100
                                        });
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
                                <button type="submit" class="btn btn-success">Update Faq</button>
                            </div>

                        </div>
                    </div>
                    </div>
                </form>
        </div>
    </div>
@endsection
