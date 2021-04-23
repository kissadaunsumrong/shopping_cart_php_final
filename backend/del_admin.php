<meta charset="UTF-8">
<?php
include('connectDB.php');
$admin_id = $_REQUEST["ID"];

$sql = "DELETE FROM tbl_admin WHERE admin_id='$admin_id' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());


  if($result){
  echo "<script type='text/javascript'>";
  echo "window.location = 'admin.php'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('Error back to delete again');";
  echo "</script>";
}
?>