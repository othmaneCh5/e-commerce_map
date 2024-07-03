<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirect(){
        $user = Auth::user();
        $products = DB::table('products')->limit(6)->get();
        $productss = DB::table('products')->get();
        $messages  =DB::table('messages')->limit(5)->get();
        $users = DB::table('users')->where('usertype', 0)->limit(5)->get();
        $sales = DB::table('sales')->get();
        $salesItems1 = DB::table('sales')
        ->join('products', 'sales.product_id', '=', 'products.No_Produit')
        ->join('users', 'sales.user_id', '=', 'users.id')
        ->select('sales.id_sale as sales_id','sales.created_at as date' ,'products.name as product_name', 'products.price as product_price', 'products.No_Produit as product_id', 'users.name as user_name')
        ->get();    
        $salesItems = DB::table('sales')
        ->join('products', 'sales.product_id', '=', 'products.No_Produit')
        ->join('users', 'sales.user_id', '=', 'users.id')
        ->select('sales.id_sale as sales_id','sales.created_at as date' ,'products.name as product_name', 'products.price as product_price', 'products.No_Produit as product_id', 'users.name as user_name')
        ->limit(6)
        ->get();  
        $numsales = $sales->count();
        $numproducts = $productss->count();
        $totalSalesAmount = DB::table('sales')
        ->join('products', 'sales.product_id', '=', 'products.No_Produit')
        ->sum('products.price');
    if ($user) {
        $usertype = $user->usertype;
        Log::info('User type: ' . $usertype);
        if ($usertype == '1') {
            return view('admin.home',['messages'=>$messages,'users'=>$users , 'salesItems'=>$salesItems , 'numsales'=>$numsales , 'numproducts'=>$numproducts , 'totalSalesAmount'=>$totalSalesAmount]);
        } else {
            $carts = DB::table('carts')->where('user_id', $user->id)->get();
            $numCarts = $carts->count();
            return view('user.home',['products'=>$products,'numCarts'=>$numCarts]);
        }
    } else {
        // Handle case where no user is authenticated
        return redirect('/login');
    }
    }
    public function index()
    {
        $products = DB::table('products')->limit(6)->get();
        $numCarts = 0; // Default to 0 carts
    
        if (Auth::check()) {
            $carts = DB::table('carts')->where('user_id', Auth::user()->id)->get();
            $numCarts = $carts->count();
        }
    
        return view('user.home', ['products' => $products, 'numCarts' => $numCarts]);
    }
    public function product(){
         $products = DB::table('products')->paginate(6);
        if (Auth::check()) {
        $carts = DB::table('carts')->where('user_id', Auth::user()->id)->get();
        $numCarts = $carts->count();
       
        return view('user.products',['products'=>$products , 'numCarts'=>$numCarts]);
        }
        else{
            return view('user.products',['products'=>$products]);
        }
    }
    public function about(){
        if (Auth::check()) {
        $carts = DB::table('carts')->where('user_id', Auth::user()->id)->get();
        $numCarts = $carts->count();
        return view('user.about',['numCarts' => $numCarts]);
        }
        else {
           return view('user.about');
        }
    }
    public function product_page(Request $request)
{
    $id = $request->input('id');
    $product = Product::where('No_Produit', $id)->first();

    if (!$product) {
        return redirect()->back()->with('error', 'Product not found.');
    }
    if (Auth::check()) {
        $carts = DB::table('carts')->where('user_id', Auth::user()->id)->get();
        $numCarts = $carts->count();
    return view('user.product_page', ['product' => $product , 'numCarts'=>$numCarts]);
    }
    else{
        return view('user.product_page', ['product' => $product]);
    }
}
}
