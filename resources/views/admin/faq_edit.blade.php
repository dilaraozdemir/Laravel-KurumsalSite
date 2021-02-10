@extends('layouts.admin')
@section('title','Edit Faq')

@section('javascript')
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
@endsection

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h1>Edit Faq</h1>
                </div>
                <form class="card" role="form" action="{{ route('admin_faq_update',['id'=>$data->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div >
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Base Form Control</div>
                            </div>
                            <div class="card-body">

                                <div class="form-group">
                                    <label>Position</label>
                                    <input type="number" name="position" value="{{$data->position}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Question</label>
                                    <input type="text" name="question" value="{{$data->question}}" class="form-control">
                                </div>



                                <div class="form-group">
                                    <label>Answer</label>
                                    <textarea id="answer" name="answer">{{$data->answer}}</textarea>
                                    <script>
                                        CKEDITOR.replace( 'answer' );
                                    </script>

                                </div>


                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control" id="exampleFormControlSelect1">
                                        <option selected="selected">{{$data->status}}</option>
                                        <option>False</option>
                                        <option>True</option>
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
