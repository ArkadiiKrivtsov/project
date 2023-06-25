<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function catalog()
    {
        $apartments = Apartment::all();

        return view('catalog', ['apartments' => $apartments]);
    }
}
