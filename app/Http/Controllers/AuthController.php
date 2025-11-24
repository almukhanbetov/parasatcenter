<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function logout(Request $request)
    {
        auth()->logout();                // выходим
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');   // ← главная сайта
    }
    // public function logout()
    // {
    //     auth('web')->logout();

    //     return redirect()->route('site.student');
    // }
    public function showRegisterForm()
    {
        return view('auth.register');
    }
    public function login(LoginRequest $request)
    {
        $data = $request->validated();

        if (auth('web')->attempt($data)) {
            return redirect()->route('site.student');
        }
        return redirect()->route('login')->with('success', "Пользователь не найден или данные введены неправильно");
    }
    public function register(RegisterRequest $request)
    {
        $data = $request->validated();
        $user = User::create([
            "name" => $data['name'],
            "email" => $data['email'],
            "password" => Hash::make($data['password']),
        ]);
        if ($user) {
            auth('web')->login($user);
        }
        return redirect()->route('site.student')->with('success', "Вы зарегистрированы!");
    }
}
