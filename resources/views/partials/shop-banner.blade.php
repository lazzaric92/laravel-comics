@php
    $shopLinks = [
        [
            "id" => 1,
            "title" => 'Digital Comics',
            "image" => 'buy-comics-digital-comics.png',
            "url" => '#'
        ],
        [
            "id" => 2,
            "title" => 'Merchandise',
            "image" => 'buy-comics-merchandise.png',
            "url" => '#'
        ],
        [
            "id" => 3,
            "title" => 'Subscription',
            "image" => 'buy-comics-subscriptions.png',
            "url" => '#'
        ],
        [
            "id" => 4,
            "title" => 'Comic Shop Locator',
            "image" => 'buy-comics-shop-locator.png',
            "url" => '#'
        ],
        [
            "id" => 5,
            "title" => 'DC Power Visa',
            "image" => 'buy-dc-power-visa.svg',
            "url" => '#'
        ]
    ];
@endphp


<section class="shop-banner">
    <div class="container">
        <ul>
            @foreach ($shopLinks as $link)
                <li>
                    <img src=" {{ Vite::asset("resources/img/".$link["image"]) }} " alt="{{ $link["title"] }}">
                    <a href="{{$link["url"]}}"> {{$link["title"]}} </a>
                </li>
            @endforeach
        </ul>
    </div>
</section>
