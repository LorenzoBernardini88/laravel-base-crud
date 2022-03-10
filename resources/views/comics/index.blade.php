@extends('layouts.home')


@section('content')
<a href="{{route("comics.create")}}"><button type="button" class="btn btn-success">Aggiungi</button></a>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">type</th>
            <th scope="col">image</th>
            <th scope="col">cooking_time</th>
            <th scope="col">weight</th>
            <th scope="col">link</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($data_c as $elemento)
            <tr>
                <th scope="row">{{$elemento->id}}</th>
                <td>{{$elemento->title}}</th>
                <td>{{$elemento->description}}</th>
                <td><img src="{{$elemento->thumb}}" alt=""></th>
                <td>{{$elemento->price}}</th>
                <td>{{$elemento->series}}</th>
                <td>{{$elemento->sale_date}}</th>
                <td>{{$elemento->type}}</th>
                <td>
                <a href="{{route("comics.show", $elemento->id)}}"><button type="button" class="btn btn-primary">Vedi</button></a>
                
            </th>
            </tr>
            @endforeach
        
        </tbody>
    </table>
@endsection