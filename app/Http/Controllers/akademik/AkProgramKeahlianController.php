<?php

namespace App\Http\Controllers\akademik;

use App\Http\Controllers\Controller;
use App\Models\AkProgramKeahlian;
use App\Http\Requests\StoreAkProgramKeahlianRequest;
use App\Http\Requests\UpdateAkProgramKeahlianRequest;

class AkProgramKeahlianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.akademik.program_keahlian.index');
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
    public function store(StoreAkProgramKeahlianRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AkProgramKeahlian $akProgramKeahlian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AkProgramKeahlian $akProgramKeahlian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAkProgramKeahlianRequest $request, AkProgramKeahlian $akProgramKeahlian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AkProgramKeahlian $akProgramKeahlian)
    {
        //
    }
}
