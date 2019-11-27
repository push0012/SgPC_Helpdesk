<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DsDivision extends Model
{
    protected $table = 'ds_divisions';

    protected $primaryKey = 'dsa_id';

    protected $fillable = [
        'dsa_name','dsa_district'
    ];

    public $timestamps = false;
}
