<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', ['user' => auth()->user()]);
    }
    public function edit()
    {
        $user = auth()->user();
        return view('edit-profile', compact('user'));
    }

    // profile update
    public function update(Request $request)
    {
        $user = auth()->user();

        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|digits:11',
            'profile_image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // image upload
        if ($request->hasFile('profile_image')) {
            $file = $request->file('profile_image');
            $imageName = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads'), $imageName);

            // delete old image
            if ($user->profile_image && file_exists(public_path('uploads/'.$user->profile_image))) {
                unlink(public_path('uploads/'.$user->profile_image));
            }

            $user->profile_image = $imageName;
        }

        // update information
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->save();

        return redirect()->route('dashboard')->with('success', 'Profile updated successfully!');
    }
}
