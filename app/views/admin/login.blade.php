@extends('layout')

@section('content')


<div class="container">
	<div class="row">
		<div class="col-md-6">
			<h1>Administración</h1>
			@if (isset($error_message))
			<div class="mb-7"><span class="label label-danger">{{ $error_message }}</span></div>
			@endif
			{{ Form::open(['route' => 'loginAdm', 'method' => 'post', 'role' => 'form'])}}
				<div class="form-group">
					{{  Form::label('username','Usuario')  }}
					{{  Form::text('username') }}
				</div>

				<div class="form-group">
					{{  Form::label('password','Contraseña')  }}
					{{  Form::password('password') }}
				</div>

				
				<input type="submit" value="Log in" class="btn btn-success" />

			{{  Form::close()  }}
		</div>	
	</div>
</div>

@endsection