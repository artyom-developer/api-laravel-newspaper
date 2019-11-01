<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Post;
use App\Models\Theme;
use Log;

class NewspaperController extends Controller
{
    //
    public function index(){
      $post = Post::join('theme', 'theme.id', 'post.theme')
      ->get();
      return view('news/index',[
        'post' => $post
      ]);
      return view('news/index');
    }

    public function form(){
      $theme = Theme::get();
      return view('news/form',[
        'theme' => $theme
      ]);
    }

    public function create(Request $request)
    {

      $request->validate([
          'title' => 'required|max:255',
          'article' => 'required|max:2000',
          'theme' => 'required'
      ]);

      $file  = $request->file('image');
      $route = $file->store('post','public');

      $insert['title'] = $request->input("title");
      $insert['article'] = $request->input("article");
      $insert['theme'] = $request->input("theme");
      $insert['image'] = $route;

      $res = Post::create($insert);
      return redirect('news/index');
    }

}
