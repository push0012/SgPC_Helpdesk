<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentConfirmDegree extends Model
{
    protected $table = 'student_confirm_degrees';

    //protected $primaryKey = 'dsa_id';

    protected $fillable = [
        'degree_reg_no','reg_confirm_dig',
        'stu_id','clg_id','cos_id','deleted','user_data'
    ];
}