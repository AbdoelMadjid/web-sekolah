<?php

namespace App\Http\Controllers\webapp;

use App\Http\Controllers\Controller;
use App\Models\WebKesiswaan;
use App\Http\Requests\StoreWebKesiswaanRequest;
use App\Http\Requests\UpdateWebKesiswaanRequest;

class WebKesiswaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.webapp.kesiswaan.index');
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
    public function store(StoreWebKesiswaanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(WebKesiswaan $webKesiswaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WebKesiswaan $webKesiswaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWebKesiswaanRequest $request, WebKesiswaan $webKesiswaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WebKesiswaan $webKesiswaan)
    {
        //
    }
}
