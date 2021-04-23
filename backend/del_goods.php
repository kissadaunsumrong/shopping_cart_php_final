<meta charset="UTF-8">
<?php
include('connectDB.php');
$goods_id = $_REQUEST["ID"];

$sql = "DELETE FROM tbl_goods WHERE goods_id='$goods_id' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());


  if($result){
  echo "<script type='text/javascript'>";
  echo "window.history.back() ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('Error back to delete again');";
  echo "</script>";
}
?>