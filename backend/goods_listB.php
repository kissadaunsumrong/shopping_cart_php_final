<?php
include('connectDB.php');
$query = "
SELECT * FROM tbl_goods as g 
INNER JOIN tbl_type  as t ON g.type_id=t.type_id 
ORDER BY g.goods_id DESC" or die("Error:" . mysqli_error());
$result = mysqli_query($con, $query);

echo  ' <table class="table table-hover">';
    echo "<tr bgcolor='#BCB7B6'>
      <td>id</td>
      <td>ประเภท</td>
      <td>ชื่อ</td>
      <td>ราคา</td>
      <td>รายละเอียด</td>
      <td>เวลาเริ่มขาย</td>
      <td>เวลาหยุดขาย</td>
      <td>img</td>
      <td>edit</td>
      <td>delete</td>
    </tr>";
  while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
    echo "<td>" .$row["goods_id"] .  "</td> ";
    echo "<td>" .$row["type_name"] .  "</td> ";
    echo "<td>" .$row["goods_name"] .  "</td> ";
    echo "<td>" .$row["goods_price"] . "</td> ";
    echo "<td>" .$row["goods_detail"] .  "</td> ";
    echo "<td>" .$row["time_on"] . "</td>";
    echo "<td>" .$row["time_off"] . "</td>";
    echo "<td align=center>"."<img src='goods_img/".$row['goods_img']."' width='100'>"."</td>";
    echo "<td><a href='goods.php?act=edit&ID=$row[0]' class='btn btn-warning btn-xs'>edit</a></td> ";
    echo "<td><a href='del_goods.php?ID=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\" class='btn btn-danger btn-xs'>del</a></td> ";
  echo "</tr>";
  }
echo "</table>";
mysqli_close($con);
?>