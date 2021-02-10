@extends('layouts.home')
@section('title','User Profile')

@php
    $seting = \App\Http\Controllers\HomeController::getseting()

@endphp

@section('content')
    @include('home.usermenu')

    <div class="col-sm-9">
        <div class="blog-post-area">
            <h2 class="title text-center">User Profile</h2>
            <div class="single-blog-post">
                <div class="table-responsive cart_info">
                    @include('profile.show')

                </div>
            </div>
        </div><!--/blog-post-area-->
    </div>

@endsection
