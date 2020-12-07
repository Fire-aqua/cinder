<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function index() {
        return view('welcome');
    }
    
    public function formPage() {
        return view('post-form');
    }

    public function addPost(Request $request) {
        $post = new Post;
        $post->name = $request->name;
        $post->content = $request->content;
        $post->save();
        return redirect('/');
    }


    public function kurlyk(Request $request) {
        // $post = new Post;
        // $post->name = 'Наши новости2';
        // $post->content = '';
        // $post->save();

        // $post = Post::where('name', 'Наши новости2')->first();
        // dd($post);
        dd();
        return view('kurlyk');
    }

}