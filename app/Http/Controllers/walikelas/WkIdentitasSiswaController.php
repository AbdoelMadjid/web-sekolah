<?php

namespace App\Http\Controllers\walikelas;

use App\Http\Controllers\Controller;
use App\Models\WkIdentitasSiswa;
use App\Http\Requests\StoreWkIdentitasSiswaRequest;
use App\Http\Requests\UpdateWkIdentitasSiswaRequest;

class WkIdentitasSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.walikelas.identitas_siswa.index');
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
    public function store(StoreWkIdentitasSiswaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(WkIdentitasSiswa $wkIdentitasSiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WkIdentitasSiswa $wkIdentitasSiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWkIdentitasSiswaRequest $request, WkIdentitasSiswa $wkIdentitasSiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WkIdentitasSiswa $wkIdentitasSiswa)
    {
        //
    }
}
