<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
// use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('welcome');

        // Criar usuario
        // $user = User::query()->create([
        //     'name' => 'Fabricio',
        //     'email' => 'fabricio@email.com',
        //     'password' => '123456'
        // ]);

        // Pegar o usuario
        // $user = User::find(1);

        // atualizar a data de verificacao do usuario
        // $user->email_verified_at = now();
        // $user->save();
        // $user->update(['email_verified_at' => now()]); // forma alternativa

        // dd: dump() + die()
        // dd($user);

        // Para testar aquele @auth... @endauth
        // Auth::login($user);
        // Auth::logout();

        // return view('teste.jeremias');
    }
}
