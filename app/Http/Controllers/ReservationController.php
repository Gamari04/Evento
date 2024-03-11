<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function store(Request $request, User $user)
    {
        $event = Event::findOrFail($request->event_id);

        if ($event->available_seats <= 0) {
            return redirect()->back()->with('error', 'No available seats for this event.');
        }

        $number_of_tickets = $request->input('number_ticket');

        if ($number_of_tickets > $event->available_seats) {
            return redirect()->back()->with('error', 'Not enough available seats for the requested number of tickets.');
        }

        // Déduction du nombre de tickets réservés du nombre total de sièges disponibles
        $event->available_seats -= $number_of_tickets;
        $event->save();

        $user->events()->attach([$request->event_id => [
            'date' => now(),
            'status' => 1,
            'number_ticket' => $number_of_tickets,
        ]]);

        return redirect()->back()->with('success', 'Réservation effectuée avec succès!');
    }
}
