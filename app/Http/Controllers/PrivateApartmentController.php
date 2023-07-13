<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PrivateApartmentController extends Controller
{
    public function load($id): View
    {
        $apartment = Apartment::find($id);

        return view('apartment', ['apartment' => $apartment]);
    }

    public function read(): View
    {
        return view('create_apartment');
    }

    public function create(Request $request): RedirectResponse
    {
        $input = $request->all();

        $apartment = new Apartment();

        try {

            $apartment->address = $input['address'];
            $apartment->rooms = $input['rooms'];
            $apartment->price = $input['price'];
            $apartment->square = $input['square'];
            $apartment->floor = $input['floor'];
            $apartment->description = $input['description'];
            $apartment->image_final_view = $input['image_final_view']->store('uploads', 'for_images');
            $apartment->image_plan = $input['image_plan']->store('uploads', 'for_images');

            $apartment->save();

            return redirect('/admin_section')->with('message', 'Новая квартира успешно добавлена!');
        
        } catch (Exception $e) {

            return redirect('/create')->with('error', 'Ошибка добавления в базу данных! Попробуйте снова.');
        
        }
    }

    public function delete($id): RedirectResponse
    {
        try {
            $apartment = Apartment::find($id);
            $apartment->delete();
            return redirect('/admin_section')->with('message', 'Удалено успешно!');
        } catch (Exception $e) {
            return redirect('/admin_section')->with('error', 'Ошибка удаления из базы данных! Попробуйте снова.');
        }
    }

    public function updateForm($id): View
    {
        $apartment = Apartment::find($id);

        return view('update_apartment', ['apartment' => $apartment]);
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $apartment = Apartment::find($id);

        try {

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
        } catch (Exception $e) {
            return redirect('/admin_section')->with('error', 'Ошибка обновления базы данных! Попробуйте снова.');
        }
    }

    public function loadBuyPage(): View
    {
        return view('buy');
    }
}
