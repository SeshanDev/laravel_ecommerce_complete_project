<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OrderItem;
use App\Models\Order;
use App\Models\Product;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use DB;
class FrontendController extends Controller
{
    public function index(){
        $product= OrderItem::whereDate('created_at', date('Y-m-d'))->get();
        
        $date = Carbon::now();
        $dates = Carbon::createFromDate(2022, 9, 21);
        echo("<script>console.log('PHP: " . $dates . "');</script>");
        while($dates < $date){
        $monthName = $dates->format('F');
        $month = OrderItem::whereMonth('created_at', $dates->addMonth())->get();
        echo("<script>console.log('PHP: " . $monthName . "');</script>");
        return view('admin.index',compact('product','date','month','monthName','dates'));
        $dates->addMonth();
        }
    }

    // public function chart(){
    //     $datas=OrderItem::select(DB::raw('DATE(created_at) as date'), DB::raw('count(*) as total'))
    //     ->groupBy('date')
    //     ->orderBy('date', 'desc')
    //     ->take(7)
    //     ->get();
    //     return view('admin.chart',compact('datas'));

    // }

       
}
