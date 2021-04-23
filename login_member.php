<?php session_start();
error_reporting( error_reporting() & ~E_NOTICE );
?>
<?php
include('backend/head.php');
?>
<style type="text/css">
#btn{
width:100%;
}
</style>
<div class="container" style="padding-top:100px">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4" style="background-color:#D6EAF8">
      <h3 align="center">
      <span class="glyphicon glyphicon-lock"> </span>
      Login </h3>
      <form  name="formlogin" action="checklogin_member.php" method="POST" id="login" class="form-horizontal">
        <div class="form-group">
          <div class="col-sm-12">
            <input type="text"  name="mem_user" class="form-control" required placeholder="Username" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <input type="password" name="mem_pass" class="form-control" required placeholder="Password" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-success" id="btn">
            <span class="glyphicon glyphicon-log-in"> </span>
             Login </button>
               <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
               </label>
               <a class="link" href="backend/add_member.php">สมัครสมาชิก <span class="sr-only">(current)</span></a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>