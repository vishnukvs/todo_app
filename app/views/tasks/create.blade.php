@extends('layouts.default')
@section('content')
<div class="container">

	{{Form::open(array('route' => 'tasks.store','class'=>'form-horizontal'))}}
	<div class="form-group">
		{{ Form::label('Title',null,array('class'=>'col-sm-2 control-label'))}}
		<div class="col-md-3">
			{{ Form::text('title',null,array('class'=>'form-control'))}}
		</div>
	</div>
	<div class="form-group">
		{{ Form::label('Body',null,array('class'=>'col-sm-2 control-label'))}}
		<div class="col-md-3">
			{{ Form::text('body',null,array('class'=>'form-control'))}}
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			{{ Form::submit('Create Task',array('class'=>'btn btn-success'))}}
		</div>
	</div>
	{{ Form::close()}}
	@if ($errors->any())
<ul>
    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
</ul>
@endif
</div>
@stop