@extends('layouts.home')

@section('content')
<h1 class="mt-5">Crea Nuovo Comic</h1>
<form action="{{route('comics.store')}}" method="POST" class="mt-3">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Title">
        </div>
        <div class="form-group col-md-3">
            <label for="series">Series</label>
            <input type="text" class="form-control" name="series" id="series" placeholder="Series">
        </div>
        <div class="form-group col-md-3">
            <label for="type">Type</label>
            <select id="type" name="type" class="form-control">
                <option>graphic novel</option>
                <option>comic book</option>
            </select>
        </div> 
        </div>
        <div class="form-group">
            <label for="description" class="d-block">Description</label>
            <textarea name="description" id="description" cols="80" rows="" placeholder="Write Description"></textarea>
        </div>
        <div class="form-group">
            <label for="thumb">Thumb</label>
            <input type="text" class="form-control" name="thumb" id="thumb" placeholder="URL Thumb">
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="date_sale">Date-Sale</label>
                <input type="date" class="form-control" name="sale_date" id="date_sale">
            </div>
        <div class="form-group col-md-2">
            <label for="price">Price</label>
            <input type="text" class="form-control" name="price" id="price">
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