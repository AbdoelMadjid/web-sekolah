<?php

namespace App\Http\Controllers\proses_kbm;

use App\Http\Controllers\Controller;
use App\Models\KbmSiswaPerKelas;
use App\Http\Requests\StoreKbmSiswaPerKelasRequest;
use App\Http\Requests\UpdateKbmSiswaPerKelasRequest;

class KbmSiswaPerKelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.proses_kbm.siswa_perkelas.index');
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
    public function store(StoreKbmSiswaPerKelasRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(KbmSiswaPerKelas $kbmSiswaPerKelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KbmSiswaPerKelas $kbmSiswaPerKelas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKbmSiswaPerKelasRequest $request, KbmSiswaPerKelas $kbmSiswaPerKelas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KbmSiswaPerKelas $kbmSiswaPerKelas)
    {
        //
    }
}
