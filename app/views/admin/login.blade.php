@extends('layout')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 col-sm-12">
			<h1>Administración</h1>
			@if (isset($error_message))
			<div class="mb-7 text-center"><span class="label label-danger">{{ $error_message }}</span></div>
			@endif
			{{ Form::open(['route' => 'loginAdm', 'method' => 'post', 'role' => 'form'])}}
				<div class="form-group">
					{{  Form::label('username','Usuario')  }}
					{{  Form::text('username', isset($username)? $username : '' , array('class' => 'form-control')) }}
				</div>

				<div class="form-group">
					{{  Form::label('password','Contraseña')  }}
					{{  Form::password('password', array('class' => 'form-control')) }}
				</div>

				<div class="text-center">
					<input type="submit" value="Log in" class="btn btn-success" />
				</div>

			{{  Form::close()  }}
		</div>	
	</div>
</div>

@endsection