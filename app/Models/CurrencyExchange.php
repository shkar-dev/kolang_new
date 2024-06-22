<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CurrencyExchange extends Model
{
    use HasFactory;
    protected $fillable = ['currency_id', 'exchange_rate', 'date_exchange'];

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }
}
