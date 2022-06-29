<?php

namespace App\Http\Controllers;

use App\Models\Banks;
use App\Models\contragent;
use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function new(){

        return view ('invoices.new');
    }

    public function form($userid){

        return view ('invoices.form',[

            'contragent' => Contragent::where('id', $userid)->first()

        ]);
    }



    public function store()
    {

        $request = request()-> validate([
            'contragents_id' => 'required',
            'invoice_iban' =>'required',
            'invoice_bulstat' => 'required',
            'banks_id' => 'required',
            'users_id' => 'required',
            'invoice_type' => 'required',
            'invoice_number' => 'required',
            'invoice_date' => 'required',
            'invoice_amount' => 'required',
            'invoice_maturity_date' => 'required',
        ]);

        Invoice::create($request);

        return back()->with('success', 'Документа е добавен!');
    }
}
