<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contragent extends Model
{
    use HasFactory;

    protected $fillable = [
        'contr_name',
        'contr_bulstat',
        'contr_iban',
        'banks_id'
    ];

    public function banks()
    {
        return $this->belongsTo(Banks::class);
    }
}
