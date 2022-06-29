<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contragent extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function banks()
    {
        return $this->belongsTo(Banks::class);
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}
