<?php 
//Struttura dati per inserire dinamicamente i link del footer
$menuItems = [
    [
        'title' => 'DC COMICS',
        'links' => ['Characters', 'Comics', 'Movies', 'TV', 'Games', 'Views', 'News']
    ],
    [
        'title' => 'DC',
        'links' => ['Terms of use', 'Privacy Polici(New)', 'Ad Choices', 'Advertising', 'Jobs', 'Subscriptions', 'Talent Workshops','CPSC Certificates', 'Ratings', 'Shop Help', 'Contact US']
    ],
    [
        'title' => 'SITES',
        'links' => ['DC', 'MAD Magazine', 'DC Kids', 'DC Universe', 'DC Power Visa']
    ],
    [
        'title' => 'SHOP',
        'links' => ['Shop DC', 'Shop DC Collectibles']
    ]
];

$socialImages = [
    [
        'img' => asset('../img/footer-facebook.png')
    ],
    [
        'img' => asset('../img/footer-twitter.png')
    ],
    [
        'img' => asset('../img/footer-youtube.png')
    ],
    [
        'img' => asset('../img/footer-pinterest.png')
    ],
    [
        'img' => asset('../img/footer-periscope.png')
    ],
]

?>
<footer id="site_footer">
    <div class="container py-5 w-50 ms_10">
        <div class="row row-cols-3">
            @forelse($menuItems as $menuItem)
            <div class="col">
                <h4 class="text-white">{{$menuItem['title']}}</h4>
                <ul>
                    @forelse($menuItem['links'] as $link)
                   <li><a href="#">{{$link}}</a></li>
                    @empty
                    <li><a href="#">No link to show</a></li>
                    @endforelse
                </ul>

            </div>
            @empty
            <div class="col">Non ci sono risultati da mostrare</div>
            @endforelse
            <div class="col w-100">
                <p>All site Content TM and &copy; 2020 DC Entertainment, unless otherwise <a href="#">noted here</a>. All rights reserved. <a href="#">Cookies Settings</a></p>
            </div>
        </div>
    </div>
    <div class="container-fluid footer_bottom">
        <div class="signUp_banner">
            <div class="container w-75  py-4">
                <div class="row row-cols-2 align-items-center">
                    <div class="col">
                        <div class="signUp_button">
                            <a class='text-uppercase' href="#">Sign Up Now!</a>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-end align-items-center">
                        <div class="follow_us d-flex justify-content-between align-items-center gap-2">
                            <div class="follow_title">
                                 <h5 class='text-uppercase'>Follow us</h5>
                            </div>
                            
                            <div class="icons text-white d-flex gap-2">
                                @forelse($socialImages as $socialImage)
                                <span><a href="#"> <img class='img-fluid' src="{{$socialImage['img']}}" alt=""></a></span>
                                @empty
                                <span>No content to show</span>
                                @endforelse
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>