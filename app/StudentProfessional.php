<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentProfessional extends Model
{
    protected $table = 'student_professionals';

    //protected $primaryKey = 'dsa_id';

    protected $fillable = [
        'job_availability','job_sector','job_preference','it_skill','it_skill_detail','extra_activity',
        'stu_id','sp_confirm_data'
    ];

    //public $timestamps = false;
}