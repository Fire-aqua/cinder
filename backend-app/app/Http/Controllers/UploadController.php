<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 

class UploadController extends Controller
{
    public function getForm()
    {
        return view('upload-form');
    }

    public function upload(Request $request)
    {
        foreach ($request->file() as $file) {
            foreach ($file as $f) {
                $f->move(storage_path('app/public'), $f->getClientOriginalName());
            }
        }
        return redirect('/')->with('Загрузка завершилась успешно');
    }
}

// https://web-programming.com.ua/zagruzka-fajlov-v-laravel/