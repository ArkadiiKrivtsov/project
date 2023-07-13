<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function loadLoginPage(): View
    {
        return view('login_form');
    }

    public function loadRegisterPage(): View
    {
        return view('register');
    }

    public function login(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'email' => ['required', 'email', 'string'],
            'password' => ['required']
        ]);
        
        if(auth("web")->attempt($validated)) {
            return redirect('/admin_section')->with('message', 'Вы успешно авторизовались!');
        }
        
        return redirect('/login')->with('error', 'Ошибка! Пользователь не найден либо данные введены некорректно.');
    }

    public function register(Request $request): RedirectResponse
    {
        $data = $validated = $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email', 'string', 'unique:users,email'],
            'password' => ['required', 'confirmed']
        ]);
        
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password'])
        ]);

        if ($user) {
            auth("web")->login($user);
        }

        return redirect('/')->with('message', 'Вы успешно зарегистрировались!');;
    }

    public function logout(): RedirectResponse
    {
        auth("web")->logout();

        return redirect('/')->with('message', 'До скорых встреч!');;
    }
}
