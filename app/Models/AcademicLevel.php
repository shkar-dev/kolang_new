<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicLevel extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'parent_id'];

    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(self::class, 'parent_id');
    }
    public function descendants()
    {
        return $this->hasMany(self::class, 'parent_id')->with('descendants');
    }
    public function staff()
    {
        return $this->hasMany(Staff::class);
    }

    public function members()
    {
        return $this->hasMany(Member::class);
    }
}
