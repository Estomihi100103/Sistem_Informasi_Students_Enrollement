<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;
use App\Models\User;


class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            "title" => "Register",
        ]);
    }
    //store data (name, username, status dan password) ke database, jika status bernilai Mahasiswa, maka periksa apakah username sudah ada di tabel students, jika belum ada, maka beritahu user bahwa username tidak terdaftar di tabel students, jika sudah ada, maka buat data user baru di tabel users.
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255',
            'status' => 'required',
            'password' => 'required|min:2|max:255',
        ]);

        if ($validateData['status'] == 'Mahasiswa') {
            $check = Students::where('username', $validateData['username'])->first();
            if ($check) {
                $user = User::create([
                    'name' => $validateData['name'],
                    'username' => $validateData['username'],
                    'status' => $validateData['status'],
                    'password' => bcrypt($validateData['password']),
                ]);
                if ($user) {
                    $request->session()->regenerate();
                    return redirect()->intended('/login')->with('success', 'Register success!');
                }
            } else {
                return back()->with('loginError', 'Username not registered in students table!');
            }
        } else {
            $user = User::create([
                'name' => $validateData['name'],
                'username' => $validateData['username'],
                'status' => $validateData['status'],
                'password' => bcrypt($validateData['password']),
            ]);
            if ($user) {
                $request->session()->regenerate();
                return redirect()->intended('/login')->with('success', 'Register success!');
            }
        }
    }


}