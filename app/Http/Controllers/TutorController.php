<?php

namespace App\Http\Controllers;

use App\Models\TutorModel;
use Illuminate\Http\Request;

class TutorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataTut = TutorModel::all();
        return view('crud.indextut', compact('dataTut'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crud.tambahtut');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dataTut= TutorModel::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('gambargaleri/', $request->file('foto')->getClientOriginalName());
            $dataTut->foto = $request->file('foto')->getClientOriginalName();
            $dataTut->save();
        }
        return redirect('tutor');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dataTut = TutorModel::find($id);
        return view('crud.edittut', compact('dataTut'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        TutorModel::find($id)->update($request->all());
        return redirect('tutor');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        TutorModel::find($id)->delete();
        return redirect('tutor');
    }
}
