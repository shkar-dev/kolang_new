<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'symbol', 'is_main_currency'];

    public function exchanges()
    {
        return $this->hasMany(CurrencyExchange::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
