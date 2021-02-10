@extends('layouts.home')
@section('title','Frequently Asked Questions')

@section('headerjs')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#accordion" ).accordion();
        } );
    </script>
@endsection
@section('content')



    <div class="col-sm-15">
        <div class="blog-post-area">
            <h2 class="title text-center">FAQ</h2>
            <div id="row">
                    @foreach($datalist as $rs)
                            <h3 style="color: #5a4c15">Soru: {{$rs->question}}</h3>
                            <p>{!! $rs->answer !!}</p>
                        <hr>
                    @endforeach
            </div>
        </div><!--/blog-post-area-->

    </div>

@endsection
