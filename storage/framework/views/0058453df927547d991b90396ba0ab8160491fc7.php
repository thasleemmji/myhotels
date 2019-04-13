<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Evas International</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
  <meta content="Coderthemes" name="author" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <!-- App favicon -->
  <link rel="shortcut icon" href="images/favicon.ico">
  <!-- App css -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

<link href="css/style.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
  <!-- Toastr css -->
  <link href="plugins/jquery-toastr/jquery.toast.min.css" rel="stylesheet">
  <!-- jQuery -->
  <script src="js/jquery.min.js"></script>  
</head>


<?php if(session('update_success')): ?>
<div class="alert alert-success row">
    <div class="col-2"><i class="fa fa-check-circle-o"></i></div>
    <div class="col-10"><?php echo e(session('update_success')); ?></div>
</div>
<?php endif; ?>

<?php if(session('update_error')): ?>
<div class="alert alert-error row">
    <div class="col-2"><i class="fa fa-times-circle-o"></i></div>
    <div class="col-10"><?php echo e(session('update_error')); ?></div>
</div>
<?php endif; ?>
<body class="p-0">
  <!-- HOME -->
  <section>
    <div class="container-fluid">
      <div class="row login-page">
        <div class="col-lg-8 col-md-7 login-left fullvh m-c">
        </div>
        <div class="col-lg-4 col-md-5 login-right fullvh m-c">
            <div class="login-section">
                <div class="logo-bg m-c"><img src="images/logo.png"></div>
                <div id="loginForm">
                  <h5 class="text-center">Login to Continue</h5>
                  <form method="POST" action="<?php echo e(route('login')); ?>" autocomplete="off">
                       <?php echo csrf_field(); ?>
                       <div class="form-group">
                           <i class="fa fa-user-o"></i>
                           <input type="text" name="login" class="form-control" placeholder="Email or User name" value="admin">
                       </div>
                       <div class="form-group">
                           <i class="fa fa-key"></i>
                           <input type="password" name="password" class="form-control" placeholder="Password" value="asdasd">
                       </div>
                       <div class="form-group">
                            <div class="row">
                                <div class="col-6 text-left">
                                    <button type="submit" class="btn-login">Login <i class="fa fa-sign-in"></i></button>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="javascript:;" id="showForgot" class="btn btn-link">Forgot Password?</a>
                                </div>
                            </div>
                       </div>
                   </form>
                  </div>
                  
                  <div id="forgotForm" style="display: none;">
                    <h5 class="text-center">Reset your Password</h5>
                    <form method="POST" action="login" autocomplete="off">
                       <?php echo e(csrf_field()); ?>

                       <div class="form-group">
                           <i class="fa fa-user-o"></i>
                           <input type="text" name="username" class="form-control" placeholder="Email or User name">
                       </div>
                       <div class="form-group">
                            <div class="row">
                                <div class="col-4 text-left">
                                    <a href="javascript:;" id="cancelForgot" class="btn btn-link">Login</a>
                                </div>
                                <div class="col-8 text-right">
                                  <button type="submit" class="btn-login">Reset Password <i class="fa fa-lock"></i></button>
                                </div>
                            </div>
                       </div>
                    </form>
                  </div>
              </div>
        </div>
      </div>

    </div>
</section>
<!-- END HOME -->
<script src="js/bootstrap.min.js"></script>
<!-- Toastr js -->
<script src="plugins/jquery-toastr/jquery.toast.min.js"></script>

<script type="text/javascript">
$("#showForgot").click(function () {
   $("#loginForm").hide();
   $("#forgotForm").slideDown();
});

$("#cancelForgot").click(function () {
   $("#forgotForm").hide();
   $("#loginForm").slideDown();
});
</script>
</body>
</html>