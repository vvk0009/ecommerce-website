<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\product;
use App\Models\Addproduct;
// use Illuminate\Support\Facades\DB;
class product extends Controller
{

    
    public function insert(){
             return view("addproduct");
    }
    public function login(Request $req){
        $product = new Addproduct;
        $product ->p_name=$req->p_name ;
        $product ->p_cat=$req->p_cat ;
        $product ->p_desc=$req->p_desc;
        $product ->price=$req->price;
        $product ->image=$req->image;
     $result= $product->save();

     return redirect('/show');

}
public function view(){
    $product = Addproduct::all();


    $data = compact('product');
return view('shop')->with($data);
}

public function show(){
    $product = Addproduct::all();


    $data = compact('product');
return view('show')->with($data);
}



public function delete($p_id)
{
    echo "hello";
    die;
}
}