<?php

namespace App\Http\Controllers\toolsapp;

use App\Http\Controllers\Controller;
use App\Models\ToolsProfilAplikasi;
use App\Http\Requests\StoreToolsProfilAplikasiRequest;
use App\Http\Requests\UpdateToolsProfilAplikasiRequest;

class ToolsProfilAplikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.toolsapp.profil_aplikasi.index');
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
    public function store(StoreToolsProfilAplikasiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ToolsProfilAplikasi $toolsProfilAplikasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ToolsProfilAplikasi $toolsProfilAplikasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateToolsProfilAplikasiRequest $request, ToolsProfilAplikasi $toolsProfilAplikasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ToolsProfilAplikasi $toolsProfilAplikasi)
    {
        //
    }
}
