if(Category::where('name',$name)->exists()){
    $category=Category::where('name',$name)->first();
    $products=Product::where('category_id',$category->id)->get();
    return view('frontend.products.index',compact('category','products'));
    
}else{
    return redirect('/')->with('status',"Does not exists ");
}
if(request()->get('brand_name')){
               
               $brand=$_GET['brand_name'];
               $products=Product::where('brand_name', $brand)->get();
               
           }
           else{
               $products=Product::where('category_id',$category->id)->get();
           }

<input class="form-control" style="width: 2cm" id="search-product" name="product_name" required type="search" placeholder="Search Products" aria-label="Search">

var firstname = $('.firstname').val();
        var lastname = $('.lastname').val();
        var email = $('.email').val();
        var phone = $('.phone').val();
        var address = $('.address').val();
        var city = $('.city').val();

        if(!firstname){
            fname_error = "First Name is required";
            $('#fname_error').html('');
            $('#fname_error').html(fname_error);
        }else{
            fname_error = "";
            $('#fname_error').html('');
        }

        if(!lastname){
            lname_error = "Last Name is required";
            $('#lname_error').html('');
            $('#lname_error').html(lname_error);
        }else{
            lname_error = "";
            $('#lname_error').html('');
        }

        if(!email){
            email_error = "Email is required";
            $('#email_error').html('');
            $('#email_error').html(email_error);
        }else{
            email_error = "";
            $('#email_error').html('');
        }

        if(!phone){
            phone_error = "Phone Number is required";
            $('#phone_error').html('');
            $('#phone_error').html(phone_error);
        }else{
            phone_error = "";
            $('#phone_error').html('');
        }
        
        if(!address){
            address_error = "Address is required";
            $('#address_error').html('');
            $('#address_error').html(address_error);
        }else{
            address_error = "";
            $('#address_error').html('');
        }
        
        if(!city){
            city_error = "First Name is required";
            $('#city_error').html('');
            $('#city_error').html(city_error);
        }else{
            city_error = "";
            $('#city_error').html('');
        }
        
        if(fname_error!='' || lname_error!='' || email_error!='' || phone_error!='' || address_error!='' || city_error!=''){
            return false;
        }else{
            var data= {
                'firstname':firstname,
                'lastname':lastname,
                'email':email,
                'phone':phone,
                'address':address,
                'city':city
            }
            $.ajax({
                method: "POST",
                url: "/pay",
                data: data,
                success: function (response) {
                    alert(response.total_price);
                }
            });
        }
        
        
    });

    stripe pw- bEKcMLEBr{Bi&38