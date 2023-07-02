<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;;
use App\Models\Product;
use App\Models\Cart;
use Session;

class ProductController extends Controller
{
    public function index(){
        $data = Product::all();
        return view("product",['products'=>$data]);
    }
    public function detail($id){
         $data =  Product::find($id);
         return view('detail',['products'=>$data]);
    }
    public function AddToCart(Request $request){
        if($request->session()->has('user'))
        {
           $cart = new Cart;
           $cart->user_id = $request->session()->get('user')['id'];
           $cart->product_id = $request->product_id;
           $cart->save();
           return redirect('/');
        }
        else{
            return redirect('/login');
        }
    }
    static function CartItem(){
        $userId = Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();

    }
    public function cartList(){
        $userId = Session::get('user')['id'];
        $products = DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->select('products.*','cart.id as cart_id')
        ->get();
        return view('cartlist',['products'=>$products]);
    }
    public function removeCart($id){
        Cart::destroy($id);
        return redirect('cartlist');
    }
    public function orderNow(){
        $userId = Session::get('user')['id'];
        $products = DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->sum('products.price');
        return view('/ordernow',['total'=>$products]);
       
    }
    
}
