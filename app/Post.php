<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // this line allows us to use the format function
    //protected $dates = ['created_at'];

    //This function makes the relation between post and category so a post belongs to
    // a catgory
    public function catgory()
    {
        return $this->belongsTo(Category::class);
    }
}
