@extends('layouts.admin')
@section('title','Edit Menu')

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h1>Add Category</h1>
                </div>
                <form class="card" role="form" action=" {{ route('admin_menu_update',['id'=>$data->id]) }}" method="post">
                    @csrf

                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Base Form Control</div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Parent</label>
                                    <select class="form-control" name="parent_id" >
                                        <option value="0" selected="selected">Main Menu</option>
                                        @foreach( $datalist as $rs)
                                            <option value="{{ $rs->id }}" @if ($rs->id == $data->parent_id) selected="selected" @endif >
                                                {{\App\Http\Controllers\Admin\MenuController::getParentsTree($rs,$rs->title)}}
                                            </option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Title</label>
                                    <input id="title" type="text" name="title" value="{{$data->title}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Keywords</label>
                                    <input type="text" name="keywords" value="{{ $data->keywords }}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Description</label>
                                    <input type="text" name="description" value="{{$data->description}}"  class="form-control">
                                </div>


                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control" id="exampleFormControlSelect1">
                                        <! It returns the last selected in selected menu -->
                                        <option selected="selected">{{$data->status}}</option>
                                        <option>False</option>
                                        <option>True</option>
                                    </select>
                                </div>

                                <div class="card-action">
                                    <button type="submit" class="btn btn-success">Add Menu</button>
                                </div>

                            </div>
                        </div>

            </form>
        </div>
    </div>

@endsection
