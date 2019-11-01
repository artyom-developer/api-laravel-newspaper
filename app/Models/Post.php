<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table = "post";

    protected $fillable = [
      'title',
      'article',
      'image',
      'theme'
    ];

    public function theme()
    {
      return $this->belongsTo('App\Models\Theme', 'theme', 'id');
    }
    // public $timestamps = false;
}
