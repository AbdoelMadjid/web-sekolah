<?php

namespace App\Http\Controllers\proses_kbm;

use App\Http\Controllers\Controller;
use App\Models\KbmPenilaian;
use App\Http\Requests\StoreKbmPenilaianRequest;
use App\Http\Requests\UpdateKbmPenilaianRequest;

class KbmPenilaianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.proses_kbm.kbm.kbm_penilaian.index');
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
    public function store(StoreKbmPenilaianRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(KbmPenilaian $kbmPenilaian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KbmPenilaian $kbmPenilaian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKbmPenilaianRequest $request, KbmPenilaian $kbmPenilaian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KbmPenilaian $kbmPenilaian)
    {
        //
    }
}
