@extends('template_home')


@section('css')
    <link rel="stylesheet" href="css/welcome.css" />

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

    <!-- Categories -->

    <section class="list-category">
        <div class="show-category">
            <img src="img/support.png" alt="Support_gel">
            <h2><a href="#"><button>Supports</button></a></h2>
        </div>

        <div class="show-category">
            <img src="img/architecture.jpg" alt="Plan">
            <h2><a href="#"><button>Plans</button></a></h2>
        </div>

        <div class="show-category">
            <img src="img/impression.jpg" alt="Impression">
            <h2><a href="#"><button>Impressions</button></a></h2>
        </div>
    </section>

    <hr class="separation">

    <section class = "main-section">
        @foreach($articles as $article)
            <div class = "article-div">
                <img src="{{$article->picture}}" alt = "{{$article->name}}">
                <br/>
                <h2 class = "title">{{$article->name}}</h2>
                <h3 class = "information">{{$article->dimensions}}</h3>
                <h3 class = "information">{{$article->price}}</h3>
                <a href="{{route('articles.show',$article->id)}}" class = "red-button">En savoir plus</a>
            </div>
        @endforeach
    </section>


@endsection
