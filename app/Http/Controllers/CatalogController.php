<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Illuminate\View\View;

class CatalogController extends Controller
{
    public function catalog(): View
    {
        $apartments = Apartment::all();

        return view('catalog', ['apartments' => $apartments]);
    }
}
