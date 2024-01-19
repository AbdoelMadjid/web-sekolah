<?php

namespace App\Http\Controllers\walikelas;

use App\Http\Controllers\Controller;
use App\Models\WkPrakerin;
use App\Http\Requests\StoreWkPrakerinRequest;
use App\Http\Requests\UpdateWkPrakerinRequest;

class WkPrakerinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.walikelas.prakerin.index');
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
    public function store(StoreWkPrakerinRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(WkPrakerin $wkPrakerin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WkPrakerin $wkPrakerin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWkPrakerinRequest $request, WkPrakerin $wkPrakerin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WkPrakerin $wkPrakerin)
    {
        //
    }
}
