<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use App\Models\Product;
use App\Mail\OrderMail;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
    public function index(){
        $cartitems=Cart::where('user_id',Auth::id())->get();
        
        return view('frontend.checkout',compact('cartitems'));
        
        
    }

    
    public function placeorder(Request $request){
        
        $order=new Order();
        $order->user_id=Auth::id();
        $order->fname=$request->input('fname');
        $order->lname=$request->input('lname');
        $order->email=$request->input('email');
        $order->phone=$request->input('phone');
        $order->address=$request->input('address');
        $order->city=$request->input('city');
        $order->color=$request->input('color');
        $order->payment_mode=$request->input('payment_mode');
        $order->payment_id=$request->input('payment_id');
       
        
        $total=0;
        $cartitems_total=Cart::where('user_id',Auth::id())->get();
        foreach($cartitems_total as $product){
            $tot=$product->products->selling_price*$product->product_quantity;
            $total=$total+$tot;
            
        }

        $order->total_price=$total;
        
        
        $order->save();

        

        $cartitems=Cart::where('user_id',Auth::id())->get();
        foreach($cartitems as $items){
            OrderItem::create([
                'order_id'=>$order->id,
                'product_id'=>$items->product_id,
                'quantity'=>$items->product_quantity,
                'price'=>$items->products->selling_price,
                
            ]);

            $product=Product::where('id',$items->product_id)->first();
            $product->quantity=$product->quantity-$items->product_quantity;
            $product->update();
        }

        if(Auth::user()->address==Null){
            $user=User::where('id',Auth::id())->first();
            $user->name=$request->input('fname');
            $user->lname=$request->input('lname');
            $user->phone=$request->input('phone');
            $user->address=$request->input('address');
            $user->city=$request->input('city');
           
            $user->update();
        }

        $cartitems=Cart::where('user_id',Auth::id())->get();
        Cart::destroy($cartitems);
        if($request->input('payment_mode')=="Online Payment"){
            request()->validate(['email'=>'required|email']);
            Mail::to(request('email'))->send(new OrderMail($order));
            return response()->json(['status'=>'Payment Successfully and Confirmation Mail Sent.']);
            
        }
        
        
        request()->validate(['email'=>'required|email']);
        Mail::to(request('email'))->send(new OrderMail($order));
        return redirect('/checkout')->with('status','Order Placed Successfully and Confirmation Mail Sent.');
    
        
        
    }
    

    public function pay(Request $request){
        
        $cartitem = Cart::where('user_id',Auth::id())->get();
        $total_price = 0;
        foreach($cartitem as $item){
            $total_price += $item->products->selling_price*$item->product_quantity;
           
        }

        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $address = $request->input('address');
        $city = $request->input('city');

        return response()->json([
            'firstname'=>$firstname,
            'lastname'=>$lastname,
            'email'=>$email,
            'phone'=>$phone,
            'address'=>$address,
            'city'=>$city,
            'total_price'=>$total_price
        ]);
        

        
    }

    

    
}