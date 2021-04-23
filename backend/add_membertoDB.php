<?php
include('connectDB.php'); 
  $member_user = $_REQUEST["member_user"];
  $member_pass = $_REQUEST["member_pass"];
  $member_name = $_REQUEST["member_name"];
  $member_email = $_REQUEST["member_email"];
  $member_tel = $_REQUEST["member_tel"];
  $member_address = $_REQUEST["member_address"];

  $sql = "INSERT INTO tbl_member(member_user, member_pass, member_name, member_email, member_tel, member_address)
       VALUES('$member_user', '$member_pass', '$member_name', '$member_email', '$member_tel', '$member_address')";

  $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
  
  mysqli_close($con);
  
  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('Register Succesfuly');";
  echo "window.location = '../login_member.php'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('Error back to register again');";
  echo "</script>";
}
?>