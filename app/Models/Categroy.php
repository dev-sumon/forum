<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categroy extends Model
{
    protected $fillable = ['title', 'slug'];



     public function posts()
    {
        return $this->hasMany(Post::class, 'category_id');
    }

}
