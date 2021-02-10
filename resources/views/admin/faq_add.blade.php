@extends('layouts.admin')
@section('title','Add Faq')

@section('javascript')
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
@endsection

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h1>Add Faq</h1>
                </div>
                <form role="form" action=" {{ route('admin_faq_store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div>
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title"></div>
                            </div>
                            <div class="card-body">

                                <div class="form-group">
                                    <label>Position</label>
                                    <input type="number" name="position" value="0" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Question</label>
                                    <input type="text" name="question" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Answer</label>
                                    <textarea id="answer" name="answer"></textarea>
                                    <script>
                                        CKEDITOR.replace( 'answer' );
                                    </script>

                                </div>


                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control" id="exampleFormControlSelect1">
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                </div>

                                <div class="card-action">
                                <button type="submit" class="btn btn-success">Add</button>
                            </div>

                        </div>
                    </div>
                    </div>
                </form>
        </div>
    </div>
@endsection
