<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $table = "tb_post";

    protected $primaryKey = 'post_id';

    protected $fillable = ['post_date', 'post_slug', 'post_title', 'post_text', 'category_id'];
}
