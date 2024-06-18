@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        
            <h1>Dettagli del Binder</h1>

            <p><strong>Nome:</strong> {{ $binder->name }}</p>
            <p><strong>Colore:</strong> {{ $binder->color }}</p>
            <p><strong>Proprietario:</strong> {{ $binder->user->name }}</p>

            <a href="{{ route('binders.index') }}" class="btn btn-primary">Torna alla lista dei Binders</a>

        </div>
    </div>
</div>
@endsection
