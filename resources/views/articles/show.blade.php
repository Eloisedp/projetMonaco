@extends('template_home')

@section('css')
    <link rel="stylesheet" href="css/welcome.css" />
@endsection

@section('content')
        <div class="article-main-vew">
            <h1 class="title">{{$article->name}}</h1>
            <br/>
            <img src="{{$article->picture}}" alt="{{$article->name}}">
            <h3>{{$article->dimensions}}</h3>
        </div>

        <div class="article-sec-vew">
            <div class="price-div"><strong class="red-button">{{$article->price}}</strong></div>
            <h3>{{$article->description}}</h3>
        </div>
@endsection
