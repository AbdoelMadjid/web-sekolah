<?php

namespace App\Http\Controllers\toolsapp;

use App\Http\Controllers\Controller;
use App\Models\ToolsOpsiAplikasi;
use App\Http\Requests\StoreToolsOpsiAplikasiRequest;
use App\Http\Requests\UpdateToolsOpsiAplikasiRequest;

class ToolsOpsiAplikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.toolsapp.opsi_aplikasi.index');
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
    public function store(StoreToolsOpsiAplikasiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ToolsOpsiAplikasi $toolsOpsiAplikasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ToolsOpsiAplikasi $toolsOpsiAplikasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateToolsOpsiAplikasiRequest $request, ToolsOpsiAplikasi $toolsOpsiAplikasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ToolsOpsiAplikasi $toolsOpsiAplikasi)
    {
        //
    }
}
