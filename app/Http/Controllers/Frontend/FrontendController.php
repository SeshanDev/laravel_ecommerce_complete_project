<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\Rating;
use App\Models\Review;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;


class FrontendController extends Controller
{
    public function index(){
        $category_details=Category::first();
        $product_details=Product::get();
        return view('frontend.index',compact('product_details','category_details'));
        
    }

    public function allcategory(){
        $category_details=Category::get();
        return view('frontend.category',compact('category_details'));
        
    }

    public function category($name){
       
        if(Category::where('name',$name)->exists()){
            $category=Category::where('name',$name)->first();
            $products=Product::where('category_id',$category->id)->get();
            if(request()->has('brand_name')){
                $brand=$_GET['brand_name'];
                $products=Product::where('brand_name',$brand)->where('category_id','1')->get();
            }elseif(request()->has('ram')){
                $ram=$_GET['ram'];
                $products=Product::where('ram', $ram)->where('category_id','1')->get();
            }elseif(request()->has('processor')){
                $processor=$_GET['processor'];
                $products=Product::where('processor', $processor)->where('category_id','1')->get();
            }
            elseif(request()->has('asc')){
                $products=Product::orderBy('selling_price','asc')->where('category_id','1')->get();
            }elseif(request()->has('desc')){
                $products=Product::orderBy('selling_price','desc')->where('category_id','1')->get();
            }elseif(request()->has('min')){
                $products=Product::whereBetween('selling_price', [50000, 150000])->where('category_id','1')->get();
            }elseif(request()->has('medium')){
                $products=Product::whereBetween('selling_price', [150000, 250000])->where('category_id','1')->get();
            }elseif(request()->has('max')){
                $products=Product::where('selling_price', '>',250000)->where('category_id','1')->get();
            }elseif(request()->has('stock')){
                $products=Product::where('quantity', '>', 0)->where('category_id','1')->get();
            }elseif(request()->has('outofstock')){
                $products=Product::where('quantity', '=', 0)->where('category_id','1')->get();
            }elseif(request()->has('all')){
                $products=Product::where('category_id',$category->id)->where('category_id','1')->get();
            }
            

            elseif(request()->has('brand_name_desk')){
                $brand=$_GET['brand_name_desk'];
                $products=Product::where('brand_name',$brand)->where('category_id','2')->get();
            }elseif(request()->has('ram_desk')){
                $ram=$_GET['ram_desk'];
                $products=Product::where('ram', $ram)->where('category_id','2')->get();
            }elseif(request()->has('processor_desk')){
                $processor=$_GET['processor_desk'];
                $products=Product::where('processor', $processor)->where('category_id','2')->get();
            }elseif(request()->has('asc_desk')){
                $products=Product::orderBy('selling_price','asc')->where('category_id','2')->get();
            }elseif(request()->has('desc_desk')){
                $products=Product::orderBy('selling_price','desc')->where('category_id','2')->get();
            }elseif(request()->has('min_desk')){
                $products=Product::whereBetween('selling_price', [50000, 150000])->where('category_id','2')->get();
            }elseif(request()->has('medium_desk')){
                $products=Product::whereBetween('selling_price', [150000, 250000])->where('category_id','2')->get();
            }elseif(request()->has('max_desk')){
                $products=Product::where('selling_price','>',250000)->where('category_id','2')->get();
            }elseif(request()->has('stock_desk')){
                $products=Product::where('quantity', '>', 0)->where('category_id','2')->get();
            }elseif(request()->has('outofstock_desk')){
                $products=Product::where('quantity', '=', 0)->where('category_id','2')->get();
            }
            
            
            elseif(request()->has('brand_name_printers')){
                $brand=$_GET['brand_name_printers'];
                $products=Product::where('brand_name',$brand)->where('category_id','3')->get();
            }elseif(request()->has('asc_print')){
                $products=Product::orderBy('selling_price','asc')->where('category_id','3')->get();
            }elseif(request()->has('desc_print')){
                $products=Product::orderBy('selling_price','desc')->where('category_id','3')->get();
            }elseif(request()->has('min_print')){
                $products=Product::whereBetween('selling_price', [50000, 150000])->where('category_id','3')->get();
            }elseif(request()->has('medium_print')){
                $products=Product::whereBetween('selling_price', [150000, 250000])->where('category_id','3')->get();
            }elseif(request()->has('max_print')){
                $products=Product::where('selling_price','>',250000)->where('category_id','3')->get();
            }elseif(request()->has('stock_print')){
                $products=Product::where('quantity', '>', 0)->where('category_id','3')->get();
            }elseif(request()->has('outofstock_print')){
                $products=Product::where('quantity', '=', 0)->where('category_id','3')->get();
            }


            elseif(request()->has('brand_name_mobile')){
                $brand=$_GET['brand_name_mobile'];
                $products=Product::where('brand_name',$brand)->where('category_id','4')->get();
            }elseif(request()->has('asc_mobile')){
                $products=Product::orderBy('selling_price','asc')->where('category_id','4')->get();
            }elseif(request()->has('desc_mobile')){
                $products=Product::orderBy('selling_price','desc')->where('category_id','4')->get();
            }elseif(request()->has('min_mobile')){
                $products=Product::whereBetween('selling_price', [10000, 100000])->where('category_id','4')->get();
            }elseif(request()->has('medium_mobile')){
                $products=Product::whereBetween('selling_price', [100000, 150000])->where('category_id','4')->get();
            }elseif(request()->has('max_mobile')){
                $products=Product::where('selling_price','>',150000)->where('category_id','4')->get();
            }elseif(request()->has('stock_mobile')){
                $products=Product::where('quantity', '>', 0)->where('category_id','4')->get();
            }elseif(request()->has('outofstock_mobile')){
                $products=Product::where('quantity', '=', 0)->where('category_id','4')->get();
            }
            else{
                $products=Product::where('category_id',$category->id)->get();
            }
          
            return view('frontend.products.index',compact('category','products'));
            
         
        }else{
            return redirect('/')->with('status',"Does not exists ");
        }

        
    
        
    }

