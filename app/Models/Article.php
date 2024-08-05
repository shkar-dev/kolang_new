<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'writer_id',
        'translator_id',
        'subject_id',
        'content',
        'date',
        'description',
    ];

    public function writer()
    {
        return $this->belongsTo(Staff::class, 'writer_id');
    }

    public function translator()
    {
        return $this->belongsTo(Staff::class, 'translator_id');
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
