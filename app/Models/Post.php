<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'slug', 'desc', 'image', 'category_id', 'user_id'];


    public function comments()
    {
        return $this->hasMany(Comment::class, 'post_slug', 'slug');
    }

    public function category()
    {
        return $this->belongsTo(Categroy::class, 'category_id');
    }
}
