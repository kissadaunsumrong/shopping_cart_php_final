<?php
$q = $_GET['q'];
$query_goods = "SELECT * FROM tbl_goods as g
INNER JOIN tbl_type as t
ON g.type_id = t.type_id
WHERE g.goods_name LIKE '%$q%'
ORDER BY g.goods_id ASC";
	$result_goods =mysqli_query($con, $query_goods) or die ("Error in query: $query_goods " . mysqli_error());



?>
<div class="container">
<div class="row">
<?php foreach ($result_goods as $row_goods){?>&nbsp;
<div class="card text-white bg-dark mb-3" style="width: 16rem; margin-top: 15px;">
<img class="card-img-top" src="backend/goods_img/<?php echo $row_goods['goods_img'];?>"width="100"  height="200" alt="Card image cap">
<div class="card-body">
  <h5 class="card-title"><?php echo $row_goods['goods_name']; ?></h5>
  <p class="card-text">ประเภท : <?php echo $row_goods['type_name']; ?></p>
  <p class="card-text">เวลาเริ่มจำหน่าย : <?php echo $row_goods['time_on']; ?></p>
  <p class="card-text">เวลาหยุดจำหน่าย : <?php echo $row_goods['time_off']; ?></p>
  <p class="card-text">ราคา : <?php echo $row_goods['goods_price']; ?></p>
  <a href="product_detail.php?id=<?php echo $row_goods ['goods_id'] ?>" class="btn btn-outline-warning">รายละเอียด</a>&nbsp;
        <form class="form-submit" >
          <input type="hidden" class = "pid" value = "<?php echo $row['goods_id']; ?>">
          <input type="hidden" class = "pname" value = "<?php echo $row['goods_name']; ?>">
          <input type="hidden" class = "pimage" value = "<?php echo $row['goods_img']; ?>">
          <input type="hidden" class = "pprice" value = "<?php echo $row['goods_price']; ?>">
          <button id="addItemQM" type="submit" class="btn btn-outline-success">ใส่ตะกร้า</button>
        </form>
</div>
</div>
<?php } ?>
</div>
</div>
<script type="text/javascript" src="cart.js"></script>

