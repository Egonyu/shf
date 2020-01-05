<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $fillable = [
        'names',
        'address',
        'city',
        'state',
        'zip',
        'phone',
        'email',
        'employer',
        'position',
        'special_talent',
        'volunteering_field',
        'physical_limitations',
        'emergency_contact',
    ];
}
