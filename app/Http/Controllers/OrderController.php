<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order(Request $request){
        \DB::table('carts')->insert([
            'id_user' => \Session::get('id_user'),
            'id_item' => $request->id_item,
            'total' => $request->total,
        ]);
        return redirect('/');
    }

    public function cart(){
        $cart = \DB::table('view_carts')->get();
        return view('cart', compact('cart'));
    }
}
