<?php

namespace App\Http\Controllers\Web;

use App\Traits\ResponseView;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    use ResponseView;
    public function __construct()
    {
        //
    }
    public function index()
    {
        return $this->render_view('auth.login');
    }
    public function do_login(Request $request)
    {
        //
    }
    public function register()
    {
        return $this->render_view('auth.register');
    }
    public function do_register(Request $request)
    {
        //
    }
    public function forgot()
    {
        return $this->render_view('auth.forgot');
    }
    public function do_forgot(Request $request)
    {
        //
    }
}
