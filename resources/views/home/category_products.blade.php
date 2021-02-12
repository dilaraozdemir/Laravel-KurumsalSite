@extends('layouts.home')
@php
    $seting = \App\Http\Controllers\HomeController::getseting()
@endphp

@section('title', $data->title . " Category List")

@section('description',)
    {{$data->description}}
@endsection
@section('keywords', $data->description)
@php
    $parentCategories = \App\Http\Controllers\HomeController::categorylist()

@endphp
@section('content')



    <div class="col-sm-3">
        <div class="left-sidebar">
            <h2><a href="{{route('home')}}">Content List</a>
           {{ \App\Http\Controllers\Admin\MenuController::getParentsTree($data,$data->title ) }}</h2>
            <div class="panel-group category-products"><!--category-productsr-->
                @foreach($parentCategories as $rs)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="">
                                {{$rs->title}}
                            </a>
                        </h4>
                    </div>
                    <div>
                        <div class="panel-body">
                            <ul>
                                <li><a href="">
                                        @if(count($rs->children))
                                            @include('home.categorytree',['children' => $rs->children])
                                        @endif
                                    </a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <div class="col-sm-9 padding-right">
        <div class="features_items"><!--features_items-->
            <h2 class="title text-center">Features Items</h2>
            @foreach($datalist as $rs)
            <div class="col-sm-4">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{Storage::url($rs->image)}}" alt="">
                            <p>{{$rs->title}}</p>
                            <a href="{{route('icerik',['id'=>$rs->id,'title'=>$rs->title])}}" class="btn btn-default add-to-cart">İçerik</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div><!--features_items-->
    </div>

@endsection
