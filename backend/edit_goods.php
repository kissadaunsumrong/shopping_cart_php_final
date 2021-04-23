<style>
.content {
  max-width: 500px;
  margin: auto;
  background-color: #dc3546;
}
</style>
<body>
<div class='content'>
<?php
include('../backend/head.php');
include('connectDB.php');
$goods_id = $_GET["ID"];
$sql = "SELECT g.*,t.type_name
FROM tbl_goods as g
INNER JOIN tbl_type as t ON g.type_id = t.type_id
WHERE g.goods_id = '$goods_id'
ORDER BY g.type_id asc";
$result2 = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result2);
extract($row);

$query = "SELECT * FROM tbl_type ORDER BY type_id asc" or die("Error:" . mysqli_error());
$result = mysqli_query($con, $query);
?>
<div class="container">
  <div class="row">
      <form  name="addproduct" action="edit_goodstoDB.php" method="POST" enctype="multipart/form-data"  class="form-horizontal">
        <div class="form-group">
          <div class="col-sm-9">
            <p> ชื่อสินค้า</p>
            <input type="text"  name="goods_name" class="form-control" required placeholder="ชื่อสินค้า" / value="<?php echo $goods_name; ?>">
          </div>
        </div>
         <div class="form-group">
          <div class="col-sm-6">
            <p> ประเภทสินค้า </p>
            <select name="type_id" class="form-control" required>
              <option value="<?php echo $row["type_id"];?>">
                <?php echo $row["type_name"]; ?>
              </option>
              <option value="type_id">ประเภทสินค้า</option>
              <?php foreach($result as $results){?>
              <option value="<?php echo $results["type_id"];?>">
                <?php echo $results["type_name"]; ?>
              </option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
          <div class="col-sm-5">
            <p>ราคา</p>
            <input type="number"  name="goods_price" class="form-control" required placeholder="ราคา" / value="<?php echo $goods_price; ?>">
          </div>
        </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <p> รายละเอียดสินค้า </p>
             <textarea  name="goods_detail" rows="5" cols="60"><?php echo $goods_detail; ?>
             </textarea>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <p> เวลาเริ่มจำหน่าย </p>
             <select  name="time_on">
             <option id="on_1">01:00 A.M.</option>
             <option id="on_2">02:00 A.M.</option>
             <option id="on_3">03:00 A.M.</option>
             <option id="on_4">04:00 A.M.</option>
             <option id="on_5">05:00 A.M.</option>
             <option id="on_6">06:00 A.M.</option>
             <option id="on_7">07:00 A.M.</option>
             <option id="on_8">08:00 A.M.</option>
             <option id="on_9">09:00 A.M.</option>
             <option id="on_10">10:00 A.M.</option>
             <option id="on_11">11:00 A.M.</option>
             <option id="on_12">12:00 </option>
             <option id="on_13">01:00 P.M.</option>
             <option id="on_14">02:00 P.M.</option>
             <option id="on_15">03:00 P.M.</option>
             <option id="on_16">04:00 P.M.</option>
             <option id="on_17">05:00 P.M.</option>
             <option id="on_18">06:00 P.M.</option>
             <option id="on_19">07:00 P.M.</option>
             <option id="on_20">08:00 P.M.</option>
             <option id="on_21">09:00 P.M.</option>
             <option id="on_22">10:00 P.M.</option>
             <option id="on_23">11:00 P.M.</option>
             <option id="on_24">00:00 </option>
             </select>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
          <p> หมดเวลาจำหน่าย </p>
             <select  name="time_off">
             <option id="off_1">01:00 A.M.</option>
             <option id="off_2">02:00 A.M.</option>
             <option id="off_3">03:00 A.M.</option>
             <option id="off_4">04:00 A.M.</option>
             <option id="off_5">05:00 A.M.</option>
             <option id="off_6">06:00 A.M.</option>
             <option id="off_7">07:00 A.M.</option>
             <option id="off_8">08:00 A.M.</option>
             <option id="off_9">09:00 A.M.</option>
             <option id="off_10">10:00 A.M.</option>
             <option id="off_11">11:00 A.M.</option>
             <option id="off_12">12:00 </option>
             <option id="off_13">01:00 P.M.</option>
             <option id="off_14">02:00 P.M.</option>
             <option id="off_15">03:00 P.M.</option>
             <option id="off_16">04:00 P.M.</option>
             <option id="off_17">05:00 P.M.</option>
             <option id="off_18">06:00 P.M.</option>
             <option id="off_19">07:00 P.M.</option>
             <option id="off_20">08:00 P.M.</option>
             <option id="off_21">09:00 P.M.</option>
             <option id="off_22">10:00 P.M.</option>
             <option id="off_23">11:00 P.M.</option>
             <option id="off_24">00:00 </option>
             </select>
          </div>
        </div>
            <div class="form-group">
          <div class="col-sm-12">
            <p> ภาพสินค้า </p>
            <img src="goods_img/<?php echo $row['goods_img'];?>" width="100px">
            <br>
            <br>
            <input type="file" name="goods_img" id="goods_img" class="form-control" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
             <input type="hidden" name="goods_id" value="<?php echo $goods_id; ?>" />
             <input type="hidden" name="img2" value="<?php echo $goods_img; ?>" />
             <button type="button" class="btn btn-warning btn-xs" id="btn" value ="go back" onclick= window.history.back()> <span class="glyphicon glyphicon-saved"></span> ย้อนกลับ  </button>
             <button type="submit" class="btn btn-success" id="btn"><span class="glyphicon glyphicon-ok"></span> บันทึก  </button>
            
          </div>
        </div>
      </form>
    </div>
  </div>
  </div>
  </body>