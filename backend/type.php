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

      <div class="col-md-6">
      <a href="type.php?act=add" class="btn-info btn-sm"> เพิ่ม </a>
        <p></p>
        <?php
          $act = $_GET['act'];
          if($act == 'add'){
          include('add_type.php');
          }elseif ($act == 'edit') {
          include('edit_type.php');
          }
          else {
          include('type_list.php');
          }
        ?>
      </div>

    </div>
  </div>
  </body>
</html>