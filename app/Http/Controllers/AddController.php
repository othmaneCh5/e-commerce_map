<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AddController extends Controller
{
    public function open()
    {
        return view('admin.add_form');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image upload
        ]);

        // Handle file upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products_images', 'public'); // Store file
            $imageUrl = Storage::url($imagePath); // Get file URL

            // Insert into products table using raw SQL
            $insert = DB::insert('INSERT INTO products (name, price, description, image, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?)', [
                $validatedData['name'],
                $validatedData['price'],
                $validatedData['description'],
                $imageUrl,
                now(),
                now(),
            ]);

            if ($insert) {
                return redirect()->route('products_admin_page')->with('success', 'Product added successfully.');
            } else {
                return back()->withInput()->withErrors(['image' => 'Failed to upload image.']);
            }
        }

        return back()->withInput()->withErrors(['image' => 'Failed to upload image.']);
    }
}
