@extends('layouts.default')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-xs-6 col-md-12">
			<h1>Taks To do list App Built using Laravel</h1>
		</div>
		<table class="table table-bordered table-striped">
			<tr>
				<th>#</th>
				<th>Task Name</th>
				<th>Comments</th>
				<th>Done</th>
			</tr>
			@foreach($tasks as $task)
		<tr>
		
		<td>{{ $task->id }} </td>
		<td>{{ $task->title }}</td>
		<td>{{ $task->body}}</td>
		<td>{{ $task->done ? 'Yes' : 'No'}}</td>
	
	@endforeach
	</tr>
</div>
@stop

