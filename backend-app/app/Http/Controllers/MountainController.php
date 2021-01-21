<?php

namespace App\Http\Controllers;

use App\Models\Mountain;
use Illuminate\Http\Request;

class MountainController extends Controller
{
    public function index(Request $request)
    {
        $isIcy=$request->input('is_icy');
        $minHeight = (int) $request->input('min_height');
        $maxHeight = (int) $request->input('max_height');
        
        $mountains=Mountain::orderBy('name', 'asc')

        ->when($isIcy=="true", function ($query) {
            return $query->where('is_icy', true);
        }) 
        ->when($isIcy=="false", function ($query) {
            return $query->where('is_icy', false);
        })
        
        ->when($minHeight, fn($query)=> $query->where('height', '>=', $minHeight) )
        ->when($maxHeight, fn($query)=> $query->where('height', '<=', $maxHeight) )
        
        ->get();
        return view('file_mountains', compact('mountains', 'isIcy', 'minHeight', 'maxHeight'));
    }

    public function store(Request $request)
    {
        $mountain = new Mountain;
        $mountain->name = $request->name;
        $mountain->height = $request->height;
        $mountain->is_icy = $request->is_icy;
        $mountain->save();
        return redirect('/mountains');        
    }

    public function destroy(Request $request, $id)
    {
        Mountain::find($id)->delete();
        return redirect('/mountains');
    }
}