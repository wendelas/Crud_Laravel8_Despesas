<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function autenticar(Request $request)
    { 
        $validated = $request->validate([
            'usuario' => 'string',
            'senha' => 'string|min:3',
        ]);

  //    if(User::attempt($request->only(['usuario', 'senha']))){
  //          return redirect()->route('laravel');
  //      }
        return redirect()->route('login');
    }
}
