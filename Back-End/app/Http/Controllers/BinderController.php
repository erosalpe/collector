<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Binder; // Importa il modello Binder
use Illuminate\Support\Facades\Auth; // Importa la facciata Auth

class BinderController extends Controller
{
    public function index()
    {
        // Recupera i binder associati all'utente autenticato
        $binders = Binder::where('user_id', Auth::id())->get();
        
        return view('binders.index', ['binders' => $binders]);
    }
}
