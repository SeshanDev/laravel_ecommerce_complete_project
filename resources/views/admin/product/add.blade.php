@extends('layouts.admin')
@section('title')
   Add Product

@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Add Product</h4>
        </div>
        <div class="card-body">
            <form action="{{url ('insert-product')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-3 mb-3">
                    <label for="">Select a Category</label>
                    <select class="form-select" name="category_id">
                        <option value="">Categories</option>
                        @foreach($category as $item)
                         
                             <option value="{{$item->id}}">{{$item->name}}</option>
                          
                        @endforeach
                    </select>
                </div>

                

                <div class="col-md-3 mb-3">
                    <label for="">Brand Name</label>
                    <select class="form-select" name="brand_name">
                        <option value="">Brand names</option>
                        <option value="Asus">Asus</option>
                        <option value="Acer">Acer</option>
                        <option value="Apple">Apple</option>
                        <option value="Canon">Canon</option>
                        <option value="Dell">Dell</option>
                        <option value="Epson">Epson</option>
                        <option value="HP">Hp</option>
                        <option value="Huawei">Huawei</option>
                        <option value="HTC">HTC</option>
                        <option value="Lenovo">Lenovo</option>
                        <option value="MSI">MSI</option>
                        <option value="Samsung">Samsung</option>
                        <option value="Toshiba">Toshiba</option>
                        <option value="Nokia">Nokia</option>
                        <option value="Poco">Poco</option>
                        <option value="Redmi">Redmi</option>
                        <option value="Xerox">Xerox</option>
                        
                    </select>
                </div>

                <div class="col-md-12 mb-3">
                    <label for="">Model Name</label>
                    <input type="text" class="form-control" name="model_name" required>
                </div>

                <div class="col-md-12 mb-3">
                    <label for="">Description</label>
                    <textarea name="description" rows="3" class="form-control" required></textarea>
                </div>
                
                <div class="col-md-6 mb-3">
                    <label for="">Original Price</label>
                    <input type="number" name="original_price">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="">Special Offer</label>
                    <input type="checkbox" name="offer">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="">Selling Price</label>
                    <input type="number" name="selling_price" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="">Quantitiy</label>
                    <input type="number" name="quantity" required>
                </div>


                <div class="col-md-6 mb-3">
                    <label for="">Trending</label>
                    <input type="checkbox" name="trending">
                </div>
                
                <h5>For Laptops/Desktops/Mobile Phones</h5>
                
                <div class="col-md-2 mb-3">
                    <label for="">Ram</label>
                    <select class="form-select" name="ram">
                        <option value="">Choose a Ram</option>
                        <option value="2GB">2GB</option>
                        <option value="4GB">4GB</option>
                        <option value="8GB">8GB</option>
                        <option value="16GB">12GB</option>
                        <option value="16GB">16GB</option>
                        <option value="32GB">32GB</option>
                    </select>

                </div>

                <div class="col-md-2 mb-3">
                    <label for="">Processor</label>
                    <select class="form-select" name="processor">
                        <option value="">Choose a Processor</option>
                        <option value="Intel core i3">Intel core i3</option>
                        <option value="Intel core i5">Intel core i5</option>
                        <option value="Intel core i7">Intel core i7</option>
                        <option value="Intel core i9">Intel core i9</option>
                        <option value="AMD Ryzen 3">AMD Ryzen 3</option>
                        <option value="AMD Ryzen 5">AMD Ryzen 5</option>
                        <option value="AMD Ryzen 7">AMD Ryzen 7</option>
                        <option value="AMD Ryzen 9">AMD Ryzen 9</option>
                    </select>

                </div>

                <div class="col-md-3 mb-3">
                    <label for="">Storage</label>
                    <select class="form-select" name="storage">
                        <option value="">Choose a Stoarge</option>
                        <option value="1TB SSD">1TB SSD</option>
                        <option value="512GB SSD">512GB SSD</option>
                        <option value="256GB SSD">256GB SSD</option>
                        <option value="1TB HDD+128GB SSD">1TB HDD+128GB SSD</option>
                        <option value="1TB HDD">1TB HDD</option>
                        
                    </select>

                </div>

                <div class="col-md-6 mb-3">
                    <label for="">Type(Gaming)</label>
                    <input type="checkbox" name="type">
                </div>

              
                <div class="col-md-12 mb-3">
                    <label for="">Ports</label>
                    <input type="text" class="form-control" name="ports">
                </div>

                <div class="col-md-12 mb-3">
                    <label for="">Graphic</label>
                    <input type="text" class="form-control" name="graphic">
                </div>
                
                <div class="col-md-12 mb-3">
                    <label for="">Display</label>
                    <input type="text" class="form-control" name="display">
                </div>

                <div class="col-md-12 mb-3">
                    <label for="">Color</label>
                    <input type="text" class="form-control" name="color">
                </div>
                
                <div class="col-md-12 mb-3">
                    <label for="">Chipset</label>
                    <input type="text" class="form-control" name="chipset">
                </div>
                
                <div class="col-md-12 mb-3">
                    <label for="">Memory Slots</label>
                    <input type="text" class="form-control" name="memory_slots">
                </div>

                <div class="col-md-12 mb-3">
                    <label for="">Operating System</label>
                    <input type="text" class="form-control" name="operating_system">
                </div>
                
                <div class="col-md-12 mb-3">
                    <label for="">Other Information</label>
                    <textarea name="other_info" rows="3" class="form-control"></textarea>
                </div>

                <div class="col-md-12">
                    <input type="file" name="image" class="form-control" required>
                    
                </div>
   
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

                
            </div>
            </form>
        </div>
    </div>    
@endsection