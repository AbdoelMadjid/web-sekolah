<?php

namespace App\Http\Controllers\walikelas;

use App\Http\Controllers\Controller;
use App\Models\WkRapor;
use App\Http\Requests\StoreWkRaporRequest;
use App\Http\Requests\UpdateWkRaporRequest;

class WkRaporController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.walikelas.rapor.index');
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
    public function store(StoreWkRaporRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(WkRapor $wkRapor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WkRapor $wkRapor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWkRaporRequest $request, WkRapor $wkRapor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WkRapor $wkRapor)
    {
        //
    }
}
