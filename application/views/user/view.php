
<html>
<head>
<title>Display records</title>
<form action="<?= base_url('user/store')?>"id="registration" method="post">
<link rel="stylesheet" type ="text/css" href ="<?=base_url()?>assets/css/custom.css">
<link rel="stylesheet" type ="text/css" href ="<?=base_url()?>assets/css/bootstrap.min.css">
</head>
<body>
<style>
   .float-right .btn-primary
   {
      float:right;
   }
</style> 
<table width="600" class="table"  cellspacing="5" cellpadding="5">
<div class="float-right">
<a  class="btn btn-primary" href="<?= base_url('user/test') ?>">Back</a>
</div>
  <tr style="background:#CCC">
    <th>id</th>
    <th>name</th>
    <th>email</th>
    <th>mobile</th>
    <th>password</th>
  </tr>  
  <tr>
  <td><?=$data['id']?></td>
  <td><?=$data['name']?></td>
  <td><?=$data['email']?></td>
  <td><?=$data['mobile']?></td>
  <td><?=$data['password']?></td>
 
</table>
</body>
</html>
