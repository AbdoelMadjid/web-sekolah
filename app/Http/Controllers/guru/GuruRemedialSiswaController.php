<?php

namespace App\Http\Controllers\guru;

use App\Http\Controllers\Controller;
use App\Models\GuruRemedialSiswa;
use App\Http\Requests\StoreGuruRemedialSiswaRequest;
use App\Http\Requests\UpdateGuruRemedialSiswaRequest;

class GuruRemedialSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.guru_mapel.proses_kbm.ajuan_remedial.index');
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
    public function store(StoreGuruRemedialSiswaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(GuruRemedialSiswa $guruRemedialSiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GuruRemedialSiswa $guruRemedialSiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGuruRemedialSiswaRequest $request, GuruRemedialSiswa $guruRemedialSiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GuruRemedialSiswa $guruRemedialSiswa)
    {
        //
    }
}
