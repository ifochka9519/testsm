<?php

namespace App\Http\Controllers;

use App\StructB;
use Illuminate\Http\Request;

class StructBController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $structs = StructB::all();

        return view('structB.index')->with('structs', $structs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('structB.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'field_1'=>'required',
        ]);
        $structB = new StructB([
            'field_1' => $request->get('field_1')
        ]);
        $structB->save();
        return redirect('/structB')->with('success', 'StructB has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $structB = StructB::find($id);

        return view('structB.edit', compact('structB'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'field_1'=>'required',
        ]);

        $structB = StructB::find($id);

        $structB->field_1 = $request->get('field_1');
        $structB->save();
        return redirect('/structB')->with('success', 'StructB has been updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $structB = StructB::find($id);

        $structB->structsA()->delete();

        $structB->delete();
        return redirect('/structB')->with('success', 'StructB has been deleted Successfully');
    }
}
