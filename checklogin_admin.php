<?php 
session_start();
        if(isset($_POST['admin_user'])){
                  include("backend/connectDB.php");
                  $admin_user = $_POST['admin_user'];
                  $admin_pass = $_POST['admin_pass'];

                  $sql="SELECT * FROM tbl_admin
                  WHERE  admin_user='".$admin_user."' 
                  AND  admin_pass='".$admin_pass."' ";
                  $result = mysqli_query($con,$sql);
				
                  if(mysqli_num_rows($result)==1){
                      $row = mysqli_fetch_array($result);

                      $_SESSION["user_id"] = $row["admin_id"];
                      $_SESSION["admin_name"] = $row["admin_name"];
                      if($_SESSION["user_id"]!= ''){ 

                        // Header("Location: backend/index.php");
                        Header("Location: admin/index_admin.php");
                      }
                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";
 
                  }
        }else{

             Header("Location: index.php");
 
        }
?>