<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Task;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoretaskRequest;
use App\Http\Requests\UpdatetaskRequest;
use App\Http\Resources\TaskResource;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return task resource
        return TaskResource::collection(task::with('project')->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoretaskRequest $request)
    {
        // create new task
        $task = Task::create($request->validated());
        return new TaskResource($task->load('project'));
    }

    /**
     * Display the specified resource.
     */
    public function show(task $task)
    {
        // return task resource
        return new TaskResource($task->load('project'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatetaskRequest $request, task $task)
    {
        // update task
        $task->update($request->validated());
        return new TaskResource($task->load('project'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(task $task)
    {
        // delete task
        $task->delete();
        return response()->noContent();
    }
}
