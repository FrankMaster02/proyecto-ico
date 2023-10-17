<!doctype html>
<html lang="es">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="author" content="Bootstrap Gallery" />
		<link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />
		<title>SAF - Login</title>
		
		<!-- Common CSS -->
		<link rel="stylesheet" href="{{ asset('/_adm/css/bootstrap.min.css')}}" />
		<link rel="stylesheet" href="{{ asset('/_adm/fonts/icomoon/icomoon.css')}}" />

		<!-- Mian and Login css -->
		<link rel="stylesheet" href="{{ asset('/_adm/css/main.css')}}" />
	</head>  

	<body class="login-bg">
        <div class="container">
            <div class="login-screen row align-items-center text-center">
                <div class="col-lg-12 text-center">
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <div class="login-box">
                                <div>
                                    <h1 class="logo-name text-center" style="font-size: 135px;">SAF</h1>
                                </div>
                                <h3>Bienvenido al SAF</h3>
                                <p>
                                    Servicio Automotriz Flores
                                </p>
                                <p>Entra y conócelo.</p>
                                <form class="m-t" role="form" action="{{route('adm.abrirSesion')}}" method="POST">
                                    @if(session('msgError'))
                                    <div class="alert alert-danger alert-dismissable">
                                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                        {{session('msgError')}}
                                    </div>
                                    @endif
                                    <div class="form-group">
                                        <input name="identidad" type="text" class="form-control" placeholder="identidad" required="">
                                    </div>
                                    <div class="form-group">
                                        <input name="clave" type="password" class="form-control" placeholder="Clave" required="">
                                    </div>
                                    
                                    
                                    <button type="submit" class="btn btn-primary block full-width m-b">Entrar</button>
                                    
                                    <input type="hidden" name="_token" value="<?= csrf_token(); ?>">
                                </form>    
                            </div>
                        </div>
                    </div>
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