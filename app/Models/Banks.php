<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banks extends Model
{
    use HasFactory;

    protected $fillable = [
        'bank_name',
        'bank_string'
    ];

    public function contragents()
    {
        return $this->hasMany(Contragent::class);
    }
}
