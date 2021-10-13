
{{-- Insert page layout --}}
@extends('layout.main')
{{-- Insert page title --}}
@section('title', 'Comic | Crea')

{{-- Insert page content --}}
@section('content')
    <section id="create-comic" class="container">
        <h2 class="text-center my-2">Aggiungi un nuovo fumetto</h2 class="text-center my-2">
        <form method="POST" action="{{route('comics.store')}}" class="my-4">
            @csrf
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title of the comic</label>
                        <input type="text" class="form-control" id="title" name="title">
                        <div id="title" class="form-text">Add the title of the comic.</div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="series" class="form-label">Comic series</label>
                        <input type="text" class="form-control" id="series" name="series">
                        <div id="series" class="form-text">Add the comic book series.</div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="type" class="form-label">Comic type</label>
                        <input type="text" class="form-control" id="type" name="type">
                        <div id="type" class="form-text">Add the type of the comic.</div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="price" class="form-label">Comic price</label>
                        <input type="text" class="form-control" id="price" name="price">
                        <div id="price" class="form-text">Add the price of the comic.</div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Comic date</label>
                        <input type="text" class="form-control" id="sale_date" name="sale_date">
                        <div id="sale_date" class="form-text">Add the date of the comic ('YYYY-MM-DD')</div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Comic book cover</label>
                        <input type="text" class="form-control" id="thumb" name="thumb">
                        <div id="thumb" class="form-text">Add link to the comic book cover.</div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label for="description" class="form-label">Comic description</label>
                        <textarea class="form-control" id="description" name="description" rows="6"></textarea>
                        <div id="description" class="form-text">Add a description of the comic.</div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <button type="reset" class="btn btn-secondary mx-2">Reset</button>
                <button type="submit" class="btn btn-success mx-2">Crea</button>
                <button class="btn btn-primary ms-2"><a class="text-white text-decoration-none" href="{{route('comics.index')}}">Indietro</a></button>
            </div>
            
        
        </form>

    </section>
@endsection