<?php

namespace App\Http\Controllers\proses_kbm;

use App\Http\Controllers\Controller;
use App\Models\KbmCPTP;
use App\Http\Requests\StoreKbmCPTPRequest;
use App\Http\Requests\UpdateKbmCPTPRequest;

class KbmCPTPController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.proses_kbm.cptp.index');
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
    public function store(StoreKbmCPTPRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(KbmCPTP $kbmCPTP)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KbmCPTP $kbmCPTP)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKbmCPTPRequest $request, KbmCPTP $kbmCPTP)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KbmCPTP $kbmCPTP)
    {
        //
    }
}
