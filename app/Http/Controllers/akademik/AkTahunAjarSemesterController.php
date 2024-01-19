<?php

namespace App\Http\Controllers\akademik;

use App\Http\Controllers\Controller;
use App\Models\AkTahunAjarSemester;
use App\Http\Requests\StoreAkTahunAjarSemesterRequest;
use App\Http\Requests\UpdateAkTahunAjarSemesterRequest;

class AkTahunAjarSemesterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.akademik.tahunajar_semester.index');
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
    public function store(StoreAkTahunAjarSemesterRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AkTahunAjarSemester $akTahunAjarSemester)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AkTahunAjarSemester $akTahunAjarSemester)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAkTahunAjarSemesterRequest $request, AkTahunAjarSemester $akTahunAjarSemester)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AkTahunAjarSemester $akTahunAjarSemester)
    {
        //
    }
}
