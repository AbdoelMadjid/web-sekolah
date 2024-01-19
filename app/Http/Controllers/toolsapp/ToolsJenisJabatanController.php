<?php

namespace App\Http\Controllers\toolsapp;

use App\Http\Controllers\Controller;
use App\Models\ToolsJenisJabatan;
use App\Http\Requests\StoreToolsJenisJabatanRequest;
use App\Http\Requests\UpdateToolsJenisJabatanRequest;

class ToolsJenisJabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.toolsapp.data_master.jenis_jabatan.index');
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
    public function store(StoreToolsJenisJabatanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ToolsJenisJabatan $toolsJenisJabatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ToolsJenisJabatan $toolsJenisJabatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateToolsJenisJabatanRequest $request, ToolsJenisJabatan $toolsJenisJabatan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ToolsJenisJabatan $toolsJenisJabatan)
    {
        //
    }
}
