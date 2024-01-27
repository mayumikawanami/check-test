<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class RegisterController extends Controller
{
    public function register(UserRequest $request) {
    $request->validate([
        'name' => ['required'],
        'email' => ['required','email'],
        'password' => ['required']
    ]);
    }
}
