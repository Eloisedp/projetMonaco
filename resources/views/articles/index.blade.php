@extends('template_home')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}" />
@endsection

@section('content')

    <section>
        <h2>Catégories</h2>
        @foreach($categories as $category)
            <label>
                <input type = "checkbox" name = "{{$category->name}}}" class = "checkcheck">
            </label> <label>{{$category->name}}</label>
        @endforeach

        <h2>Prix</h2>
        <label>
            <input type = "checkbox" name = "Croissant" class = "checkcheck">
        </label> <label>Croissant</label>
        <label>
            <input type = "checkbox" name = "Décroissant" class = "checkcheck">
        </label> <label>Décroissant</label>
    </section>

    <section>
        @foreach($articles as $article)
            <div>
                <img src="{{$article->picture}}" alt = "{{$article->name}}">
                <br/>
                <h2>{{$article->name}}</h2>
                <h3>{{$article->dimensions}}</h3>
                <h3>{{$article->price}}</h3>
                <strong>En savoir plus</strong>
            </div>
        @endforeach
    </section>


@endsection
