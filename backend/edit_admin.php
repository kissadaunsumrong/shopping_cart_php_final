<?php
include('connectDB.php');
$admin_id = $_REQUEST["ID"];
$sql = "SELECT * FROM tbl_admin WHERE admin_id='$admin_id' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);
?>

<?php include('head.php');?>
<form  name="admin" action="edit_admintoDB.php" method="POST" id="admin" class="form-horizontal">

    <input type="hidden" name="admin_id" value="<?php echo $admin_id; ?>">
          <div class="form-group">
            <div class="col-sm-6" align="left">
              <input  name="admin_user" type="text" required class="form-control" id="admin_user" value="<?=$admin_user; ?>" placeholder="username" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2"  />
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-6" align="left">
              <input  name="admin_pass" type="password" required class="form-control" id="admin_pass" value="<?=$admin_pass; ?>" placeholder="password" pattern="^[a-zA-Z0-9]+$" minlength="2" />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-6" align="left">
              <input  name="admin_name" type="text" required class="form-control" id="admin_name" value="<?=$admin_name; ?>" placeholder="ชื่อ-สกุล" />
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-6" align="right">
              <button type="button" class="btn btn-warning btn-xs" id="btn" value ="go back" onclick="window.location='admin.php'"> <span class="glyphicon glyphicon-saved"></span> ย้อนกลับ  </button>
              <button type="submit" class="btn btn-success" id="btn"> <span class="glyphicon glyphicon-saved"></span> บันทึก  </button>      
            </div> 
          </div>
</form>