<?php

namespace App\Http\Controllers\webapp;

use App\Http\Controllers\Controller;
use App\Models\WebSaranaPrasarana;
use App\Http\Requests\StoreWebSaranaPrasaranaRequest;
use App\Http\Requests\UpdateWebSaranaPrasaranaRequest;

class WebSaranaPrasaranaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.webapp.sapras.index');
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
    public function store(StoreWebSaranaPrasaranaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(WebSaranaPrasarana $webSaranaPrasarana)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WebSaranaPrasarana $webSaranaPrasarana)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWebSaranaPrasaranaRequest $request, WebSaranaPrasarana $webSaranaPrasarana)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WebSaranaPrasarana $webSaranaPrasarana)
    {
        //
    }
}
