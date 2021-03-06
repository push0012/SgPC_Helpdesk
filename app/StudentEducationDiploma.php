<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentEducationDiploma extends Model
{
    protected $table = 'student_education_diplomas';

    //protected $primaryKey = 'dsa_id';

    protected $fillable = [
        'medium','effective_date','other_details',
        'stu_id','clg_id','cos_title','sep_confirm_data'
    ];

    //public $timestamps = false;
}
