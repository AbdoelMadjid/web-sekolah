<?php

namespace App\Http\Controllers\akademik;

use App\Http\Controllers\Controller;
use App\Models\AkGuruTataUsaha;
use App\Http\Requests\StoreAkGuruTataUsahaRequest;
use App\Http\Requests\UpdateAkGuruTataUsahaRequest;

class AkGuruTataUsahaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.akademik.guru_tata_usaha.index');
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
    public function store(StoreAkGuruTataUsahaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AkGuruTataUsaha $akGuruTataUsaha)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AkGuruTataUsaha $akGuruTataUsaha)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAkGuruTataUsahaRequest $request, AkGuruTataUsaha $akGuruTataUsaha)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AkGuruTataUsaha $akGuruTataUsaha)
    {
        //
    }
}
