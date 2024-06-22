<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = ['currency_id', 'date'];
    
    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }
    
    public function slots()
    {
        return $this->hasMany(Slot::class);
    }
}
