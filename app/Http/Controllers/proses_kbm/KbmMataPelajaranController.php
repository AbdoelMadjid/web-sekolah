<?php

namespace App\Http\Controllers\proses_kbm;

use App\Http\Controllers\Controller;
use App\Models\KbmMataPelajaran;
use App\Http\Requests\StoreKbmMataPelajaranRequest;
use App\Http\Requests\UpdateKbmMataPelajaranRequest;

class KbmMataPelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.proses_kbm.mata_pelajaran.index');
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
    public function store(StoreKbmMataPelajaranRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(KbmMataPelajaran $kbmMataPelajaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KbmMataPelajaran $kbmMataPelajaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKbmMataPelajaranRequest $request, KbmMataPelajaran $kbmMataPelajaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KbmMataPelajaran $kbmMataPelajaran)
    {
        //
    }
}
