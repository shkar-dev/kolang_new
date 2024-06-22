<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'type',
        'date_of_birth',
        'mobile_1',
        'mobile_2',
        'mobile_3',
        'academic_level_id',
        'gender',
    ];

    public function academicLevel()
    {
        return $this->belongsTo(AcademicLevel::class);
    }

    public function articlesWritten()
    {
        return $this->hasMany(Article::class, 'writer_id');
    }

    public function articlesTranslated()
    {
        return $this->hasMany(Article::class, 'translator_id');
    }

    public function documents()
    {
        return $this->hasMany(StaffDocument::class);
    }

}
