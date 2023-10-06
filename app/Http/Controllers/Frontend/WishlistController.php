<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wishlist;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function index(){
        $wishlist=Wishlist::where('user_id',Auth::id())->get();
        return view('frontend.wishlist',compact('wishlist'));
    }

    public function add(Request $request){
        if(Auth::check()){
            $product_id=$request->input('product_id');
            if(Product::find($product_id)){
                $wish=new Wishlist();
                $wish->product_id=$product_id;
                $wish->user_id=Auth::id();
                $wish->save();
                return response()->json(['status'=>"Product Added to Wishlist"]);

            }else{
                return response()->json(['warn'=>"Product doesnot exist"]);
            }
        }else{
            return response()->json(['warn'=>"Login to Continue"]);
        }
    }

    public function delete(Request $request){
        if(Auth::check()){
            $product_id=$request->input('product_id');
            if(Wishlist::where('product_id',$product_id)->where('user_id',Auth::id())->exists()){
                $wish=Wishlist::where('product_id',$product_id)->where('user_id',Auth::id())->first();
                $wish->delete();
                return response()->json(['status'=>"Item Removed successfully"]);
            }
        }else{
            return response()->json(['warn'=>"Login to Continue"]);
            
        }
    }

    public function wishlistcount(){
        $wishcount=Wishlist::where('user_id',Auth::id())->count();
        return response()->json(['count'=>$wishcount]);
    }
}
