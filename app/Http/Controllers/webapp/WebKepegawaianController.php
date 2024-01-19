<?php

namespace App\Http\Controllers\webapp;

use App\Http\Controllers\Controller;
use App\Models\WebKepegawaian;
use App\Http\Requests\StoreWebKepegawaianRequest;
use App\Http\Requests\UpdateWebKepegawaianRequest;

class WebKepegawaianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.webapp.kepegawaian.index');
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
    public function store(StoreWebKepegawaianRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(WebKepegawaian $webKepegawaian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WebKepegawaian $webKepegawaian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWebKepegawaianRequest $request, WebKepegawaian $webKepegawaian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WebKepegawaian $webKepegawaian)
    {
        //
    }
}
