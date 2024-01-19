<?php

namespace App\Http\Controllers\akademik;

use App\Http\Controllers\Controller;
use App\Models\AkKepalaSekolah;
use App\Http\Requests\StoreAkKepalaSekolahRequest;
use App\Http\Requests\UpdateAkKepalaSekolahRequest;

class AkKepalaSekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.akademik.kepala_sekolah.index');
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
    public function store(StoreAkKepalaSekolahRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AkKepalaSekolah $akKepalaSekolah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AkKepalaSekolah $akKepalaSekolah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAkKepalaSekolahRequest $request, AkKepalaSekolah $akKepalaSekolah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AkKepalaSekolah $akKepalaSekolah)
    {
        //
    }
}
