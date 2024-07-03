<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeleteController extends Controller
{
   public function delete(Request $request){
    $id = $request->query('id');
    $delete = DB::delete('delete from products where No_Produit = ?', [$id]);
    if ($delete) {
        return redirect()->route('products_admin_page')->with('success', 'Product added successfully.');
    }
    else {
        return redirect()->route('products_admin_page')->with('error', 'Failed to delete product.');
    }
   }
}
