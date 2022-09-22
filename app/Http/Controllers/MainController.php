<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Items;

class MainController extends Controller
{
    public function index(){
        $items = \DB::table('items')->get();
        $users = \Session::get('id_user');
        return view('welcome',compact('items','users'));
    }
    public function store(Request $request){
        $this->validate($request, [
        'file' => 'required|max:2048'
        ]);
        $file = $request->file('file');
        $file_name = time()."_".$file->getClientOriginalName();
        $upload_destination = 'file_data';
        if($file->move($upload_destination,$file_name)){
            $data = Items::create([
                'product_name' => $request->product_name,
                'price' => $request->price,
                'picture' => $file_name
            ]);
            $res['message'] = "success!";
            $res['values'] = $data;
            return response($res);
        }
    }
}
