<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slot extends Model
{
    use HasFactory;
    protected $fillable = ['transaction_id', 'account_id', 'debit', 'credit'];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }

    public function account()
    {
        return $this->belongsTo(Account::class);
    }
}
