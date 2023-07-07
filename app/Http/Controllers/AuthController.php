<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function loadPage(): View
    {
        return view('auth_form');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required|min:6',
        ]);
     
        // The blog post is valid...
     
        return redirect('/admin_section')->with('message', 'Вы успешно авторизовались!');;


    }
    
}
