<?php

namespace App\Models;

use Conner\Tagging\Taggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    use Taggable;
    protected $fillable = ['user_id', 'title', 'body', 'image','white_tags'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
