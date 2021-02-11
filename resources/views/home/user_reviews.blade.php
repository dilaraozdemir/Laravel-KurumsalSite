@extends('layouts.home')
@section('title','My Reviews')

@php
    $seting = \App\Http\Controllers\HomeController::getseting()

@endphp

@section('content')
    @include('home.usermenu')

    <div class="col-sm-9">
        <div class="blog-post-area">
            <h2 class="title text-center">User Profile</h2>
            <div class="single-blog-post">

                <table class="table table-condensed">
                    <thead>
                    <tr class="cart_menu">
                        <td>Item</td>
                        <td>Content</td>
                        <td>Subject</td>
                        <td>Review</td>
                        <td>Rate</td>
                        <td>Status</td>
                        <td>Date</td>

                    </tr>
                    </thead>
                    <tbody>
                    @include('home.message')
                    @foreach( $datalist as $rs)
                        <tr>
                            <td>{{ $rs->id }}</td>
                            <td><a href="{{route('icerik',['id'=>$rs->content->id,'content_id'=>$rs->content->id])}}">{{$rs->content->title}}</a></td>
                            <td>{{ $rs->subject }}</td>
                            <td>{{ $rs->review }}</td>
                            <td>{{ $rs->rate }}</td>
                            <td>{{ $rs->status }}</td>
                            <td>{{ $rs->created_at }}</td>
                            <td><a href="{{ route('user_review_delete', ['id' => $rs->id]) }}" onclick="return confirm('Delete. Are you sure?')">Delete</a></td>




                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div><!--/blog-post-area-->
    </div>

@endsection
