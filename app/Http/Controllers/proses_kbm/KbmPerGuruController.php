<?php

namespace App\Http\Controllers\proses_kbm;

use App\Http\Controllers\Controller;
use App\Models\KbmPerGuru;
use App\Http\Requests\StoreKbmPerGuruRequest;
use App\Http\Requests\UpdateKbmPerGuruRequest;

class KbmPerGuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.proses_kbm.kbm.kbm_perguru.index');
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
    public function store(StoreKbmPerGuruRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(KbmPerGuru $kbmPerGuru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KbmPerGuru $kbmPerGuru)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKbmPerGuruRequest $request, KbmPerGuru $kbmPerGuru)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KbmPerGuru $kbmPerGuru)
    {
        //
    }
}
