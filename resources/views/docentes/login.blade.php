@extends('layouts.app')

@section('content')
    <h1>Login docente</h1>

    <form action="{{ route('docentes.login') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
            </div>
        </div>
        
        <div style="margin-top: 10px" class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </div>

        @error('InvalidCredentials')
            <div style="margin-top: 10px" class="row">
                <div class="alert alert-danger fade show" id="success-message" data-bs-dismiss="alert" role="alert">
                    {{ $message }}
                </div>
            </div>
        @enderror
    </form>
@endsection
