<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateApartmentController extends Controller
{
    public function createApartment()
    {
        return view('create_apartment');
    }

    public function addApartment(Request $request)
    {
        $input = $request->all();
        dd($input);
        return view('admin_section');
    }
}
