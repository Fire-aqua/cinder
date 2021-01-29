<?php

namespace App\Http\Controllers;

use App\Exports\CatsExport;
use App\Models\Breed;
use Illuminate\Http\Request;
use App\Models\Cat;
use Maatwebsite\Excel\Facades\Excel;

class CatController extends Controller
{
    public function index() //получение списка, get
    {
        $cats = Cat::all()->load('breed');
        return view('cats.cats', compact('cats'));
    }

    public function create() //создание, get
    {
        $cat = new Cat;
        $breeds = Breed::all();
        return view('cats.edit_cat', compact('cat', 'breeds'));
    }

    public function store(Request $request) //сохранение нового объекта, post
    {
        $cat = new Cat;
        $cat->name = $request->name;
        $cat->age = $request->age;
        $cat->breed_id = $request->breed_id;
        $cat->save();
        return redirect('/cats');
    }
    
    public function edit(Cat $cat) // получение страницы редактирования, get
    {
        $breeds = Breed::all();
        return view('cats.edit_cat', compact('cat', 'breeds'));
    }
    
    public function update(Request $request, Cat $cat) //сохранение отредактированного объекта, put
    {
        $cat->name = $request->name;
        $cat->age = $request->age;
        $cat->breed_id = $request->breed_id;
        $cat->save();
        return redirect('/cats');
    }

    public function destroy(Cat $cat) //удаление объекта, delete
    {
        $cat->delete();
        return redirect('/cats');
    }

    public function export() 
    {
        return Excel::download(new CatsExport, 'cats.xlsx');
    }

}
