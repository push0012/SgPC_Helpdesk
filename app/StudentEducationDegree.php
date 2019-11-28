<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentEducationDegree extends Model
{
    protected $table = 'student_education_degrees';

    //protected $primaryKey = 'dsa_id';

    protected $fillable = [
        'medium','digree_type','digree_class','effective_date',
        'stu_id','clg_id','cos_id'
    ];

    public $timestamps = false;
}