<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class EditController extends Controller
{
    public function open(Request $request){
        $id = $request->query('id');
        $product = DB::selectOne('SELECT * FROM products WHERE No_Produit = ?', [$id]);
        return view('admin.edit_form',['id'=>$id,
    'product'=>$product]);
    }
    public function edit(Request $request)
{
    // Validate incoming data
    $validatedData = $request->validate([
        'id' => 'required|integer',
        'name' => 'required|string',
        'price' => 'required|numeric',
        'description' => 'required|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Allow image upload, but not required
    ]);

    $id = $validatedData['id'];

    // Retrieve existing product
    $product = DB::selectOne('SELECT * FROM products WHERE No_Produit = ?', [$id]);

    if (!$product) {
        return back()->withErrors(['id' => 'Product not found.']);
    }

    // Handle file upload if a new image is provided
    $imageUrl = $product->image; // Default to existing image URL

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('products_images', 'public'); // Store file
        $imageUrl = Storage::url($imagePath); // Get file URL
    }

    // Update the product in the database using raw SQL
    $update = DB::update('UPDATE products SET name = ?, price = ?, description = ?, image = ?, updated_at = ? WHERE No_Produit = ?', [
        $validatedData['name'],
        $validatedData['price'],
        $validatedData['description'],
        $imageUrl,
        now(),
        $id,
    ]);

    if ($update) {
        return redirect()->route('products_admin_page')->with('success', 'Product updated successfully.');
    } 
}

}