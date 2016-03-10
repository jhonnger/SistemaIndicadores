<html>
<head>
	<title>Inicio</title>
</head>
<body>
<header>
	<ul>
		<div>
			<li>Opcion1</li>
			<li>Opcion2</li>
			<li>Opcion3</li>
			<li>Opcion4</li>
			<li>Opcion5</li>
			<form method="POST" action="principal">
				<select name="tipo">
					<option value="administrativo">Administrativo</option>
					<option value="escuela">Escuela</option>
				</select>
				<input type="text" placeholder="USUARIO" name = "usuario">
				<input type="password" placeholder="CLAVE" name = "clave">
				<input type="submit" value="Ingresar" name = "ingresar">
			</form>
		</div>
		<div>
			<img src="direccion">
		</div>
	</ul>
</header>

@yield('content')
</br>


<footer>
@CopyRight Derechos Reservados OCAFCA 2016
</footer>
</body>
</html>