<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PetHome;

class PetHomeController extends Controller
{
    // Display the upload form
    public function create()
    {
        return view('pets.create');
    }

    // Handle image upload
    public function storeImage(Request $request)
    {
        // Validate the uploaded image
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Get the file information
        $file = $request->file('image');

        // Store the image and get the file path
        $filePath = $file->store('pets/images', 'public');

        // Save the image data to the database
        PetHome::create([
            'originalName' => $file->getClientOriginalName(),
            'path' => $filePath,
            'mimeType' => $file->getClientMimeType(),
            'description' => '',  
        ]);

        return redirect()->route('pets.create');
    }

    // Handle file upload
    public function storeFile(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'file' => 'required|file|max:10240',  // Max file size of 10MB
        ]);

        // Get the file information
        $file = $request->file('file');

        // Store the file and get the file path
        $filePath = $file->store('pets/files', 'public');

        // Save the file data to the database
        PetHome::create([
            'originalName' => $file->getClientOriginalName(),
            'path' => $filePath,
            'mimeType' => $file->getClientMimeType(),
            'description' => '',  
        ]);

        return redirect()->route('pets.create');
    }

    // Handle description submission
    public function storeDescription(Request $request)
    {
        // Validate the description
        $request->validate([
            'description' => 'required|string|max:255',
        ]);

        // Get the description
        $description = $request->input('description');

        // Save the description to the database
        PetHome::create([
            'originalName' => 'No File',  
            'path' => '',
            'mimeType' => '',
            'description' => $description,
        ]);

        // After uploading, redirect to the forum page
        return redirect()->route('forum');
    }

    // Forum page, displaying all uploaded files
    public function forum()
    {
        // Get all uploaded files
        $petHomes = PetHome::all();
        return view('pets.forum', compact('petHomes'));
    }


    
    
    // Home page
    public function home()
    {
        return view('pets.home');  // Return home.blade.php view
    }

    // Cats page
    public function cats()
    {
        return view('pets.cats');  // Return cats.blade.php view
    }

    // Dogs page
    public function dogs()
    {
        return view('pets.dogs');  // Return dogs.blade.php view
    }
}
