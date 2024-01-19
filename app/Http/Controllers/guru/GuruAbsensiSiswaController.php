<?php

namespace App\Http\Controllers\guru;

use App\Http\Controllers\Controller;
use App\Models\GuruAbsensiSiswa;
use App\Http\Requests\StoreGuruAbsensiSiswaRequest;
use App\Http\Requests\UpdateGuruAbsensiSiswaRequest;

class GuruAbsensiSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.guru_mapel.proses_kbm.absensi.index');
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
    public function store(StoreGuruAbsensiSiswaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(GuruAbsensiSiswa $guruAbsensiSiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GuruAbsensiSiswa $guruAbsensiSiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGuruAbsensiSiswaRequest $request, GuruAbsensiSiswa $guruAbsensiSiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GuruAbsensiSiswa $guruAbsensiSiswa)
    {
        //
    }
}
