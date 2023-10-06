@extends('layouts.front')


<link rel="stylesheet" href="{{ asset('frontend/css/card.css') }}">
@section('title')
{{$category->name}}

@endsection

@section('content')
<div class="container">
<div class="py-5">
        <h1 class="text-center text-uppercase"><b>{{$category->name}}</b></h1><hr/>
              @if($category->id=='1')
              {{-- <div class="container"> --}}
               <div class="card">
                
                  <h3 class="text-center">FILTER YOUR CHOICE</h3><br/>
                  <div class="container">
                   
                      <div class="row">
                          <div class="col">
                            
                          <h6>By Brand Name</h6>
                          <form action="{{URL::current()}}" method="GET">
                            @csrf
                            <div class="col-md-8 mb-4">
                              
                              <select class="form-select" name="brand_name[]" id="brand">
                                <option value="Brand Name">Brand Name</option>
                                <option value="Asus">Asus</option>
                                <option value="Acer">Acer</option>
                                <option value="Apple">Apple</option>
                                <option value="Dell">Dell</option>
                                <option value="HP">Hp</option>
                                <option value="Lenovo">Lenovo</option>
                                <option value="MSI">MSI</option>
                                  
                                
                              </select>
                              <div>
                                <button class="btn btn-outline-dark" type="submit">Filter</button>
                                </div>
                            </div>
                          </form>
                          </div>
                          
                          <div class="col">
                          <h6>By Ram</h6>
                          <form action="{{URL::current()}}" method="GET">
                            @csrf
                            <div class="col-md-6 mb-3">
                              <select class="form-select" name="ram[]" id="ram">
                                <option value="">RAM</option>
                                
                                
                                <option value="4GB">4GB</option>
                                <option value="8GB">8GB</option>
                                <option value="12GB">12GB</option>
                                <option value="16GB">16GB</option>
                                <option value="32GB">32GB</option>
                                
                                 
                              </select>
                              <div>
                                <button class="btn btn-outline-dark" type="submit">Filter</button>
                              </div>
                            </div>
                          </form>
                          </div>

                          <div class="col">
                          <h6>By Processor</h6>
                          <form action="{{URL::current()}}" method="GET">
                            @csrf
                            <div class="col-md-9 mb-3">
                              <select class="form-select" name="processor">
                                 <option value="">Processor</option>
                                 <option value="Intel core i3">Intel core i3</option>
                                 <option value="Intel core i5">Intel core i5</option>
                                 <option value="Intel core i7">Intel core i7</option>
                                 <option value="Intel core i9">Intel core i9</option>
                                 <option value="AMD Ryzen 3">AMD Ryzen 3</option>
                                 <option value="AMD Ryzen 5">AMD Ryzen 5</option>
                                 <option value="AMD Ryzen 7">AMD Ryzen 7</option>
                                 <option value="AMD Ryzen 9">AMD Ryzen 9</option>
                             </select>
                             <div>
                              <button class="btn btn-outline-dark" type="submit">Filter</button>
                            </div>
                            </div>
                          </form>
                          </div>

                          <div class="col">
                            <h6>By Price Order</h6>
                            <form action="{{URL::current()}}" method="GET">
                              @csrf
                              <div class="col-md-10 mb-2">
                                <div class="form-check" name="price">
                                  <input class="form-check-input" name="asc" type="checkbox" value="asc" id="x">
                                  <label class="form-check-label" for="flexCheckDefault">
                                    Price Low-to-High
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" name="desc" type="checkbox" value="desc" id="flexCheckChecked">
                                  <label class="form-check-label" for="flexCheckChecked">
                                    Price High-to-Low
                                  </label>
                                </div>
                                
                               <div>
                                <button class="btn btn-outline-dark" type="submit">Filter</button>
                              </div>
                              </div>
                            </form>
                            </div>

                            <div class="col">
                              <h6>By Price Range</h6>
                              <form action="{{URL::current()}}" method="GET">
                                @csrf
                                <div class="col-md-10 mb-2">
                                  <div class="form-check" name="price">
                                    <input class="form-check-input" name="min" type="checkbox"id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                      50000-150000
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" name="medium" type="checkbox" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked">
                                      150000-250000
                                    </label>
                                  </div>
                                 
                                  <div class="form-check">
                                    <input class="form-check-input" name="max" type="checkbox" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked">
                                      From 250000 Upwards
                                    </label>
                                  </div>
                                 <div>
                                  <button class="btn btn-outline-dark" type="submit">Filter</button>
                                </div>
                                </div>
                              </form>
                              </div>

                              <div class="col">
                                
                                <form action="{{URL::current()}}" method="GET">
                                  @csrf
                                  <div class="col-md-8 mb-2">
                                    <div class="form-check">
                                      <input class="form-check-input" name="all" type="checkbox" id="flexCheckDefault" >
                                      <label class="form-check-label" for="flexCheckDefault">
                                        All
                                      </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" name="stock" type="checkbox" id="flexCheckChecked">
                                      <label class="form-check-label" for="flexCheckChecked">
                                        In Stock
                                      </label>
                                    </div>
                                   
                                    <div class="form-check">
                                      <input class="form-check-input" name="outofstock" type="checkbox" id="flexCheckChecked">
                                      <label class="form-check-label" for="flexCheckChecked">
                                        Out of Stock
                                      </label>
                                    </div>
                                   <div>
                                    <button class="btn btn-outline-dark" type="submit">Filter</button>
                                  </div>
                                  </div>
                                </form>
                                </div>

                      </div>
                    
                  
                  </div>
                  
               
                </div>
              </div>
              @endif


              @if($category->id=='2')
              {{-- <div class="container"> --}}
               <div class="card">
                
                  <h3 class="text-center">FILTER YOUR CHOICE</h3><br/>
                  <div class="container">
                   
                      <div class="row">
                          <div class="col">
                            
                          <h6>By Brand Name</h6>
                          <form action="{{URL::current()}}" method="GET">
                            @csrf
                            <div class="col-md-8 mb-4">
                              
                              <select class="form-select" name="brand_name_desk[]">
                                <option value="Brand Name">Brand Name</option>
                                <option value="Dell">Dell</option>
                                <option value="HP">Hp</option>
                                <option value="Lenovo">Lenovo</option>
                                  
                                
                              </select>
                              <div>
                                <button class="btn btn-outline-dark" type="submit">Filter</button>
                                </div>
                            </div>
                          </form>
                          </div>
                          
                          <div class="col">
                          <h6>By Ram</h6>
                          <form action="{{URL::current()}}" method="GET">
                            @csrf
                            <div class="col-md-6 mb-3">
                              <select class="form-select" name="ram_desk[]">
                                <option value="">RAM</option>
                                
                                
                                <option value="4GB">4GB</option>
                                <option value="8GB">8GB</option>
                                <option value="12GB">12GB</option>
                                <option value="16GB">16GB</option>
                                <option value="32GB">32GB</option>
                                
                                 
                              </select>
                              <div>
                                <button class="btn btn-outline-dark" type="submit">Filter</button>
                              </div>
                            </div>
                          </form>
                          </div>

                          <div class="col">
                          <h6>By Processor</h6>
                          <form action="{{URL::current()}}" method="GET">
                            @csrf
                            <div class="col-md-8 mb-3">
                              <select class="form-select" name="processor_desk">
                                 <option value="">Processor</option>
                                 <option value="Intel core i3">Intel core i3</option>
                                 <option value="Intel core i5">Intel core i5</option>
                                 <option value="Intel core i7">Intel core i7</option>
                                 <option value="Intel core i9">Intel core i9</option>
                                 <option value="AMD Ryzen 3">AMD Ryzen 3</option>
                                 <option value="AMD Ryzen 5">AMD Ryzen 5</option>
                                 <option value="AMD Ryzen 7">AMD Ryzen 7</option>
                                 <option value="AMD Ryzen 9">AMD Ryzen 9</option>
                             </select>
                             <div>
                              <button class="btn btn-outline-dark" type="submit">Filter</button>
                            </div>
                            </div>
                          </form>
                          </div>

                          <div class="col">
                            <h6>By Price Order</h6>
                            <form action="{{URL::current()}}" method="GET">
                              @csrf
                              <div class="col-md-10 mb-2">
                                <div class="form-check" name="price">
                                  <input class="form-check-input" name="asc_desk" type="checkbox" value="asc" id="flexCheckDefault">
                                  <label class="form-check-label" for="flexCheckDefault">
                                    Price Low-to-High
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" name="desc_desk" type="checkbox" value="desc" id="flexCheckChecked">
                                  <label class="form-check-label" for="flexCheckChecked">
                                    Price High-to-Low
                                  </label>
                                </div>
                                
                               <div>
                                <button class="btn btn-outline-dark" type="submit">Filter</button>
                              </div>
                              </div>
                            </form>
                            </div>

                            <div class="col">
                              <h6>By Price Range</h6>
                              <form action="{{URL::current()}}" method="GET">
                                @csrf
                                <div class="col-md-10 mb-2">
                                  <div class="form-check" name="price">
                                    <input class="form-check-input" name="min_desk" type="checkbox"id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                      50000-150000
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" name="medium_desk" type="checkbox" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked">
                                      150000-250000
                                    </label>
                                  </div>
                                 
                                  <div class="form-check">
                                    <input class="form-check-input" name="max_desk" type="checkbox" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked">
                                      From 250000 Upwards
                                    </label>
                                  </div>
                                 <div>
                                  <button class="btn btn-outline-dark" type="submit">Filter</button>
                                </div>
                                </div>
                              </form>
                              </div>

                              <div class="col">
                                
                                <form action="{{URL::current()}}" method="GET">
                                  @csrf
                                  <div class="col-md-8 mb-2">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" id="flexCheckDefault" >
                                      <label class="form-check-label" for="flexCheckDefault">
                                        All
                                      </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" name="stock_desk" type="checkbox" id="flexCheckChecked">
                                      <label class="form-check-label" for="flexCheckChecked">
                                        In Stock
                                      </label>
                                    </div>
                                   
                                    <div class="form-check">
                                      <input class="form-check-input" name="outofstock_desk" type="checkbox" id="flexCheckChecked">
                                      <label class="form-check-label" for="flexCheckChecked">
                                        Out of Stock
                                      </label>
                                    </div>
                                   <div>
                                    <button class="btn btn-outline-dark" type="submit">Filter</button>
                                  </div>
                                  </div>
                                </form>
                                </div>

                      </div>
                    
                  
                  </div>
                  
               
                </div>
              </div>
              @endif


              @if($category->id=='3')
              {{-- <div class="container"> --}}
               <div class="card">
                
                  <h3 class="text-center">FILTER YOUR CHOICE</h3><br/>
                  <div class="container">
                   
                      <div class="row">
                          <div class="col">
                            
                          <h6>By Brand Name</h6>
                          <form action="{{URL::current()}}" method="GET">
                            @csrf
                            <div class="col-md-8 mb-4">
                              
                              <select class="form-select" name="brand_name_printers[]">
                                <option value="Brand Name"><b>Brand Name</b></option>
                                <option value="Canon">Canon</option>
                                <option value="Epson">Epson</option>
                                <option value="HP">Hp</option>
                                <option value="Toshiba">Toshiba</option>
                                <option value="Xerox">Xerox</option>
                              </select>
                              <div>
                                <button class="btn btn-outline-dark" type="submit">Filter</button>
                                </div>
                            </div>
                          </form>
                          </div>
                          

                          <div class="col">
                            <h6>By Price Order</h6>
                            <form action="{{URL::current()}}" method="GET">
                              @csrf
                              <div class="col-md-10 mb-2">
                                <div class="form-check" name="price">
                                  <input class="form-check-input" name="asc_print" type="checkbox" value="asc" id="flexCheckDefault">
                                  <label class="form-check-label" for="flexCheckDefault">
                                    Price Low-to-High
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" name="desc_print" type="checkbox" value="desc" id="flexCheckChecked">
                                  <label class="form-check-label" for="flexCheckChecked">
                                    Price High-to-Low
                                  </label>
                                </div>
                                
                               <div>
                                <button class="btn btn-outline-dark" type="submit">Filter</button>
                              </div>
                              </div>
                            </form>
                            </div>

                            <div class="col">
                              <h6>By Price Range</h6>
                              <form action="{{URL::current()}}" method="GET">
                                @csrf
                                <div class="col-md-10 mb-2">
                                  <div class="form-check" name="price">
                                    <input class="form-check-input" name="min_print" type="checkbox"id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                      50000-150000
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" name="medium_print" type="checkbox" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked">
                                      150000-250000
                                    </label>
                                  </div>
                                 
                                  <div class="form-check">
                                    <input class="form-check-input" name="max_print" type="checkbox" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked">
                                      From 250000 Upwards
                                    </label>
                                  </div>
                                 <div>
                                  <button class="btn btn-outline-dark" type="submit">Filter</button>
                                </div>
                                </div>
                              </form>
                              </div>

                              <div class="col">
                                
                                <form action="{{URL::current()}}" method="GET">
                                  @csrf
                                  <div class="col-md-8 mb-2">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" id="flexCheckDefault" >
                                      <label class="form-check-label" for="flexCheckDefault">
                                        All
                                      </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" name="stock_print" type="checkbox" id="flexCheckChecked">
                                      <label class="form-check-label" for="flexCheckChecked">
                                        In Stock
                                      </label>
                                    </div>
                                   
                                    <div class="form-check">
                                      <input class="form-check-input" name="outofstock_print" type="checkbox" id="flexCheckChecked">
                                      <label class="form-check-label" for="flexCheckChecked">
                                        Out of Stock
                                      </label>
                                    </div>
                                   <div>
                                    <button class="btn btn-outline-dark" type="submit">Filter</button>
                                  </div>
                                  </div>
                                </form>
                                </div>

                      </div>
                    
                  
                  </div>
                  
               
                </div>
              </div>
              @endif
             

              
              @if($category->id=='4')
              {{-- <div class="container"> --}}
               <div class="card">
                
                  <h3 class="text-center">FILTER YOUR CHOICE</h3><br/>
                  <div class="container">
                   
                      <div class="row">
                          <div class="col">
                            
                          <h6>By Brand Name</h6>
                          <form action="{{URL::current()}}" method="GET">
                            @csrf
                            <div class="col-md-8 mb-4">
                              
                              <select class="form-select" name="brand_name_mobile[]">
                                <option value="Brand Name">Brand Name</option>
                                <option value="Apple">Apple</option>
                                <option value="Huawei">Huawei</option>
                                <option value="HTC">HTC</option>
                                <option value="LG">LG</option>
                                <option value="Nokia">Nokia</option>
                                <option value="Poco">Poco</option>
                                <option value="Redmi">Redmi</option>
                                <option value="Samsung">Samsung</option>
                                
                              </select>
                              <div>
                                <button class="btn btn-outline-dark" type="submit">Filter</button>
                                </div>
                            </div>
                          </form>
                          </div>
                          
                          <div class="col">
                            <h6>By Price Order</h6>
                            <form action="{{URL::current()}}" method="GET">
                              @csrf
                              <div class="col-md-10 mb-2">
                                <div class="form-check" name="price">
                                  <input class="form-check-input" name="asc_mobile" type="checkbox" value="asc" id="flexCheckDefault">
                                  <label class="form-check-label" for="flexCheckDefault">
                                    Price Low-to-High
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" name="desc_mobile" type="checkbox" value="desc" id="flexCheckChecked">
                                  <label class="form-check-label" for="flexCheckChecked">
                                    Price High-to-Low
                                  </label>
                                </div>
                                
                               <div>
                                <button class="btn btn-outline-dark" type="submit">Filter</button>
                              </div>
                              </div>
                            </form>
                            </div>

                            <div class="col">
                              <h6>By Price Range</h6>
                              <form action="{{URL::current()}}" method="GET">
                                @csrf
                                <div class="col-md-10 mb-2">
                                  <div class="form-check" name="price">
                                    <input class="form-check-input" name="min_mobile" type="checkbox"id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                      10000-100000
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" name="medium_mobile" type="checkbox" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked">
                                      100000-150000
                                    </label>
                                  </div>
                                 
                                  <div class="form-check">
                                    <input class="form-check-input" name="max_mobile" type="checkbox" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked">
                                      From 150000 Upwards
                                    </label>
                                  </div>
                                 <div>
                                  <button class="btn btn-outline-dark" type="submit">Filter</button>
                                </div>
                                </div>
                              </form>
                              </div>

                              <div class="col">
                                
                                <form action="{{URL::current()}}" method="GET">
                                  @csrf
                                  <div class="col-md-8 mb-2">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" id="flexCheckDefault" >
                                      <label class="form-check-label" for="flexCheckDefault">
                                        All
                                      </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" name="stock_mobile" type="checkbox" id="flexCheckChecked">
                                      <label class="form-check-label" for="flexCheckChecked">
                                        In Stock
                                      </label>
                                    </div>
                                   
                                    <div class="form-check">
                                      <input class="form-check-input" name="outofstock_mobile" type="checkbox" id="flexCheckChecked">
                                      <label class="form-check-label" for="flexCheckChecked">
                                        Out of Stock
                                      </label>
                                    </div>
                                   <div>
                                    <button class="btn btn-outline-dark" type="submit">Filter</button>
                                  </div>
                                  </div>
                                </form>
                                </div>

                      </div>
                    
                  
                  </div>
                  
               
                </div>
              </div>
              @endif
            
            <div class="container">
            <div class="row row-cols-1 row-cols-md-2 g-4">
              @foreach($products as $prod)
              
                <div class="col-md-3 mb-0 animate__animated animate__slideInDown">
                  <div class="card h-70 container-fluid bg-trasparent my-4 p-3 shadow-sm">
                    <div class="card-header">
                        @if($prod->quantity>0)
                           <div class="badge bg-success col-12">In Stock</div>
                        @else
                           <span class="badge bg-danger col-12">Out of Stock</span>
                        @endif
                      </div>
                    <img src="{{asset('assets/uploads/product/'.$prod->image)}}" height="200px" alt="Product image">
                    <div class="card-body">
                        <div class="clearfix mb-3">
                            <h6 class="text-center"><b>{{$prod->brand_name}} {{$prod->model_name}}</b></h6> 
                            <p style="font-size: 12px;text-align:center">Product ID - {{$prod->id}}</p>
                            
                            @if($prod->offer==1)
                              <span class="badge bg-danger"><h6 style="align-items: center">SPECIAL PRICE - Rs.{{$prod->selling_price}}.00</h6></span>
                            @else
                              <h5 class="text-center text-danger"><b>Rs.{{$prod->selling_price}}.00</b></h5>
                            @endif
                            <div class="text-center my-3"> <a href="{{url('category/'.$category->name.'/'.$prod->model_name)}}" class="btn btn-warning" style="text-decoration: none;">See More & Buy</a> </div>
                        </div>
                    </div>
                </div>
                </div>
                
                @endforeach
            </div> 

            
            </div>
            
        
</div>

@endsection
