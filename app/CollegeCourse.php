<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CollegeCourse extends Model
{
    protected $table = 'college_courses';

    //protected $primaryKey = 'clg_id, cos_id';

    protected $fillable = [
        'cos_coor_name','cos_coor_mobile','cos_duration',
        'clg_id', 'cos_id','spc_id',
        'deleted','user_data'
    ];
}
