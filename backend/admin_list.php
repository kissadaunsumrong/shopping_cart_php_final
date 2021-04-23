<?php
      include('head.php');
       error_reporting( error_reporting() & ~E_NOTICE );
                include('connectDB.php'); 
                $query = "SELECT * FROM tbl_admin ORDER BY admin_id ASC" or die("Error:" . mysqli_error());
                $result = mysqli_query($con, $query);
                $row_am = mysqli_fetch_assoc($result);
                ?>

<script>    
$(document).ready(function() {
    $('#example1').DataTable( {
      "aaSorting" :[[0,'ASC']],
  });
} );
 
  </script>

  <table border="2" class="display table table-bordered" id="example1" align="center"  >
  <thead>
    <tr class="info">    
    <th>id</th>
    <th>admin_user</th>
    <th>admin_pass</th>
    <th>admin_name</th>
    <th>edit</th>
    <th>delete</th>
  </tr>
</thead>
  <?php do { ?>
  
    <tr>
      <td><?php echo $row_am['admin_id']; ?></td>
      <td><?php echo $row_am['admin_user']; ?></td>
      <td ><?php echo $row_am['admin_pass']; ?></td>
      <td ><?php echo $row_am['admin_name']; ?></td>
      <td><a href="admin.php?act=edit&ID=<?php echo $row_am['admin_id']; ?>" class="btn btn-warning btn-xs"> แก้ไข </a> </td>
       <td><a href="del_admin.php?ID=<?php echo $row_am['admin_id']; ?>" class='btn btn-danger btn-xs'  onclick="return confirm('ยันยันการลบ')">ลบ</a> </td>
    </tr>

    <?php } while ($row_am =  mysqli_fetch_assoc($result)); ?>
  
    </table> 