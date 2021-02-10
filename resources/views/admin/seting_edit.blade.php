@extends('layouts.admin')
@section('title','Edit Seting')

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
            <h1>Edit Seting</h1>
        </div>
        <form class="card" role="form" action="{{ route('admin_seting_update') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <div class="card">

                    <div class="card-body">
                        <div class="card-header">
                            <div class="card-title">General Settings</div>
                        </div>
                        <input type="hidden" id="id" name="id" class="form-control" value="{{$data->id}}" placeholder="Enter title">
                        <div class="form-group">
                            <label >Title</label>
                            <input type="text" name="title" class="form-control" value="{{$data->title}}" placeholder="Enter title">
                        </div>
                        <div class="form-group">
                            <label >Keywords</label>
                            <input type="text" name="keywords" class="form-control" value="{{$data->keywords}}" placeholder="Enter keywords">
                        </div>
                        <div class="form-group">
                            <label >Description</label>
                            <input type="text" name="description" class="form-control" value="{{$data->description}}">
                        </div>
                        <div class="form-group">
                            <label >Company</label>
                            <input type="text" name="company" class="form-control" value="{{$data->company}}" >
                        </div>
                        <div class="form-group">
                            <label >Address</label>
                            <input type="text" name="address" class="form-control" value="{{$data->address}}">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" class="form-control" value="{{$data->phone}}">
                        </div>
                        <div class="form-group">
                            <label >Fax</label>
                            <input type="text" name="fax" class="form-control" value="{{$data->fax}}">
                        </div>
                        <div class="form-group">
                            <label >Email</label>
                            <input type="text" name="email" class="form-control" value="{{$data->email}}">
                        </div>
                        <div class="form-group">
                            <label >status</label>
                            <select class="custom-select custom-select-sm" name="status">
                                <option selected="selected">{{$data->status}}</option>
                                <option>True</option>
                                <option>False</option>
                            </select>
                        </div>

                        <div class="card-header">
                            <div class="card-title">Smtp</div>
                        </div>
                        <div class="form-group">
                            <label >Smtp Server</label>
                            <input type="text" name="smtpserver" class="form-control" value="{{$data->smtpserver}}">
                        </div>
                        <div class="form-group">
                            <label >Smtp Email</label>
                            <input type="email" name="smtpemail" class="form-control" value="{{$data->smtpemail}}">
                        </div>
                        <div class="form-group">
                            <label >Smtp Password</label>
                            <input type="password" name="smtppassword" class="form-control" value="{{$data->smtppassword}}">
                        </div>
                        <div class="form-group">
                            <label >Smtp Port</label>
                            <input type="number" name="smtpport" class="form-control" value="{{$data->smtpport}}">
                        </div>

                        <div class="card-header">
                            <div class="card-title">Contact</div>
                        </div>
                        <div class="form-group">
                            <label >Facebook</label>
                            <input type="text" name="facebook" class="form-control" value="{{$data->facebook}}">
                        </div>
                        <div class="form-group">
                            <label >Instagram</label>
                            <input type="text" name="instagram" class="form-control" value="{{$data->instagram}}">
                        </div>
                        <div class="form-group">
                            <label >Twitter</label>
                            <input type="text" name="twitter" class="form-control" value="{{$data->twitter}}">
                        </div>

                        <div class="form-group">
                            <label >About us</label>
                            <textarea id="summernote" name="aboutus">{{$data->aboutus}}</textarea>
                            <script>
                                $('#summernote').summernote({
                                    tabsize: 2,
                                    height: 100
                                });
                            </script>


                        </div>

                        <div class="form-group">
                            <label >Contact</label>
                            <textarea id="summernote2" name="contact">{{$data->contact}}</textarea>
                            <script>
                                $('#summernote2').summernote({
                                    tabsize: 2,
                                    height: 100
                                });
                            </script>

                        </div>

                        <div class="form-group">
                            <label >References</label>
                            <textarea id="summernote3" name="references">{{$data->references}}</textarea>
                            <script>
                                $('#summernote3').summernote({
                                    tabsize: 2,
                                    height: 100
                                });
                            </script>

                        </div>

                    </div>

                </div>

                <div class="card-action">
                    <button type="submit" class="btn btn-success">Update Seting</button>
                </div>
            </div>
            </div>
        </div>
        </form>
    </div>
    </div>
@endsection
