<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index() 
    {
        return view('profile');
    }

    public function saveUserData(Request $request) 
    {
        $user = User::find(Auth::user()->id);
        $user->fname = $request->fname;
        $user->birthday = $request->birthday;
        $user->save();
        return view('profile');
    }

    public function import(Request $request) 
    {        
        $f=$request->file();
        $f['avatar']->move(storage_path('app/public/avatars'), Auth::user()->id.'_avatar.jpg');            
        return redirect('/user');
    }
}
