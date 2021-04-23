<?php require_once('dbconfig.php');

		$query_type = "SELECT * FROM tbl_type ORDER BY type_id ASC";
		$result_type = mysqli_query($con, $query_type) or die ("Error in query: $query_type " . mysqli_error());
		// $user_id = $_SESSION['user_id'];
		// $member_name = $_SESSION['member_name'];
	?>

	<div class="list-group"> 
	<?php if(isset($_SESSION["member_name"])){ ?>
		สวัสดี คุณ <?php echo $_SESSION["member_name"]; ?>
	<?php } ?>
		<div class="row mt-3"></div>
		<?php
			foreach ($result_type as $row )  { ?>

			<a href="index_member.php?act=showbytype&type_id=<?php echo $row['type_id'];?>" class="
			list-group-item list-group-item-action list-group-item-light"> 
				<?php echo $row["type_name"]; ?></a>

		<?php } ?>    
				
</div>