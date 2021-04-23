<!DOCTYPE html>
<html>
<head>
<?php include('head.php');
error_reporting( error_reporting() & ~E_NOTICE );
?>
<head>
  <body>
    <div class="container">
  <?php include('navbar.php');?>
  <p></p>
    <div class="row">
      <div class="col-md-3">
        <?php include('left.php');?>
      </div>

      <div class="col-md-8">
        <a href="admin.php?act=add" class="btn-info btn-sm"> เพิ่มผู้ดูแล </a>
        <p></p>
        <?php
          $act = $_GET['act'];
          if($act == 'add'){
          include('add_admin.php');
          }elseif ($act == 'edit') {
          include('edit_admin.php');
          }
          else {
          include('admin_list.php');
          }
        ?>
      </div>

    </div>
  </div>
  </body>
</html>