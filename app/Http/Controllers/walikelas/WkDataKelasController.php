<?php

namespace App\Http\Controllers\walikelas;

use App\Http\Controllers\Controller;
use App\Models\WkDataKelas;
use App\Http\Requests\StoreWkDataKelasRequest;
use App\Http\Requests\UpdateWkDataKelasRequest;

class WkDataKelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.walikelas.data_kelas.index');
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
    public function store(StoreWkDataKelasRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(WkDataKelas $wkDataKelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WkDataKelas $wkDataKelas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWkDataKelasRequest $request, WkDataKelas $wkDataKelas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WkDataKelas $wkDataKelas)
    {
        //
    }
}
