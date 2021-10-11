@extends('layout.main')

@section('title', 'Comics')
    

@section('content')
<section class="container">
    <h2 class="text-center fw-bold py-2 text-primary">Comics</h2>
    <div class="row justify-content-evenly my-4">

        @forelse ($comics as $comic)
            <div class="card me-4" style="width: 18rem;">
                <img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}}">
                <div class="card-body">
                <h5 class="card-title">{{$comic->title}}</h5>
                <a href="{{route('comics.show', $comic->id)}}" class="btn btn-primary">View more info</a>
                </div>
            </div>    

            
        @empty
        <h3 class="text-center">Fumetti non disponibili</h3>       
        @endforelse
    </div>

</section>
@endsection
