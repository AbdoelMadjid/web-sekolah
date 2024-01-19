<?php

namespace App\Http\Controllers\walikelas;

use App\Http\Controllers\Controller;
use App\Models\WkCatatan;
use App\Http\Requests\StoreWkCatatanRequest;
use App\Http\Requests\UpdateWkCatatanRequest;

class WkCatatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.walikelas.catatan.index');
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
    public function store(StoreWkCatatanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(WkCatatan $wkCatatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WkCatatan $wkCatatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWkCatatanRequest $request, WkCatatan $wkCatatan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WkCatatan $wkCatatan)
    {
        //
    }
}
