<?php

namespace App\Http\Livewire;

use App\Models\contragent;
use Livewire\Component;

class ContragentsSelect extends Component
{
    public $search = '';


    public function render()
    {

        $searchResults = [];

        if (strlen($this->search) >= 2) {
            $searchResults =Contragent::where('contr_name', 'like', '%' . $this->search . '%')
                ->get()
                ->toArray();
        }

        return view('livewire.contragents-select',['searchResults' => collect($searchResults)->take(7) ]);
    }
}
