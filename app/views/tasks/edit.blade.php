@extends('layouts.default')
@section('content')
<div class="container">
		<h1>Edit A Task</h1>
		<h3>Edit Task Id {{ $task->id}}</h3>
	</div>
	<div class="container">
{{ Form::model($task, array('method' => 'PATCH','class'=>'form-horizontal',
'route' =>array('tasks.update', $task->id))) }}
	<div class="form-group">
		{{ Form::label('Title',null,array('class'=>'col-sm-2 control-label'))}}
		<div class="col-md-3">
			{{ Form::text('title',$task->title,array('class'=>'form-control'))}}
		</div>
	</div>
	<div class="form-group">
		{{ Form::label('Body',null,array('class'=>'col-sm-2 control-label'))}}
		<div class="col-md-3">
			{{ Form::text('body',$task->body,array('class'=>'form-control'))}}
		</div>
	</div>
	<div class="form-group">
		{{ Form::label('Done',null,array('class'=>'col-sm-2 control-label'))}}
		<div class="col-md-3">
			{{ Form::checkbox('done',1,$task->done,array('class'=>'form-control'))}}
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			{{ Form::submit('Edit Task',array('class'=>'btn btn-danger'))}}
		</div>
	</div>
	{{ Form::close()}}
</div>
@if ($errors->any())
<ul>
    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
</ul>
@endif
</div>

@stop