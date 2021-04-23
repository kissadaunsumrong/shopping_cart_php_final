<?php
  $query_goods = "SELECT * FROM tbl_goods as g
  INNER JOIN tbl_type as t
  ON g.type_id = t.type_id
  ORDER BY g.goods_id ASC";
    $result_goods =mysqli_query($con, $query_goods) or die ("Error in query: $query_goods " . mysqli_error());

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

  
</head>
<body>

  <div class="container">
    <div class="row">
      <?php while ($row = $result_goods->fetch_assoc()){?> &nbsp;
      <div class="card text-white bg-dark mb-3" style="width: 16rem; margin-top: 15px;">
        <img class="card-img-top" src="backend/goods_img/<?php echo $row['goods_img'];?>"width="100"  height="200" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><?php echo $row['goods_name']; ?></h5>
            <p class="card-text">ประเภท : <?php echo $row['type_name']; ?></p>
            <p class="card-text">เวลาเริ่มจำหน่าย : <?php echo $row['time_on']; ?></p>
            <p class="card-text">เวลาหยุดจำหน่าย : <?php echo $row['time_off']; ?></p>
            <p class="card-text">ราคา : <?php echo $row['goods_price'];?> บาท </p>
            <div class="row">
              <a href="product_detail_m.php?id=<?php echo $row ['goods_id'] ?>" class="btn btn-outline-warning">รายละเอียด</a>&nbsp;
              <form class="form-submit" >
                <input type="hidden" class = "pid" value = "<?php echo $row['goods_id']; ?>">
                <input type="hidden" class = "pname" value = "<?php echo $row['goods_name']; ?>">
                <input type="hidden" class = "pimage" value = "<?php echo $row['goods_img']; ?>">
                <input type="hidden" class = "pprice" value = "<?php echo $row['goods_price']; ?>">
                <button id="addItem" type="submit" (click)="" class="btn btn-outline-success addItem">ใส่ตะกร้า</button>
              </form>
            </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
  <script type="text/javascript" src="cart.js"></script>
  <!-- <script type="text/javascript">
  $(document).ready(function(){

    $(document).on("click","#addItem" ,function(e){
      e.preventDefault();
      var form = $(this).closest(".form-submit");
      var id = form.find(".pid").val();
      var name = form.find(".pname").val();
      var image = form.find(".pimage").val();
      var price = form.find(".pprice").val();

      console.log( id, name ,  price , image);

      data = {
        pid : id,
        pname: name ,
        pimage: image,
        pprice: price,
      };
      
      $.ajax({
        method: "POST",
        url:"actionFunction.php",
        data : data,
        success:function(response){
          window.scrollTo(0,0);
          load_cart_item_number();
        }
      })
      .done(function(msg){
        // alert("Data Saved: " + msg);
      });

    });
    load_cart_item_number();

    function load_cart_item_number(){
      $.ajax({
        url: "actionFunction.php",
        method: "GET",
        data: {cartItem: "cart_Item"},
        success:function(response){
          $("#cart-Item").html(response);
        }
      });
    }
  });
</script> -->
</body>
</html>

