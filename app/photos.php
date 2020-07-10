<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class photos extends Model
{
    protected $table = "tb_photos";

    protected $primaryKey = 'photo_id';

    protected $fillable = ['photo_date', 'photo_title', 'photo_text', 'photo_upload', 'post_id'];
}
