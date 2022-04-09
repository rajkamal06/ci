localStorage.clear();

function Addtocart(product_id)
{
 var product_id = product_id;
 var user_id = $('#user_id').val();
console.warn(product_id);

 
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          type: 'POST',
          url:'/ci/cart/store',
          
          
          data: {product_id:product_id},
          cache: false,
          success: function (response, textStatus, jqXHR) {
            response= JSON.parse(response);
            if(response.status)
            {
              //alert("hello");

             //toastr.success(response.message);

              //get_cart();

            }
            setTimeout(function(){  $('.cart_message').html(""); },4000);
          },
          error: function(response)
          {
            $(".loader_div").show();
          }

    });


}
function get_cart()
{

  $.ajax({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    type: 'POST',
    url: BASE_URL + '/cart/get-cart',
    cache: false,
    success: function (response, textStatus, jqXHR) {
      $("#cart_count_data").html(response);
    },

    error: function(response)
    {
      $(".loader-div").show();
    }

  });
}




  

  function qty_increment(id)
  {
     
    toastr.options = {
      "closeButton": true,
      "newestOnTop": true,
      "positionClass": "toast-top-right"
    };
    
     var qty = parseInt($("#increment_"+id).val()) + 1;
    


    if(qt_inc >= qty_data){

      var qty = parseInt($("#increment_"+id).val()) + 1;

    }
    else{

      var qty = 1;

    }

   $.ajax({
     headers: {
         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
     },
     type: 'POST',
     url: BASE_URL + '/checkout/checkout-total',
     data: {cart_id:id,qty:qty},
     success: function (response, textStatus, jqXHR) {
      if(response.status == 0)
      {

        toastr.error(response.message);
        
      }else{
       // alert(qty);
        $("#increment_"+id).val(qty);
    
    }

        
     },
     error: function(response)
     {
         $(".preloader").show();
     }
   });

 }

