<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WhatsappController extends Controller
{
    public function __construct()
    {
        // 
    }
    public function index()
    {
        return view('pages.whatsapp.main');
    }
    public function callback(Request $request)
    {
        // 
    }
}
