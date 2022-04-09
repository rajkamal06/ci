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
                  <h3 class="font-weight-bold">Category </h3>
                  <h6 class="font-weight-normal mb-0"><span class="text-primary"></span></h6>
                  <!DOCTYPE html>


 <html>
<head>
<link rel="stylesheet" type ="text/css" href ="<?=base_url()?>assets/css/bootstrap.min.css">

<link rel="stylesheet" type ="text/css" href ="<?=base_url()?>assets/css/custom.css">


<link rel="stylesheet" type ="text/css" href ="http://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

</head>
<style>
   .float-right .btn-primary
   {
      float:right;
   }
</style> 
<body>
   <div class="float-right">

<a  class="btn btn-primary" href=" <?= base_url('admin/inactive/inactive') ?>">Add new</a>
</div><?PHP
if($this->session->flashdata('message')) {
$message = $this->session->flashdata('message');
?>

<div class="text-success"><?php echo $message;?>
</div> 
<?php
}
?>
<table width="600" class="table" id="myTable" cellspacing="5" cellpadding="5">
 <thead>
<tr style="background:#CCC">
    <th>id</th>
    <th>name</th>
    <th>description</th>
    <th>file</th>
    <th>price</th>
    <th>sell_price</th>
    <th>status</th>
    <th>Action</th>
  </tr>
  </thead>
  <tbody>
  <?php
  $i=1;
  foreach($data as $row=>$vs):
  ?>

  <tr>
  <td><?=$vs->id?></td>
  <td><?=$vs->name?></td>
  <td><?=$vs->description?></td>
  <td><?=$vs->file?></td>
  <td><?=$vs->price?></td>
  <td><?=$vs->sell_price?></td>
  <td><a  class="btn btn-primary" href="<?=base_url('admin/active/status/'.$vs->id)?>">Active</a></td>
  
  <td><a  class="btn btn-primary" href="<?=base_url('admin/Category/edit/'.$vs->id)?>">Edit</a>|<a href="<?=base_url('admin/Category/view/'.$vs->id)?>" class="btn btn-info">View</a>|<a href="<?=base_url('admin/Category/delete/'.$vs->id)?>" class="btn btn-success">Delete</a></td>
  </tr>
 
   <?PHP
   endforeach;
   ?>
    </tbody>
</table>

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
 <script src="http://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
 <script>
 $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>