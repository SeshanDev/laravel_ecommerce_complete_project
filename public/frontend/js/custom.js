$(document).ready(function(){

loadcart();
loadwishlist();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
    });

    function loadcart(){
        $.ajax({
            method: "GET",
            url: "/load-cart-data",
            
            
            success: function (response) {
                $('.cart-count').html('');
                $('.cart-count').html(response.count);
               
            }
        });
    }

    function loadwishlist(){
        $.ajax({
            method: "GET",
            url: "/load-wishlist-data",
            
            
            success: function (response) {
                $('.wishlist-count').html('');
                $('.wishlist-count').html(response.count);
               
            }
        });
    }

    $('.addToCartBtn').click(function(e){
        e.preventDefault();

        var product_id=$(this).closest('.product_data').find('.prod_id').val();

        var product_quantity=$(this).closest('.product_data').find('.qty-input').val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
        });

        $.ajax({
            method: "POST",
            url: "/addtocart",
            data: {
                "product_id":product_id,
                "product_quantity":product_quantity,
            },
            
            success: function (response) {
                // alert(response.status);
                if(response.warn){
                    swal({
                        title: response.warn,
                        icon: "warning",
                        button: "OK",
                        dangerMode: true,
                    });
                }
                else{
                    swal({
                        title: response.status,
                        icon: "success",
                        button: "OK",
                    });
                }
                loadcart();
            }
        });

    });
    
    $('.addtowishlist').click(function (e){
        e.preventDefault();
        var product_id=$(this).closest('.product_data').find('.prod_id').val();
        var product_quantity=$(this).closest('.product_data').find('.qty-input').val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
        });

        $.ajax({
            method: "POST",
            url: "/addtowishlist",
            data: {
                'product_id':product_id,
            },
            success:function(response){
            if(response.warn){
                swal({
                    title: response.warn,
                    icon: "warning",
                    button: "OK",
                    dangerMode: true,
                });
            }
            else{
                swal({
                    title: response.status,
                    icon: "success",
                    button: "OK",
                });
            }
            loadwishlist();
               
            }
       });
    });

    //$('.increment-btn').click(function(e){
    $(document).on('click','.increment-btn', function (e) {
        e.preventDefault();
       
        var increment_value=$(this).closest('.product_data').find('.qty-input').val();
        var value=parseInt(increment_value,10);
        value=isNaN(value)? 0:value;
        if(value<10){
            value++;
            $(this).closest('.product_data').find('.qty-input').val(value);
        }
    });


    //$('.decrement-btn').click(function(e){
    $(document).on('click','.decrement-btn', function (e) {
        e.preventDefault();
       
        var decrement_value=$(this).closest('.product_data').find('.qty-input').val();
        var value=parseInt(decrement_value,10);
        value=isNaN(value) ? 0:value;
        if(value>1){
            value--;
            $(this).closest('.product_data').find('.qty-input').val(value);
            
        }
    });


    //$('.deletecartitem').click(function(e){
    $(document).on('click','.deletecartitem', function (e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
        });

        var product_id=$(this).closest('.product_data').find('.prod_id').val();
        $.ajax({
            method: "POST",
            url: "/deletecartitem",
            data: {
                "product_id":product_id,
                
            },
            
            success: function (response) {
                //window.location.reload();
                
                loadcart();
                if(response.warn){
                    swal({
                        title: response.warn,
                        icon: "warning",
                        button: "OK",
                        dangerMode: true,
                    });
                }
                else{
                    swal({
                        title: response.status,
                        icon: "success",
                        button: "OK",
                    });
                }
                $('.cartitems').load(location.href+" .cartitems");

                
            }
        });

    });

    //$('.removewishlistitem').click(function(e){
    $(document).on('click','.removewishlistitem', function (e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
        });

        var product_id=$(this).closest('.product_data').find('.prod_id').val();
        $.ajax({
            method: "POST",
            url: "/deletewishlistitem",
            data: {
                "product_id":product_id,
                
            },
            
            success: function (response) {
                
                //window.location.reload();
                loadwishlist();
                if(response.warn){
                    swal({
                        title: response.warn,
                        icon: "warning",
                        button: "OK",
                        dangerMode: true,
                    });
                }
                else{
                    swal({
                        title: response.status,
                        icon: "success",
                        button: "OK",
                    });
                }
                $('.wishlistitems').load(location.href+" .wishlistitems");
                
                
            }
        });

    });

    

    //$('.changequantity').click(function(e){
    $(document).on('click','.changequantity', function (e) {
        e.preventDefault();
        
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
        });

           
        var product_id=$(this).closest('.product_data').find('.prod_id').val();
        var product_quantity=$(this).closest('.product_data').find('.qty-input').val();

        data={
            'product_id':product_id,
            'product_quantity':product_quantity,
        }

        $.ajax({
            method: "POST",
            url: "/updatecart",
            data: data,
            
            success: function (response) {
                
                //window.location.reload();
                $('.cartitems').load(location.href+" .cartitems");
                
            }
        });
    });

    // window.onload = function() {
    //     var selItem = sessionStorage.getItem("SelItem");  
    //     $('#brand').val(selItem);
    //     }
    //     $('#brand,#ram').change(function() { 
    //         var selVal = $(this).val();
    //         sessionStorage.setItem("SelItem", selVal);
          

        
    // });

  
    
});





	 
   
