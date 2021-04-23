<?php
    session_start();
    require "dbconfig.php";

      if(isset($_POST["pid"]) && isset($_POST["pname"]) && isset($_POST["pprice"]) && isset($_POST["pimage"])){
          $id = $_POST["pid"];
          $name = $_POST["pname"];
          $image = $_POST["pimage"];
          $price = $_POST["pprice"];
          $total = "";
          $qty = 1 ;
        
        
          $sql = " INSERT INTO tbl_cart (cart_id, product_id, product_image, product_name, product_price, quantity, total_price) VALUES ( ' ' ,'$id' , '$image' , '$name' , '$price' , '$qty' , '$total') ";


          // $result = $conn->query($sql) or die ("Error in query: $sql " . mysqli_error());
          if ($conn->query($sql) === TRUE) {
              echo "Item added your cart successfully";
            } else {
              echo "Error: " . $sql . "<br>" . $conn->error();
            }
      }

      if (isset($_GET["cartItem"]) && isset($_GET["cartItem"]) == "cart_Item") {
        $query = " SELECT * FROM tbl_cart ORDER BY cart_id ASC " ;
        $result = mysqli_query($conn,$query);
        $rowCount = mysqli_num_rows($result);
          echo($rowCount);

      } 

      if (isset($_GET["Remove"])) {
          $id = $_GET["Remove"];
          $sql =  " DELETE FROM tbl_cart WHERE cart_id = $id ";
          $result = $conn->query($sql) or die ("Error in query: $sql " . mysqli_error());
          header("location: cart_product.php");
          
      }

   

?>
