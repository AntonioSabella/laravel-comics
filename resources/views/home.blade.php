@extends ('layouts.app')

@section('content')

@forelse($fumetti as $fumetto)

<h3>{{$fumetto['title']}}</h3>
<img src="{{$fumetto['thumb']}}" alt="">
<small>{{$fumetto['price']}}</small>
<p>{{$fumetto['description']}}</p>


@empty

<p>Nothing to show </p>

@endforelse

@endsection