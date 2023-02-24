<?php

namespace App\Http\Controllers\Office\Communication;

use App\Http\Controllers\Controller;
use App\Models\Communicationj\Chat;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax())
        {
            return view('pages.office.chat.list');
        }
        return view('pages.office.chat.main');
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
    }
    public function show(Chat $chat)
    {
        //
    }
    public function edit(Chat $chat)
    {
        //
    }
    public function update(Request $request, Chat $chat)
    {
        //
    }
    public function destroy(Chat $chat)
    {
        //
    }
}
