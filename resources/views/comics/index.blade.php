@extends('layouts.home')


@section('content')
<a href="{{route("comics.create")}}"><button type="button" class="btn btn-success">Aggiungi</button></a>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Thumb</th>
            <th scope="col">Price</th>
            <th scope="col">Series</th>
            <th scope="col">Sale-Date</th>
            <th scope="col">Type</th>
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
                <a href="{{route("comics.edit", $elemento->id)}}"><button type="button" class="btn btn-warning">Modifica</button></a>
                <form action="{{route('comics.destroy',$elemento->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Cancella"> 
                    {{-- onclick="return confirm('Conferma cancellazione dato ?')" --}}
                </form>
            </th>
            </tr>
            @endforeach
        
        </tbody>
    </table>
@endsection 