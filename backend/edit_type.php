<?php
include('connectDB.php');
$type_id = $_REQUEST["ID"];
$sql = "SELECT * FROM tbl_type WHERE type_id='$type_id' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);
?>
<?php include('head.php');?>
<div class="container">
  <p> </p>
    <div class="row">
      <div class="col-md-12">
        <form  name="admin" action="edit_typetoDB.php" method="POST" id="admin" class="form-horizontal">
          <input type="hidden" name="type_id" value="<?php echo $type_id; ?>" />
          <div class="form-group">
            <div class="col-sm-6" align="left">
              <input  name="type_name" type="text" required class="form-control" id="type_name" value="<?=$type_name;?>" placeholder="ประเถทสินค้า" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2"  />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-6" align="right">
              <button type="button" class="btn btn-warning btn-xs" id="btn" value ="go back" onclick="window.location='type.php'"> <span class="glyphicon glyphicon-saved"></span> ย้อนกลับ  </button>
              <button type="submit" class="btn btn-success" id="btn"><span class="glyphicon glyphicon-saved"></span> บันทึก </button>      
            </div> 
          </div>
        </form>
      </div>
    </div>
</div>