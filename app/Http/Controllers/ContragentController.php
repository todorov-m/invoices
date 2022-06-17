<?php

namespace App\Http\Controllers;

use App\Models\Banks;
use App\Models\contragent;
use Illuminate\Http\Request;

class ContragentController extends Controller
{
    public function index(){

        return view ('contragents.list',[

            'contragents' => Contragent::get(),
            'banks' => Banks::get()
        ]);
    }

    public function store()
    {
        $request = request()-> validate([
            'contr_name' => 'required',
            'contr_bulstat' =>'required',
            'contr_iban' => 'required',
            'contr_bankid' => 'required'
        ]);


        Contragent::create($request);

        return back()->with('success', 'Контрагента е добавена!');
    }
}
