<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function home(): View
    {
        $apartments = Apartment::all()->take(3);

        return view('home', ['apartments' => $apartments]);
    }
}
