<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        // Validez les données du formulaire si nécessaire

        // Créez une nouvelle réservation
        
        $reservation->user_id = auth()->user()->id; // ou récupérez l'utilisateur à partir du formulaire
        $reservation->event_id = $request->input('event_id');
        

        // Redirigez ou retournez une réponse appropriée
        return redirect()->route('home')->with('success', 'Réservation effectuée avec succès!');
    }
}
