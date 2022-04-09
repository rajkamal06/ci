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

<a  class="btn btn-primary" href=" <?= base_url('user/store') ?>">Add new</a>
</div>
<table width="600" class="table"  cellspacing="5" cellpadding="5">
<?PHP
if($this->session->flashdata('message')) {
$message = $this->session->flashdata('message');
?>

<div class="text-success"><?php echo $message;?>
</div> 
<?php
}
?>

 <tr style="background:#CCC">
    <th>id</th>
    <th>name</th>
    <th>email</th>
    <th>mobile</th>
    <th>password</th>
    <th>Action</th>
  </tr>
  <?php
  $i=1;
  foreach($data as $row=>$vs):
  ?>
  
  <tr>
  <td><?=$vs->id?></td>
  <td><?=$vs->name?></td>
  <td><?=$vs->email?></td>
  <td><?=$vs->mobile?></td>
  <td><?=$vs->password?></td>
  <td><a  class="btn btn-primary" href="<?=base_url('user/edit/'.$vs->id)?>">Edit</a>|<a href="<?=base_url('user/view/'.$vs->id)?>" class="btn btn-info">View</a>|<a href="<?=base_url('user/delete/'.$vs->id)?>" class="btn btn-success">Delete</a></td>
  </tr>
   <?PHP
   endforeach;
   ?>
   
</table>
</body>
</html>
