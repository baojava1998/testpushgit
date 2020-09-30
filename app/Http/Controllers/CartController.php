<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Cart;
use Session;

class CartController extends Controller
{
    //
    public function Index(){
        $product = DB::table('products')->get();
        return view('index',compact('product'));
    }

    public function AddCart(Request $req , $id){
        
        $product = DB::table('products')->where('id',$id)->first();
        if($product !=null)
        {         
            $oldcart = Session('Cart') ? Session('Cart') : null;
            $newCart = new Cart($oldcart);
            $newCart->AddCart($product,$id);

            $req->session()->put('Cart',$newCart);
        }
        return view('cart');
    }
    public function DeleteItemCart(Request $req , $id){        
            $oldcart = Session('Cart') ? Session('Cart') : null;
            $newCart = new Cart($oldcart);
            $newCart->DeleteItemCart($id);
            if(Count($newCart->products)>0){
                $req->session()->put('Cart',$newCart);
            }
            else 
            {
                $req->session()->forget('Cart');
            }
            return view('cart');
    }
    public function ViewListCart(){
        return view('list-info');
    }
}
