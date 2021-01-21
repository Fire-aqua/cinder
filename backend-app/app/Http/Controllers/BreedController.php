<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Breed;

class BreedController extends Controller
{
    public function index()
    {
        $breeds = Breed::all();
        return view('cats.breeds', compact('breeds'));
    }

    public function create()
    {
        $breed = new Breed;
        return view('cats.edit_breed', compact('breed'));
    }

    public function store(Request $request)
    {
        $breed = new Breed;
        $breed->name = $request->name;
        $breed->save();
        return redirect('/breeds');
    }

    public function edit(Breed $breed)
    {
        return view('cats.edit_breed', compact('breed'));
    }

    public function update(Request $request, Breed $breed)
    {
        $breed->name = $request->name;
        $breed->save();
        return redirect('/breeds');
    }

    public function destroy(Breed $breed)
    {
        $breed->delete();
        return redirect('/breeds');
    }
}
