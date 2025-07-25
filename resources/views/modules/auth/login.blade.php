@extends('layouts.app')

@section('title', 'Iniciar sesion')

@section('content')


<div class="row mt-4">
    <div class="col card bg-dark bg-gradient text-white">
        <div class="card-body">
            <h2 class="text-center">Inicio de sesion</h2>
            <form action="{{ route('access') }}" method="post" class="">
                @csrf
                @method('POST')
                <label for="email" class="label-control">Correo:</label>
                <input type="email" class="form-control bg-dark-subtle text-dark-emphasis fw-bold" name="email" id="email" autocomplete="email" required>

                <label for="password" class="label-control">Contraseña:</label>
                <input type="password" class="form-control bg-dark-subtle text-dark-emphasis fw-bold" name="password" id="password" autocomplete="current-password" required>

                <div class="d-flex gap-4 justify-content-center">
                    <button type="submit" class="btn btn-primary mt-4">Iniciar sesion</button>
                    <a href="{{route('register')}}" class="btn btn-warning mt-4">Crear cuenta</a>
                </div>
            </form>
         </div>
    </div>
</div>


@endsection