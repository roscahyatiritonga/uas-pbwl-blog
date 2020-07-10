<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = "tb_category";

    protected $primaryKey = 'category_id';

    protected $fillable = ['category_name', 'category_text'];
}
