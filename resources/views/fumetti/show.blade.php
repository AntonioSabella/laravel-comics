@extends('layouts.app')

@section('css-head')
<link rel="stylesheet" href="{{asset('css/show.css')}}">
@endsection

@section('content')

@include('partials.jumbo')
<div class="img_card">
<img class='img-fluid' src="{{$fumect['thumb']}}'" alt="">
<div class="comic_book">Comic book</div>
<div class="view_gallery">View Gallery</div>
</div>

<small>{{$fumect['price']}}</small>
<h1>{{$fumect['title']}}</h1>
<img src="../img/adv.jpg" alt="">
<p>{{$fumect['description']}}</p>


@endsection