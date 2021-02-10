@extends('layouts.admin')
@section('title','Add Menu')

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h1>Add Menu</h1>
                </div>
                <form role="form" action=" {{ route('admin_menu_create') }}" method="post">
                        @csrf
                    <div>
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Base Form Control</div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Parent</label>
                                    <select name="parent_id" class="form-control">
                                        <option value="0" selected="selected">Main Menu</option>
                                        @foreach( $datalist as $rs)
                                            <option value="{{ $rs->id }}">{{\App\Http\Controllers\Admin\MenuController::getParentsTree($rs,$rs->title)}}</option>

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
                                    <label>Status</label>
                                    <select name="status" class="form-control" id="exampleFormControlSelect1">
                                        <option>False</option>
                                        <option>True</option>
                                    </select>
                                </div>

                                <div class="card-action">
                                <button type="submit" class="btn btn-success">Add Menu</button>
                            </div>

                        </div>
                    </div>
                    </div>
                </form>
        </div>
    </div>
@endsection
