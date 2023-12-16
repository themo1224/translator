<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class translate extends Controller
{
    public function index()
    {
        return view('lang');
    }

    public function change(Request $request)
    {
       App::setLocale($request->lang);
       session()->put('local', $request->lang);
       return redirect()->back();
    }
}
