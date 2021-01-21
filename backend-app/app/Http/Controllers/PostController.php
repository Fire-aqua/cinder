<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\Tag;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all()->load('tags');
        return view('posts', compact('posts'));
    }    

    public function create()
    {
        $post = new Post;
        $tags = Tag::all();
        return view('editpost', compact('post', 'tags'));
    }

    public function store(Request $request)
    {
        $post = new Post;
        $post->title=$request->title;
        $post->body=$request->body;
        $post->user_id=Auth::user()->id;
        $post->save();
        $post->tags()->sync($request->tags);
        return response()->json($post->toArray());
    }

    public function edit(Request $request, $id)
    {
        $post = Post::find($id);
        if (empty($post))
        {
            return abort(404);
        }
        $tags = Tag::all();
        return view('editpost', compact('post', 'tags'));
    }

    public function update(Request $request)
    {
        $post = Post::find($request->id);
        $post->title=$request->title;
        $post->body=$request->body;
        $post->user_id=Auth::user()->id;
        $post->save();
        $post->tags()->sync($request->tags);
        return response()->json($post->toArray());
    }

    public function destroy(Request $request, $id)
    {
        Post::find($id)->delete();
        return redirect('/posts');
    }
} 
