<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\Product;
use App\Models\Review;

class ReviewController extends Controller
{
    public function add($product_modelname){
        $product=Product::where('model_name',$product_modelname)->first();

        if($product){
            $product_id=$product->id;
            $review=Review::where('user_id',Auth::id())->where('product_id',$product_id)->first();
            
            if($review){
                return view('frontend.reviews.edit',compact('review'));
            }else{
                $verified_purchase=Order::where('orders.user_id',Auth::id())->join('order_items','orders.id','order_items.order_id')->where('order_items.product_id',$product_id)->get();
                return view('frontend.reviews.index',compact('product','verified_purchase'));
            }
            
        }else{
            return redirect()->back()->with('warn',"The link was broken");
        }

    }

    public function create(Request $request){
        $product_id=$request->input('product_id');
        $product=Product::where('id',$product_id)->first();
        if($product){
            $user_review=$request->input('user_review');
            $new_review=Review::create([
                'user_id'=>Auth::id(),
                'product_id'=>$product_id,
                'user_review'=>$user_review

            ]);
            $category_name=$product->category->name;
            $product_name=$product->model_name;
            if($new_review){
                return redirect('category/'.$category_name.'/'.$product_name)->with('status',"Thank you for writing a review");
            }

        }else{
            return redirect()->back()->with('warn',"The link was broken");

        }
    }

    public function edit($product_modelname){
        $product=Product::where('model_name',$product_modelname)->first();
        if($product){
            $product_id=$product->id;
            $review=Review::where('user_id',Auth::id())->where('product_id',$product_id)->first();
            if($review){
                return view('frontend.reviews.edit',compact('review','product'));
            }else{
                return redirect()->back()->with('warn',"The link was broken");
            }
        }else{
            return redirect()->back()->with('warn',"The link was broken");
        }
    }

    public function update(Request $request){
        $user_review=$request->input('user_review');
        if($user_review!=''){
            $review_id=$request->input('review_id');
            $review=Review::where('id',$review_id)->where('user_id',Auth::id())->first();
            if($review){
                $review->user_review=$request->input('user_review');
                $review->update();
                return redirect('category/'.$review->product->category->name.'/'.$review->product->model_name)->with('status',"Review updated successfully");
            }else{
                return redirect()->back()->with('warn',"The link was broken");
            }
        }else{
            return redirect()->back()->with('warn',"You cannot submit empty review");
        }
    }
}
