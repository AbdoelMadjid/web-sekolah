<?php

namespace App\Http\Controllers\akademik;

use App\Http\Controllers\Controller;
use App\Models\AkJabatanLain;
use App\Http\Requests\StoreAkJabatanLainRequest;
use App\Http\Requests\UpdateAkJabatanLainRequest;

class AkJabatanLainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.akademik.jabatan_lainnya.index');
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
    public function store(StoreAkJabatanLainRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AkJabatanLain $akJabatanLain)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AkJabatanLain $akJabatanLain)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAkJabatanLainRequest $request, AkJabatanLain $akJabatanLain)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AkJabatanLain $akJabatanLain)
    {
        //
    }
}
