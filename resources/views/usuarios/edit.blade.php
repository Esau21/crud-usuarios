@extends('layouts.app')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title  text-center">Crear Usuarios</h4>
                                <p class="card-category  text-center">Crea un usuario nuevo porfavor</p>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ url("usuarios/{$usuarios->id}") }}">
                                    {{ method_field('PUT') }}
                                    @csrf
                                    {{-- Aqui va el nombre --}}
                                    <div class="row justify-content-center">
                                    <div class="form-group col-md-6">
                                    <label>Nombre <i class="fas fa-pencil-alt"></i> : </label>
                                    <input class="form-control" type="text" name="name" id="name" placeholder="Escribe tu nombre nuevo" value="{{ old('name') }}" required>
                                    </div>
                                    </div>
                                    {{-- Aqui va el email --}}
                                    <div class="row justify-content-center">
                                    <div class="form-group col-md-6">
                                    <label>Email <i class="fas fa-envelope"></i> : </label>
                                    <input class="form-control" type="text" name="email" id="email" placeholder="Edgar@gmail.com" value="{{ old('email') }}" required>
                                    </div>
                                    </div>
                                    {{-- Aqui va la clave --}}
                                    <div class="row justify-content-center">
                                    <div class="form-group col-md-6">
                                    <label>Contraseña <i class="fas fa-key"></i> : </label>
                                    <input class="form-control" type="password" name="password" id="inputPassword" placeholder="mayor a 5" required>
                                    </div>
                                    </div>

                                   <div class="row justify-content-center">
                                    <button type="submit" class="btn btn-success"><i class="fa fa-plus-circle"></i> Actualizar usuario</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection