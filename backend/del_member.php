<meta charset="UTF-8">
<?php
include('connectDB.php');
$member_id = $_REQUEST["ID"];

$sql = "DELETE FROM tbl_member WHERE member_id='$member_id' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());


  if($result){
  echo "<script type='text/javascript'>";
  echo "window.location = 'member.php'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('Error back to delete again');";
  echo "</script>";
}
?>