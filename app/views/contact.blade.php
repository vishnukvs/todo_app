@extends('layouts.default')
@section('content')
<div class="container">
	<h2>Contact us</h2>
	<p>Please fill the form</p>
	{{ HTML::ul($errors->all(), array('class'=>'errors'))}}

	{{Form::open(array('url'=>'contact',null,'class'=>'form-horizontal'))}}
	<div class="form-group">
		{{ Form::label('Name',null,array('class'=>'col-sm-2 control-label'))}}
		<div class="col-xs-3 col-sm-3 col-md-3">
			{{Form::text('name',null,array('class'=>'form-control'))}}
		</div>
	</div>
	<div class="form-group">
		{{ Form::label('Email',null,array('class'=>'col-sm-2 control-label'))}}
		<div class="col-xs-3 col-sm-3 col-md-3">
			{{Form::text('email',null,array('class'=>'form-control'))}}
		</div>
	</div>
	<div class="form-group">
		{{ Form::label('Message',null,array('class'=>'col-sm-2 control-label'))}}
		<div class="col-xs-3 col-sm-3 col-md-3">
			{{Form::textarea('messages',null,array('class'=>'form-control'))}}
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			{{ Form::submit('Send',array('class'=>'btn btn-success'))}}
			{{ Form::close()}}
		</div><!--/end of main container-->

		@stop
