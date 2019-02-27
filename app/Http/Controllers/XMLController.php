<?php

namespace App\Http\Controllers;

use App\StructA;
use App\StructB;
use Illuminate\Http\Request;

class XMLController extends Controller
{
    public function indexA()
    {
        $structsA = StructA::all();
        return view('xml.structA')->with('structsA', $structsA);
    }

    public function indexB()
    {
        $structsB = StructB::all();
        return view('xml.structB')->with('structsB', $structsB);
    }
}
