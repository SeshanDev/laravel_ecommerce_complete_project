<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function add(){
        $category=Category::all();
        return view('admin.product.add',compact('category'));
    }

    public function insert(Request $request){
        $product=new Product();
        if($request->hasFile('image')){
            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $filename=time().'.'.$ext;
            $file->move('assets/uploads/product/',$filename);
            $product->image=$filename;
        }
       
       $product->category_id=$request->input('category_id'); 
       $product->brand_name=$request->input('brand_name'); 
       $product->model_name=$request->input('model_name'); 
       $product->description=$request->input('description');
       $product->original_price=$request->input('original_price');
       $product->offer=$request->input('offer')==TRUE?'1':'0'; 
       $product->selling_price=$request->input('selling_price');
       $product->quantity=$request->input('quantity');
       $product->trending=$request->input('trending')==TRUE?'1':'0'; 
       $product->ram=$request->input('ram'); 
       $product->processor=$request->input('processor'); 
       $product->storage=$request->input('storage'); 
       $product->type=$request->input('type')==TRUE?'1':'0';
       $product->ports=$request->input('ports'); 
       $product->graphic=$request->input('graphic'); 
       $product->display=$request->input('display'); 
       $product->color=$request->input('color'); 
       $product->chipset=$request->input('chipset'); 
       $product->memory_slots=$request->input('memory_slots'); 
       $product->operating_system=$request->input('operating_system'); 
       $product->other_info=$request->input('other_info'); 
       $product->save();
       return redirect('add-product')->with('status',"Product added Successful");
    }

    public function laptop(){
       
        $laptop=Product::all();
        if(request()->get('id')){
            
            $id=$_GET['id'];
            
            $laptop=Product::where('id', $id)->get();
            return view('admin.product.laptop',compact('laptop'));
          
        }else{

            return view('admin.product.laptop',compact('laptop'));
        }
            
        
        
    }

    public function desktop(){
        $desktop=Product::all();
        if(request()->get('id')){
            
            $id=$_GET['id'];
            
            $desktop=Product::where('id', $id)->get();
            return view('admin.product.desktop',compact('desktop'));
          
        }else{

            return view('admin.product.desktop',compact('desktop'));
        }
        
    }

    public function printer(){
        $printer=Product::all();
        if(request()->get('product_id')){
            
            $id=$_GET['product_id'];
            
            $printer=Product::where('product_id', $id)->get();
            return view('admin.product.printer',compact('printer'));
          
        }else{

            return view('admin.product.printer',compact('printer'));
        }
        
    }

    public function phone(){
        $phone=Product::all();
        if(request()->get('product_id')){
            
            $id=$_GET['product_id'];
            
            $phone=Product::where('product_id', $id)->get();
            return view('admin.product.phones',compact('phone'));
          
        }else{

            return view('admin.product.phones',compact('phone'));
        }
        
    }

    public function special(){
       
        $special=Product::where('offer','1')->get();
        if(request()->get('id')){
            
            $id=$_GET['id'];
            
            $special=Product::where('id', $id)->get();
            return view('admin.product.special',compact('special'));
          
        }else{

            return view('admin.product.special',compact('special'));
        }
            
        
        
    }

    public function edit($id){
        
        $product=Product::find($id);
        return view('admin.product.edit',compact('product'));
    }

    public function update(Request $request,$id){
        $product=Product::find($id);
        if($request->hasFile('image')){
            $path='assets/uploads/product/'.$product->image;
            if(File::exists($path)){
                File::delete($path);
            }
            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $filename=time().'.'.$ext;
            $file->move('assets/uploads/product/'.$filename);
            $product->image=$filename;
        }
          
        $product->brand_name=$request->input('brand_name'); 
        $product->model_name=$request->input('model_name'); 
        $product->description=$request->input('description');
        $product->original_price=$request->input('original_price');
        $product->offer=$request->input('offer')==TRUE?'1':'0'; 
        $product->selling_price=$request->input('selling_price');
        $product->quantity=$request->input('quantity'); 
        $product->trending=$request->input('trending')==TRUE?'1':'0';  
        $product->ram=$request->input('ram'); 
        $product->processor=$request->input('processor'); 
        $product->storage=$request->input('storage'); 
        $product->type=$request->input('type')==TRUE?'1':'0'; 
        $product->ports=$request->input('ports'); 
        $product->graphic=$request->input('graphic'); 
        $product->display=$request->input('display'); 
        $product->color=$request->input('color'); 
        $product->chipset=$request->input('chipset'); 
        $product->memory_slots=$request->input('memory_slots'); 
        $product->operating_system=$request->input('operating_system'); 
        $product->other_info=$request->input('other_info'); 
        $product->update();
        return redirect('add-product')->with('status',"Product updated Successful");

    }

    public function destroy($id){
        $product=Product::find($id);
        if($product?->image){
            $path='assets/uploads/product/'.$product->image;
            if(File::exists($path)){
                File::delete($path);
            }
        }
        $product?->delete();
        return redirect('add-product')->with('status',"Product Deleted Successful");

    }

}
