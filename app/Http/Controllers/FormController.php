<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function directoryForm ()
    {
        return view('pages.directory');
    }

    public function postHotel (Request $request)
    {
        dd($request);
    }
}
