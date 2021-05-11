<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class consultant extends Model
{
    protected $fillable = [
        'title',
        'name',
        'email',
        'number',
        'city',
        'description',
        'answer',
    ];
}
