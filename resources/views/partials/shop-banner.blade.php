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
