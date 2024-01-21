<?php

namespace App\Http\Controllers;

use App\Models\BlogModel;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataBlog = BlogModel::all();
        return view('crud.indexblog', compact('dataBlog'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crud.tambahblog');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $dataBlog = BlogModel::create($request->all());
      if($request->hasFile('gambar')){
        $request->file('gambar')->move('gambargaleri/', $request->file('gambar')->getClientOriginalName());
        $dataBlog->gambar = $request->file('gambar')->getClientOriginalName();
        $dataBlog->save();
      }
      return redirect('blog');
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
      $dataBlog = BlogModel::find($id);
      return view('crud.editBlog', compact('dataBlog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
      BlogModel::find($id)-> update($request->all());
      return redirect('blog');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      BlogModel::find($id)->delete();
      return redirect('blog');
    }
}
