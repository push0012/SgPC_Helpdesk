<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DegreeSpecial extends Model
{
    
    protected $table = 'degree_specials';

    protected $primaryKey = 'spc_id';

    protected $fillable = [
        'spc_name','deleted','user_data'
    ];

}
