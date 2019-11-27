<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    protected $primaryKey = 'stu_id';

    protected $fillable = [
        'title','stu_name','sex','dob','nic',
        'stu_address','stu_telephone','stu_email','district','dsa_id',
        'deleted','user_data'
    ];
}