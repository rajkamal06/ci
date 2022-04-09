<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <!-- <meta charset="utf-8"> -->
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="../../images/logo.svg" alt="logo">
              </div>

              </script>



    
              <script>
$(function() {
 
 $("form[name='login']").validate({
  
   rules: {
    
     email: {
       required: true,
        email: true
     },
   
        password: {
       required: true,
       minlength: 5
        }
    
     
   },

  
   messages: {
  
      email: "Please enter a valid email address",

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


              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
           
            <form action="<?=base_url()?>user/login" name="login" id="login" method="post" class="pt-3">
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="email"  name="email" placeholder="Username">
                  <label for="email" class="error" style="color:red;"></label><br>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Password">
                  <label for="password" class="error" style="color:red;"></label><br>
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
               
               
              </form>
            </div>
          </div>
        </div>
      </div>
 
    </div>
    
  </div>
 
  <title>Skydash Admin</title>
  
  <link rel="stylesheet" href="<?=base_url()?>assets/admin/vendors/feather/feather.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/admin/vendors/ti-icons/css/themify-icons.css">
  <!-- <link rel="stylesheet" href="<?=base_url()?>assets/admin/vendors/css/vendor.bundle.base.css"> -->

  <link rel="stylesheet" href="<?=base_url()?>assets/admin/css/vertical-layout-light/style.css">
 
  <link rel="shortcut icon" href="<?=base_url()?>assets/admin/images/favicon.png" />
  
  
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script>
  // <script src="<?=base_url()?>assets/admin/vendors/js/vendor.bundle.base.js"></script>


  <!-- <script src="<?=base_url()?>assets/admin/js/off-canvas.js"></script> -->
   <!-- <script src="<?=base_url()?>assets/admin/js/hoverable-collapse.js"></script> -->
  <!-- <script src="<?=base_url()?>assets/admin/js/template.js"></script> -->
   <!-- <script src="<?=base_url()?>assets/admin/js/settings.js"></script> -->
   <!-- <script src="<?=base_url()?>assets/admin/js/todolist.js"></script>
   -->
</body>

</html>
