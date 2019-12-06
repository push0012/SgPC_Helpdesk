<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';

    protected $primaryKey = 'cos_id';

    protected $fillable = [
        'cos_title','cos_type',
        'deleted','user_data'
    ];
}