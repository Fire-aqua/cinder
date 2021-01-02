<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Auth::user()->posts->load('tags');
        return view('posts', compact('posts'));
    }    

    public function getPost(Request $request, $id)
    {
        if ($id=="new") {
            $post = new Post;
        }
        else {
            $post = Post::find($id);
            if (empty($post))
            {
                return abort(404);
            }
        }
        return view('editpost', ['post'=>$post]);
    }

    public function savePost(Request $request)
    {
        $post = empty($request->id) ? new Post: Post::find($request->id);
        $post->title=$request->title;
        $post->body=$request->body;
        $post->user_id=Auth::user()->id;
        $post->save();
        return redirect('/posts');
    }
}
