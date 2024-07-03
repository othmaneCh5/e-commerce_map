<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function index(){
        if (Auth::check()) {
        $carts = DB::table('carts')->where('user_id', Auth::user()->id)->get();
        $numCarts = $carts->count();
        return view('user.contact',['carts'=>$carts,'numCarts'=>$numCarts]);
        }
        else {
            return view('user.contact');
        }
    }
    public function contact(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');
        $query = DB::insert('insert into messages (name,email,message,created_at) values (?, ?,?,?)', [$name,$email,$message,NOW()]);
        if ($query) {
            return redirect()->route('open.contact');
        }
        else {
            return redirect()->back();
        }
    }
}
