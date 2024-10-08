<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

// WelcomeController::class -> o "nome completo" em string daquela classe (App\Alguma\Coisa\WelcomeController)
Route::get('/', WelcomeController::class);
