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

    public function updateForm($id)
    {
        $apartment = Apartment::find($id);

        return view('update_apartment', ['apartment' => $apartment]);
    }

    public function update(Request $request)
    {
        $input = $request->all();
        
        $apartment = Apartment::find($input['id']);

        isset($input['address']) ? $apartment->update(['address' => $input['address']]) : $apartment->address;
        isset($input['rooms']) ? $apartment->update(['rooms' => $input['rooms']]) : $apartment->rooms;
        isset($input['price']) ? $apartment->update(['price' => $input['price']]) : $apartment->price;
        isset($input['square']) ? $apartment->update(['square' => $input['square']]) : $apartment->square;
        isset($input['floor']) ? $apartment->update(['floor' => $input['floor']]) : $apartment->floor;
        isset($input['description']) ? $apartment->update(['description' => $input['description']]) : $apartment->description;
        isset($input['image_final_view']) ? $apartment->update(['image_final_view' => $input['image_final_view']->store('uploads', 'for_images')]) : $apartment->image_final_view;
        isset($input['image_plan']) ? $apartment->update(['image_plan' => $input['image_plan']->store('uploads', 'for_images')]) : $apartment->image_plan;
        
        return redirect('/admin_section');

    }
}

