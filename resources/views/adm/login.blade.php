<!doctype html>
<html lang="es">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="Unify Admin Panel" />
		<meta name="keywords" content="Login, Unify Login, Admin, Dashboard, Bootstrap4, Sass, CSS3, HTML5, Responsive Dashboard, Responsive Admin Template, Admin Template, Best Admin Template, Bootstrap Template, Themeforest" />
		<meta name="author" content="Bootstrap Gallery" />
		<link rel="shortcut icon" href="{{ asset('/_adm/img/logo-de-la-uaemex-svg.ico')}}" />
		<title>Adm - Login - ICO</title>

        <!-- Common CSS -->
		<link rel="stylesheet" href="{{ asset('/_adm/css/bootstrap.min.css')}}" />
		<link rel="stylesheet" href="{{ asset('/_adm/fonts/icomoon/icomoon.css')}}" />

		<!-- Mian and Login css -->
		<link rel="stylesheet" href="{{ asset('/_adm/css/main.css')}}" />

	</head>  

	<body class="login-bg">
			
		<div class="container">
			<div class="login-screen row align-items-center">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                   <form class="m-t" role="form" action="{{route('adm.abrirSesion')}}" method="POST">
                        @if(session('msgError'))
                        <div class="alert alert-danger alert-dismissable">
                            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                            {{session('msgError')}}
                        </div>
                        @endif
						<div class="login-container">
							<div class="row no-gutters">
								<div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
									<div class="login-box">
										<a href="#" class="login-logo">
											<img src="{{asset('/_adm/img/unify.png')}}" alt="Unify Admin Dashboard" />
										</a>
                                        <div class="form-group">
                                            <input name="noCuenta" type="text" class="form-control" placeholder="No. Cuenta" required="">
                                        </div>
                                        <div class="form-group">
                                            <input name="clave" type="password" class="form-control" placeholder="Clave" required="">
                                        </div>
                                                                                
                                        <input type="hidden" name="_token" value="<?= csrf_token(); ?>">
										<div class="actions clearfix">
									  	<button type="submit" class="btn btn-primary">Iniciar</button>
									  </div>
									</div>
								</div>
								<div class="col-xl-8 col-lg-7 col-md-6 col-sm-12">
									<div class="">
										<img src="{{asset('/_adm/img/EspacioU.jpeg')}}" alt="45">
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<script type="text/javascript">
            var msgs = {};
            
            @if(!is_null(session('msgError')))
            msgs.error = '{{session("msgError")}}';
            @endif
        </script>
        
        <script src="{{asset('_adm/js/login.js')}}"></script>
	</body>
</html>