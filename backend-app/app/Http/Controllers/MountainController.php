<?php

namespace App\Http\Controllers;

use App\Models\Mountain;
use Illuminate\Http\Request;

class MountainController extends Controller
{
    public function index(Request $request)
    {
        $mountains=Mountain::orderBy('name', 'desc')
        ->get();
        return view('mountains', [
            'mountainsArray' => $mountains
            ]);
    }
}
