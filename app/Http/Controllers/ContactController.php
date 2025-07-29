<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

 use App\Models\ContactMessage;

class ContactController extends Controller
{
   

public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'subject' => 'required|string|max:255',
        'message' => 'required|string',
    ]);

    ContactMessage::create([
        'name' => $request->name,
        'email' => $request->email,
        'subject' => $request->subject,
        'message' => $request->message,
    ]);

    return back()->with('success', 'Your message has been sent.');
}

}
