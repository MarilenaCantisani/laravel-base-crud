@extends('layout.main')

@section('title', $comic->title)
    
@section('content')
<section class="container mb-5">
    <h1 class="text-center my-4">{{$comic->title}}</h1>
    <hr>
    <div class="d-flex justify-content-between">
        <img class="col-2" src="{{$comic->thumb}}" alt="{{$comic->title}}">
        <div class="col-10 ms-3">
            <div><strong>Series: </strong>{{$comic->series}}</div>
            <div><strong>Type: </strong>{{$comic->type}}</div>
            <div><strong>Sale date: </strong>{{$comic->sale_date}}</div>
            <div>{{$comic->description}}</div>
            <div><strong>Price: </strong>{{$comic->price}} $</div>
        </div>
    </div>
    <div class="d-flex justify-content-end">
        <a href="{{route('comics.index')}}" class="btn btn-primary">Indietro</a>
    </div>
</section>   
@endsection