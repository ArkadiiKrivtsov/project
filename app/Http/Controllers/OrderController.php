<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use App\Models\Order;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;


class OrderController extends Controller
{
    public function loadOrderPage($id): View
    {
        $apartment = Apartment::find($id);

        return view('order_form', ['apartment' => $apartment]);
    }

    public function makeOrder(Request $request, $id)
    {
        $apartment = Apartment::find($id);

        $order = new Order();

        $data = $request->validate([
            'name' => ['required', 'string', 'alpha'],
            'phone' => ['required', 'numeric', 'digits:10']
        ]);

        try {
            $order->bayers_name = $data['name'];
            $order->phone = $data['phone'];
            $order->apartment_id = $id;

            if ($request->has('bank_id')) {
                $order->bank_id = $request['bank_id'];
            }

            $order->save();

            return redirect('/catalog')->with('message', 'Благодарю! Заказ успешно оформлен!');
        
        } catch (Exception $e) {
            
            return redirect("/catalog")->with('error', 'Ошибка оформления заказа! Попробуйте снова.');
        
        }
    }

}
