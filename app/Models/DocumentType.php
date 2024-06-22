<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentType extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    
    public function staffDocuments()
    {
        return $this->hasMany(StaffDocument::class);
    }
    
    public function memberDocuments()
    {
        return $this->hasMany(MemberDocument::class);
    }
    
}
