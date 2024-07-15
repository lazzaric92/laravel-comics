@extends('layouts.app')

@section('page-title', 'Homepage')

@section('main-content')
    <section class="main-content">
        <div class="container">
            <h2> --> Check the Comics page!</h2>
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
