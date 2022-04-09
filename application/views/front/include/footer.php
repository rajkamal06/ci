
<section class="footer-one section-tb-padding">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="footer-service section-b-padding">
                            <ul class="service-ul">
                                <li class="service-li">
                                    <a href="javascript:void(0)"><i class="fa fa-truck"></i></a>
                                    <span>Free delivery</span>
                                </li>
                                <li class="service-li">
                                    <a href="javascript:void(0)"><i class="fa fa-rupee"></i></a>
                                    <span>Cash on delivery</span>
                                </li>
                                <li class="service-li">
                                    <a href="javascript:void(0)"><i class="fa fa-refresh"></i></a>
                                    <span>30 Days returns</span>
                                </li>
                                <li class="service-li">
                                    <a href="javascript:void(0)"><i class="fa fa-headphones"></i></a>
                                    <span>Online support</span>
                                </li>
                            </ul>
                        </div>
                        <div class="f-logo">
                            <ul class="footer-ul">
                                <li class="footer-li footer-logo">
                                    <a href="index.html">
                                        <img class="img-fluid" src="image/logo1.png" alt="">
                                    </a>
                                </li>
                                <li class="footer-li footer-address">
                                    <ul class="f-ul-li-ul">
                                        <li class="footer-icon">
                                            <i class="ion-ios-location"></i>
                                        </li>
                                        <li class="footer-info">
                                            <h6>Address</h6>
                                            <span>401 Broadway 24th floor
                                            </span>
                                            <span>Near ant mall cross road</span>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer-li footer-contact">
                                    <ul class="f-ul-li-ul">
                                        <li class="footer-icon">
                                            <i class="ion-ios-telephone"></i>
                                        </li>
                                        <li class="footer-info">
                                            <h6>Contact</h6>
                                            <a href="tel:1-800-222-000">Phone: 1-800-222-000</a>
                                            <a href="mailto:demo@demo.com">Email: demo@demo.com</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer-li footer-address">
                                    <ul class="f-ul-li-ul">
                                        <li class="footer-icon">
                                            <i class="fa fa-link"></i>
                                        </li>
                                        <li class="footer-info">
                                            <h6>Quick Links</h6>
                                            <a href="">About</a>
                                            <a href="">Contact</a>
                                            <a href="">Terms & conditions</a>
                                            <a href="">Privacy policy</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <ul class="f-bottom">
                            <li class="f-c f-copyright">
                                <p>Copyright <i class="fa fa-copyright"></i> 2021 LGO</p>
                            </li>
                            <li class="f-c f-social">
                                <a href="https://www.whatsapp.com/" class="f-icn-link"><i class="fa fa-whatsapp"></i></a>
                                <a href="https://www.facebook.com/" class="f-icn-link"><i class="fa fa-facebook-f"></i></a>
                                <a href="https://twitter.com/" class="f-icn-link"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.instagram.com/" class="f-icn-link"><i class="fa fa-instagram"></i></a>
                                <a href="https://www.pinterest.com/" class="f-icn-link"><i class="fa fa-pinterest-p"></i></a>
                                <a href="https://www.youtube.com/" class="f-icn-link"><i class="fa fa-youtube"></i></a>
                            </li>
                            <li class="f-c f-payment">
                                <a href="checkout-1.html"><img src="<?=base_url()?>front/image/payment.png" class="img-fluid" alt="payment image"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <script src="<?=base_url()?>front/js/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
  
  <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

  
  
  
  <script>

$(document).ready(function(){
$("form[name='subscribeForm']").validate({
        rules: {
          
            email: {
                required: true,
            },
            
         
        },
        messages: {
          
          email: {
                required: "Please enter your email.",
            },
         
           
        }
    });

    $("#subscribe").click(function() {
    var form = $("#subscribeForm");
    form.validate();
    if (form.valid()) {
     // alert("asd");
        var email = $("#email").val();
		
        $.ajax({
         
            type: 'POST',
            url: '<?=base_url()?>' + '/subscribe/store',
            data: {
                email: email,
			 },
            success: function(response) {
                var data = JSON.parse(response);
                 if(data.status==0)
                 {
                    var successContent = "<div id='success-alert' class='alert alert-danger'>"+data.message+"</div>";
                        $("#subscribe_submit").html(successContent);
                        $("#success-alert").fadeTo(2000, 1000).slideUp(1000, function() {
                            $("#success-alert").slideUp(500);
                        location.reload();
                        });
                        
                 }
                 else
                 {
                        var successContent = "<div id='success-alert' class='alert alert-success'>"+data.message+"</div>";
                        $("#subscribe_submit").html(successContent);
                        $("#success-alert").fadeTo(2000, 1000).slideUp(1000, function() {
                            $("#success-alert").slideUp(500);
                             location.reload();
                        });
                        
                  }
                }
        });
    }
});

});

  </script>
                       
        <div class="vegist-popup animated modal fadeIn" id="myModal1"   name="registration" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="popup-content">
                        <!-- popup close button start -->
                        <a href="javascript:void(0)" data-bs-dismiss="modal" aria-label="Close" class="close-btn"><i class="ion-close-round"></i></a>
                        <!-- popup close button end -->
                        <!-- popup content area start -->
                       

                        <div class="pop-up-newsletter" style="background-image: url(<?=base_url()?>front/image/news-popup.jpg);">
                            <div class="logo-content">
                                <a href="index.html"><img src="<?=base_url()?>front/image/logo1.png" alt="image" class="img-fluid"></a>
                                <h4>Become a subscriber</h4>
                                
                                <?php echo validation_errors(); ?>
                                <span>Subscribe to get the notification of latest posts</span>
                            </div>
                     
                            <form action="" name="subscribeForm" id="subscribeForm" method="post">
                             <div id="subscribe_submit"></div>
                            <div class="subscribe-area">
                                <input type="email" name="email"  id="email" placeholder="Your email address">
                                <label for="email" class="error" style="color:red;"></label><br>


                                <button type="button" class="btn btn-style1" id="subscribe" class="btn btn-style1">Subscribe</a></button>
                            </div>
                            

                        </div>

                        <!-- popup content area end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- newsletter pop-up end -->
        <!-- back to top start -->
        <a href="<?=base_url()?>front/javascript:void(0)" class="scroll" id="top">
            <span><i class="fa fa-angle-double-up"></i></span>
        </a>
        <!-- back to top end -->
        <!-- <div class="mm-fullscreen-bg"></div> -->
        <!-- jquery -->
        <script src="<?=base_url()?>front/js/modernizr-2.8.3.min.js"></script>
     
        <!-- bootstrap -->
        <script src="<?=base_url()?>front/js/bootstrap.min.js"></script>
        <!-- popper -->
        <script src="<?=base_url()?>front/js/popper.min.js"></script>
        <!-- fontawesome -->
        <script src="<?=base_url()?>front/js/fontawesome.min.js"></script>
        <!-- owl carousal -->
        <script src="<?=base_url()?>front/js/owl.carousel.min.js"></script>
        <!-- swiper -->
        <script src="<?=base_url()?>front/js/swiper.min.js"></script>
        <!-- custom -->
        <script src="<?=base_url()?>front/js/custom.js"></script>
    </body>

<!-- Mirrored from spacingtech.com/html/vegist-final/vegist/javascript:void(0) by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Aug 2021 06:32:37 GMT -->
</html>