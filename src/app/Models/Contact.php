<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = ['fullname', 'gender', 'email', 'postcode', 'address', 'building_name', 'opinion'];

    //ユーザーのフルネームを取得
    @return string
    //
    public function getFullNameAttribute()
    {
        return this->first_name .  this->last_name;
    }
}

