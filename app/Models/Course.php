<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'duration', 'description', 'image'];
    
    public function attachments()
    {
        return $this->hasMany(CourseAttachment::class);
    }
    
    public function groups()
    {
        return $this->hasMany(Group::class);
    }
}
