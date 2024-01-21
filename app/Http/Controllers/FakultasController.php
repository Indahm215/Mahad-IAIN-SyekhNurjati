<?php

namespace App\Http\Controllers;

use App\Models\FakultasModel;
use Illuminate\Http\Request;
// use mPDF;

class FakultasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataFak = FakultasModel::all();
        
        return view('crud.indexfak', compact('dataFak'));
    }

    // public function view_pdf()
    // {
    //   $mpdf = new mPDF();
    //   $mpdf->WriteHTML('<h1>Hello World</h1>');
    //   $mpdf-> Output(); 
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crud.tambahfak');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        FakultasModel::create($request->all());
        return redirect('fakultas');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.     */
    public function edit(string $id)
    {
        $dataFak = FakultasModel::find($id);
        return view('crud.editfak', compact('dataFak'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        FakultasModel::find($id)->update($request->all());
        return redirect('fakultas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        FakultasModel::find($id)->delete();
        return redirect('fakultas');
    }
}
