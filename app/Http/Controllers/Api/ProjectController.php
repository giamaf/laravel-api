<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //! Preparo la query per mandare giù tutti i progetti
        $projects = Project::whereIsCompleted(true)->latest()->with('type')->get();

        //! Restituisco un json da utilizzare nel front-end
        return response()->json($projects);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Ricerca manuale del project completo
        $project = Project::whereIsCompleted(true)->find($id);

        // Se non trovo il project rispondo con un messaggio vuoto e codice 404
        if (!$project) return response(null, 404);

        // Altrimenti butto giù il post in formato JSON
        return response()->json($project);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}
