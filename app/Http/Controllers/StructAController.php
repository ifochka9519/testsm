<?php

namespace App\Http\Controllers;

use App\StructA;
use App\StructB;
use Illuminate\Http\Request;

class StructAController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $structs = StructA::all();

        return view('structA.index')->with('structs', $structs);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $structsB = StructB::all('id');

        return view('structA.create')->with('structsB', $structsB);
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
            'name'=>'required',
            'onwer_id' => 'required',
        ]);
        $structA = new StructA([
            'name' => $request->get('name'),
            'onwer_id' => $request->get('onwer_id')
        ]);
        $structA->save();
        return redirect('/structA')->with('success', 'StructA has been added');
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
        $structA = StructA::find($id);
        $structsB = StructB::all('id');

        return view('structA.edit')->with(['structA'=>$structA, 'structsB'=>$structsB ]);
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
            'name'=>'required',
            'onwer_id' => 'required',
        ]);

        $structA = StructA::find($id);
        $structA->name = $request->get('name');
        $structA->onwer_id = $request->get('onwer_id');

        $structA->save();
        return redirect('/structA')->with('success', 'StructA has been updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $structA = StructA::find($id);

        $structA->delete();
        return redirect('/structA')->with('success', 'StructA has been deleted Successfully');
    }
}
