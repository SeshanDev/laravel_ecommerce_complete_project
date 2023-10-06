@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-body">
        <h2>Today Sales - {{$date}}</h2></br>
        <table class="table">
                <thead style="background-color: #565353">
                  <tr>
                    
                    <th  style="text-align: center; color:white;">Product_id</th>
                    <th  style="text-align: center; color:white;">Product_Name</th>
                    <th  style="text-align: center; color:white;">Pieces</th>
                    <th  style="text-align: center; color:white;">Total Price</th>
                    <th  style="text-align: center; color:white;">Time</th>
                  </tr>
                </thead>
                @php $total=0; @endphp
                <tbody>
                  @foreach($product as $pr)
                  <tr>
                  
                   <td style="text-align: center; color:black;"> 
                    {{$pr->product_id}}
                   </td>
                   
                  <td style="text-align: center; color:black;">
                    {{$pr->products->brand_name}} {{$pr->products->model_name}}
                  </td>

                  <td style="text-align: center; color:black;"> 
                    {{$pr->quantity}}
                   </td>

                   <td style="text-align: center; color:black;"> 
                    {{$pr->price}}
                   </td>

                   <td style="text-align: center; color:black;">
                    {{date('H:i:s',strtotime($pr->created_at))}}
                   </td>
                  </tr>
                  @php
                    
                    $total=$total+$pr->price;
                  @endphp
                  @endforeach
                </tbody>
              </table>
             </br><h3 style="color:red">Today Total Income: Rs.{{$total}}.00/=</h3><br/><br/><hr>





             <h2>Monthly Sales</h2></br>
             <table class="table">
                     <thead style="background-color: #565353">
                       <tr>
                         
                         <th  style="text-align: center; color:white;">Sold Products Quantity</th>
                         <th  style="text-align: center; color:white;">Total Income</th>
                         <th  style="text-align: center; color:white;">Month</th>
                       </tr>
                     </thead>
                     @php $total=0; @endphp
                     
                     <tbody>
                    
                       @php $tot=0;$total=0; @endphp
                       @foreach($month as $quanty)
                          @php $tot=$tot+$quanty->quantity @endphp
                       @endforeach

                       @foreach($month as $price)
                          @php $total=$total+$price->price @endphp
                       @endforeach
                       <tr>
                       
                        <td style="text-align: center; color:black;"> 
                          {{$tot}}
                          
                        </td>
                        
                        <td style="text-align: center; color:black;">
                          {{$total}}
                        </td>

                        <td style="text-align: center; color:black;">
                          {{$monthName}}
                        </td>
     
                       
     
                        
                       </tr>
                       @php
                         
                         
                       @endphp
                       
                     </tbody>
                   </table>
                  </br><h3 style="color:red">Month Total Income: Rs.{{$total}}.00/=</h3>

           
              
        </div>          
    </div>   
    
    
@endsection