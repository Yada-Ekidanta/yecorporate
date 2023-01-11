<?php

namespace App\Http\Controllers\Office\PM;

use App\Models\PM\Task;
use App\Models\PM\Project;
use App\Models\PM\TodoList;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class TodoListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Task $task)
    {
        return view('pages.office.pm.todo-list.input', ['data' => new TodoList, 'task' => $task]);
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
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }

        $todoList = new TodoList;
        $todoList->task_id = $request->task_id;
        $todoList->name = $request->name;
        $todoList->due_date = $request->due_date;
        $todoList->status = 1;
        $todoList->save();
        // dd($todoList);

        return response()->json([
            'alert' => 'success',
            'message' => 'Todo List has been created!',
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(TodoList $todoList)
    {
        $task = Task::first();
        return view('pages.office.pm.todo-list.input', ['data' => $todoList, 'task' => $task]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TodoList $todoList)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ], 200);
        }

        $todoList->name = $request->name;
        $todoList->due_date = $request->due_date;
        $todoList->save();

        return response()->json([
            'alert' => 'success',
            'message' => 'Todo List has been updated',
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(todoList $todoList)
    {
        $todoList->delete();

        return response()->json([
            'alert' => 'success',
            'message' => 'Todo List has been deleted',
        ], 200);
    }
}
