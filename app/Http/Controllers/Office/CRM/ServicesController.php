<?php

namespace App\Http\Controllers\Office\Crm;

use App\Models\CRM\Services;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ServicesController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax())
        {
            $collection = Services::where('title','LIKE','%'.$request->keyword.'%')->paginate(10);;
            return view('pages.office.crm.services.list', compact('collection'));
        }
        return view('pages.office.crm.services.main');
    }

    public function create()
    {
        return view('pages.office.crm.services.input', ['data' => new Services()]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'slug' => 'nullable|unique:services',
            'thumbnail' => 'nullable|image',
        ]);
        if ($validator->fails())
        {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $service = new Services();
        $service->title = $request->title;
        $service->slug = $request->slug;
        $service->description = $request->description;
        if ($request->file('thumbnail')) {
            if ($service->thumbnail != null) {
                Storage::delete($service->thumbnail);
            }
            $file = request()->file('thumbnail')->store('services');
            $service->thumbnail = $file;
        } else {
            $service->thumbnail = $service->thumbnail;
        }
        $service->save();

        return response()->json([
            'alert' => 'success',
            'message' => 'Services Created',
        ]);
    }

    public function show(Services $service)
    {
    }

    public function edit(Services $service)
    {
        return view('pages.office.crm.services.input', ['data' => $service]);
    }

    public function update(Request $request, Services $service)
    {
        $validator = Validator::make($request->all(), [
            'slug' => 'nullable|unique:services',
            'thumbnail' => 'nullable|image',
        ]);
        if ($validator->fails())
        {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }
        $service->title = $request->title;
        $service->slug = $request->slug;
        $service->description = $request->description;
        if ($request->file('thumbnail')) {
            if ($service->thumbnail != null) {
                Storage::delete($service->thumbnail);
            }
            $file = request()->file('thumbnail')->store('services');
            $service->thumbnail = $file;
        } else {
            $service->thumbnail = $service->thumbnail;
        }
        $service->update();

        return response()->json([
            'alert' => 'success',
            'message' => 'Services Updated',
        ]);
    }

    public function destroy(Services $service)
    {
        $service->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Services Deleted',
        ]);
    }
}
