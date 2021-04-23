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
        <p></p>
        <?php
          $act = $_GET['act'];
          if($act == 'add'){
          include('add_member.php');
          }elseif ($act == 'edit') {
          include('edit_member.php');
          }
          else {
          include('member_list.php');
          }
        ?>
      </div>

    </div>
  </div>
  </body>
</html>