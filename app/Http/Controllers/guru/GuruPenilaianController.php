<?php

namespace App\Http\Controllers\guru;

use App\Http\Controllers\Controller;
use App\Models\GuruPenilaian;
use App\Http\Requests\StoreGuruPenilaianRequest;
use App\Http\Requests\UpdateGuruPenilaianRequest;

class GuruPenilaianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.guru_mapel.proses_kbm.penilaian.index');
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
    public function store(StoreGuruPenilaianRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(GuruPenilaian $guruPenilaian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GuruPenilaian $guruPenilaian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGuruPenilaianRequest $request, GuruPenilaian $guruPenilaian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GuruPenilaian $guruPenilaian)
    {
        //
    }
}
