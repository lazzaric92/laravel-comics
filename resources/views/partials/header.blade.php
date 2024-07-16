@php
    $headerLinks = [
            [
                "id" => 1,
                "title" => 'home',
                "url" => "guest.home"
            ],
            [
                "id" => 2,
                "title" => 'characters',
                "url" => '#'
            ],
            [
                "id" => 3,
                "title" => 'comics',
                "url" => "guest.comics"
            ],
            [
                "id" => 4,
                "title" => 'movies',
                "url" => '#'
            ],
            [
                "id" => 5,
                "title" => 'tv',
                "url" => '#'
            ],
            [
                "id" => 6,
                "title" => 'games',
                "url" => '#'
            ],
            [
                "id" => 7,
                "title" => 'collectibles',
                "url" => '#'
            ],
            [
                "id" => 8,
                "title" => 'videos',
                "url" => '#'
            ],
            [
                "id" => 9,
                "title" => 'fans',
                "url" => '#'
            ],
            [
                "id" => 10,
                "title" => 'news',
                "url" => '#'
            ],
            [
                "id" => 11,
                "title" => 'shop',
                "url" => '#'
            ]
        ]
@endphp

{{-- @dump(Route::currentRouteName()) --}}
<header>
    <div class="container row-between-center">
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC Comics Logo">
        <nav>
            <ul class="row-center">
                @foreach($headerLinks as $link)
                    <li class=" {{Route::currentRouteName() === $link["url"] ? 'active' : ''}} ">
                        <a href=" {{ $link["url"] === "#" ? $link["url"] : route($link["url"]) }} "> {{ $link["title"] }} </a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>
