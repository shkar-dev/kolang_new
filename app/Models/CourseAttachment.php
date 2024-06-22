<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseAttachment extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'path', 'course_id'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
