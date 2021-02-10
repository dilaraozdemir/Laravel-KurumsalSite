<section id="slider"><!--slider-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-carousel" data-slide-to="1"></li>
                        <li data-target="#slider-carousel" data-slide-to="2"></li>
                        <li data-target="#slider-carousel" data-slide-to="3"></li>
                        <li data-target="#slider-carousel" data-slide-to="4"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-sm-6">
                                <h1>{{$slider1->title}}</h1>
                                <p>{{$slider1->description}}</p>
                                <p><a href="{{route('icerik',['id' => $slider1->id])}}">Ayrıntılı bilgi için tıklayınız</a></p>
                            </div>
                            <div class="col-sm-6">
                                <img src="{{Storage::url($slider1->image)}}" height="300" width="500" />
                            </div>

                        </div>
                        <div class="item">
                            <div class="col-sm-6">
                                <h1>{{$slider2->title}}</h1>
                                <p>{{$slider2->description}}</p>
                                <p><a href="{{route('icerik',['id' => $slider2->id])}}">Ayrıntılı bilgi için tıklayınız</a></p>
                            </div>
                            <div class="col-sm-6">
                                <img src="{{Storage::url($slider2->image)}}" height="300" width="500" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-6">
                                <h1>{{$slider3->title}}</h1>
                                <p>{{$slider3->description}}</p>
                                <p><a href="{{route('icerik',['id' => $slider3->id])}}">Ayrıntılı bilgi için tıklayınız</a></p>
                            </div>
                            <div class="col-sm-6">
                                <img src="{{Storage::url($slider3->image)}}"  class="girl img-responsive"  />
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-6">
                                <h1>{{$slider4->title}}</h1>
                                <p>{{$slider4->description}}</p>
                                <p><a href="{{route('icerik',['id' => $slider4->id])}}">Ayrıntılı bilgi için tıklayınız</a></p>
                            </div>
                            <div class="col-sm-6">
                                <img src="{{Storage::url($slider4->image)}}"height="300" width="500" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-6">
                                <h1>{{$slider5->title}}</h1>
                                <p>{{$slider5->description}}</p>
                                <p><a href="{{route('icerik',['id' => $slider5->id])}}">Ayrıntılı bilgi için tıklayınız</a></p>
                            </div>
                            <div class="col-sm-6">
                                <img src="{{Storage::url($slider5->image)}}" class="girl img-responsive"/>
                            </div>
                        </div>


                    </div>


                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>


            </div>
        </div>
    </div>
</section><!--/slider-->
