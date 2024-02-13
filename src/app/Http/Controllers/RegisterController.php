<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;

class RegisterController extends Controller
{
    public function register(loginRequest $request) {
    $request->validate([
        'name' => ['required'],
        'email' => ['required','email'],
        'password' => ['required']
    ]);
    }
}
