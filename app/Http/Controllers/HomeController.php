<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $apartments = Apartment::all();

        return view('home', ['apartments' => $apartments->take(3)]);
    }
}
