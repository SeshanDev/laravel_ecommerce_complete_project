<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use CreateUsersTable;
use PDF;
use Illuminate\Support\Facades\File;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;

class UserController extends Controller
{
    
    public function index(){
        $orders=Order::where('user_id',Auth::id())->get();
        return view('frontend.orders.index',compact('orders'));
    }

    public function myprofile(){
        $myprofile=User::all();
        return view('frontend.user.profile',compact('myprofile'));
    }



    public function profileupdate(Request $request){
        $user_id = Auth::user()->id;
        $user= user::findOrFail($user_id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->lname = $request->input('lname');
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');
        $user->city = $request->input('city');
        

        if($request->hasFile('image'))
        {
            $destination= 'uploads/profile/' . $user->image;
            if(File::exists($destination))
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('uploads/profile/', $filename);
            $user->image = $filename;
        } 

        $user->update();
        return redirect()->back()->with('status','Profile updated');

    }



    public function view($id){
        $orders=Order::where('id',$id)->where('user_id',Auth::id())->first();
        return view('frontend.orders.view',compact('orders'));
    }

    public function invoice($id){
        $orders=Order::where('id',$id)->where('user_id',Auth::id())->first();
        
        return view('admin.orders.invoice',compact('orders'));
        // $pdf = PDF::loadView('receipt')->setPaper('a4', 'portrait'); //or other values you need

        // $pdf = PDF::loadView('admin.orders.invoice', compact('orders'));
        
    
    }

}
