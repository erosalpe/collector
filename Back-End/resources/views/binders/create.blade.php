@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form method="POST" action="{{ route('binders.store') }}" class="d-flex flex-column gap-4 align-items-center">
                @csrf

                <div class="form-group w-100">
                    <label for="name">Nome</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <h3>Scegli la copertina del Bnider</h3>
                <div class="form-group d-flex flex-wrap gap-4 pt-4">
                    <div class="d-flex flex-column binderDimensions align-items-center gap-3">
                        <img src="{{ asset('images/binder1.jpg') }}" class="optionImg">
                        <input type="radio" value="1" id="color1" name="color" required>
                    </div>

                    <div class="d-flex flex-column binderDimensions align-items-center gap-3">
                        <img src="{{ asset('images/binder2.jpg') }}" class="optionImg">
                        <input type="radio" value="2" id="color2" name="color" required>
                    </div>

                    <div class="d-flex flex-column binderDimensions align-items-center gap-3">
                        <img src="{{ asset('images/binder3.jpg') }}" class="optionImg">
                        <input type="radio" value="3" id="color3" name="color" required>
                    </div>

                    <div class="d-flex flex-column binderDimensions align-items-center gap-3">
                        <img src="{{ asset('images/binder4.jpg') }}" class="optionImg">
                        <input type="radio" value="4" id="color4" name="color" required>
                    </div>

                    <div class="d-flex flex-column binderDimensions align-items-center gap-3">
                        <img src="{{ asset('images/binder5.jpg') }}" class="optionImg">
                        <input type="radio" value="5" id="color5" name="color" required>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Salva</button>
            </form>
        </div>
    </div>
</div>
@endsection
