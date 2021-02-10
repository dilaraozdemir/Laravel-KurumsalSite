@extends('layouts.home')
@php
    $seting = \App\Http\Controllers\HomeController::getseting()
@endphp

@section('title', $data->title . " Category List")

@section('description',)
    {{$data->description}}
@endsection
@section('keywords', $data->description)

@section('content')



    <div class="col-sm-3">
        <div class="left-sidebar">
            <h2><a href="{{route('home')}}">Content List</a>
           {{ \App\Http\Controllers\Admin\MenuController::getParentsTree($data,$data->title ) }}</h2>
            <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                                <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                Sportswear
                            </a>
                        </h4>
                    </div>
                    <div id="sportswear" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul>
                                <li><a href="">Nike </a></li>
                                <li><a href="">Under Armour </a></li>
                                <li><a href="">Adidas </a></li>
                                <li><a href="">Puma</a></li>
                                <li><a href="">ASICS </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordian" href="#mens">
                                <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                Mens
                            </a>
                        </h4>
                    </div>
                    <div id="mens" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul>
                                <li><a href="">Fendi</a></li>
                                <li><a href="">Guess</a></li>
                                <li><a href="">Valentino</a></li>
                                <li><a href="">Dior</a></li>
                                <li><a href="">Versace</a></li>
                                <li><a href="">Armani</a></li>
                                <li><a href="">Prada</a></li>
                                <li><a href="">Dolce and Gabbana</a></li>
                                <li><a href="">Chanel</a></li>
                                <li><a href="">Gucci</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordian" href="#womens">
                                <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                Womens
                            </a>
                        </h4>
                    </div>
                    <div id="womens" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul>
                                <li><a href="">Fendi</a></li>
                                <li><a href="">Guess</a></li>
                                <li><a href="">Valentino</a></li>
                                <li><a href="">Dior</a></li>
                                <li><a href="">Versace</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a href="#">Kids</a></h4>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a href="#">Fashion</a></h4>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a href="#">Households</a></h4>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a href="#">Interiors</a></h4>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a href="#">Clothing</a></h4>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a href="#">Bags</a></h4>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a href="#">Shoes</a></h4>
                    </div>
                </div>
            </div><!--/category-productsr-->

            <div class="brands_products"><!--brands_products-->
                <h2>Brands</h2>
                <div class="brands-name">
                    <ul class="nav nav-pills nav-stacked">
                        <li><a href=""> <span class="pull-right">(50)</span>Acne</a></li>
                        <li><a href=""> <span class="pull-right">(56)</span>Grüne Erde</a></li>
                        <li><a href=""> <span class="pull-right">(27)</span>Albiro</a></li>
                        <li><a href=""> <span class="pull-right">(32)</span>Ronhill</a></li>
                        <li><a href=""> <span class="pull-right">(5)</span>Oddmolly</a></li>
                        <li><a href=""> <span class="pull-right">(9)</span>Boudestijn</a></li>
                        <li><a href=""> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
                    </ul>
                </div>
            </div><!--/brands_products-->

            <div class="price-range"><!--price-range-->
                <h2>Price Range</h2>
                <div class="well">
                    <div class="slider slider-horizontal" style="width: 171px;"><div class="slider-track"><div class="slider-selection" style="left: 41.6667%; width: 33.3333%;"></div><div class="slider-handle round left-round" style="left: 41.6667%;"></div><div class="slider-handle round" style="left: 75%;"></div></div><div class="tooltip top" style="top: -30px; left: 66.75px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">250 : 450</div></div><input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" style=""></div><br>
                    <b>$ 0</b> <b class="pull-right">$ 600</b>
                </div>
            </div><!--/price-range-->

            <div class="shipping text-center"><!--shipping-->
                <img src="images/home/shipping.jpg" alt="">
            </div><!--/shipping-->

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
