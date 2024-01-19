<?php

namespace App\Http\Controllers\bpbk;

use App\Http\Controllers\Controller;
use App\Models\BimbinganKarir;
use App\Http\Requests\StoreBimbinganKarirRequest;
use App\Http\Requests\UpdateBimbinganKarirRequest;

class BimbinganKarirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.bpbk.index');
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
    public function store(StoreBimbinganKarirRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(BimbinganKarir $bimbinganKarir)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BimbinganKarir $bimbinganKarir)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBimbinganKarirRequest $request, BimbinganKarir $bimbinganKarir)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BimbinganKarir $bimbinganKarir)
    {
        //
    }
}
