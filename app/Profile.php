<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Profile extends Model
{
    protected $fillable
        =[
            'name',
            'email',
            'last_name',
            'price',
            'skills',
            'avatar',
            'description'
        ];
}
