<?php

namespace App\Http\Controllers;

use App\Models\Youtube;
use Illuminate\Http\Request;

class DashboardYoutubeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.youtube.index', [
            'youtube' => Youtube::first()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Youtube  $youtube
     * @return \Illuminate\Http\Response
     */
    public function show(Youtube $youtube)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Youtube  $youtube
     * @return \Illuminate\Http\Response
     */
    public function edit(Youtube $youtube)
    {
        return view('admin.youtube.edit', [
            'youtube' => $youtube
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Youtube  $youtube
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Youtube $youtube)
    {
        $validateData = $request->validate([
            'url' => 'required|url'
        ]);

        Youtube::where('id', $youtube->id)->update($validateData);
        return redirect('/dashboard/youtube')->with('success', 'Edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Youtube  $youtube
     * @return \Illuminate\Http\Response
     */
    public function destroy(Youtube $youtube)
    {
        //
    }
}
