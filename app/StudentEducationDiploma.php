<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentEducationDiploma extends Model
{
    protected $table = 'student_education_diplomas';

    //protected $primaryKey = 'dsa_id';

    protected $fillable = [
        'medium','effective_date',
        'stu_id','clg_id','cos_id','sep_confirm_data'
    ];

    //public $timestamps = false;
}
