<?php

namespace App\Http\Controllers;

use App\Models\Good;
use Illuminate\Http\Request;

class GoodController extends Controller
{
    public function index()
    {
        $goods = Good::all();
        return view('goods', compact('goods'));
    } 

    public function destroy(Request $request, $id)
    {
        Good::find($id)->delete();
        return redirect('/goods');
    }

    public function show(Request $request, $id)
    {
        $good = Good::find($id);
        return response()->json($good->toArray());
    }

    public function update(Request $request)
    {
        $good = Good::find($request->id);
        $good->name = $request->name;
        $good->size = $request->size;
        $good->presence = $request->presence;
        $good->sells_since = $request->sells_since;
        $good->save();
        return response()->json($good->toArray());
    }

    public function create()
    {
        $good = new Good;
        return response()->json($good->toArray());
    }

    public function store(Request $request)
    {
        $good = new Good;
        $good->name = $request->name;
        $good->size = $request->size;
        $good->presence = $request->presence;
        $good->sells_since = $request->sells_since;
        $good->save();
        return response()->json($good->toArray());
    }
}

