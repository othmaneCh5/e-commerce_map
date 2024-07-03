<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class SaleController extends Controller
{
    // public function add(Request $request){
    //     $id_produit = $request->query('id');
    //     $id_user = Auth::user()->id;
    //     $insert = DB::insert('insert into sales (user_id, product_id , created_at) values (?, ? , ?)', [$id_user, $id_produit,NOW()]);
    //     if ($insert) {
    //         $delete = DB::delete('delete from carts where product_id = ?', [$id_produit]);
    //      return redirect()->back();
    //     }
    // }
    public function add(Request $request){
        $id_produit = $request->query('id');
        $id_user = Auth::user()->id;
    
        // Insert the product into the sales table
        $insert = DB::insert('insert into sales (user_id, product_id, created_at) values (?, ?, ?)', [$id_user, $id_produit, now()]);
    
        if ($insert) {
            // Check if the product is in the cart
            $productInCart = DB::table('carts')
                ->where('user_id', $id_user)
                ->where('product_id', $id_produit)
                ->exists();
    
            if ($productInCart) {
                // Delete the product from the cart
                DB::delete('delete from carts where user_id = ? and product_id = ?', [$id_user, $id_produit]);
            }
        }
    
        return redirect()->back();
    }
}
