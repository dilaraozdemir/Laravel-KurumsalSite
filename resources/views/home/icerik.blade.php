@php
    $seting = \App\Http\Controllers\HomeController::getseting()
@endphp

@extends('layouts.home')
@section('title','About Us - ' . $seting->title)

@section('description',)
    {{$seting->description}}
@endsection
@section('keywords', $seting->description)

@section('content')

    <div class="row">
    <div class="col-sm-6" xmlns="http://www.w3.org/1999/html">
        <div class="blog-post-area">
            <h2 class="title text-center">İÇERİK - {{$data->title}} </h2>
            <div class="single-blog-post">

                <h1>{{$data->description}}</h1>

                <br><br><br>
                <h2>{!! $data->detail !!}</h2>
                <br><br><br>

                <br><br><br>
                <h3>Keywords : {!! $data->keywords !!}</h3>
                <br><br><br>


            </div>
        </div><!--/blog-post-area-->

    </div>


    <div class="col-sm-5">
        <img src="{{Storage::url($data->image)}}" class="girl img-responsive">
            <br> <br><br>
        <h2 class="title text-center"> Image Gallery </h2>

                @foreach($datalist as $rs)
                    <div class="col-sm-6">
                                <div class="productinfo text-center">
                                    <tr>
                                        <td><img  src="{{Storage::url($rs->image)}}" alt=""/></td>
                                    <tr>
                                </div>
                            <br>
                    </div>
                @endforeach


    </div>
        </div>

    <br><br> <br> <br>
    <div class="row">
        <div class="col-sm-9">
            <h2 class="title text-center">Review</h2>

        <h4>Write your review</h4>

        @livewire('review',['id'=>$data->id])
        </div>


    </div>

    </div>
    <div class="row">
        <div class="col-sm-9">
            <h2 class="title text-center">Readers Comment</h2>

        <!-- entity_title -->

        @foreach($reviews as $rs)
            <div class="media">
                <div class="media-body">
                    <h3><a href="#"><i class="fa fa-user-o"></i>User: {{$rs->user->name}}</a></h3>
                    <strong>{{$rs->subject}}</strong>
                    <i class="fa fa-clock-o">{{$rs->created_at}}</i>
                    <p>{{$rs->review}}</p>


                    <div class="post-meta">
                        <i class="fa fa-star"></i>
                        <i class="@if($rs->rate<1) fa fa-star  @endif"></i>
                        <i class="@if($rs->rate<2) fa fa-star @endif"></i>
                        <i class="@if($rs->rate<3) fa fa-star  @endif"></i>
                        <i class="@if($rs->rate<4) fa fa-star  @endif"></i>
                        <i class="@if($rs->rate<5) fa fa-star  @endif"></i>

                    </div>

                </div>
            </div>
        @endforeach
        </div>
    </div>

@endsection



