@php
    $seting = \App\Http\Controllers\HomeController::getseting()
@endphp

@extends('layouts.home')
@section('title','About Us - ' . $seting->title)

@section('description',)
    {{$seting->description}}
@endsection
@section('keywords', $seting->description)

@php
    $parentCategories = \App\Http\Controllers\HomeController::categorylist()
@endphp

@section('content')



    <div class="col-sm-15">
        <div class="blog-post-area">
            <h2 class="title text-center">About US</h2>
            <div class="single-blog-post">
                <h3>Karabuk University</h3>

                <a href="">
                    <img src="images/blog/blog-one.jpg" alt="">
                </a>
                {!! $seting->aboutus !!}
                <br><br><br>



            </div>
        </div><!--/blog-post-area-->

    </div>

@endsection
