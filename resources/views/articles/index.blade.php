
@extends('template_home')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}" />
@endsection

@section('content')

    <section class = "side-section">
        <h2 class="side-title">Catégories</h2>
        @foreach($categories as $category)
            <label>
                <input type = "checkbox" name = "{{$category->name}}}" class = "checkcheck">
                {{$category->name}}
            </label>
        @endforeach

        <h2 class="side-title">Prix</h2>
        <label>
            <input type = "checkbox" name = "Croissant" class = "checkcheck">
            Croissant
        </label>
        <label>
            <input type = "checkbox" name = "Décroissant" class = "checkcheck">
            Décroissant
        </label>
    </section>

    <section class = "main-section">
        @foreach($articles as $article)
            <div class = "article-div">
                <img src="{{$article->picture}}" alt = "{{$article->name}}">
                <br/>
                <h2 class = "title">{{$article->name}}</h2>
                <h3 class = "information">{{$article->dimensions}}</h3>
                <h3 class = "information">{{$article->price}}</h3>
                <strong class = "red-button">En savoir plus</strong>
            </div>
        @endforeach
    </section>
    
@endsection

