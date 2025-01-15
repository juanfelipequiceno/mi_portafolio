<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mime\Address;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function home()
    {
        return view('home');
    }

    public function sobremi()
    {
        return view('sobreMi');
    }

    public function proyectos()
    {
        return view('proyectos');
    }

    public function habilidades()
    {
        return view('habilidades');
    }

    public function contacto()
    {
        return view('contacto');
    }

    // En tu controlador
    // En el Controlador App\Http\Controllers\ContactController
    public function enviarCorreo(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Aquí envías el correo usando la configuración por defecto de Laravel Mail
        Mail::raw($validatedData['message'], function ($message) use ($validatedData) {
            $message->to('felipequiceo78@gmail.com')  // Correo al que se enviará
                    ->subject('Nuevo Mensaje de Contacto desde la web');
        });

        return response()->json(['message' => 'Correo enviado correctamente']);
    }


}
