<?php
include('connectDB.php'); 
$query = "SELECT * FROM tbl_type ORDER BY type_id asc" or die("Error:" . mysqli_error());
$result = mysqli_query($con, $query);
?>
<div class="container">
  <div class="row">
      <form  name="addproduct" action="add_goodstoDB.php" method="POST" enctype="multipart/form-data"  class="form-horizontal">
        <div class="form-group">
          <div class="col-sm-9">
            <p> ชื่อสินค้า</p>
            <input type="text"  name="goods_name" class="form-control" required placeholder="ชื่อสินค้า" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-8">
            <p> ประเภทสินค้า </p>
            <select name="type_id" class="form-control" required>
              <option value="type_id">ประเภทสินค้า</option>
              <?php foreach($result as $results){?>
              <option value="<?php echo $results["type_id"];?>">
                <?php echo $results["type_name"]; ?>
              </option>
              <?php } ?>
            </select>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-5">
            <p> ราคา</p>
            <input type="number"  name="goods_price" class="form-control" required placeholder="ราคา" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <p> รายละเอียดสินค้า </p>
             <textarea  name="goods_detail" rows="5" cols="60"></textarea>
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
            <input type="file" name="goods_img" id="goods_img" class="form-control" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
          <button type="button" class="btn btn-warning btn-xs" id="btn" value ="go back" onclick="window.location='goods.php'"> <span class="glyphicon glyphicon-saved"></span> ย้อนกลับ  </button>
          <button type="submit" class="btn btn-success" id="btn"><span class="glyphicon glyphicon-ok"></span> บันทึก  </button>
          </div>
        </div>
      </form>
    </div>
  </div>



 