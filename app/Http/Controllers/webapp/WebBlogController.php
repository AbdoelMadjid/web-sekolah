<?php

namespace App\Http\Controllers\webapp;

use App\Http\Controllers\Controller;
use App\Models\WebBlog;
use App\Http\Requests\StoreWebBlogRequest;
use App\Http\Requests\UpdateWebBlogRequest;

class WebBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.webapp.blog.index');
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
    public function store(StoreWebBlogRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(WebBlog $webBlog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WebBlog $webBlog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWebBlogRequest $request, WebBlog $webBlog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WebBlog $webBlog)
    {
        //
    }
}
