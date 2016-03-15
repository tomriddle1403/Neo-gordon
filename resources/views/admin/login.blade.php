@extends('admin.layout_login')

@section('title', 'Login')

@section('heading', 'Welcome Admin, please login.')

@section('content')

	{!! Form::open() !!}
		<div class="form-group">
			{!! Form::label('email') !!}
			{!! Form::text('email', Request::get('email'), ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('password') !!}
			{!! Form::password('password', ['class' => 'form-control']) !!}
		</div>

		{!! Form::submit('Login', ['class' => 'btn btn-primary']) !!}



	{!! Form::close() !!}

@endsection
