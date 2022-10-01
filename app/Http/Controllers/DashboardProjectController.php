<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.project.index', [
            'projects' => project::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'img' => 'required|image|file|max:1024',
            'title' => 'required|min:5|max:255',
            'technology' => 'required|min:3|max:255',
            'description' => 'required|min:10|max:255',
            'status' => 'required',
            'demo' => '',
            'sourcode' => ''
        ]);    


        $validateData['img'] = $request->file('img')->store('storage-images');

        project::create($validateData);
        
        return redirect('/dashboard/project')->with('success', 'Project added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('admin.project.edit', [
            'project' => $project
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $validateData = $request->validate([
            'img' => 'image|file|max:1024',
            'title' => 'required|min:5|max:255',
            'technology' => 'required|min:3|max:255',
            'description' => 'required|min:10|max:255',
            'status' => 'required',
            'demo' => '',
            'sourcode' => ''
        ]);

        if($request->file('img')) {
            if($request->oldImg) {
                Storage::delete($request->oldImg);
            }
            $validateData['img'] = $request->file('img')->store('storage-images');
        }

        project::where('id', $project->id)->update($validateData);

        return redirect('/dashboard/project')->with('success', 'Edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        if($project->img) {
            Storage::delete($project->img);
        }
        
        project::destroy($project->id);

        return redirect('/dashboard/project');
    }
}
