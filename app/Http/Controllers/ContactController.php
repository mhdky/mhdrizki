<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request) {
        $validateData = $request->validate([
            'name_c' => 'required|min:1|max:50',
            'email_c' => 'required|min:1|max:255|email:dns',
            'message_c' => 'required|min:5'
        ]);

        Contact::create($validateData);

        return redirect('/')->with("yes", "Thank's for your message");
    }
}
