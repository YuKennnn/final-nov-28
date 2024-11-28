<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class SettingsController extends Controller
{
    /**
     * Show the settings page
     */
    public function index()
    {
        // Fetch the current profile picture
        $settings = Settings::first();
        
        // If no settings exist, create initial settings with default image
        if (!$settings) {
            $settings = $this->initializeDefaultProfilePicture();
        }
        
        return view('settings', compact('settings'));
    }

    /**
     * Initialize default profile picture
     */
    private function initializeDefaultProfilePicture()
    {
        // Copy default image from assets to storage
        $defaultImagePath = public_path('assets/images/logo.jpg');
        $filename = 'profile_' . Str::uuid() . '.jpg';
        
        // Ensure storage directory exists
        Storage::disk('public')->makeDirectory('profile_pictures');
        
        // Copy the file to storage
        if (file_exists($defaultImagePath)) {
            Storage::disk('public')->put(
                'profile_pictures/' . $filename,
                file_get_contents($defaultImagePath)
            );
            
            // Create settings record
            return Settings::create([
                'image' => 'profile_pictures/' . $filename
            ]);
        }
        
        // If default image doesn't exist, return settings without image
        return Settings::create([
            'image' => null
        ]);
    }

    /**
     * Update profile picture
     */
    public function updateProfilePicture(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'profile_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Get the uploaded file
        $file = $request->file('profile_photo');
        
        // Generate a unique filename
        $filename = 'profile_' . Str::uuid() . '.' . $file->getClientOriginalExtension();
        
        // Store the file in the public disk under profile_pictures directory
        $path = $file->storeAs('profile_pictures', $filename, 'public');
        
        // Find the first or create new Settings record
        $settings = Settings::first() ?? new Settings();
        
        // Delete old image if exists
        if ($settings->image && Storage::disk('public')->exists($settings->image)) {
            Storage::disk('public')->delete($settings->image);
        }
        
        // Update the settings with new image path
        $settings->image = $path;
        $settings->save();
        
        // Clear any cached profile pictures using the proper facade
        Cache::forget('profile_picture');
        
        return redirect()->back()->with('success', 'Profile picture updated successfully.');
    }
}