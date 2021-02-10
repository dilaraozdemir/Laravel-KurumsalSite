@php
    $seting = \App\Http\Controllers\HomeController::getseting()

@endphp
@extends('layouts.home')
@section('title',$seting->title)
@section('description',)
    {{$seting->description}}
@endsection
@section('keywords', $seting->keywords)

@php
    $parentCategories = \App\Http\Controllers\HomeController::categorylist()
@endphp

@section('content')
    @include('home._slider')
        <div class="col-sm-15 padding-right">
            <div class="features_items"><!--features_items-->
                <h2 class="title text-center">Duyuru</h2>
                @foreach($duyuru as $rs)
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">

                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{Storage::url($rs->image)}}" alt="" height="200" width="200"/>
                                    <h4>{{$rs->title}}</h4>
                                    <p>{{$rs->description}}</p>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h4>{{$rs->title}}</h4>
                                        <p>{{$rs->description}}</p>
                                        <a href="{{route('icerik',['id'=>$rs->id,'title'=>$rs->title])}}" class="btn btn-default add-to-cart">İçerik</a>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                @endforeach
            </div>
            <!--features_items-->
            <div class="col-sm-15 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Haber</h2>
                    @foreach($haber as $rs)
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">

                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="{{Storage::url($rs->image)}}" alt="" height="200" width="200"/>
                                        <h4>{{$rs->title}}</h4>
                                        <p>{{$rs->description}}</p>
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h4>{{$rs->title}}</h4>
                                            <p>{{$rs->description}}</p>
                                            <a href="{{route('icerik',['id'=>$rs->id,'title'=>$rs->title])}}" class="btn btn-default add-to-cart">İçerik</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!--features_items-->
            <div class="col-sm-15 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Etkinlik</h2>
                    @foreach($etkinlik as $rs)
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">

                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="{{Storage::url($rs->image)}}" alt="" height="500" width="500"/>
                                        <h4>{{$rs->title}}</h4>
                                        <p>{{$rs->description}}</p>
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h4>{{$rs->title}}</h4>
                                            <p>{{$rs->description}}</p>
                                            <a href="{{route('icerik',['id'=>$rs->id,'title'=>$rs->title])}}" class="btn btn-default add-to-cart">İçerik</a>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    @endforeach
                </div>
                <!--features_items-->
                <div class="col-sm-15 padding-right">
                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Daily</h2>
                        @foreach($last as $rs)
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">

                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="{{Storage::url($rs->image)}}" alt="" height="200" width="200"/>
                                            <h4>{{$rs->title}}</h4>
                                            <p>{{$rs->description}}</p>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h4>{{$rs->title}}</h4>
                                                <p>{{$rs->description}}</p>
                                                <a href="{{route('icerik',['id'=>$rs->id,'title'=>$rs->title])}}" class="btn btn-default add-to-cart">İçerik</a>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        @endforeach
                    </div>
@endsection
