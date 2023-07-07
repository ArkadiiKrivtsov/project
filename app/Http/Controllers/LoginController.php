<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function loadPage(): View
    {
        return view('login_form');
    }

    public function login(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required|min:6',
        ]);
     
        // The blog post is valid...
     
        return redirect('/admin_section')->with('message', 'Вы успешно авторизовались!');;


    }
    
}
