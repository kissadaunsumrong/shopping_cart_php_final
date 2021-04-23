<?php session_start();?>
<?php include('h.php')?>
<?php include('backend/connectDB.php')?>
<body>
    <?php include('navbar_member.php')?>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
            <?php include('menu_member.php')?>
            </div>
			
			<div class="col-md-9">
                <?php
               $act = (isset($_GET['act']) ? $_GET['act'] : '');
                $q = (isset($_GET['q']) ? $_GET['q'] : '');
                if($act == 'showbytype'){
                    // Home
                include('show_product_type_m.php');
                }elseif($q!=''){
                include('show_product_q_m.php');
                }else{
                     // Home
                include('show_product_m.php');
                }
                ?>
			</div>
        </div>
    </div>
</body>    
</html>