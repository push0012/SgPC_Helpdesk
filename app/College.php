<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    protected $table = 'colleges';

    protected $primaryKey = 'clg_id';

    protected $fillable = [
        'clg_name','clg_type','clg_address','clg_telephone',
        'clg_email','clg_website','deleted','user_data'
    ];
}