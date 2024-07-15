@php
    $headerLinks = [
            [
                "title" => 'home',
                "active" => false,
                "url" => '/'
            ],
            [
                "title" => 'characters',
                "active" => false,
                "url" => '#'
            ],
            [
                "title" => 'comics',
                "active" => true,
                "url" => '/comics'
            ],
            [
                "title" => 'movies',
                "active" => false,
                "url" => '#'
            ],
            [
                "title" => 'tv',
                "active" => false,
                "url" => '#'
            ],
            [
                "title" => 'games',
                "active" => false,
                "url" => '#'
            ],
            [
                "title" => 'collectibles',
                "active" => false,
                "url" => '#'
            ],
            [
                "title" => 'videos',
                "active" => false,
                "url" => '#'
            ],
            [
                "title" => 'fans',
                "active" => false,
                "url" => '#'
            ],
            [
                "title" => 'news',
                "active" => false,
                "url" => '#'
            ],
            [
                "title" => 'shop',
                "active" => false,
                "url" => '#'
            ]
        ]
@endphp

<header>
    <div class="container row-between-center">
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC Comics Logo">
        <nav>
            <ul class="row-center">
                @foreach($headerLinks as $link)
                    <li>
                        <a href=" {{$link["url"]}} "> {{ $link["title"] }} </a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>
