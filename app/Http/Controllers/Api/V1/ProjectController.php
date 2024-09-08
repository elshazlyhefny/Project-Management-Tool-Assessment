<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Project;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreprojectRequest;
use App\Http\Requests\UpdateprojectRequest;
use App\Http\Resources\ProjectResource;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return project resource
        return ProjectResource::collection(project::with('tasks')->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreprojectRequest $request)
    {
        // create project
        $project = Project::create($request->validated());
        return new ProjectResource($project->load('tasks'));
    }

    /**
     * Display the specified resource.
     */
    public function show(project $project)
    {
        // return project resource
        return new ProjectResource($project->load('tasks'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateprojectRequest $request, project $project)
    {
        // update project
        $project->update($request->validated());
        return new ProjectResource($project->load('tasks'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(project $project)
    {
        // delete project
        $project->delete();
        return response()->noContent();
    }
}
