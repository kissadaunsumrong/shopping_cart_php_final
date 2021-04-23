<?php 
session_start();
        if(isset($_POST['mem_user'])){
                  include("backend/connectDB.php");
                  $member_user = $_POST['mem_user'];
                  $member_pass = $_POST['mem_pass'];

                  $sql="SELECT * FROM tbl_member 
                  WHERE  member_user ='".$member_user."' 
                  AND  member_pass ='".$member_pass."' ";
                  $result = mysqli_query($con,$sql);
				
                  if(mysqli_num_rows($result)==1){
                      $row = mysqli_fetch_array($result);

                      $_SESSION["user_id"] = $row["member_id"];
                      $_SESSION["member_name"] = $row["member_name"];
                      if($_SESSION["user_id"]!= ''){ 

                        Header("Location: index_member.php");
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