<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\HelpRequest;
use Illuminate\Database\Eloquent\Model;

class HelpRequestController extends Controller
{







public function store(Request $request)
{
    $request->validate([
        'subject' => 'required|string|max:255',
        'priority' => 'required|in:Low,Medium,High',
        'message' => 'required|string',
        'attachments.*' => 'nullable|file|mimes:jpg,jpeg,png,pdf,doc,docx|max:6144',
    ]);

    $filenames = [];
    if ($request->hasFile('attachments')) {
        foreach ($request->file('attachments') as $file) {
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/attachments', $filename); // store file
            $filenames[] = $filename; // store filename only
        }
    }

    HelpRequest::create([
        'user_id' => auth()->id(),
        'subject' => $request->subject,
        'priority' => $request->priority,
        'message' => $request->message,
        'attachments' => json_encode($filenames), // Save array of filenames
    ]);

    return back()->with('success', 'Help request submitted successfully.');
}


}



