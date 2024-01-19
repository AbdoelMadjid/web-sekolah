<?php

namespace App\Http\Controllers\walikelas;

use App\Http\Controllers\Controller;
use App\Models\WkPrestasi;
use App\Http\Requests\StoreWkPrestasiRequest;
use App\Http\Requests\UpdateWkPrestasiRequest;

class WkPrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.walikelas.prestasi.index');
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
    public function store(StoreWkPrestasiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(WkPrestasi $wkPrestasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WkPrestasi $wkPrestasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWkPrestasiRequest $request, WkPrestasi $wkPrestasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WkPrestasi $wkPrestasi)
    {
        //
    }
}
