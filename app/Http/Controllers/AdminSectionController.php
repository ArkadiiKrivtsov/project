<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Illuminate\View\View;

class AdminSectionController extends Controller
{
    public function adminSection(): View
    {
        $apartments = Apartment::all();

        return view('admin_section', ['apartments' => $apartments]);
    }
}
