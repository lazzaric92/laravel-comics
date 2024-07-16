@php
    $navs = [
        [
            "title"  => 'DC Comics',
            "links"  => [
                [
                    "id" => 1,
                    "title" => 'Characters',
                    "url" => '#'
                ],
                [
                    "id" => 2,
                    "title" => 'Comics',
                    "url" => 'guest.comics'
                ],
                [
                    "id" => 3,
                    "title" => 'Movies',
                    "url" => '#'
                ],
                [
                    "id" => 4,
                    "title" => 'Tv',
                    "url" => '#'
                ],
                [
                    "id" => 5,
                    "title" => 'Games',
                    "url" => '#'
                ],
                [
                    "id" => 6,
                    "title" => 'Videos',
                    "url" => '#'
                ],
                [
                    "id" => 7,
                    "title" => 'News',
                    "url" => '#'
                ]
            ],
        ],
        [
            "title" => 'Shop',
            "links" => [
                [
                    "id" => 1,
                    "title" => 'Shop DC',
                    "url" => '#'
                ],
                [
                    "id" => 2,
                    "title" => 'Shop DC Collectibles',
                    "url" => '#'
                ]
            ],
        ],
        [
            "title" =>'DC',
            "links" => [
                [
                    "id" => 1,
                    "title" => 'Terms Of Use',
                    "url" => '#'
                ],
                [
                    "id" => 2,
                    "title" => 'Privacy policy (New)',
                    "url" => '#'
                ],
                [
                    "id" => 3,
                    "title" => 'Ad Choices',
                    "url" => '#'
                ],
                [
                    "id" => 4,
                    "title" => 'Advertising',
                    "url" => '#'
                ],
                [
                    "id" => 5,
                    "title" => 'Jobs',
                    "url" => '#'
                ],
                [
                    "id" => 6,
                    "title" => 'Subscriptions',
                    "url" => '#'
                ],
                [
                    "id" => 7,
                    "title" => 'Talent Workshops',
                    "url" => '#'
                ],
                [
                    "id" => 8,
                    "title" => 'CPSC Certificates',
                    "url" => '#'
                ],
                [
                    "id" => 9,
                    "title" => 'Ratings',
                    "url" => '#'
                ],
                [
                    "id" => 10,
                    "title" => 'Shop Help',
                    "url" => '#'
                ],
                [
                    "id" => 11,
                    "title" => 'Contact Us',
                    "url" => '#'
                ]
            ],
        ],
        [
            "title" =>'Sites',
            "links" => [
                [
                    "id" => 1,
                    "title" => 'DC',
                    "url" => '#'
                ],
                [
                    "id" => 2,
                    "title" => 'MAD Magazine',
                    "url" => '#'
                ],
                [
                    "id" => 3,
                    "title" => 'DC Kids',
                    "url" => '#'
                ],
                [
                    "id" => 4,
                    "title" => 'DC Universe',
                    "url" => '#'
                ],
                [
                    "id" => 5,
                    "title" => 'DC Power Visa',
                    "url" => '#'
                ]
            ],
        ]
    ];
    $socialLinks = [
        [
            "id" => 1,
            "title" => 'Facebook',
            "image" => 'footer-facebook.png',
            "url" => '#'
        ],
        [
            "id" => 2,
            "title" => 'Twitter',
            "image" => 'footer-twitter.png',
            "url" => '#'
        ],
        [
            "id" => 3,
            "title" => 'Youtube',
            "image" => 'footer-youtube.png',
            "url" => '#'
        ],
        [
            "id" => 4,
            "title" => 'Pinterest',
            "image" => 'footer-pinterest.png',
            "url" => '#'
        ],
        [
            "id" => 5,
            "title" => 'Periscope',
            "image" => 'footer-periscope.png',
            "url" => '#'
        ]
    ]
@endphp

<footer id="app-footer">
    <section class="footer-nav">
        <div class="container">
            <div class="nav-wrapper">
                @foreach($navs as $nav)
                    <nav>
                        <h2> {{ $nav["title"] }} </h2>
                        <ul>
                            @foreach ($nav["links"] as $link)
                                <li>
                                    <a href=" {{ $link["url"] === "#" ? $link["url"] : route($link["url"]) }} "> {{ $link["title"] }} </a>
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
        <div class="container">
            <button>Sign-up now!</button>
            <div class="socials">
                <h2>Follow us</h2>
                <ul>
                    @foreach ($socialLinks as $link)
                        <li>
                            <a href=" {{ $link["url"] }} ">
                                <img src=" {{Vite::asset('resources/img/'. $link["image"])}} " alt="{{ $link["title"] }}">
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
</footer>
