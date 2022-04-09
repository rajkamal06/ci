<?php 
$this->load->view('admin/includes/head.php');
$this->load->view('admin/includes/header.php');
$this->load->view('admin/includes/sidebar.php');
?>
 <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Welcome Aamir</h3>
                  <h6 class="font-weight-normal mb-0"> <span class="text-primary">3 unread alerts!</span></h6>
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
<a  class="btn btn-primary" href="<?= base_url('admin/category/category') ?>">Back</a>
</div>
<h1>Update Form</h1>
<?php echo validation_errors(); ?>
  <form action="<?= base_url('admin/category/update/'.$data['id']) ?>"  id="registration" method="post">
 


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
      <label for="lname">description</label>
    </div>
  <div class="col-75">
      <input type="text" id="description" name="description" value = "<?php echo $data['description'] ;?>"   placeholder="Email"><br>
      <label for="email" class="error" style="color:red;"></label><br>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">file</label>
    </div>
  <div class="col-75">
      <input type="text" id="file" name="file" value = "<?php echo $data['file'] ;?>"  placeholder="file"><br>
      
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">status</label>
    </div>
  <div class="col-75">
      <input type="text" id="status" name="status" value = "<?php echo $data['status'] ;?>"  placeholder="status"><br>
      <label for="password" class="error" style="color:red;"></label><br>

      <br>

  <div class="row">
    <input type="submit" name="submit" value="Submit">
  </div>
  </form>
</div>


</body>
</html>
</div>
                <div class="col-12 col-xl-4">
                 <div class="justify-content-end d-flex">
                  <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                    <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                     <i class="mdi mdi-calendar"></i> Today (10 Jan 2021)
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                      <a class="dropdown-item" href="#">January - March</a>
                      <a class="dropdown-item" href="#">March - June</a>
                      <a class="dropdown-item" href="#">June - August</a>
                      <a class="dropdown-item" href="#">August - November</a>


                    </div>
                  </div>
                 </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
       
<?php
$this->load->view('admin/includes/footer.php');
?>


