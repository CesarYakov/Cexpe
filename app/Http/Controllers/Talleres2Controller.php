<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Talleres2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $talleres=[
            ['titulo'=>'Danza'],
            ['titulo'=>'Baile'],
            ['titulo'=>'Oratoria'],
            ['titulo'=>'Liderazgo'],
            ['titulo'=>'Canto'],
        ];
        return view('talleres',compact('talleres'));
}
}
