<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Aquí puedes guardar los mensajes en la base de datos o enviarlos por correo
        return back()->with('success', '¡Gracias por contactarme!');
    }

}
