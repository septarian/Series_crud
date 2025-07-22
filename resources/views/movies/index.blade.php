    @extends('layouts.app')

    @section('content')

    <h1 class="text-center m-2">Tabla de series y peliculas</h1>
    
    <table class="table table-dark table-bordered m-4">
        <thead>
            <tr>
                <th>#</th>
                <th>Titulo</th>
                <th>Descripcion</th>
                <th>Comentarios</th>
                <th>OST Favorito</th>
                <th>Nota Final</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($movies as $movie)
            <tr>
                <th>{{$movie['id']}}</th>
                <th>{{$movie['title']}}</th>
                <th>{{$movie['description']}}</th>
                <th>{{$movie['comments']}}</th>
                <th>{{$movie['fav_ost']}}</th>
                <th>{{$movie['final_note']}}</th>

                <th><a href="{{ route('movies.edit', $movie['id']) }}" class="btn btn-warning ">Editar</a></th>
                <th>
                    <form action="{{route('movies.destroy', $movie['id'])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>

    @if (session('success'))
    <div class="alert alert-success text-center">
        {{session('success')}}
    </div>
    @endif

@endsection