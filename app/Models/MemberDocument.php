<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberDocument extends Model
{
    use HasFactory;
     protected $fillable = ['member_id', 'document_type_id', 'path'];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }

    public function documentType()
    {
        return $this->belongsTo(DocumentType::class);
    }
}
