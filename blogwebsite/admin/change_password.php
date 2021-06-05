<?php
include('conn/conn.php');
if(isset($_POST['change_password']) && $_POST['change_password']=="change_password")
{
	$sql = "SELECT * FROM admin WHERE username='".$_SESSION['username']."' and password='".$_POST['oldpassword']."'";
	$result = $conn->query($sql);
	if($result->num_rows<1)
	{
		$err_msg="Old Password not matched!!!";
	}
	else
	{
	$sql = "UPDATE admin SET password = '".$_POST['newpassword']."' WHERE username='".$_SESSION['username']."'";
	$result = $conn->query($sql);
	$suc_msg="Password updated Successfully!!!";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Demo | Recover Password</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script>
  function checkvalid(f)
  {
	  if(f.newpassword.value!=f.retypenewpassword.value)
	  {
		  alert("New password and confirm new password should be same");
		  return false;
	  }
  }
  </script>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="index2.html"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">You are only one step a way from your new password, recover your password now.</p>
	   <?php if(isset($err_msg)&& $err_msg!=""){
							?>
							<div class="text-danger">
							<?php echo $err_msg; ?>
							</div>
							<?php
						}
						?>
						<?php if(isset($suc_msg)&& $suc_msg!=""){
							?>
							<div class="text-success">
							<?php echo $suc_msg; ?>
							</div>
							<?php
						}
						?>
      <form method="post" onsubmit="return checkvalid(this)">
	    <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Old Password" name="oldpassword" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="New Password" name="newpassword" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Confirm New Password" name="retypenewpassword" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block" value="change_password" name="change_password">Change password</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mt-3 mb-1">
        <a href="login.html">Login</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>
