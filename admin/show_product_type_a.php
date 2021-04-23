<?php

$type_id = $_GET['type_id'];

$query_product_type = "SELECT * FROM tbl_goods as g
INNER JOIN tbl_type as t
ON g.type_id = t.type_id
WHERE g.type_id = $type_id
ORDER BY g.goods_id ASC";
	$result_product_type =mysqli_query($con, $query_product_type) or die ("Error in query: $query_goods " . mysqli_error());

//echo($query_product_type);
//exit();

?>
<div class="row">
<?php foreach ($result_product_type as $row_goods) { ?> &nbsp;
<div class="card text-white bg-dark mb-3" style="width: 16rem; margin-top: 15px;">
<img class="card-img-top" src="../backend/goods_img/<?php echo $row_goods['goods_img'];?>"width="100"  height="200" alt="Card image cap">
<div class="card-body">
  <h5 class="card-title"><?php echo $row_goods['goods_name']; ?></h5>
  <p class="card-text">ประเภท : <?php echo $row_goods['type_name']; ?></p>
  <p class="card-text">เวลาเริ่มจำหน่าย : <?php echo $row_goods['time_on']; ?></p>
  <p class="card-text">เวลาหยุดจำหน่าย : <?php echo $row_goods['time_off']; ?></p>
  <p class="card-text">ราคา : <?php echo $row_goods['goods_price'];?> บาท </p>
  <a href="../backend/edit_goods.php?act=edit&ID=<?php echo $row_goods ['goods_id'] ?>" class="btn-info btn-sm bg-warning">edit</a>&nbsp;
  <a href="../backend/del_goods.php?ID=<?php echo $row_goods ['goods_id'] ?>" onclick="return confirm('Do you want to delete this record? !!!')" class='btn-danger btn-sm'>delete</a>
  
</div>
</div>
<?php } ?>

  
</div>
</div>