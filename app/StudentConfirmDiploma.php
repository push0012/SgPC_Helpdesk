<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentConfirmDiploma extends Model
{
    protected $table = 'student_confirm_diplomas';

    //protected $primaryKey = 'dsa_id';

    protected $fillable = [
        'diploma_reg_no','reg_confirm_dip',
        'stu_id','clg_id','deleted','user_data'
    ];
}
