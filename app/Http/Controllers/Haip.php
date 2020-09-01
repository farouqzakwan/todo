<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Haip extends Controller
{
    public function aa()
    {
        $q = 'value q';
        $m = 'value m';

         return view('jjj',compact('q','m'));        
    }

    public function bb(Request $request)
    {
        dd($request->all());
        $q = 'value q';
        $m = 'value m';

         return view('jjj',compact('q','m'));        
    }
}
