<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
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
        'user_id',
        'account_id',
    ];

    public function academicLevel()
    {
        return $this->belongsTo(AcademicLevel::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    public function documents()
    {
        return $this->hasMany(MemberDocument::class);
    }

    public function groups()
    {
        return $this->belongsToMany(Group::class, 'group_members');
    }

}
