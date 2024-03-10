<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function store(Request $request, User $user)
    {
        // // Validez les données du formulaire si nécessaire

        // // Créez une nouvelle réservation
        
        // $reservation->user_id = auth()->user()->id; // ou récupérez l'utilisateur à partir du formulaire
        // $reservation->event_id = $request->input('event_id');
        

        // // Redirigez ou retournez une réponse appropriée
        // return redirect()->route('home')->with('success', 'Réservation effectuée avec succès!');

        $event = Event::findOrFail($request->event_id);
        if ($event->available_seats<= 0) {
            return redirect()->back()->with('error', 'No available seats for this event.');
        }
        $event->available_seats--;
        $event->save();

        $user->events()->attach([$request->event_id => [
            'date' => now(),
            'status' => 1,
            'number_ticket' => $request->input('number_ticket')
        ]]);
        return redirect()->route('ticket', $request->event_id);

    }




}
