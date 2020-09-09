@extends('template_home')


@section('css')
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}" />
@endsection

@section('content')

    <!-- Carousel -->

    <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarouse1" data-slide-to="1"></li>
            <li data-target="#myCarouse1" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
            <div class="item active">
                <img src="img/monacoWeb.jpg" alt="Monaco" style="width:100%;">
            </div>

            <div class="item">
                <img src="img/covidsignWeb.jpg" alt="Panneau_Covid" style="width:100%;">
            </div>

            <div class="item">
                <img src="img/gelWeb.jpg" alt="Gel_mains" style="width:100%;">
            </div>
        </div>

        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Do Categories -->

@endsection
