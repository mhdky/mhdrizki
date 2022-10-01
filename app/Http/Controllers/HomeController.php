<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\Project;
use App\Models\Service;
use App\Models\Social;
use App\Models\Youtube;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('home', [
            'title' => 'Muhammad Rizki Homepage',
            'projects' => Project::latest()->take(6)->get(),
            'projectss' => project::all(),
            'youtube' => Youtube::first(),
            'social' => Social::first(),
            'experience' => Experience::first()
        ]);
    }

    public function store(Request $request) {
        $validateData = $request->validate([
            'name' => 'required|min:1|max:50',
            'email' => 'required|min:1|max:255|email:dns',
            'services' => 'required',
            'message' => 'required|min:5'
        ]);

        Service::create($validateData);

        return redirect('/')->with('success', 'Permintaan berhasil, cek email anda secara berkala dan silahkan tunggu balasan email dari Muhammad Rizki');
    }
}
