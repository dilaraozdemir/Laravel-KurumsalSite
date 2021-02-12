@extends('layouts.admin')
@section('title','User Roles')


@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h1>User Roles</h1>
                </div>
                    <div>
                        <div class="card">
                            <div class="card-header">
                                @include('home.message')
                            </div>
                            <div class="card-body">
                                <table class="table mt-3">
                                    <tr>
                                        <th scope="col">ID</th><td>{{$data->id}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Name</th><td>{{$data->name}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Email</th><td>{{$data->email}}</td>
                                    </tr>
                                    <tr>
                                        <th>Roles</th>
                                        <td>
                                        <table>
                                        @foreach($data->roles as $row)
                                           <tr>
                                                <td>{{$row->name}} <a href="{{ route('admin_user_role_delete', ['userid' => $data->id,'roleid' => $row->id]) }}" onclick="return confirm('Delete. Are you sure?')">Delete</a></td>
                                           </tr>
                                        @endforeach
                                        </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Add Role</th>
                                        <td>
                                        <form role="form" action="{{ route('admin_user_role_add',['id'=>$data->id]) }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <select class="form-control" id="formGroupDefaultSelect" name="roleid">
                                                @foreach($datalist as $rs)
                                                    <option value="{{$rs->id}}">{{$rs->name}}</option>
                                                @endforeach
                                            </select>
                                            <br>
                                            <button type="submit" class="btn btn-success">Add Role</button>
                                        </form>
                                        </td>
                                    </tr>
                                </table>



                            </div>
                        </div>
                    </div>

            </div>
        </div>
@endsection
