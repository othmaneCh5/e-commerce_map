<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function add(Request $request){
        $id_produit = $request->input('id_produit');
        $id_user = Auth::user()->id;
        $insert = DB::insert('insert into carts (user_id, product_id , created_at) values (?, ? , ?)', [$id_user, $id_produit,NOW()]);
        if ($insert) {
         return redirect()->back();
        }
    }
    public function open(){
         $products = DB::table('products')->limit(6)->get();
        $carts = DB::table('carts')->where('user_id', Auth::user()->id)->get();
        $cartItems = DB::table('carts')
            ->join('products', 'carts.product_id', '=', 'No_Produit')
            ->where('carts.user_id', Auth::user()->id)
            ->select('products.name', 'products.image', 'products.description','products.price','products.No_Produit')
            ->get();
        $numCarts = $carts->count();
        return view('user.cart',['numCarts'=>$numCarts , 'products'=>$products , 'cartItems'=>$cartItems]);
    }
    public function delete(Request $request){
        $id = $request->query('id');
        $delete = DB::delete('delete from carts where product_id = ?', [$id]);
        if ($delete) {
            return redirect()->route('open.cart')->with('success', 'Product added successfully.');
        }
        else {
            return redirect()->route('open.cart')->with('error', 'Failed to delete product.');
        }
       }
}
