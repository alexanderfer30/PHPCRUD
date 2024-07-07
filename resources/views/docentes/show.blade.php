@extends('layouts.app')

@section('content')
<div class="row">
    <h1>Ver docente</h1>
    <div class="col-md-6">
        <div class="form-group">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" value="{{ $docente->nombre }}" disabled>
        </div>
        <div class="form-group">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="apellido" value="{{ $docente->apellido }}" disabled>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="email" class="form-label">Correo electrónico</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $docente->email }}" disabled>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('docentes.index') }}" class="btn btn-primary">Retornar</a>
        </div>
    </div>
</div>
@endsection
