<meta charset="UTF-8">
<?php
include('connectDB.php'); 
$type_id = $_REQUEST["ID"];
$sql = "DELETE FROM tbl_type WHERE type_id='$type_id' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
  if($result){
  echo "<script type='text/javascript'>";
  echo "window.location = 'type.php'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('Error back to delete again');";
  echo "</script>";
}
?>