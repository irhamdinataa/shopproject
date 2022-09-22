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
        $users = \Session::get('id_user');

        return view('cart', compact('cart','users'));
    }

    public function checkout(){
        $id_checkout = rand();
        $total = 0;
        $data = \DB::table('carts')->where('id_user',\Session::get('id_user'))->get();
        foreach ($data as $cart){
            $items = \DB::table('items')->where('id_item',$cart->id_item)->get();
            foreach($items as $items){
                $total += ($cart->total * $items->price);
                \DB::table('detail_checkouts')->insert([
                    'id_checkout' => $id_checkout,
                    'id_item' => $cart->id_item,
                    'total'=> $cart->total
                ]);
            }
        }
        \DB::table('checkouts')->insert([
            'id_checkout' => $id_checkout,
            'id_user' => \Session::get('id_user'),
            'total'=> $total
        ]);
        return redirect('/checkout_list');

    }

    public function checkout_list(){
        $checkout = \DB::table('view_checkouts')->get();
        $users = \Session::get('id_user');
        return view('checkout',compact('checkout','users'));
    }

    public function confirm(){
        return view('confirm');
    }
    public function save_confirm(Request $request){
        $this->validate($request, [
            'file' => 'required|max:2048'
            ]);
            $file = $request->file('file');
            $file_name = time()."_".$file->getClientOriginalName();
            $upload_destination = 'file_data';
            if($file->move($upload_destination,$file_name)){
                \DB::table('confirmations')->insert([
                    'id_user' => \Session::get('id_user'),
                    'id_checkout' => $request->id_token,
                    'proof' => $file_name
                ]);
                return redirect('/confirm');
            }
    }
}
