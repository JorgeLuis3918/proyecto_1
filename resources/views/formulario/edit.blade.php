@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Formulario Empresa
                    </div>

                    <div class="card-body">
                        <div class="container">
                        <form action="{{ route('formulario.update',$data['id']) }}" method="POST" >
                            @csrf
                            @method('PATCH')
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" value="{{$data['nombre']}}" id="nombre" name="nombre"
                                        placeholder="Nombre">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="direccion">direccion</label>
                                    <input type="text" class="form-control" value="{{$data['direccion']}}" id="direccion" name="direccion"
                                        placeholder="direccion">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="telefono">telefono</label>
                                    <input type="text" class="form-control" value="{{$data['telefono']}}" id="telefono" name="telefono"
                                        placeholder="telefono">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="ruc">ruc</label>
                                    <input type="text" class="form-control" value="{{$data['ruc']}}" id="ruc" name="ruc"
                                        placeholder="ruc">
                                </div>
                                <button type="submit" class="btn btn-primary">mandar</button>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
