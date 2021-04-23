<?php
    session_start();
    include('h.php');
    require('dbconfig.php');
    if(!isset($_SESSION['member_name'])){
        header('location: login_member.php');
    }

    $query = " SELECT * FROM tbl_cart ORDER BY tbl_cart.cart_id " ;
    $result = mysqli_query($conn,$query) or die("Error : $mysqli_error");
    $sum=0;
    $rowCount = mysqli_num_rows($result);
    if ($rowCount == 0) {
?>
        <script>
            window.alert("No items in the cart!!");
        </script>
<?php
    } else {
        // while($row = mysqli_fetch_array($result)){
        //     $sum = $sum+$row['product_price']; 
        // }
    }
        
    
?>

<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart shopping</title>
</head>

<body>
    <div>
        <?php 
            include('navbar_member.php');
        ?>
            <div class="container mt-5">
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr class="text-center">
                            <th>ลำดับ</th>
                            <th>รูปภาพ</th>
                            <th>ชื่อสิ้นค้า</th>
                            <th>จำนวน</th>
                            <th>ราคา</th>
                            <th></th>
                        </tr>
                        
                        <?php 
                            $item = 1;
                            while ($row = mysqli_fetch_assoc($result)){
                            $sum = $sum+$row['product_price'];
                        ?>
                            <tr>
                                <td class="text-center"><?php echo $item ?></td>
                                <td class="text-center"><img class="card-img-top" style="width:50px; height: 50px; " src="backend/goods_img/<?php echo $row['product_image'];?>" width="200"  height="200" alt="Card image cap"></td>
                                <td class="text-center"><?php echo $row['product_name']; ?></td>
                                <td class="text-center"><?php echo $row['quantity']; ?></td>
                                <td class="text-center"><?php echo $row['product_price']; ?></td>
                                <td class ="text-center">
                                    <a href="actionFunction.php?Remove=<?php echo $row['cart_id']; ?>" class='btn btn-danger btn-xs'  onclick="return confirm('ยันยันการลบ')">ลบ</a> 
                                </td>
                            </tr>
                         <?php 
                         $item++; 
                        } 
                         ?>
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-6"> </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-8 text-center" >
                                Total  <?php echo $sum;?>
                            </div>
                            <div class="col-4 text-right">
                                <a href="success.php?id=<?php echo $user_id?>" class="btn btn-primary">Confirm Order</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </div>
</body>
</html>