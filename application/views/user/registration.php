
<html>
<head>
<script

src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
  
  <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
* {
  box-sizing: border-box;
}

input[type=text] {
  width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}
input[type=password] {
  width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}


input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: left;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 15%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
ad of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
.eyeButton {
  position: absolute;
  right: 5px;
  bottom: 4px;
  top: 23px;
}
</style>
</head>
<body>
<script>

function myFunction() {

  var x = document.getElementById("password");
  if (x.type === "password") {

    x.type = "text";
  } else {

    x.type = "password";
  }
}
</script>



    
<script>
$(function() {
 
 $("form[name='registration']").validate({
  
   rules: {
    
     firstname: {
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
        },
    
        cpassword: {
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
       cpassword:{
         required: "Please provide a confirm password",
        minlength: "Your confirm password must be at least 5 characters long",
       },

  
   submitHandler: function(){
     form.submit();
   }
 });  
});

</script>
<h1>Registration Form</h1>


<?php echo validation_errors(); ?>
  <form action="<?= base_url('user/store') ?>" name="registration" id="registration" method="post">
      
<div class="container">
  <div class="row">
    <div class="col-25">
      <label for="name"> Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="name" name="name" placeholder=" Name.."><br>
      <label for="name" class="error" style="color:red;"></label><br>
    </div>
  </div>
  
  <div class="row">
    <div class="col-25">
      <label for="lname">Email</label>
    </div>
  <div class="col-75">
      <input type="text" id="email" name="email" placeholder="Email"><br>
      <label for="email" class="error" style="color:red;"></label><br>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Mobile</label>
    </div>
  <div class="col-75">
      <input type="text" id="mobile" name="mobile" placeholder="Mobile no"><br>
      <label for="mobile" class="error" style="color:red;"></label><br>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Password</label>
    </div>
  <div class="col-75">
      <input type="password" id="password" name="password" placeholder="Password"><br>
      <label for="password" class="error" style="color:red;"></label><br>
      <input type="checkbox" onclick="myFunction()">:Show Password<br>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname"> Confirm Password</label>
    </div>
    
  <div class="col-75">
      <input type="password" id="cpassword" name="cpassword" placeholder="Confirm Password"><br>
      <label for="cpassword" class="error" style="color:red;"></label><br>
        </div>
   
    </div>
  </div>



  <br>
  <div class="row">
    <input type="submit" name="submit" value="Submit">
  </div>
  </form>
</div>


</body>
</html>


