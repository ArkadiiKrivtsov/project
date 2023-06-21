<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    public function apartment($id)
    {
        $apartment = Apartment::find($id);
        
        return view('apartment', ['apartment' => $apartment]);
    }


}
