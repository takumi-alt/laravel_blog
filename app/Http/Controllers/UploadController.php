<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    //
    public function index()
    {
        return view('admin/img');
    }

    public function store(Request $request)
    {
        $file_name = $request->file('file')->getClientOriginalName();
        $request->file('file')->storeAs('public', $file_name);

        return view('admin/img');
    }
}