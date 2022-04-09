
<html>
<head>
<link rel="stylesheet" type ="text/css" href ="<?=base_url()?>assets/css/bootstrap.min.css">

<link rel="stylesheet" type ="text/css" href ="<?=base_url()?>assets/css/custom.css">
</head> 
<style>
   .float-right .btn-primary
   {
      float:right;
   }
</style> 
<body>
<div class="float-right">
<a  class="btn btn-primary" href="<?= base_url('user/test') ?>">Back</a>
</div>
<h1>Update Form</h1>
<?php echo validation_errors(); ?>
  <form action="<?= base_url('user/update/'.$data['id']) ?>"  id="registration" method="post">
 


<div class="container">
  <div class="row">
    <div class="col-25">
      <label for="name"> Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="name" name="name" value = "<?php echo $data['name'] ;?>"  placeholder=" Name.."><br>
      <label for="name" class="error" style="color:red;"></label><br>
    </div>
  </div>
  
  <div class="row">
    <div class="col-25">
      <label for="lname">Email</label>
    </div>
  <div class="col-75">
      <input type="text" id="email" name="email" value = "<?php echo $data['email'] ;?>"   placeholder="Email"><br>
      <label for="email" class="error" style="color:red;"></label><br>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Mobile</label>
    </div>
  <div class="col-75">
      <input type="text" id="mobile" name="mobile" value = "<?php echo $data['mobile'] ;?>"  placeholder="Mobile no"><br>
      <label for="mobile" class="error" style="color:red;"></label><br>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Password</label>
    </div>
  <div class="col-75">
      <input type="password" id="password" name="password" value = "<?php echo $data['password'] ;?>"  placeholder="Password"><br>
      <label for="password" class="error" style="color:red;"></label><br>

      <br>

  <div class="row">
    <input type="submit" name="submit" value="Submit">
  </div>
  </form>
</div>


</body>
</html>


