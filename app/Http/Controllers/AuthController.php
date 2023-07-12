<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function redirectToLinkedIn()
    {
        return Socialite::driver('linkedin')->redirect();
    }

    public function handleLinkedInCallback()
    {
        $user = Socialite::driver('linkedin')->user();

        // Aquí puedes almacenar o procesar la información del usuario de LinkedIn

        return redirect()->to('/'); // Cambia '/' por la ruta que desees después de la autenticación
    }

    public function redirectToInfojobs()
    {
        return Socialite::driver('infojobs')->redirect();
    }

    public function handleInfojobsCallback()
    {
        $user = Socialite::driver('infojobs')->user();

        // Aquí puedes almacenar o procesar la información del usuario de Infojobs

        return redirect()->to('/'); // Cambia '/' por la ruta que desees después de la autenticación
    }
}
