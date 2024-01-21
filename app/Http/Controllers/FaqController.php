<?php

namespace App\Http\Controllers;

use App\Models\FakultasModel;
use App\Models\FaqModel;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataFaq = FaqModel::all();
        return view('crud.indexfaq', compact('dataFaq'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crud.tambahfaq');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        FaqModel::create($request->all());
        return redirect('/web#faq');
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
        $dataFaq = FaqModel::find($id);
        return view('crud.editfaq', compact('dataFaq'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        FaqModel::find($id)->update($request->all());
        return redirect('faq');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        FaqModel::find($id)->delete();
        return redirect('faq');
    }
}
