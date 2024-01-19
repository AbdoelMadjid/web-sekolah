<?php

namespace App\Http\Controllers\akademik;

use App\Http\Controllers\Controller;
use App\Models\AkWakilKepsek;
use App\Http\Requests\StoreAkWakilKepsekRequest;
use App\Http\Requests\UpdateAkWakilKepsekRequest;

class AkWakilKepsekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.akademik.wakil_kepsek.index');
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
    public function store(StoreAkWakilKepsekRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AkWakilKepsek $akWakilKepsek)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AkWakilKepsek $akWakilKepsek)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAkWakilKepsekRequest $request, AkWakilKepsek $akWakilKepsek)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AkWakilKepsek $akWakilKepsek)
    {
        //
    }
}
