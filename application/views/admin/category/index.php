<?php 
$this->load->view('admin/includes/head.php');
$this->load->view('admin/includes/header.php');
$this->load->view('admin/includes/sidebar.php');
?>
 
 <!-- partial -->
 <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Welcome Aamir</h3>
                  <h6 class="font-weight-normal mb-0">All systems are running smoothly! You have <span class="text-primary">3 unread alerts!</span></h6>
                  <html>
<head>
<link rel="stylesheet" type ="text/css" href ="<?=base_url()?>assets/css/index.css">
</script>
</head>
<body>
<div class="container">
 <?php echo validation_errors(); ?>
  <form action="<?= base_url('admin/category/store') ?>" enctype="multipart/form-data"  method="post">
  <div class="row">
    <div class="col-25">
      <label for="fname"> Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="name" name="name" placeholder="Your name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="description">Description</label>
    </div>
    <div class="col-75">
      <textarea id="description" name="description" placeholder="Write something.." style="height:200px"></textarea>
    </div>
  </div>
  <br>
<div class="row">
    <div class="col-25">
      <label for="file"> File</label>
    </div>
    <div class="col-75">
      <input type="file" id="file" name="userfile" >
    </div>
  </div>
  </div>
  </div>
  </div>
  <div class="row">
    <div class="col-25">
  <label for="exampleInputstatus">Status</label>
  </div>
  <div class="col-75">
        <input type="radio" id="exampleInputstatus"  name="status"  value='0'> 
        <label for= "exampleInputstatus">0</label>
        <input type="radio" id="exampleInputstatus" name="status"  value='1'>   
        <label for="exampleInputstatus">1</label>
  
</div>
</div>
<br>
  <div class="row">
    <input type="submit" value="Submit" name="submit">
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