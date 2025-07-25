@extends('layouts.app')

@section('content')

    <h1 class="text-center mt-3 mb-5">Actualizar Pelicula o Serie</h1>
    
    <form action=" {{route('eriMovies.update', $movie['id'])}}" method="POST" style=""
        class="row bg-gradient border border-danger d-flex-inline col-12 py-4 px-5 mx-auto mb-5 text-center gap-4">
        @csrf
        @method('PUT')

        <div class="col my-auto">
            <label for="title" class="form-label">Titulo:</label>
            <input type="text" name="title" id="title" value="{{old('title', $movie['title'])}}"
                class="form-control mb-3 fw-bold" required>

            <label for="description" class="form-label">Descripcion:</label>
            <textarea name="description" id="description" class="form-control mb-3 fw-bold" style="height: 6rem" 
            required>{{ old('description', $movie['description']) }}</textarea>
        </div>

        <div class="col">
            <label for="comments" class="form-label">Comentarios:</label>
            <textarea name="comments" id="comments" class="form-control mb-3 fw-bold" style="height: 6rem" 
            required>{{ old('comments', $movie['comments']) }}</textarea>


            <label for="fav_ost" class="form-label">OST favorito:</label>
            <input type="text" name="fav_ost" id="fav_ost" value="{{old('fav_ost', $movie['fav_ost'])}}"
                class="form-control mb-3 fw-bold" required>
        </div>

        <div class="mx-auto">
            <label for="final_note" class="form-label">Nota Final:</label>
            <input type="number" min="1" max="10" name="final_note" id="final_note"
                value="{{old('final_note', $movie['final_note'])}}" class="form-control mb-3 text-center mx-auto fw-bold"
                style="max-width:12rem" required>

            <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
    </form>

@endsection