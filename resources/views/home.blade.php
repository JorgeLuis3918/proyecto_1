@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        BIENVENIDO
                    </div>

                    <div class="card-body">
                        <a href="{{ route('formulario.index') }}" class="btn btn-primary">LISTAR</a>
                        <a href="{{ route('formulario.create') }}" class="btn btn-primary">CREAR</a>




                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
