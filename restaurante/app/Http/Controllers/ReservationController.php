<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        return view('reservations.index');
    }

    public function store(Request $request)
    {
        // Guardar la reservación en la base de datos (validación simple)
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'date' => 'required|date',
            'time' => 'required',
            'guests' => 'required|integer|min:1',
        ]);

        // Aquí puedes guardar los datos en una tabla de reservaciones

        return redirect()->route('reservations')->with('success', '¡Tu reservación ha sido realizada!');
    }
}
