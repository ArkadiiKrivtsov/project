<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Illuminate\Http\Request;

class AdminSectionController extends Controller
{
    public function adminSection()
    {
        $apartments = Apartment::all();

        return view('admin_section', ['apartments' => $apartments]);
    }
}
