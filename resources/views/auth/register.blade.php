@extends('app')
@section('content')
    <div class="col-md-4 col-md-offset-4">
        {!! Form::open(['url' => 'auth/register']) !!}
            <!--- Name Field --->
            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>
        	<!--- Email Field --->
        	<div class="form-group">
        	    {!! Form::label('email', 'Email:') !!}
        	    {!! Form::text('email', null, ['class' => 'form-control']) !!}
        	</div>
            <!--- Password Field --->
            <!--- Password Field --->
            <div class="form-group">
                {!! Form::label('password', 'Password:') !!}
                {!! Form::password('password', ['class' => 'form-control']) !!}
            </div>
            <!--- Password-confirm Field --->
            <!--- Password_confirmation Field --->
            <div class="form-group">
                {!! Form::label('password_confirmation', 'Password_confirmation:') !!}
                {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
            </div>
            {!! Form::submit('注册', ['class' => 'btn btn-primary form-control']) !!}
        {!! Form::close() !!}
        @include('errors.list')
    </div>
@stop


