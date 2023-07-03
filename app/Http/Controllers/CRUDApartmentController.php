<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Illuminate\Http\Request;

class CRUDApartmentController extends Controller
{
    public function read()
    {
        return view('create_apartment');
    }

    public function create(Request $request)
    {
        $input = $request->all();
        
        $apartment = new Apartment();

        $apartment->address = $input['address'];
        $apartment->rooms = $input['rooms'];
        $apartment->price = $input['price'];
        $apartment->square = $input['square'];
        $apartment->floor = $input['floor'];
        $apartment->description = $input['description'];
        $apartment->image_final_view = $input['image_final_view']->store('uploads', 'for_images');
        $apartment->image_plan = $input['image_plan']->store('uploads', 'for_images');

        $apartment->save();

        return redirect('/admin_section');
    }

    public function delete($id)
    {
        $apartment = Apartment::find($id);
        $apartment->delete();
        return redirect('/admin_section');
    }
}
