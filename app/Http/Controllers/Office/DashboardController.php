<?php

namespace App\Http\Controllers\Office;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
        // $this->middleware('permission:dashboard-default', ['only' => ['index']]);
        // $this->middleware('permission:dashboard-ecommerce', ['only' => ['ecommerce']]);
    }
    public function index()
    {
        return view('pages.office.dashboard.main');
    }
    public function ecommerce()
    {
        return view('pages.office.dashboard.ecommerce');
    }
}
