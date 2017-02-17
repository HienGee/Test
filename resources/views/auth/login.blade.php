@extends('app')
@section('content')
    <div class="col-md-4 col-md-offset-4">
        {!! Form::open(['url' => 'auth/login']) !!}
        	<!--- Email Field --->
        	<div class="form-group">
        	    {!! Form::label('email', 'Email:') !!}
        	    {!! Form::text('email', null, ['class' => 'form-control']) !!}
        	</div>
            <!--- Password Field --->
            <div class="form-group">
                {!! Form::label('password', 'Password:') !!}
                {!! Form::password('password', ['class' => 'form-control']) !!}
            </div>
            {!! Form::submit('登录', ['class' => 'btn btn-primary form-control']) !!}
        {!! Form::close() !!}
    </div>
@stop


