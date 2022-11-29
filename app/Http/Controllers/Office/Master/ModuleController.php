<?php

namespace App\Http\Controllers\Office\Master;

use App\Http\Controllers\Controller;
use App\Models\Master\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public function __construct()
    {
        // 
    }
    public function index()
    {
        return view('pages.office.module.main');
    }
    public function create()
    {
        return view('pages.office.module.input',['data' => new Module]);
    }
    public function store(Request $request)
    {
        $module = new Module;
        $module->save();
    }
    public function show(Module $module)
    {
        //
    }
    public function edit(Module $module)
    {
        return view('pages.office.module.input',['data' => $module]);
    }
    public function update(Request $request, Module $module)
    {
        //
        $module->update();
    }
    public function destroy(Module $module)
    {
        $module->delete();
    }
}
