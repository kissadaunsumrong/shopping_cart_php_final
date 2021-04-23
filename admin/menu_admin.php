<?php require_once('../backend/connectDB.php');

	$query_type = "SELECT * FROM tbl_type ORDER BY type_id ASC";
	$result_type =mysqli_query($con, $query_type) or die ("Error in query: $query_type " . mysqli_error());
	$user_id = $_SESSION['user_id'];
  	$admin_name = $_SESSION['admin_name'];
?>

<div class="list-group"> 
<p></p>
สวัสดี คุณ <?php echo $admin_name; ?>
<p></p>
	<?php
		foreach ($result_type as $row )  { ?>

		 <a href="index_admin.php?act=showbytype&type_id=<?php echo $row['type_id'];?>" class="
		 list-group-item list-group-item-action list-group-item-light"> 
		 	<?php echo $row["type_name"]; ?></a>

	<?php } ?>          
</div>