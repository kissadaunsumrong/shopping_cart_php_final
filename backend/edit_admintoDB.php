<meta charset="UTF-8">
<?php
include('connectDB.php');
  $admin_id = $_REQUEST["admin_id"];
  $admin_user = $_REQUEST["admin_user"];
  $admin_pass = $_REQUEST["admin_pass"];
  $admin_name = $_REQUEST["admin_name"];

  $sql = "UPDATE tbl_admin SET  
      admin_user='$admin_user' , 
      admin_pass='$admin_pass' , 
      admin_name='$admin_name' 
      WHERE admin_id='$admin_id' ";

$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
mysqli_close($con);
  
  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('Update');";
  echo "window.location = 'admin.php'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('Error back to Update again');";
  echo "</script>";
}
?>