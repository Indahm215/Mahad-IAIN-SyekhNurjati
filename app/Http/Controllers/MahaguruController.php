<?php

namespace App\Http\Controllers;

use App\Models\MahaguruModel;
use Illuminate\Http\Request;

class MahaguruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataGur = MahaguruModel::all();
        return view('crud.indexgur', compact('dataGur'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crud.tambahgur');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dataGur = MahaguruModel::create($request->all());
        if($request->hasFile('gambar')){
            $request->file('gambar')->move('gambargaleri/', $request->file('gambar')->getClientOriginalName());
            $dataGur->gambar = $request->file('gambar')->getClientOriginalName();
            $dataGur->save();
        }
        return redirect('galeri');
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
        $dataGur = MahaguruModel::find($id);
        return view('crud.editgur', compact('dataGur'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        MahaguruModel::find($id)->update($request->all());
        return redirect('mahaguru');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        MahaguruModel::find($id)->delete();
        return redirect('mahaguru');
    }
}
