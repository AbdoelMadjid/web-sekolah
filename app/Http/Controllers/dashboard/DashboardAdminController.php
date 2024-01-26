<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.dashboard');
    }
    public function about()
    {
        return view('admin.dashboard.about');
    }
    public function landing()
    {
        return view('admin.dashboard.dev_landing_page');
    }
    public function component()
    {
        return view('admin.dashboard.dev_component');
    }
}
