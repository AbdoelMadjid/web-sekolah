<?php

namespace App\Http\Controllers\guru;

use App\Http\Controllers\Controller;
use App\Models\GuruDataKBM;
use App\Http\Requests\StoreGuruDataKBMRequest;
use App\Http\Requests\UpdateGuruDataKBMRequest;

class GuruDataKBMController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.guru_mapel.data_kbm.index');
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
    public function store(StoreGuruDataKBMRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(GuruDataKBM $guruDataKBM)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GuruDataKBM $guruDataKBM)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGuruDataKBMRequest $request, GuruDataKBM $guruDataKBM)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GuruDataKBM $guruDataKBM)
    {
        //
    }
}
