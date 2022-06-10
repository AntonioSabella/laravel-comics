@extends ('layouts.app')

@section('content')
<main id='site_main'>

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
</main>

@endsection