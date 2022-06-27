@extends('layouts.template')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header border">
                                <h4 class="card-title text-center" style="color: #4e73df"><b>Modulo Usuarios</b></h4>
                                <p class="card-category text-center" style="color: #4e73df"><b>Usuarios registrados</b></p>
                            </div>
                            <div class="card-body">
                                @include('layouts.search')
                                <div class="table-responsive">
                                    <a class="btn btn-sm mb-2 btn-outline-success justify-content-end" href="{{ url('/nuevo') }}">crear
                                        usuario <i class="fas fa-plus-circle"></i></a>

                                    <table class="table bg-gray">
                                        <thead>
                                            <tr class="border px-4 py-2 bg-white bg-white-800 text-success">
                                                <th class="border px-4 py-2 bg-white text-center boder px-4 py-2">Id
                                                </th>
                                                <th class="border px-4 py-2 bg-white text-center boder px-4 py-2">Nombre
                                                </th>
                                                <th class="border px-4 py-2 bg-white text-center boder px-14 py-2">Email
                                                </th>
                                                <th class="border px-4 py-2 bg-white text-center">Acciones</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($user as $usuarios)
                                            <tr>
                                                <td class="border px-4 py-2 bg-white text-center">{{ $usuarios->id }}
                                                </td>
                                                <td class="border px-4 py-2 bg-white text-center">{{ $usuarios->name }}
                                                </td>
                                                <td class="border px-4 py-2 bg-white text-center">{{ $usuarios->email }}
                                                </td>
                                                <td class="border px-4 py-2 bg-white">
                                                    {{-- aqui hacemos el Editado --}}
                                                    <form action="{{url("usuarios/{$usuarios->id}/editar") }}" method="GET">
                                                        @csrf
                                                        <button type="submit" class="btn btn-outline-success btn-block mb-2 btn-sm"><i class="fa fa-edit"></i>Editar</button>
                                                    </form>

                                                    {{-- aqui hacemos el eliminado --}}
                                                    <form action="{{ url("usuarios/{$usuarios->id}/eliminar") }}"
                                                        method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="btn btn-outline-danger btn-block mb-2 btn-sm"><i
                                                                class="fa fa-trash"></i>Eliminar</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <h6 class="d-flex justify-content-end" style="color: #4e73df"><b>Paginación de usuarios</b></h6>
                                    <div class="d-flex justify-content-end">
                                        {{ $user->links() }}
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
