<?php 
$this->load->view('front/include/header.php');
?>

 

    <section class="about-breadcrumb">
        <div class="about-back section-tb-padding" style="background-image: url(<?=base_url()?>front/image/about-image.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="about-l">
                            <ul class="about-link">
                                <li class="go-home"><a href="index1.html">Home</a></li>
                                <li class="about-p"><span>Register</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->
    <!-- login start -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
  
  <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
  <script

src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
  <script>
$(function() {
 
 $("form[name='register']").validate({
  
   rules: {
    
     name: {
           required: true,
         
     },
     email: {
       required: true,
        email: true
     },
       mobile: {
       required:true,
       minlength:10
       },
        password: {
       required: true,
       minlength: 5
        }
    
     
   },

  
   messages: {
     firstname: "Please enter your firstname",
    
     
   },
      email: "Please enter a valid email address",
      
   
   mobile:{
       required: "Please provide a mobile no",
       minlength: "Your mobile no must be at least 10 characters long",
       },
       
     password:{
         required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long",
       },
  

  
   submitHandler: function(){
     form.submit();
   }
 });  
});

</script>

    <section class="section-tb-padding">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="register-area">
                        <div class="register-box">
                        <form action="<?= base_url('front/register/store') ?>" name="register" id="register" method="post">
                            <h1>Create account</h1>
                            <p>Please register below account detail</p>
                            <form>
                                <input type="text" name="name" id="name" placeholder=" Name">
                                <label for="name" class="error" style="color:red;"></label><br>

                                <input type="email" name="email"  id="email"placeholder="Email">
                                <label for="email" class="error" style="color:red;"></label><br>

                                <input type="text" name="mobile" id="mobile" placeholder="mobile">
                                <label for="mobile" class="error" style="color:red;"></label><br>
                               
                                <input type="password" name="password" id="password" placeholder="Password">
                                <label for="password" class="error" style="color:red;"></label><br>
                                <!-- <a input type="create" name="submit"  class="btn-style1">Create</a> -->
                                <input type="submit" class="btn btn-style1" name="submit" value="Submit">
                                
                            </form>
                        </div>
                        <div class="register-account">
                            <h4>Already an account holder?</h4>
                            <a href="<?= base_url('front/register/login') ?>" class="ceate-a">Log in</a>
                            <div class="register-info">
                                <a href="terms-conditions.html" class="terms-link"><span>*</span> Terms & conditions.</a>
                                <p>Your privacy and security are important to us. For more information on how we use your data read our <a href="privacy-policy.html">privacy policy</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                                        <img class="img-fluid" src="<?=base_url()?>front/image/logo1.png" alt="">
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
<?php
$this->load->view('front/include/footer.php');
?>