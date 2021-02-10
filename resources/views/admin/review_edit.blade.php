@extends('layouts.admin')
@section('title','Edit Review')


@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h1>Edit Review</h1>
                </div>
                <form class="card" role="form" action="{{ route('admin_review_update',['id'=>$data->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div >
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Base Form Control</div>
                            </div>
                            <div class="card-body">

                                <div class="form-group">
                                    <label>ID</label>
                                    <span>{{$data->id}}</span>
                                </div>
                                <div class="form-group">
                                    <label>User Name</label>
                                    <span>{{$data->user->name}}</span>
                                </div>
                                <div class="form-group">
                                    <label>Content</label>
                                    <span>{{$data->content->title}}</span>
                                </div>
                                <div class="form-group">
                                    <label>Subject</label>
                                    <span>{{$data->subject}}</span>
                                </div>
                                <div class="form-group">
                                    <label>Review</label>
                                    <span>{{$data->review}}</span>
                                </div>
                                <div class="form-group">
                                    <label>Rate</label>
                                    <span>{{$data->rate}}</span>
                                </div>
                                <div class="form-group">
                                    <label>Rate</label>
                                    <span>{{$data->created_at}}</span>
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
                                <button type="submit" class="btn btn-success">Update Review</button>
                            </div>

                        </div>
                    </div>
                    </div>
                </form>
        </div>
    </div>
@endsection
