<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $fillable = [
        'school_year',
        'last_name',
        'first_name',
        'middle_name',
        'grade',
        'address',
        'phone',
        'age',
        'sex',
        'birthday',
        'birth_place',
        'nationality',
        'religion',
        'email',
        'no_brothers',
        'brother_ages',
        'no_sisters',
        'sister_ages',
        'father',
        'father_occupation',
        'father_phone',
        'mother',
        'mother_occupation',
        'mother_phone',
        'parent_address',
        'guardian',
        'guardian_occupation',
        'guardian_phone',
        'guardian_address',
        'reg_ref',
        'payment_method',
        'payment_ref',
        'image'
    ];

    public function getFullNameAttribute()
    {
        return "{$this->last_name}, {$this->first_name} {$this->middle_name}";
    }

}
