<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function product(){
        $carts = DB::table('carts')->where('user_id', Auth::user()->id)->get();
        $numCarts = $carts->count();
        $products = DB::select('select * from products');
        return view('admin.products', ['products' => $products]);
    }
    public function message(){
        $messages = DB::table('messages')->get();
        return view('admin.messages',['messages'=>$messages]);
    }
    public function order(){
        $salesItems1 = DB::table('sales')
        ->join('products', 'sales.product_id', '=', 'products.No_Produit')
        ->join('users', 'sales.user_id', '=', 'users.id')
        ->select('sales.id_sale as sales_id','sales.created_at as date' ,'products.name as product_name', 'products.price as product_price', 'products.No_Produit as product_id', 'users.name as user_name')
        ->get();    
        return view('admin.ordres',['salesItems1'=>$salesItems1]);
    }
    public function user(){
        $users = DB::table('users')->where('usertype', 0)->get();
        return view('admin.users',['users'=>$users]);
    }
}
