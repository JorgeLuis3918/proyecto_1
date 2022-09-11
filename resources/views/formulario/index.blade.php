@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        LISTAR
                    </div>

                    <div class="card-body">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Direccion</th>
                                    <th>RUC</th>
                                    <th>ACCIONES</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key => $v)
                                    <tr>
                                        <td>{{ $v->id }}</td>
                                        <td>{{ $v->nombre }}</td>
                                        <td>{{ $v->direccion }}</td>
                                        <td>{{ $v->ruc }}</td>
                                        <td><a href="{{ route('formulario.edit', $v->id) }}"
                                                class="btn btn-warning">editar</a></td>
                                        <td>
                                            <form action="{{ route('formulario.destroy', $v->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('Realmente quiere eliminar este registro')">ELIMINAR</button>
                                            </form>
                                        </td>

                                    </tr>
                                @endforeach


                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
