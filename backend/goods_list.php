<?php
      include('head.php');
       error_reporting( error_reporting() & ~E_NOTICE );
                include('connectDB.php'); 
                $query = "SELECT * FROM tbl_goods ORDER BY goods_id ASC" or die("Error:" . mysqli_error());
                $result = mysqli_query($con, $query);
                $row_g = mysqli_fetch_assoc($result);
                ?>

<script>    
$(document).ready(function() {
    $('#example1').DataTable( {
      "aaSorting" :[[0,'ASC']],
  });
} );
 
  </script>

  <table border="2" class="display table table-bordered" id="example1" align="center"  >
  <thead>
    <tr class="info">    
    <th>id</th>
    <th>ชื่อ</th>
    <th>รายละเอียด</th>
    <th>เวลาเริ่มขาย</th>
    <th>เวลาหยุดขาย</th>
    <th>img</th>
    <th>edit</th>
    <th>delete</th>
  </tr>
</thead>
  <?php do { ?>
  
    <tr>
      <td><?php echo $row_g['goods_id']; ?></td>
      <td ><?php echo $row_g['goods_name']; ?></td>
      <td ><?php echo $row_g['goods_detail']; ?></td>
      <td><?php echo $row_g['time_on']; ?></td>
      <td><?php echo $row_g['time_off']; ?></td>
      <td><img class="card-img-top" src="../backend/goods_img/<?php echo $row_g['goods_img'];?>" width="200"  height="200" alt="Card image cap"></td>
      <td><a href="goods.php?act=edit&ID=<?php echo $row_g['goods_id']; ?>" class="btn btn-warning btn-xs"> แก้ไข </a> </td>
       <td><a href="del_goods.php?ID=<?php echo $row_g['goods_id']; ?>" class='btn btn-danger btn-xs'  onclick="return confirm('ยันยันการลบ')">ลบ</a> </td>
    </tr>

    <?php } while ($row_g =  mysqli_fetch_assoc($result)); ?>
  
    </table> 