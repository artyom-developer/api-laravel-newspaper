<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Theme;

class NewsController extends Controller
{
    //
    public function api(){
     $response['news']  = Post::join('theme', 'theme.id', 'post.theme')->get();
     $response['theme'] = Theme::get();
     $response['banner'] = Post::join('theme', 'theme.id', 'post.theme')->limit(3)->inRandomOrder()->get();
     return $response;
   }
}
