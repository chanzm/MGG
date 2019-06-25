<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SIM PENGASUHAN STPN | Login</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/theme.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="icon" href="<?php echo base_url(''); ?>assets/img/favicon.png"/>
  </head>
  
  <body class="hold-transition login-page" style="overflow-y:hidden">
    <div class="login-box">
      <div class="login-logo" onclick="location.href='<?php echo base_url(''); ?>'">
        <img src="<?php echo base_url(''); ?>assets/img/">
      </div>
      <div class="login-box-body">
        <?php if ($this->session->flashdata('error_status')): ?>
          <div class="alert alert-danger" style="padding:4px">
            <span>Gagal login, cek identitas anda kembali</span>
          </div>
        <?php endif; ?>
        <form action="<?php echo base_url('Login/ceklogin'); ?>" method="post">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="username" placeholder="Username">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <button type="submit" style="background-color: white; border: 1px solid #d2d6de" class="btn btn-block btn-flat"><span class="fa fa-sign-in"></span> Masuk</button>
            </div>
          </div>
        </form>
      </div>
      <br><span>&copy; 2019</span>
    </div>
    <script src="<?php echo base_url(); ?>assets/components/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/components/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>