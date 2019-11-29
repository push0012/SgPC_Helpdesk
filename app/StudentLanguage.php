<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentLanguage extends Model
{
    protected $table = 'student_languages';

    //protected $primaryKey = 'dsa_id';

    protected $fillable = [
        'language_name','write_skill','read_skill','speech_skill',
        'stu_id','sl_confirm_data'
    ];

    //public $timestamps = false;
}