<?php session_start();?>
<?php include('../h.php')?>
<?php include('../backend/connectDB.php')?>
<body>
    <div class="container">
    <?php include('navbar_admin.php')?>
        <div class="row">
            <div class="col-md-3">
            <?php include('menu_admin.php')?>
            </div>
			
			<div class="col-md-9">
            <?php
                $act = (isset($_GET['act']) ? $_GET['act'] : '');
                $q = (isset($_GET['q']) ? $_GET['q'] : '');
                if($act == 'showbytype'){
                include('show_product_type_a.php');
                }elseif($q!=''){
                include('show_product_q_a.php');
                }elseif($act == 'add'){
                include('../backend/add_goods.php');
                }else{
                include('show_product_a.php');
                }
            ?>
			</div>
        </div>
    </div>
</body>    
</html>