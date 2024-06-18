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

    public function create()
    {
        return view('binders.create');
    }

    public function store(Request $request)
    {
        // Verifica che l'utente sia autenticato
        if (Auth::check()) {
            // Validazione dei dati del form
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'color' => 'required|integer|between:1,5',
            ]);

            // Recupera l'ID dell'utente autenticato
            $userId = Auth::id();

            // Creazione del nuovo binder nel database
            $binder = Binder::create([
                'name' => $validatedData['name'],
                'color' => $validatedData['color'],
                'user_id' => $userId,
            ]);

            // Reindirizzamento a una pagina di conferma o a un'altra vista
            return redirect()->route('binders.index')->with('success', 'Binder creato con successo.');
        } else {
            // Se l'utente non è autenticato, gestisci l'errore o reindirizza ad una pagina di login
            return redirect()->route('login')->with('error', 'Devi effettuare il login per poter creare un binder.');
        }
    }

    public function show($id)
    {
        $binder = Binder::findOrFail($id); // Trova il binder per ID o genera un'eccezione se non trovato
        
        // Passa il binder recuperato alla vista 'binders.show'
        return view('binders.show', compact('binder'));
    }
}
