<?php

namespace App\Http\Controllers\guru;

use App\Http\Controllers\Controller;
use App\Models\GuruCPTP;
use App\Http\Requests\StoreGuruCPTPRequest;
use App\Http\Requests\UpdateGuruCPTPRequest;

class GuruCPTPController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.guru_mapel.cp_tp.index');
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
    public function store(StoreGuruCPTPRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(GuruCPTP $guruCPTP)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GuruCPTP $guruCPTP)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGuruCPTPRequest $request, GuruCPTP $guruCPTP)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GuruCPTP $guruCPTP)
    {
        //
    }
}
