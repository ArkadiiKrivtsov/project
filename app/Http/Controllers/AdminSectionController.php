<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use App\Models\Bank;
use App\Models\Order;
use App\Models\User;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminSectionController extends Controller
{
    public function productEditor(): View
    {
        $apartments = Apartment::all();

        return view('product_editor', ['apartments' => $apartments]);
    }

    public function ordersTable(): View
    {
        $orders = Order::all();
     
        return view('orders_table', ['orders' => $orders]);
    }

    public function usersTable(): View
    {
        $users = User::all();
     
        return view('users_table', ['users' => $users]);
    }

    public function readBanksTable(): View
    {
        $banks = Bank::all();
     
        return view('banks_table', ['banks' => $banks]);
    }

    public function loadCreateBankForm(): View
    {
        return view('create_bank_form');
    }

    public function createBank(Request $request): RedirectResponse
    {
        $bank = new Bank();

        $data = $request->validate([
            'name' => ['required', 'string', 'unique:banks,name'],
            'first_payment' => ['required', 'integer'],
            'percent' => ['required', 'integer']
        ]);
        try {
            $bank->name = $data['name'];
            $bank->first_payment = $data['first_payment'];
            $bank->percent = $data['percent'];

            $bank->save();

            return redirect('/banks')->with('message', 'Новый банк успешно добавлен!');
        
        } catch (Exception $e) {

            return redirect('/createBank')->with('error', 'Ошибка добавления в базу данных! Попробуйте снова.');
        }
    }

    public function deleteBank($id): RedirectResponse
    {
        try {
            $bank = Bank::find($id);
            $bank->delete();
            return redirect('/banks')->with('message', 'Удалено успешно!');
        } catch (Exception $e) {
            return redirect('/admin_section')->with('error', 'Ошибка удаления из базы данных! Попробуйте снова.');
        }
    }

    public function updateBankForm($id): View
    {
        $bank = Bank::find($id);

        return view('update_bank_form', ['bank' => $bank]);
    }
}
