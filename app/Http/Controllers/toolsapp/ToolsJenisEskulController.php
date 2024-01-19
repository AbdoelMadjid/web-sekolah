<?php

namespace App\Http\Controllers\toolsapp;

use App\Http\Controllers\Controller;
use App\Models\ToolsJenisEskul;
use App\Http\Requests\StoreToolsJenisEskulRequest;
use App\Http\Requests\UpdateToolsJenisEskulRequest;

class ToolsJenisEskulController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.toolsapp.data_master.jenis_eskul.index');
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
    public function store(StoreToolsJenisEskulRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ToolsJenisEskul $toolsJenisEskul)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ToolsJenisEskul $toolsJenisEskul)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateToolsJenisEskulRequest $request, ToolsJenisEskul $toolsJenisEskul)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ToolsJenisEskul $toolsJenisEskul)
    {
        //
    }
}