    public function productview($name,$model_name){
        if(Category::where('name',$name)->exists()){
            if(Product::where('model_name',$model_name)->exists()){
                $products=Product::where('model_name',$model_name)->first();
                $ratings=Rating::where('product_id',$products->id)->get();
                $rating_sum=Rating::where('product_id',$products->id)->sum('stars_rated');
                $user_rating=Rating::where('product_id',$products->id)->where('user_id',Auth::id())->first();
                $reviews=Review::where('product_id',$products->id)->get();
                if($ratings->count()>0){
                    $rating_value=$rating_sum/$ratings->count();
                }else{
                    $rating_value=0;
                }
                
                return view('frontend.products.view',compact('products','ratings','rating_value','user_rating','reviews'));
            }else{
                return redirect('/')->with('warn','The link was broken');
            }
        }else{
            return redirect('/')->with('warn',"Category does not exists");
        }

    }
    
    public function productlistAjax(){
        $products=Product::select('model_name','brand_name')->get();
        $data=[];

        foreach($products as $item){
            $data[]=$item['model_name'];
            $data[]=$item['brand_name'];
            
        }

        return $data;
    }

    public function searchproduct(Request $request){
        $searched_product=$request->product_name;
        if($searched_product!=""){
            $product=Product::where("model_name","LIKE","%$searched_product%")->first();
            $product2=Product::where("brand_name","LIKE","%$searched_product%")->first();
            
            if($product){
                return redirect('category/'.$product->category->name.'/'.$product->model_name);
            }
            else{
                return redirect()->back()->with('warn',"Product does not exists");
            }
            
        }else{
            return redirect()->back();
        }
    }
    
    public function search(Request $request){
        $brand_name=$request->brand_name;
        $ram=$request->ram;
        $brand=Product::where("brand_name","LIKE","%$brand_name%")->get();
        $ram=Product::where("ram","LIKE","%$ram%")->get();
        $category=Category::select('name')->get();
        if($brand&&$ram){
            return view('frontend.products.filter',compact('brand','category','ram'));
        }
    }
    
   public function offer(){
       $category=Category::first();
       $products=Product::where('offer','1')->get();

       return view('frontend.products.offer',compact('category','products'));
   }

   public function aboutus(){
    return view('frontend.aboutus');
}

   
   
}
