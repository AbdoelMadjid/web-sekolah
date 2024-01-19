<?php

namespace App\Http\Controllers\akademik;

use App\Http\Controllers\Controller;
use App\Models\AkWaliKelas;
use App\Http\Requests\StoreAkWaliKelasRequest;
use App\Http\Requests\UpdateAkWaliKelasRequest;

class AkWaliKelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.akademik.wali_kelas.index');
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
    public function store(StoreAkWaliKelasRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AkWaliKelas $akWaliKelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AkWaliKelas $akWaliKelas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAkWaliKelasRequest $request, AkWaliKelas $akWaliKelas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AkWaliKelas $akWaliKelas)
    {
        //
    }
}
