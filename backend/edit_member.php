<?php
include('connectDB.php');
$member_id = $_REQUEST["ID"];
$sql = "SELECT * FROM tbl_member WHERE member_id='$member_id' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);
?>

<?php include('head.php');?>
<form  name="register" action="edit_membertoDB.php" method="POST" id="member" class="form-horizontal">

    <input type="hidden" name="member_id" value="<?php echo $member_id; ?>">
          <div class="form-group">
            <div class="col-sm-6" align="left">
              <input  name="member_user" type="text" required class="form-control" id="member_user" value="<?=$member_user; ?>" placeholder="username" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2"  />
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-6" align="left">
              <input  name="member_pass" type="password" required class="form-control" id="member_pass" value="<?=$member_pass; ?>" placeholder="password" pattern="^[a-zA-Z0-9]+$" minlength="2" />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-6" align="left">
              <input  name="member_name" type="text" required class="form-control" id="member_name" value="<?=$member_name; ?>" placeholder="ชื่อ-สกุล" />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-6" align="left">
              <input  name="member_email" type="text" required class="form-control" id="member_email" value="<?=$member_email; ?>" placeholder="อีเมล" />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-6" align="left">
              <input  name="member_tel" type="text" required class="form-control" id="member_tel" value="<?=$member_tel; ?>" placeholder="เบอร์โทรศัพท์" />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-6" align="left">
              <textarea  name="member_address" type="text" required class="form-control" id="member_address" ><?php echo $member_address; ?></textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-6" align="right">
              <button type="button" class="btn btn-warning btn-xs" id="btn" value ="go back" onclick="window.location='member.php'"> <span class="glyphicon glyphicon-saved"></span> ย้อนกลับ  </button>
              <button type="submit" class="btn btn-success" id="btn"> <span class="glyphicon glyphicon-saved"></span> บันทึก  </button>      
            </div> 
          </div>
</form>