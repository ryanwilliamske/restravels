<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
    public $table = 'blogs';
    public $primaryKey = 'blog_id';
    public $timestamps = true;

}