function qty_decrement(id)
  {
  
     //updated by nadeem +1 to -1
     var qty= parseInt($("#increment_"+id).val()) - 1;
    
    // alert($("#increment_"+id).val());
     //$(".preloader").show();
      $.ajax({
     headers: {
         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
     },
     type: 'POST',
     url: BASE_URL + '/checkout/checkout-total',
     data: {cart_id:id,qty:qty},
     success: function (response, textStatus, jqXHR) {
         
      if(response.status == 0)
      {

        toastr.error(response.message);
        
      }else{
          if(qty>=1)
          {
            $("#increment_"+id).val(qty);
          }
    }
     },
     error: function(response)
     {
         $(".preloader").show();
     }
   });

 }

 function delete_cart(id)
{
	var cart_id= id;
    $.ajax({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		},
		type: 'POST',
		url: BASE_URL + '/cart/cart-delete',
		data: {cart_id:cart_id},
		dataType:'json',
		success: function (response, textStatus, jqXHR) {
		     if(response.status)
		     {
		         var successContent = "<div class='alert alert-success'>Item Has been deleted successfully</div>";
                  $('#cart_message').html(successContent);
                  $("#cart_"+cart_id).html("");
                  $("#carts_"+cart_id).html("");
                  location.reload();

		     }
		     else
		     {
		     	     var successContent = "<div class='alert alert-danger'>Please Try again</div>";
                $('#cart_message').html(successContent);
		     }
		     setTimeout(function(){  $('#cart_message').html(""); },8000);
		},
		error: function(response)
		{
			$(".loader_div").show();
		}
      });

 }

 function update_quentity(id)
 {
  var cart_id= id;
  var qty = $("#update_qty_"+id).val();
  
     $.ajax({
     headers: {
       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
     },
     type: 'POST',
     url: BASE_URL + '/checkout/checkout-total',
     data: {qty:qty,cart_id:id},
     dataType:'json',
     success: function (response, textStatus, jqXHR) {
          if(response.status)
          {
              var successContent = "<div class='alert alert-success'>Item Quentity Updated Successfully</div>";
                   $('#cart_message').html(successContent);
              
          }
          else
          {
                 var successContent = "<div class='alert alert-danger'>Please Try again</div>";
                 $('#cart_message').html(successContent);
          }
          setTimeout(function(){  $('#cart_message').html(""); },2000);
     },
     error: function(response)
     {
       $(".loader_div").show();
     }
       });
 
  }


 function add_wishlist(id)
{

  toastr.options = {
    "closeButton": true,
    "newestOnTop": true,
    "positionClass": "toast-top-right"
  };

  var product_id= id; 
  var user = $("#user_id").val();
  
  $(".preloader").show();
  $.ajax({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    type: 'POST',
    url: BASE_URL + '/wishlist-add',
    data: {product_id:product_id,user:user},
    dataType:'json',
    success: function (response, textStatus, jqXHR) {
        $(".preloader").hide();


      if(response.status==1)
         {   
          
          toastr.success(response.message);
          $("#pro_wish_"+product_id).addClass("active");
      
         }
         else if(response.status==0)
         {
          toastr.success(response.message);
          $("#pro_wish_"+product_id).removeClass("active");
          
         }

     
    },
    error: function(response)
    {
      $(".preloader").show();
    }
      });
} 


    function delete_wishlist(id)
    {
//alert('dfhsghs');
      toastr.options = {
        "closeButton": true,
        "newestOnTop": true,
        "positionClass": "toast-top-right"
      };

      var id = id; 

      
      $(".preloader").show();
      $.ajax({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'POST',
        url: BASE_URL + '/wishlist-delete',
        data: {id :id},
        dataType:'json',
        success: function (response, textStatus, jqXHR) {
            $(".preloader").hide();
          if(response.status==1)
            {   
    
              toastr.success(response.message);

              $("#cart_"+id).remove();
              location.reload();
            }
            else if(response.status==0)
            {
              toastr.success(response.message);
            
            }

        
        },
        error: function(response)
        {
          $(".preloader").show();
        }
          });
    } 



    function move_to_wishlist(id)
    {

      toastr.options = {
        "closeButton": true,
        "newestOnTop": true,
        "positionClass": "toast-top-right"
      };

      var id = id; 

      $(".preloader").show();
      $.ajax({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'POST',
        url: BASE_URL + '/move-wishlist',
        data: {id :id},
        dataType:'json',
        success: function (response, textStatus, jqXHR) {
            $(".preloader").hide();
          if(response.status==1)
            {   
    
              toastr.success(response.message);

              $(".cart_move_"+id).remove();

            }
            else if(response.status==0)
            {
              toastr.success(response.message);
            
            }

        
        },
        error: function(response)
        {
          $(".preloader").show();
        }
          });
    } 



    function add_to_buy(id)
	{
// alert(id);
    toastr.options = {
      "closeButton": true,
      "newestOnTop": true,
      "positionClass": "toast-top-right"
    };

      var quantity= $("#qty").val();
       
      // var color = $('.cart_color').val();

      var product_id= $("#product_idId").val();
// alert(product_id);
           $(".preloader").show();
		       $.ajax({
						headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						},
						type: 'POST',
						url: BASE_URL + '/buy/storeCart',
						data: {qty:quantity,product_id:product_id},
					    cache: false,
						success: function (response, textStatus, jqXHR) {
							$(".preloader").hide();
							if(response.status)
							{
								$("#cart_count").text(response.cart_count);

                window.location.href = BASE_URL + '/cart';

               // toastr.success(response.message);
								
                get_cart();
								$(".cart-list").text(response.cart_data);
                
							}
              if(response.status == 0)
							{

								$("#cart_count").text(response.cart_count);
						
                toastr.error(response.message);
								
                get_cart();
								$(".cart-list").text(response.cart_data);
                
							}

						},
						error: function(response)
						{
							$(".preloader").show();

						}

					});


	}


  function cart_update_quentity(id)
  {
    
   var cart_id= id;
   var qty = $("#update_qty_"+id).val();
   
      $.ajax({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      type: 'POST',
      url: BASE_URL + '/checkout/cart-checkout-total',
      data: {qty:qty,cart_id:id},
      dataType:'json',
      success: function (response, textStatus, jqXHR) {
        location.reload();
        //$(".preloader").hide();
        $("#checkout_data_qty").html(response);
      },
      error: function (response) {
        $(".preloader").show();
      },
      error: function(response)
      {
        $(".loader_div").show();
      }
    });
  
   }


   $('.apply_button').click(function () {
    //alert('jhhj');
    var coupon_apply = jQuery(".coupon_apply").val();
    
    var totalAmount = jQuery(".totalAmount").val();

      jQuery.ajax({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: BASE_URL + '/apply-coupon',
        type: 'POST',
        dataType: 'json',
        data: { coupon_apply: coupon_apply, totalAmount:totalAmount },
        success: function (data) {
          console.log(data);
          $(".preloader").hide();
          if (data.success) {
            var successContent = "<div id='success-alert' class='alert alert-success'>Coupon has been applied successfully.</div>";
            $('.amessage').html(successContent);
            $('.amessage').css('color','Green');
             $(".preloader").hide();
            $("#success-alert").fadeTo(1000, 500).slideUp(500, function(){
            $("#success-alert").slideUp(500);
            window.location=BASE_URL +"/cart";
             });

          }
          else {
           var successContent = "<div id='success-alert' class='alert alert-danger'>"+data.message+"</div>";
            $('.amessage').html(successContent);
            $('.amessage').css('color','red');
             $(".preloader").hide();
            $("#success-alert").fadeTo(1000, 500).slideUp(500, function(){
            $("#success-alert").slideUp(500);
             });

          }
        },
        error: function (error) {
          console.log(error);
        }
      });
    
  });


  function remove_coupon(){
    jQuery.ajax({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      url: BASE_URL + '/remove-coupon',
      type: 'POST',
      dataType: 'json',
      success: function (data) {
        console.log(data);
        $(".preloader").hide();
        if (data.success) {
          var successContent = "<div id='success-alert' class='alert alert-success'>Coupon has been removed.</div>";
          $('.cmessage').html(successContent);
          $('.cmessage').css('color','Green');
           $(".preloader").hide();
          $("#success-alert").fadeTo(1000, 500).slideUp(500, function(){
          $("#success-alert").slideUp(500);
          window.location=BASE_URL +"/cart";
           });
  
        }
        else {
         var successContent = "<div id='success-alert' class='alert alert-danger'>Try later</div>";
          $('.cmessage').html(successContent);
          $('.cmessage').css('color','red');
           $(".preloader").hide();
          $("#success-alert").fadeTo(1000, 500).slideUp(500, function(){
          $("#success-alert").slideUp(500);
          window.location=BASE_URL +"/cart";
           });
  
        }
      },
      error: function (error) {
        console.log(error);
      }
    });
  }