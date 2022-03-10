@extends('layouts.home')


@section('content')
    <h1>{{$data_comics->title}}</h1>
    <p>{!!$data_comics->description!!}</p>
    <p>{{$data_comics->price}}</p>
    <p>{{$data_comics->series}}</p>
    <p>{{$data_comics->sale_date}}</p>
    <p>{{$data_comics->type}}</p>
    <img src="{{$data_comics->thumb}}">

    <form action="{{route("comics.destroy", $data_comics->id)}}" method="POST">
        @csrf
        @method("DELETE")
        <button type="submit" class="btn btn-danger">cancella</button>
    </form>

    <a href="{{route("comics.index")}}"><button type="button" class="btn btn-primary">back</button></a>
@endsection