@extends ('layouts.app')

@section('content')
<main id='site_main'>

<div class="hero_image">

</div>

<div class="container">
    <div class="row row-cols-4 justify-content-center align-items-center">
        @forelse($fumetti as $fumetto)
        <div class="col fixed_height text-center">
                <img class='img-fluid' src="{{$fumetto['thumb']}}" alt="">
                <h6>Scrittori coinvolti:</h6>
                
                @foreach($fumetto['writers'] as $writer)
                  <span>{{$writer}}</span>
                

                @endforeach

                <h6>Artisti coinvolti:</h6>
                @foreach($fumetto['artists'] as $artist)
                <span>{{$artist}}</span>
               

                @endforeach
            </div>
                @empty

                <p>Nothing to show </p>


                @endforelse

    </div>

</div>

<div class="banner bg-primary py-5 text-white">
    <div class="container">
        <div class="row">
            <div class="col">
                <img class='img-fluid' width="60" src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
                <span>Digital comics</span>
            </div>
            <div class="col">
                <img class='img-fluid' width="60" src="{{asset('img/buy-comics-merchandise.png')}}" alt="">
                <span>DC Merchandise</span>
            </div>
            <div class="col">
                <img class='img-fluid' width="60" src="{{asset('img/buy-comics-subscriptions.png')}}" alt="">
                <span>Subscription</span>
            </div>
            <div class="col">
                <img class='img-fluid' width="60" src="{{asset('img/buy-comics-shop-locator.png')}}" alt="">
                <span>Comic Shop Locator</span>
            </div>
            <div class="col">
                <img class='img-fluid' width="60" src="{{asset('img/buy-dc-power-visa.svg')}}" alt="">
                <span>DC Power VISA</span>
            </div>
        </div>
    </div>
</div>
</main>

@endsection