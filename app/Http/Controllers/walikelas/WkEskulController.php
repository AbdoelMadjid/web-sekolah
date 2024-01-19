<?php

namespace App\Http\Controllers\walikelas;

use App\Http\Controllers\Controller;
use App\Models\WkEskul;
use App\Http\Requests\StoreWkEskulRequest;
use App\Http\Requests\UpdateWkEskulRequest;

class WkEskulController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.walikelas.eskul.index');
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
    public function store(StoreWkEskulRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(WkEskul $wkEskul)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WkEskul $wkEskul)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWkEskulRequest $request, WkEskul $wkEskul)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WkEskul $wkEskul)
    {
        //
    }
}
