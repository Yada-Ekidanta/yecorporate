<?php

namespace App\Http\Controllers\Office;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct()
    {
        // 
    }
    public function index()
    {
        return view('pages.office.profile.main');
    }
    public function setting()
    {
        return view('pages.office.profile.setting');
    }
    public function security()
    {
        return view('pages.office.profile.security');
    }
    public function activity()
    {
        return view('pages.office.profile.activity');
    }
    public function billing()
    {
        return view('pages.office.profile.billing');
    }
    public function statement()
    {
        return view('pages.office.profile.statement');
    }
    public function referral()
    {
        return view('pages.office.profile.referral');
    }
    public function apikey()
    {
        return view('pages.office.profile.apikey');
    }
    public function log()
    {
        return view('pages.office.profile.log');
    }
}
