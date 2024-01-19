<?php

namespace App\Http\Controllers\guru;

use App\Http\Controllers\Controller;
use App\Models\GuruArsip;
use App\Http\Requests\StoreGuruArsipRequest;
use App\Http\Requests\UpdateGuruArsipRequest;

class GuruArsipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.guru_mapel.proses_kbm.arsip_nilai.index');
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
    public function store(StoreGuruArsipRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(GuruArsip $guruArsip)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GuruArsip $guruArsip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGuruArsipRequest $request, GuruArsip $guruArsip)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GuruArsip $guruArsip)
    {
        //
    }
}
