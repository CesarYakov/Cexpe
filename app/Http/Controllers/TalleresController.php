<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TalleresController extends Controller
{
    public function talleres(){
        $talleres = [/*
            ['titulo' => 'Taller 01'],
            ['titulo' => 'Taller 02'],
            ['titulo' => 'Taller 03'],
            ['titulo' => 'Taller 04'],
            ['titulo' => 'Taller 05'],*/
        ];
        return view('talleres', compact('talleres'));
    }
}
