<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{   
    public function index(){
        return view('/register', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'pnumber' => 'required|unique:users',
            'email' => 'required|email:dns|unique:users',
            'username' => ['required', 'min:8', 'max:255', 'unique:users'],
            'password' => 'required|min:8|max:255'
        ]);

        /* $validatedData['password'] = bcrypt($validatedData['password']); */
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        /* $request->session()->flash('success', 'Registrasi telah berhasil'); */

        return redirect('/login')->with('success', 'Registrasi telah berhasil');
    }
}
