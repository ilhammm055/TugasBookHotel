<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mahasiswa634Controller extends Controller
{
    public function showForm(Request $request)
    {

        $data = $request->isMethod('post') ? $request->all() : null;
        return view('form634', compact('data'));
    }

    public function submitForm(Request $request)
    {
        $data = $request->all();
        return view('form634', compact('data'));
    }
}
