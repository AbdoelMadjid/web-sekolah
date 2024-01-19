<?php

namespace App\Http\Controllers\toolsapp;

use App\Http\Controllers\Controller;
use App\Models\ToolsManajemenUsers;
use App\Http\Requests\StoreToolsManajemenUsersRequest;
use App\Http\Requests\UpdateToolsManajemenUsersRequest;

class ToolsManajemenUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.toolsapp.manajemen_user.index');
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
    public function store(StoreToolsManajemenUsersRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ToolsManajemenUsers $toolsManajemenUsers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ToolsManajemenUsers $toolsManajemenUsers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateToolsManajemenUsersRequest $request, ToolsManajemenUsers $toolsManajemenUsers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ToolsManajemenUsers $toolsManajemenUsers)
    {
        //
    }
}
