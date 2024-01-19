<?php

namespace App\Http\Controllers\proses_kbm;

use App\Http\Controllers\Controller;
use App\Models\KbmRemedial;
use App\Http\Requests\StoreKbmRemedialRequest;
use App\Http\Requests\UpdateKbmRemedialRequest;

class KbmRemedialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.proses_kbm.kbm.kbm_remedial.index');
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
    public function store(StoreKbmRemedialRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(KbmRemedial $kbmRemedial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KbmRemedial $kbmRemedial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKbmRemedialRequest $request, KbmRemedial $kbmRemedial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KbmRemedial $kbmRemedial)
    {
        //
    }
}
