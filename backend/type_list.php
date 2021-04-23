<?php
      include('head.php');
       error_reporting( error_reporting() & ~E_NOTICE );
                include('connectDB.php'); 
                $query = "SELECT * FROM tbl_type ORDER BY type_id ASC" or die("Error:" . mysqli_error());
                $result = mysqli_query($con, $query);
                $row_t = mysqli_fetch_assoc($result);
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
    <th>type</th>
    <th>edit</th>
    <th>delete</th>
  </tr>
</thead>
  <?php do { ?>
  
    <tr>
      <td><?php echo $row_t['type_id']; ?></td>
      <td><?php echo $row_t['type_name']; ?></td>
      <td><a href="type.php?act=edit&ID=<?php echo $row_t['type_id']; ?>" class="btn btn-warning btn-xs"> แก้ไข </a> </td>
       <td><a href="del_type.php?ID=<?php echo $row_t['type_id']; ?>" class='btn btn-danger btn-xs'  onclick="return confirm('ยันยันการลบ')">ลบ</a> </td>
    </tr>

    <?php } while ($row_t =  mysqli_fetch_assoc($result)); ?>
  
    </table> 