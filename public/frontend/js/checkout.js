$(document).ready(function () {
    $('.pay_btn').click(function (e){
        e.preventDefault();
       
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
        });
        
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
            city_error = "City is required";
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
                success: function(response) {
                    //alert(response.total_price);
               
                    var options = {
                        "key": "rzp_test_ZnnHvOBH0VvmIZ", // Enter the Key ID generated from the Dashboard
                        "amount": response.total_price*100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
                        "currency": "LKR",
                        "name": response.firstname+' '+response.lastname,
                        "description": "Tec Com Pay",
                        //"order_id": "order_9A33XWu170gUtm", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
                        "handler": function (responsea){
                            //alert(responsea.razorpay_payment_id);
                            $.ajax({
                                type: "POST",
                                url: "/place-order",
                                data: {
                                    "fname":response.firstname,
                                    "lname":response.lastname,
                                    "email":response.email,
                                    "phone":response.phone,
                                    "address":response.address,
                                    "city":response.city,
                                    "payment_mode":"Online Payment",
                                    "payment_id":responsea.razorpay_payment_id,
                                },
                                
                                success: function (responseb) {
                                    //alert(responseb.status)
                                    swal(responseb.status);
                                    windows.location.href="/my-orders";
                                }
                            });
                            
                        },
                        "prefill": {
                            "name": response.firstname+' '+response.lastname,
                            "email": response.email,
                            "contact": response.phone
                        },
                        
                        "theme": {
                            "color": "#ff0000"
                        }
                    };
                    var rzp1 = new Razorpay(options);
                    rzp1.open();
               
                    

                    
                        
                }   
                
                
                
            });
        }
        
        
    });
});