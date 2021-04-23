<?php include('head.php');?>
<form  name="admin" action="add_admintoDB.php" method="POST" id="admin" class="form-horizontal">
          <div class="form-group">
            <div class="col-sm-6" align="left">
              <input  name="admin_user" type="text" required class="form-control" id="admin_user" placeholder="username" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2"  />
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-6" align="left">
              <input  name="admin_pass" type="password" required class="form-control" id="admin_pass" placeholder="password" pattern="^[a-zA-Z0-9]+$" minlength="2" />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-6" align="left">
              <input  name="admin_name" type="text" required class="form-control" id="admin_name" placeholder="ชื่อ-สกุล" />
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-6" align="right">
              <button type="button" class="btn btn-warning btn-xs" id="btn" value ="go back" onclick="window.location='admin.php'"> <span class="glyphicon glyphicon-saved"></span> ย้อนกลับ  </button>
              <button type="submit" class="btn btn-success" id="btn"> <span class="glyphicon glyphicon-saved"></span> บันทึก  </button>      
            </div> 
          </div>
</form>