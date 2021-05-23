<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable = [
        'title', 'specId',
    ];

    protected $hidden = [
        'specId',
    ];
}
