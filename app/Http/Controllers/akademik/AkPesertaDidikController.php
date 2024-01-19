<?php

namespace App\Http\Controllers\akademik;

use App\Http\Controllers\Controller;
use App\Models\AkPesertaDidik;
use App\Http\Requests\StoreAkPesertaDidikRequest;
use App\Http\Requests\UpdateAkPesertaDidikRequest;

class AkPesertaDidikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.akademik.peserta_didik.index');
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
    public function store(StoreAkPesertaDidikRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AkPesertaDidik $akPesertaDidik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AkPesertaDidik $akPesertaDidik)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAkPesertaDidikRequest $request, AkPesertaDidik $akPesertaDidik)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AkPesertaDidik $akPesertaDidik)
    {
        //
    }
}
