<?php

namespace App\Http\Controllers\toolsapp;

use App\Http\Controllers\Controller;
use App\Models\ToolsImpor;
use App\Http\Requests\StoreToolsImporRequest;
use App\Http\Requests\UpdateToolsImporRequest;

class ToolsImporController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.toolsapp.ekspor_impor.impor.index');
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
    public function store(StoreToolsImporRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ToolsImpor $toolsImpor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ToolsImpor $toolsImpor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateToolsImporRequest $request, ToolsImpor $toolsImpor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ToolsImpor $toolsImpor)
    {
        //
    }
}
