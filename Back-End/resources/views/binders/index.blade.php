@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 d-flex gap-4 flex-wrap">
            @foreach ($binders as $binder)
                <div class="binderDimensions">
                    @php
                        $imagePath = '';
                        switch ($binder->color) {
                            case 1:
                                $imagePath = 'binder1.jpg';
                                break;
                            case 2:
                                $imagePath = 'binder2.jpg';
                                break;
                            case 3:
                                $imagePath = 'binder3.jpg';
                                break;
                            case 4:
                                $imagePath = 'binder4.jpg';
                                break;
                            case 5:
                                $imagePath = 'binder5.jpg';
                                break;
                            default:
                                $imagePath = 'binder5.jpg'; // Immagine di fallback nel caso il valore non si trova
                                break;
                        }
                    @endphp
                    <a href="{{ route('binders.index') }}" class="txtDecorationNone text-dark">
                        <img src="{{ asset('images/' . $imagePath) }}" alt="{{ $binder->name }}" class="binderImage">
                        <h4 class="text-center pt-3">{{$binder->name}}</h4>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
