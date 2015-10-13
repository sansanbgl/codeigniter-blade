<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
 <!-- Bootstrap 3.3.2 -->
	<link href="{{ base_url('assets/adminlte/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
	<!-- FontAwesome 4.3.0 -->
	<link href="{{ base_url('assets/font-awesome-4.3.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
	<!-- Theme style -->
	<link href="{{ base_url('assets/adminlte/dist/css/AdminLTE.min.css') }}" rel="stylesheet" type="text/css" />
	<!-- AdminLTE Skins. Choose a skin from the css/skins
	     folder instead of downloading all of them to reduce the load. -->
	<link href="{{ base_url('assets/adminlte/dist/css/skins/skin-blue.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ base_url('assets/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ base_url('assets/site.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ base_url('assets/adminlte/plugins/datepicker/datepicker3.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ base_url('assets/css/jquery-ui.css') }}" rel="stylesheet" type="text/css" />

	<script src="{{ base_url('assets/js/jquery-1.11.2.min.js') }}"></script>
	<script src="{{ base_url('assets/adminlte/plugins/datepicker/bootstrap-datepicker.js') }}" type="text/javascript"></script>
	<script src="{{ base_url('assets/js/jquery-ui.min.js') }}" type="text/javascript"></script>


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Login page</p>

    <form action="../../index2.html" method="post">
      <div class="form-group has-feedback">
        <input type="nama_id" class="form-control" placeholder="Nama Unit">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.1.4 -->
<script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
