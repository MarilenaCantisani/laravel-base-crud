{{-- Insert page layout --}}
@extends('layout.main')
{{-- Insert page title --}}
@section('title', 'Comics')
{{-- Fontawesome --}}
@section('cdns')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

{{-- Insert page content --}}
@section('content')
<section class="container">
    <div class="d-flex justify-content-between align-items-center me-4">
        <h2 class="text-center fw-bold py-2 text-primary">Comics</h2>
        <button class="btn btn-secondary">
            <a class="text-white text-decoration-none" href="{{route('comics.create')}}">
                <i class="fas fa-plus"></i>
            </a>
        </button>
    </div>
    <div class="row justify-content-evenly my-4">
        {{-- Forelse cycle to print the data of each comic --}}
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
