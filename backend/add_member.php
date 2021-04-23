<style type="text/css">
#btn{
width:100%;
}
</style>

<?php include('../head.php');?>
<div class="container" style="padding-top:100px">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4" style="background-color:#D6EAF8">
      <h3 align="center">
      <span class="glyphicon glyphicon-lock"> </span>
      Register </h3>
<form  name="register" action="add_membertoDB.php" method="POST" class="form-horizontal">
       <div class="form-group">
          <div class="col-sm-12" align="left">
            <input  name="member_user" type="text" required class="form-control" id="member_username" placeholder="Username" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2"  />
          </div>
      </div> 
        <div class="form-group">
          <div class="col-sm-12" align="left">
            <input  name="member_pass" type="password" required class="form-control" id="member_password" placeholder="Password" pattern="^[a-zA-Z0-9]+$" minlength="2" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12" align="left">
            <input  name="member_name" type="text" required class="form-control" id="member_name" placeholder="ชื่อ-สกุล " />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12" align="left">
            <input  name="member_email" type="email" class="form-control" id="member_email"   placeholder=" อีเมล์"/>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12" align="left">
            <input  name="member_tel" type="text" class="form-control" id="member_tel"  placeholder="เบอร์โทร ตัวเลขเท่านั้น" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12" align="left">
            <textarea name="member_address" class="form-control" id="member_address" required></textarea> 
          </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12" align="right">
            <!-- <button type="button" class="btn btn-warning btn-xs" id="btn" value ="go back" onclick=window.history.back()> <span class="glyphicon glyphicon-saved"></span> ย้อนกลับ  </button> -->
            <button type="submit" class="btn btn-success" id="btn"><span class="glyphicon glyphicon-ok"></span> สมัครสมาชิก  </button>
            </div>     
        </div>
      <!-- <div class="form-group">
          <div class="col-sm-6" align="left">
          <button type="button" class="btn btn-warning btn-xs" id="btn" value ="go back" onclick=window.history.back()> <span class="glyphicon glyphicon-saved"></span> ย้อนกลับ  </button>
           <button type="submit" class="btn btn-success" id="btn"><span class="glyphicon glyphicon-ok"></span> สมัครสมาชิก  </button>
          </div>     
      </div> -->
      </form>
      </div>
  </div>
</div>