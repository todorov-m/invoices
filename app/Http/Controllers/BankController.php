<?php

namespace App\Http\Controllers;

use App\Models\Banks;
use App\Models\contragent;
use Illuminate\Http\Request;

class BankController extends Controller
{
    public function index(){

        return view ('banks.list',[

           'banks' => Banks::get()

        ]);
    }

    public function store()
    {
        $request = request()-> validate([
            'bank_name' => 'required',
            'bank_string' =>'required'
        ]);


        Banks::create($request);

        return back()->with('success', 'Банката е добавена!');
    }
}
