@extends('layouts.app')

@section('content')


    <h1 class="text-center mt-3 mb-5">Registro de Peliculas y series favoritas</h1>
    <form action="{{route('movies.save')}}" method="POST" style="" class="row bg-gradient border border-warning d-flex-inline col-12 py-4 px-5 mx-auto mb-5 text-center gap-4">
        @csrf
        <div class="col my-auto">
            <label for="title" class="form-label">Titulo:</label>
            <input type="text" name="title" id="title" class="form-control mb-3" required>

            <label for="description" class="form-label">Descripcion:</label>
            <textarea name="description" id="description" class="form-control mb-3" style="height: 6rem" required></textarea>
        </div>

        <div class="col">
            <label for="comments" class="form-label">Comentarios:</label>
            <textarea name="comments" id="comments" class="form-control mb-3" style="height: 6rem" required></textarea>

            <label for="fav_ost" class="form-label">OST favorito:</label>
            <input type="text" name="fav_ost" id="fav_ost" class="form-control mb-3"  required>
        </div>

        <div class="mx-auto">
            <label for="final_note" class="form-label">Nota Final:</label>
            <input type="number" min="1" max="10" name="final_note" id="final_note" class="form-control mb-3 text-center mx-auto" style="max-width:12rem" required>
        
            <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
    </form>

@endsection