<?php

namespace App\Http\Controllers\proses_kbm;

use App\Http\Controllers\Controller;
use App\Models\KbmBagiJamNgajar;
use App\Http\Requests\StoreKbmBagiJamNgajarRequest;
use App\Http\Requests\UpdateKbmBagiJamNgajarRequest;

class KbmBagiJamNgajarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.proses_kbm.bagi_jamngajar.index');
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
    public function store(StoreKbmBagiJamNgajarRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(KbmBagiJamNgajar $kbmBagiJamNgajar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KbmBagiJamNgajar $kbmBagiJamNgajar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKbmBagiJamNgajarRequest $request, KbmBagiJamNgajar $kbmBagiJamNgajar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KbmBagiJamNgajar $kbmBagiJamNgajar)
    {
        //
    }
}
