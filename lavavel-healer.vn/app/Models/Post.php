<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    use HasFactory;
    // protected $table = 'postss';
    protected $fillable = ['title', 'content', 'user_id', 'votes'];


    function FeaturedImages()
    {
        return $this->hasOne('App\Models\FeaturedImages');
    }

    function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
