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
                <article>
                    <div class="card-image">
                        {{-- <img :src="singleCard.thumb" :alt="singleCard.series"> --}}
                        <h5>Card Image</h5>
                    </div>
                    <p> Comic title </p>
                </article>
            </div>
            <button>Load more</button>
        </div>
    </section>
@endsection
