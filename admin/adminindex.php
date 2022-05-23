<!DOCTYPE html>
<html>
<?php
include 'adminspartials/head.php';
 ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php
include 'adminspartials/header.php';
include 'adminspartials/aside.php';
   ?>
  <!-- Left side column. contains the logo and sidebar -->
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div>
      <?php
      include ('product.php');
      ?>
      <div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
 include 'adminspartials/footer.php';
?>
</body>
</html>
