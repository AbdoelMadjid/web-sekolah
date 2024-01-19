<?php

namespace App\Http\Controllers\webapp;

use App\Http\Controllers\Controller;
use App\Models\WebAgendaKegiatan;
use App\Http\Requests\StoreWebAgendaKegiatanRequest;
use App\Http\Requests\UpdateWebAgendaKegiatanRequest;

class WebAgendaKegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.webapp.agenda.index');
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
    public function store(StoreWebAgendaKegiatanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(WebAgendaKegiatan $webAgendaKegiatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WebAgendaKegiatan $webAgendaKegiatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWebAgendaKegiatanRequest $request, WebAgendaKegiatan $webAgendaKegiatan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WebAgendaKegiatan $webAgendaKegiatan)
    {
        //
    }
}
