<?php

namespace App\Http\Controllers\Office\PM;

use App\Models\PM\Zoom;
use App\Models\PM\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ZoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            $collection = Zoom::where('title','LIKE','%'.$request->keyword.'%')->paginate(10);
            return view('pages.office.pm.zoom.list', compact('collection'));
        }

        return view('pages.office.pm.zoom.main');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $project = Project::get();
        return view('pages.office.pm.zoom.input', ['data' => new Zoom, 'project' => $project]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'project_id' => 'required',
            'start_date' => 'required|date',
            'duration' => 'required|numeric',
            'join_url' => 'required|url',
        ]);

        if ($validator->fails()){
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }

        $zoom = new Zoom;
        $zoom->title = $request->title;
        $zoom->project_id = $request->project_id;
        $zoom->start_date = $request->start_date;
        $zoom->duration = $request->duration;
        $zoom->join_url = $request->join_url;
        $zoom->save();

        return response()->json([
            'alert' => 'success',
            'message' => 'Zoom meeting has been created',
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Zoom $zoom)
    {
        return view('pages.office.pm.zoom.show', ['data' => $zoom]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Zoom $zoom)
    {
        $project = Project::get();
        return view('pages.office.pm.zoom.input', ['data' => $zoom, 'project' => $project]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Zoom $zoom)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'project_id' => 'required',
            'start_date' => 'required|date',
            'duration' => 'required|numeric',
            'join_url' => 'required|url',
        ]);

        if ($validator->fails()){
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }

        $zoom->title = $request->title;
        $zoom->project_id = $request->project_id;
        $zoom->start_date = $request->start_date;
        $zoom->duration = $request->duration;
        $zoom->join_url = $request->join_url;
        $zoom->save();

        return response()->json([
            'alert' => 'success',
            'message' => 'Zoom meeting has been updated',
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Zoom $zoom)
    {
        $zoom->delete();

        return response()->json([
            'alert' => 'success',
            'message' => 'Zoom meeting has been deleted',
        ], 200);
    }
}
