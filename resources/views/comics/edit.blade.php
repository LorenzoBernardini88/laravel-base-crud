@extends('layouts.home')

@section('content')
<h1 class="mt-5">Modifica Comic</h1>
<form action="{{route('comics.update',$comic->id)}}" method="POST" class="mt-3">
    @csrf
    @method('PUT')
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="title">Title</label>
            <input value="{{old('title')?? $comic->title}}" type="text" class="form-control" name="title" id="title" placeholder="Title">
            
        </div>
        <div class="form-group col-md-3">
            <label for="series">Series</label>
            <input  value="{{old('series')??$comic->series}}" type="text" class="form-control" name="series" id="series" placeholder="Series">
        </div>
        <div class="form-group col-md-3">
            <label for="type">Type</label>
            <select value="{{$comic->type}}" id="type" name="type" class="form-control">
                <option value='graphic novel'{{old('type')=='graphic novel'? 'selected' : null}}>graphic novel</option>
                <option value='comic book'{{old('type')=='comic book' ? 'selected' : null}}>comic book</option>
            </select>
        </div> 
        </div>
        <div class="form-group">
            <label for="description" class="d-block">Description</label>
            <textarea value="{{old('description')?? $comic->description}}" name="description" id="description" cols="80" rows="" placeholder="Write Description"></textarea>
        </div>
        <div class="form-group">
            <label for="thumb">Thumb</label>
            <input value="{{old('thumb')?? $comic->thumb}}" type="text" class="form-control" name="thumb" id="thumb" placeholder="URL Thumb">
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="sale_date">Date-Sale</label>
                <input value="{{old('sale_date')??$comic->sale_date}}" type="date" class="form-control" name="sale_date" id="sale_date">
            </div>
        <div class="form-group col-md-2">
            <label for="price">Price</label>
            <input value="{{old('price')??$comic->price}}" type="text" class="form-control" name="price" id="price">
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Salva</button>
</form>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
@endsection