<?php

namespace App\Http\Controllers\toolsapp;

use App\Http\Controllers\Controller;
use App\Models\ToolsStatistikData;
use App\Http\Requests\StoreToolsStatistikDataRequest;
use App\Http\Requests\UpdateToolsStatistikDataRequest;

class ToolsStatistikDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.toolsapp.statistik_data.index');
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
    public function store(StoreToolsStatistikDataRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ToolsStatistikData $toolsStatistikData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ToolsStatistikData $toolsStatistikData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateToolsStatistikDataRequest $request, ToolsStatistikData $toolsStatistikData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ToolsStatistikData $toolsStatistikData)
    {
        //
    }
}
