@extends('layout')

@section('content')


<div class="container">
	<div class="row">
		<div class="col-md-6">
			<h1>Administración</h1>

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
lkmlklakmlamklaklamklamkl
			
            </div>
		</div>	
	</div>
</div>

@endsection