{{-- Insert page layout --}}
@extends('layout.main')
{{-- Insert page title --}}
@section('title', $comic->title)
   
{{-- Insert page content --}}
@section('content')
<section class="container mb-5">
    <h1 class="text-center my-4">{{$comic->title}}</h1>
    <hr>
    {{-- Print the data of the comic --}}
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
    <hr>

    {{-- Link of the route of the page comics.index --}}
    <div class="d-flex justify-content-end">
        <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-success">Edit</a>
        <a href="{{route('comics.index')}}" class="btn btn-primary ms-2">Back</a>
    </div>
</section>   
@endsection