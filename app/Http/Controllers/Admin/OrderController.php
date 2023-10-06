<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Mail\UpdateOrder;
use Illuminate\Support\Facades\Mail;
class OrderController extends Controller
{
    public function index(){
        $orders=Order::where('status','0')->get();
        return view('admin.orders.index',compact('orders'));
    }

    public function view($id){
        $orders=Order::where('id',$id)->first();
        return view('admin.orders.view',compact('orders'));
    }

    public function updateorder(Request $request,$id){
        $orders=Order::find($id);
        $orders->status=$request->input('order_status');
        $mail=$orders->email;
        
        Mail::to($orders->email)->send(new UpdateOrder());
        $orders->update();
        
        return redirect('orders')->with('status',"Order Update Successfully");
    }

    public function orderhistory(){
        $orders=Order::where('status','1')->get();
        if(request()->get('id')){
            
            $id=$_GET['id'];
            
            $orders=Order::where('id', $id)->get();
            return view('admin.orders.history',compact('orders'));
          
        }else{

            return view('admin.orders.history',compact('orders'));
        }
        
        
    }

    // public function ordercount(){
    //     $ordercount=Order::where('user_id',Auth::id())->count();
    //     return response()->json(['count'=>$ordercount]);
    // }
}
