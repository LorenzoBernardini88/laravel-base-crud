@extends('layouts.home')

@section('content')
<h1 class="mt-5">Create New Comic</h1>
<form action="{{route('comics.store')}}" methods="POST" class="mt-3">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Title</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Title">
        </div>
        <div class="form-group col-md-3">
            <label for="inputState">Type</label>
            <select id="inputState" class="form-control">
                <option>graphic novel</option>
                <option>comic book</option>
            </select>
        </div> 
        </div>
        <div class="form-group">
            <label for="" class="d-block">Description</label>
            <textarea name="description" id="description" cols="80" rows="" placeholder="Write Description"></textarea>
        </div>
        <div class="form-group">
            <label for="inputAddress2">Thumb</label>
            <input type="text" class="form-control" id="thumb" placeholder="URL Thumb">
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="inputCity">Date-Sale</label>
                <input type="text" class="form-control" id="date_sale">
            </div>
        <div class="form-group col-md-2">
            <label for="inputZip">Price</label>
            <input type="text" class="form-control" id="Price">
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Sign in</button>
</form>
@endsection