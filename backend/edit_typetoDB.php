<meta charset="UTF-8">
<?php
include('connectDB.php');

  $type_id = $_REQUEST["type_id"];
  $type_name = $_REQUEST["type_name"];
  
  $sql = "UPDATE tbl_type SET  
      type_name='$type_name' 
      WHERE type_id='$type_id' ";

$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
mysqli_close($con);
  
  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('Update');";
  echo "window.location = 'type.php'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('Error back to Update again');";
  echo "</script>";
}
?>