<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index_member.php">HOME</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <?php if(!isset($_SESSION["member_name"])){ ?>
          <li class="nav-item active">
            <a class="nav-link" href="login_member.php">เข้าสู่ระบบ</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link disabled" href="backend/add_member.php">สมัครสมาชิก <span class="sr-only">(current)</span></a>
          </li>
        <?php } ?>
        <?php if(isset($_SESSION["member_name"])){ ?>
          <li class="nav-item active">
            <a class="nav-link" href="logout.php" onclick ="return confirm('ต้องการออกจากระบบหรือไม่ ?')">ออกจากระบบ </a>
          </li>
        <?php } ?>


      </ul>
      <form class="form-inline my-2 my-lg-0 mr-3" action="index_member.php"method="GET">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" name="q">
        <button class="btn btn-outline-success ml-2" type="submit">Search</button>
      </form>
        <button class="btn btn-outline-warning" type="button" style ="width: 100px">
          <a href="cart_product.php" style ="text-decoration: none; color:#fff">
              รถเข็น (
            <!-- <span style="background: #ff5700; padding:2px 9px; color: white; text-decoration: none;  border-radius: 20%;"  id="cart-Item"></span> ) -->
            <span  id="cart-Item"></span> )
          </a>
        </button>
    </div>
  </nav>
  <script src="cart.js"></script>
</body>
</html>