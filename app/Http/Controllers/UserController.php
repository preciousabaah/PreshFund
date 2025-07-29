<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function updateProfilePhoto(Request $request)
    {
        
        $request->validate([
            'profile_photo' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $user = Auth::user();

        if ($request->hasFile('profile_photo')) {
            $file = $request->file('profile_photo');
            $filename = time() . '_' . $file->getClientOriginalName();

            // Save file
            $file->storeAs('public/profile_photos', $filename);

            // Update user profile
            $user->profile_photo = $filename;
            $user->save();
        }

        return back()->with('success', 'Profile photo updated!');
    }







    public function update(Request $request)
{
    $user = Auth::user();

    $validated = $request->validate([
        'username' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:users,email,' . $user->id,
        'profile_photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    $user->name = $validated['username'];
    $user->email = $validated['email'];

    //  photo upload
    if ($request->hasFile('profile_photo')) {
        $photo = $request->file('profile_photo');
        $filename = uniqid() . '.' . $photo->getClientOriginalExtension();
        $photo->storeAs('public/profile_photos', $filename);

        $user->profile_photo = $filename;
    }

    $user->save();

    return redirect()->back()->with('success', 'Profile updated successfully.');
}






   public function editPassword()
    {
        return view('Password'); 
    }






public function password_change(Request $request)
{
  /*  dd('hello');*/
    $user = auth()->user();

    $request->validate([
        'current_password' => 'required|string',
        'new_password' => 'required|string|min:8|confirmed',
    ]);

    if (!Hash::check($request->current_password, $user->password)) {
        return back()->with('error', 'Current password is incorrect.');
    }

    $user->password = Hash::make($request->new_password);
    $user->save();

    return back()->with('success', 'Password updated successfully!');
}


}
