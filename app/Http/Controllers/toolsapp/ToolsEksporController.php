<?php

namespace App\Http\Controllers\toolsapp;

use App\Http\Controllers\Controller;
use App\Models\ToolsEkspor;
use App\Http\Requests\StoreToolsEksporRequest;
use App\Http\Requests\UpdateToolsEksporRequest;

class ToolsEksporController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.toolsapp.ekspor_impor.ekspor.index');
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
    public function store(StoreToolsEksporRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ToolsEkspor $toolsEkspor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ToolsEkspor $toolsEkspor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateToolsEksporRequest $request, ToolsEkspor $toolsEkspor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ToolsEkspor $toolsEkspor)
    {
        //
    }
}
