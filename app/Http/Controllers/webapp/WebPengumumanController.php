<?php

namespace App\Http\Controllers\webapp;

use App\Http\Controllers\Controller;
use App\Models\WebPengumuman;
use App\Http\Requests\StoreWebPengumumanRequest;
use App\Http\Requests\UpdateWebPengumumanRequest;

class WebPengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.webapp.pengumuman.index');
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
    public function store(StoreWebPengumumanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(WebPengumuman $webPengumuman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WebPengumuman $webPengumuman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWebPengumumanRequest $request, WebPengumuman $webPengumuman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WebPengumuman $webPengumuman)
    {
        //
    }
}
