<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageSave extends Model
{
    protected $table = 'image_saves';

    protected $primaryKey = 'img_id';

    protected $fillable = [
        'img_url','stu_id','clg_id','cos_id','spc_id'
    ];
}
