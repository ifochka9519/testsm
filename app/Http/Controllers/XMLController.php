<?php

namespace App\Http\Controllers;

use App\StructA;
use App\StructB;

class XMLController extends Controller
{
    public function indexA()
    {
        $structsA = StructA::all();

        return response()->view('xml.structA', compact('structsA'))->withHeaders([
            'Content-Type' => 'text/xml'
        ]);
    }

    public function indexB()
    {
        $structsB = StructB::all();

        return response()->view('xml.structB', compact('structsB'))->withHeaders([
            'Content-Type' => 'text/xml'
        ]);
    }
}
