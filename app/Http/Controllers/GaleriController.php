<?php

namespace App\Http\Controllers;

use App\Models\GaleriModel;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataGal = GaleriModel::all();
        return view('crud.indexgal', compact('dataGal'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crud.tambahgal');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $dataGal = GaleriModel::create($request->all());
        if($request->hasFile('gambar')){
            $request->file('gambar')->move('gambargaleri/', $request->file('gambar')->getClientOriginalName());
            $dataGal->gambar = $request->file('gambar')->getClientOriginalName();
            $dataGal->save();
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
        $dataGal = GaleriModel::find($id);
        return view('crud.editgal', compact('dataGal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        GaleriModel::find($id)->update($request->all());
        return redirect('galeri');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        GaleriModel::find($id)->delete();
        return redirect('galeri');
    }
}
