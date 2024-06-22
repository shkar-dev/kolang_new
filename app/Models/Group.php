<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'start_date',
        'end_date',
        'course_id',
        'lecturer_id',
        'supervisor_id',
        'price',
        'lesson_structure',
    ];
    
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    
    public function lecturer()
    {
        return $this->belongsTo(Member::class, 'lecturer_id');
    }
    
    public function supervisor()
    {
        return $this->belongsTo(Member::class, 'supervisor_id');
    }
    
    public function members()
    {
        return $this->belongsToMany(Member::class, 'group_members');
    }
}
