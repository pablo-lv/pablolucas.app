<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Paul Site Admin</title>

	<!-- Font awesome -->
	<link rel="stylesheet" href="css/admin/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="css/admin/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="css/admin/dataTables.bootstrap.min.css">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="css/admin/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="css/admin/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="css/admin/fileinput.min.css">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="css/admin/awesome-bootstrap-checkbox.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="css/admin/style.css">

	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>
	
	<div class="login-page bk-img" style="background-image: url(img/Mountainous_View_by_Sven_Scheuermeier.jpg);">
		<div class="form-content">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<h1 class="text-center text-bold text-light mt-4x">Sign in</h1>
						<div class="well row pt-2x pb-3x bk-light" style="background: #2d3b55; opacity: .8">
                            <div class="opacity">
                                <div class="col-md-8 col-md-offset-2">
                                    <form class="mt" role="form" method="POST" action="{{ url('/login') }}">
                                        {{ csrf_field() }}

                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <label class="text-uppercase text-sm text-light">E-Mail Address</label>
                                            <input type="email" class="form-control mb" name="email" value="{{ old('email') }}">
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <label class="text-uppercase text-sm text-light">Password</label>
                                            <input type="password" class="form-control mb" name="password">
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="checkbox checkbox-circle checkbox-info">
                                            <input id="checkbox7" type="checkbox" checked>
                                            <label for="checkbox7" class="text-light">
                                                Remember me
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-block">
                                                LOGIN
                                            </button>

                                        </div>
                                    </form>
                                </div>
                            </div>
						</div>
						<div class="text-center text-light">
                            <a class="btn btn-link text-light" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>

</body>

</html>