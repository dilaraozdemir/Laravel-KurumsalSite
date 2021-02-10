@php
    $seting = \App\Http\Controllers\HomeController::getseting()
@endphp

@extends('layouts.home')
@section('title','References - ' . $seting->title)

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
            <h2 class="title text-center">References</h2>
            <div class="single-blog-post">

                <a href="">
                    <img src="images/blog/blog-one.jpg" alt="">
                </a>
                {!! $seting->references !!}
                <br><br><br>



            </div>
        </div><!--/blog-post-area-->

    </div>

@endsection
