<?php

namespace App\Http\Controllers\guru;

use App\Http\Controllers\Controller;
use App\Models\GuruAdministrasi;
use App\Http\Requests\StoreGuruAdministrasiRequest;
use App\Http\Requests\UpdateGuruAdministrasiRequest;

class GuruAdministrasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.guru_mapel.administrasi.index');
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
    public function store(StoreGuruAdministrasiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(GuruAdministrasi $guruAdministrasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GuruAdministrasi $guruAdministrasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGuruAdministrasiRequest $request, GuruAdministrasi $guruAdministrasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GuruAdministrasi $guruAdministrasi)
    {
        //
    }
}
