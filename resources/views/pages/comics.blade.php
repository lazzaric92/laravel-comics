@extends('layouts.app')

@section('page-title', 'Homepage')

@section('main-content')
    <section class="jumbotron">
    </section>

    <section class="main-content">
        <div class="container column-center">
            <div class="tag">
                <h2>Current series</h2>
            </div>
            <div class="card-wrapper">
                @foreach ($data as $comic)
                    <article>
                        <div class="card-image">
                            <img src="{{$comic["thumb"]}}" alt="{{$comic["series"]}}">
                        </div>
                        <p> {{$comic["title"]}} </p>
                    </article>
                @endforeach
            </div>
            <button>Load more</button>
        </div>
    </section>

    <section class="shop-banner">
        <div class="container">
            <ul class="row-between-center">
                @foreach ($shopLinks as $link)
                    <li class="row-center">
                        <img src=" {{ Vite::asset("resources/img/".$link["image"]) }} " alt="{{ $link["title"] }}">
                        <a href="{{$link["url"]}}"> {{$link["title"]}} </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
@endsection
