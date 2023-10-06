<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
Use App\Models\Product;
Use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
   
    public function addproduct(Request $request){
        
        $product_id=$request->input('product_id');
        $product_quantity=$request->input('product_quantity');
        
        if(Auth::check()){
            
            $product_check=Product::where('id',$product_id)->first();
             
            if($product_check){
                if(Cart::where('product_id',$product_id)->where('user_id',Auth::id())->exists()){
                    return response()->json(['status'=>$product_check->model_name."Already added to cart"]);

                }else{
                    $cart_item=new Cart();
                    $cart_item->product_id=$product_id;
                    $cart_item->user_id=Auth::id();
                    $cart_item->product_quantity=$product_quantity;
                    $cart_item->save();
                    return response()->json(['status'=>$product_check->brand_name." ".$product_check->model_name." "."Added to cart"]);

                }
            }
            
        }else{
            return response()->json(['warn'=>"Login to Continue"]);
            
        }
    }

    public function viewcart(){
        $cartitems=Cart::where('user_id',Auth::id())->get();
        return view('frontend.cart',compact('cartitems'));
    }

    public function updatecart(Request $request){
        $product_id=$request->input('product_id');
        $product_quantity=$request->input('product_quantity');

        if(Auth::check()){
            if(Cart::where('product_id',$product_id)->where('user_id',Auth::id())->exists()){
                $cart=Cart::where('product_id',$product_id)->where('user_id',Auth::id())->first();
                $cart->product_quantity=$product_quantity;
                $cart->update();
                return response()->json((['status'=>'Quantity Updated']));
            }
        }
    }

    public function deleteitem(Request $request){
        if(Auth::check()){
            $product_id=$request->input('product_id');
            if(Cart::where('product_id',$product_id)->where('user_id',Auth::id())->exists()){
                $cartitem=Cart::where('product_id',$product_id)->where('user_id',Auth::id())->first();
                $cartitem->delete();
                return response()->json(['status'=>"Product deleted successfully"]);
            }
        }else{
            return response()->json(['warn'=>"Login to Continue"]);
            
        }
    }

    public function cartcount(){
        $cartcount=Cart::where('user_id',Auth::id())->count();
        return response()->json(['count'=>$cartcount]);
    }


}
