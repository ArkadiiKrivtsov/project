<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    public function apartment()
    {
        $apartments = Apartment::all();

        return view('apartment', ['apartments' => $apartments]);
    }


}
