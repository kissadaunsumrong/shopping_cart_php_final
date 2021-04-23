<?php session_start();
?>

<?php include('h.php')?>
<?php include('backend/connectDB.php')?>
<body>
    <?php include('navbar_member.php');
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
            <p></p>
            <?php include('menu.php')?>
            </div>
			
			<div class="col-md-9">
                <?php
               $act = (isset($_GET['act']) ? $_GET['act'] : '');
                $q = (isset($_GET['q']) ? $_GET['q'] : '');
                if($act == 'showbytype'){
                include('show_product_type.php');
                }elseif($q!=''){
                include('show_product_q.php');
                }else{
                include('show_product.php');
                }
                ?>
			</div>
        </div>
    </div>
</body>    
</html>
<style>
.content {
  text-align: right;
  margin: 160px;
}
</style>
<footer>
<div class="content">
<a href="login_admin.php"> login </a>  
</div>
</footer>