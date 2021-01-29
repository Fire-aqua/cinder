<?php

namespace App\Http\Controllers;

use App\Imports\MountainsImport;
use App\Models\Mountain;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class MountainController extends Controller
{
    public function index(Request $request)
    {
        $isIcy=$request->input('is_icy');
        $minHeight = (int) $request->input('min_height');
        $maxHeight = (int) $request->input('max_height');
        
        $mountains = Mountain::orderBy('name', 'asc')

        ->when($isIcy == "true", function ($query) {
            return $query->where('is_icy', true);
        }) 
        ->when($isIcy == "false", function ($query) {
            return $query->where('is_icy', false);
        })
        
        ->when($minHeight, fn($query) => $query->where('height', '>=', $minHeight) )
        ->when($maxHeight, fn($query) => $query->where('height', '<=', $maxHeight) )
        
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

    public function show() {
        $mountains = Mountain::all();
        return view('mountains_pdf', compact('mountains'));
      }

    public function createPDF() {
        $mountains = Mountain::all();
        view()->share('mountains', $mountains);
        $pdf = PDF::loadView('mountains_pdf', $mountains);
        return $pdf->download('pdf_file.pdf');
    }

    public function import() 
    {
        Excel::import(new MountainsImport, 'posts.xlsx');        
        return redirect('/posts');
    }
}