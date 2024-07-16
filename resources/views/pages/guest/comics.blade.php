@extends('layouts.app')

@section('page-title', 'Homepage')
{{-- @dump(Route::currentRouteName()) --}}
@section('main-content')
    <section class="jumbotron">
    </section>

    <section class="main-content" id="main-comics">
        <div class="container">
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

    @include('partials.shop-banner')
@endsection
