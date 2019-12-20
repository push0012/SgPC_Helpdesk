<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LastRegNo extends Model
{
    protected $table = 'last_reg_no';

    protected $fillable = [
        'last_degree','last_diploma'
    ];

    public $timestamps = false;
}
