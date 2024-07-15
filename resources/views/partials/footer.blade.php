@php
    $navs = [
        [
            "title"  => 'DC Comics',
            "links"  => [
                [
                    "title" => 'Characters',
                    "url" => '#'
                ],
                [
                    "title" => 'Comics',
                    "url" => '/comics'
                ],
                [
                    "title" => 'Movies',
                    "url" => '#'
                ],
                [
                    "title" => 'Tv',
                    "url" => '#'
                ],
                [
                    "title" => 'Games',
                    "url" => '#'
                ],
                [
                    "title" => 'Videos',
                    "url" => '#'
                ],
                [
                    "title" => 'News',
                    "url" => '#'
                ]
            ],
        ],
        [
            "title" => 'Shop',
            "links" => [
                [
                    "title" => 'Shop DC',
                    "url" => '#'
                ],
                [
                    "title" => 'Shop DC Collectibles',
                    "url" => '#'
                ]
            ],
        ],
        [
            "title" =>'DC',
            "links" => [
                [
                    "title" => 'Terms Of Use',
                    "url" => '#'
                ],
                [
                    "title" => 'Privacy policy (New)',
                    "url" => '#'
                ],
                [
                    "title" => 'Ad Choices',
                    "url" => '#'
                ],
                [
                    "title" => 'Advertising',
                    "url" => '#'
                ],
                [
                    "title" => 'Jobs',
                    "url" => '#'
                ],
                [
                    "title" => 'Subscriptions',
                    "url" => '#'
                ],
                [
                    "title" => 'Talent Workshops',
                    "url" => '#'
                ],
                [
                    "title" => 'CPSC Certificates',
                    "url" => '#'
                ],
                [
                    "title" => 'Ratings',
                    "url" => '#'
                ],
                [
                    "title" => 'Shop Help',
                    "url" => '#'
                ],
                [
                    "title" => 'Contact Us',
                    "url" => '#'
                ]
            ],
        ],
        [
            "title" =>'Sites',
            "links" => [
            [
                    "title" => 'DC',
                    "url" => '#'
                ],
                [
                    "title" => 'MAD Magazine',
                    "url" => '#'
                ],
                [
                    "title" => 'DC Kids',
                    "url" => '#'
                ],
                [
                    "title" => 'DC Universe',
                    "url" => '#'
                ],
                [
                    "title" => 'DC Power Visa',
                    "url" => '#'
                ]
            ],
        ]
    ]
@endphp

<footer>
    <section class="footer-nav">
        <div class="container row-between-center">
            <div class="nav-wrapper">
                @foreach($navs as $nav)
                    <nav>
                        <h2> {{ $nav["title"] }} </h2>
                        <ul>
                            @foreach ($nav["links"] as $link)
                                <li>
                                    <a href=" {{ $link["url"] }} ">
                                        {{ $link["title"] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>

                    </nav>
                @endforeach
            </div>
            <img src=" {{ Vite::asset('resources/img/dc-logo-bg.png')}} " alt="DC Comics Logo">
        </div>
    </section>
    <section class="footer">
        <div class="container row-between-center">
            <button>Sign-up now!</button>
            <div class="socials row-center">
                <h2>Follow us</h2>
                <ul class="row-center">
                    <li>
                        <a href="#">
                            <img src=" {{Vite::asset('resources/img/footer-facebook.png')}} " alt="Facebook Icon`">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src=" {{Vite::asset('resources/img/footer-twitter.png')}} " alt="Twitter Icon`">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src=" {{Vite::asset('resources/img/footer-youtube.png')}} " alt="Youtube Icon`">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src=" {{Vite::asset('resources/img/footer-periscope.png')}} " alt="Periscope Icon`">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src=" {{Vite::asset('resources/img/footer-pinterest.png')}} " alt="Pinterest Icon`">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</footer>
