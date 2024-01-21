<?php

namespace App\Http\Controllers;

use App\Models\BlogModel;
use App\Models\FaqModel;
use App\Models\GaleriModel;
use App\Models\TutorModel;
use App\Models\MahaguruModel;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataBlog = BlogModel::all();
        $dataGal = GaleriModel::all();
        $dataFaq = FaqModel::all();
        $dataTut = TutorModel::all();
        $dataGur = MahaguruModel::all();
        return view('user.dashboard', compact('dataGal', 'dataFaq', 'dataBlog','dataTut', 'dataGur'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
