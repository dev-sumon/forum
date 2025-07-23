<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['title', 'email', 'comment', 'post_slug', 'parent_id'];
    public function post()
    {
        return $this->belongsTo(Post::class, 'post_slug', 'slug');
    }

    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id', 'id')->latest();
    }

}
