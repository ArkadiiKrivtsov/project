<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminSectionController extends Controller
{
    public function adminSection()
    {
        return view('admin_section');
    }
}
