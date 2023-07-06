<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Illuminate\Http\Request;

class PrivateApartmentController extends Controller
{
    public function load($id)
    {
        $apartment = Apartment::find($id);

        return view('apartment', ['apartment' => $apartment]);
    }

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

        return redirect('/admin_section')->with('message', 'Новая квартира успешно добавлена!');;
    }

    public function delete($id)
    {
        $apartment = Apartment::find($id);
        $apartment->delete();
        return redirect('/admin_section')->with('message', 'Удалено успешно!');;
    }

    public function updateForm($id)
    {
        $apartment = Apartment::find($id);

        return view('update_apartment', ['apartment' => $apartment]);
    }

    public function update(Request $request, $id)
    {
        $apartment = Apartment::find($id);

        $apartment->update([
            'address' => $request['address'],
            'rooms' => $request['rooms'],
            'price' => $request['price'],
            'square' => $request['square'],
            'floor' => $request['floor'],
            'description' => $request['description'],
        ]);
        
        if ($request->hasFile('image_final_view')) {
            $apartment->update(['image_final_view' => $request['image_final_view']->store('uploads', 'for_images')]);
        }
       
        if ($request->hasFile('image_plan')) {
            $apartment->update(['image_plan' => $request['image_plan']->store('uploads', 'for_images')]);
        }

        return redirect('/admin_section')->with('message', 'Данные успешно обновлены!');
    }
}
