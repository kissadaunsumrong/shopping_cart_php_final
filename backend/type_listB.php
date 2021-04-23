<?php
    include('head.php');
        include('connectDB.php');
        $query = "SELECT * FROM tbl_type ORDER BY type_id ASC" or die("Error:" . mysqli_error());
        $result = mysqli_query($con, $query);
        echo ' <table class="table table-hover">';
            echo "
                <tr bgcolor='#BCB7B6'>
                <td>id</td>
                <td>type</td>
                <td>แก้ไข</td>
                <td>ลบ</td>                 
                </tr>";
                
            while($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" .$row["type_id"] .  "</td> ";
                echo "<td>" .$row["type_name"] .  "</td> ";

                echo "<td><a href='type.php?act=edit&ID=$row[0]' class='btn btn-warning btn-xs'>แก้ไข</a></td> ";  

                echo "<td><a href='del_type.php?ID=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\" class='btn btn-danger btn-xs'>ลบ</a></td> ";
                echo "</tr>";
                }
            echo "</table>";

    mysqli_close($con);
?>