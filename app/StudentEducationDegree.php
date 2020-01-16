<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentEducationDegree extends Model
{
    protected $table = 'student_education_degrees';

    //protected $primaryKey = 'dsa_id';

    protected $fillable = [
        'stream','medium','degree_class','effective_date','other_details',
        'stu_id','clg_id','cos_id','spc_id','seg_confirm_data'
    ];

    //public $timestamps = false;
}