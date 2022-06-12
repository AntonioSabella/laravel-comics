@extends('layouts.app')

@section('page-title', 'Comics Page')

@section('content')

<div class="hero_image">

</div>

<div class="comics pb-4">


    <div class="container">
        <h1>Current Series</h1>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-6">

            @forelse($fumetti as $index => $fumetto)
            <a href="{{route('fumetto-singolo', $index)}}">
                <div class="col">
                    <div class="comic">
                        <img class="img-fluid" src="{{$fumect['thumb']}}" alt="">
                        <p>{{$fumect['series']}}</p>
                    </div>
                </div>
            </a>
            @empty
            <div class="col">Nessun risultato da mostrare</div>
            @endforelse

        </div>
    </div>


    <div class="text-center">
        <a class="btn btn-primary text-uppercase rounded-0" href="#">Load more</a>
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

@endsection