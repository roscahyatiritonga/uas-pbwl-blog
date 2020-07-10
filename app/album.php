<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class album extends Model
{
    protected $table = "tb_album";

    protected $primaryKey = 'album_id';

    protected $fillable = ['album_name', 'album_text', 'photo_id'];
}
