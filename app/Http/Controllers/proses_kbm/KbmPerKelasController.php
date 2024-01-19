<?php

namespace App\Http\Controllers\proses_kbm;

use App\Http\Controllers\Controller;
use App\Models\KbmPerKelas;
use App\Http\Requests\StoreKbmPerKelasRequest;
use App\Http\Requests\UpdateKbmPerKelasRequest;

class KbmPerKelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.proses_kbm.kbm.kbm_perkelas.index');
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
    public function store(StoreKbmPerKelasRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(KbmPerKelas $kbmPerKelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KbmPerKelas $kbmPerKelas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKbmPerKelasRequest $request, KbmPerKelas $kbmPerKelas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KbmPerKelas $kbmPerKelas)
    {
        //
    }
}
