@php
    $seting = \App\Http\Controllers\HomeController::getseting()
@endphp

@extends('layouts.home')
@section('title','Contact - ' . $seting->title)

@section('description',)
    {{$seting->description}}
@endsection
@section('keywords', $seting->description)

@php
    $parentCategories = \App\Http\Controllers\HomeController::categorylist()
@endphp

@section('content')


        <div class="col-sm-5">
            <div class="contact-form">
                <h2 class="title text-center">Contact Form</h2>
                @include('home.message')
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form row" action="{{ route('sendmessage') }}" name="contact-form" method="post">
                    @csrf
                    <div class="form-group col-md-6">
                        <input type="text" name="name" class="form-control" required="required" placeholder="Full Name">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="email" name="email" class="form-control" required="required" placeholder="Email">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" name="phone" class="form-control" required="required" placeholder="Phone Number">
                    </div>
                    <div class="form-group col-md-12">
                        <input type="text" name="subject" class="form-control" required="required" placeholder="Subject">
                    </div>
                    <div class="form-group col-md-12">
                        <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your Message Here"></textarea>
                    </div>
                    <div class="form-group col-md-12">
                        <button type="submit" class="btn btn-primary pull-right">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-sm-5">
            <div class="blog-post-area">
                <h2 class="title text-center">About US</h2>
                <div class="single-blog-post">
                    <h3>Karabuk University</h3>

                    <a href="">
                        <img src="images/blog/blog-one.jpg" alt="">
                    </a>
                    {!! $seting->contact !!}
                    <br><br><br>



                </div>
            </div><!--/blog-post-area-->

        </div>


@endsection
