@extends('layouts.app')

@section('title', 'Crear cuenta')

@section('content')


<div class="row mt-4">
    <div class="col card bg-dark bg-gradient text-white">
        <div class="card-body">
            <h2 class="text-center">Crear cuenta</h2>
            <form action="{{ route('registered') }}" method="post" class="">
                @csrf
                @method('POST')
                <label for="name" class="label-control">Nombre:</label>
                <input type="text" class="form-control bg-dark-subtle text-dark-emphasis fw-bold" name="name" id="name" required>

                <label for="email" class="label-control">Correo:</label>
                <input type="email" class="form-control bg-dark-subtle text-dark-emphasis fw-bold" name="email" id="email" required>

                <label for="password" class="label-control">Contraseña:</label>
                <input type="password" class="form-control bg-dark-subtle text-dark-emphasis fw-bold" name="password" id="password" required>

                <div class="d-flex gap-4 justify-content-center">
                    <button type="submit" class="btn btn-primary mt-4">Crear cuenta</button>
                    <a href="{{route('login')}}" class="btn btn-warning mt-4">Iniciar sesion</a>
                </div>
            </form>
         </div>
    </div>
</div>


@endsection