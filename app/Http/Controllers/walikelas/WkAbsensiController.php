<?php

namespace App\Http\Controllers\walikelas;

use App\Http\Controllers\Controller;
use App\Models\WkAbsensi;
use App\Http\Requests\StoreWkAbsensiRequest;
use App\Http\Requests\UpdateWkAbsensiRequest;

class WkAbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.walikelas.absensi.index');
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
    public function store(StoreWkAbsensiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(WkAbsensi $wkAbsensi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WkAbsensi $wkAbsensi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWkAbsensiRequest $request, WkAbsensi $wkAbsensi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WkAbsensi $wkAbsensi)
    {
        //
    }
}
