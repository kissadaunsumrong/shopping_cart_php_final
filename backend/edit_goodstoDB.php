<meta charset="UTF-8">
<?php 
include('connectDB.php'); 
    date_default_timezone_set('Asia/Bangkok');
	$date1 = date("Ymd_His");
	$numrand = (mt_rand());
	
	$goods_id = $_POST["goods_id"];
	$goods_name = $_POST["goods_name"];
	$type_id = $_POST["type_id"];
	$goods_price = $_POST["goods_price"];
	$goods_detail = $_POST["goods_detail"];
	$time_on = $_POST["time_on"];
	$time_off = $_POST["time_off"];
	$goods_img = (isset($_POST['goods_img']) ? $_POST['goods_img'] : '');
	$img2 = $_POST['img2'];
	$upload=$_FILES['goods_img']['name'];
	if($upload !='') { 
 
	$path="goods_img/";
	$type = strrchr($_FILES['goods_img']['name'],".");
	$newname =$numrand.$date1.$type;
 
	$path_copy=$path.$newname;
	$path_link="goods_img/".$newname;
	move_uploaded_file($_FILES['goods_img']['tmp_name'],$path_copy);  
		
	}else {
		$newname = $img2;
	
	}

	
	$sql = "UPDATE tbl_goods SET  
			goods_name='$goods_name',
			type_id='$type_id', 
			goods_price='$goods_price',
			goods_detail='$goods_detail',
			time_on='$time_on',
			time_off='$time_off',
			goods_img='$newname'
			WHERE goods_id='$goods_id' ";

$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());

mysqli_close($con);
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('Update Succesfuly');";
	echo "window.location = 'goods.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to Update again');";
	echo "</script>";
}
?>