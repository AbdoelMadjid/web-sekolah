<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\WebSiteSakola;
use App\Http\Requests\StoreWebSiteSakolaRequest;
use App\Http\Requests\UpdateWebSiteSakolaRequest;

class WebSiteSakolaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('website.dashboard.index');
    }
    public function web_sejarah()
    {
        return view('website.dashboard.sejarah');
    }
    public function visimisi()
    {
        return view('website.dashboard.visimisi');
    }
    public function prodi()
    {
        return view('website.dashboard.prodi');
    }
    public function sapras()
    {
        return view('website.dashboard.sapras');
    }

    public function guru()
    {
        return view('website.dashboard.guru');
    }
    public function tatausaha()
    {
        return view('website.dashboard.tatausaha');
    }
    public function wakasek()
    {
        return view('website.dashboard.wakasek');
    }
    public function kaprodi()
    {
        return view('website.dashboard.kaprodi');
    }
    public function walikelas()
    {
        return view('website.dashboard.walikelas');
    }

    public function osis()
    {
        return view('website.dashboard.osis');
    }
    public function eskul()
    {
        return view('website.dashboard.eskul');
    }

    public function event()
    {
        return view('website.dashboard.event');
    }
    public function galeri()
    {
        return view('website.dashboard.galeri');
    }
    public function goblog()
    {
        return view('website.dashboard.goblog');
    }

    public function about()
    {
        return view('website.dashboard.about');
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
    public function store(StoreWebSiteSakolaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(WebSiteSakola $webSiteSakola)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WebSiteSakola $webSiteSakola)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWebSiteSakolaRequest $request, WebSiteSakola $webSiteSakola)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WebSiteSakola $webSiteSakola)
    {
        //
    }
}
