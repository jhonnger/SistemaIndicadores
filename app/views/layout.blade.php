<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Sistema de Indicadores</title>

        <!-- Bootstrap core CSS -->
        <link href="{{ asset('recursos/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="{{ asset('recursos/css/style.css') }}" rel="stylesheet">


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Inicio</a>
                    <a class="navbar-brand" href="#">Opcion2</a>
                    <a class="navbar-brand" href="#">Opcion3</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    @if(Auth::check())
                    <ul class="nav navbar-nav pull-right">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <span class="icon icon-wh i-profile"></span>{{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="">Editar perfil</a></li>
                                <li><a href=" {{route('logout')}} ">Salir</a></li>
                            </ul>
                        </li>
                    </ul>
                    @else
                   
                    {{ Form::open(['route' => 'login', 'method' => 'post', 'role' => 'form','class' =>'navbar-form navbar-right'])}}

                    @if(Session::has('login_error'))
                    <span class="label label-danger">Credenciales no validas</span>
                    @endif



                <!--    <div class="form-group">
                        {{  Form::select('type',$types,'2',['class'=>'form-control']) }}
                    </div>
                -->
                    <div class="form-group">
                        {{  Form::text('username',null,['class'=>'form-control', 'placeholder'=>"Usuario"]) }}
                    </div>

                    <div class="form-group">
                        {{  Form::password('password',['class'=>'form-control','placeholder'=>"Contraseña"]) }}
                    </div>


                    <input type="submit" value="Log in" class="btn btn-success" />

                    {{  Form::close()  }}
                    @endif
                </div><!--/.navbar-collapse -->
            </div>
        </nav>

        @yield('content')

        <div class="footer navbar-fixed-bottom">
            <hr>
            <footer>
                &copy; 2016 Universidad Nacional de Piura, OCAFCA.
            </footer>
        </div>
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
        <script src="{{ asset('recursos/js/jquery.js') }}"></script>
        <script src="{{ asset('recursos/js/bootstrap.min.js') }}"></script>
    </body>
</html>
