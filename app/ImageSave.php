<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageSave extends Model
{
    protected $table = 'image_saves';

    protected $primaryKey = 'img_id';

    protected $fillable = [
        'img_type','img_date','img_url','ref_no','extension'
    ];
}
