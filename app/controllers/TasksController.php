<?php

class TasksController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$tasks = Task::all();
		
		return View::make('tasks.index', compact('tasks'));
		//return View::make('tasks.index',['tasks'=>$tasks]);
	}
	


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('tasks.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
			'title'=>'required',
			'body'=>'required'
			);
		$data = Input::all();
		$validate = Validator::make($data,$rules);
		if($validate->passes())
		{
			Task::create($data);
			return Redirect::route('tasks.index')
			->withInput()
			->withErrors($validate)
			->with('message', 'Successfully created Task.');
		}
		
		return Redirect::route('tasks.create')
		->withInput()
		->withErrors($validate)
		->with('message','some fields are incomplete');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$task = Task::find($id);
		if(is_null($task))
		{
			return Redirect::route('tasks.index');
		}
		return View::make('tasks.edit',compact('task'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$rules = array(
			'title'=>'required',
			'body'=>'required'
			);
		$data = Input::all();
		$validate = Validator::make($data,$rules);
		if($validate->passes())
		{
			$task = Task::find($id);
			$task->update($data);
			return Redirect::route('tasks.index')
			->withInput()
			->withErrors($validate)
			->with('message','Successfully Updated Task');
		}
		return Redirect::route('tasks.edit',$id)
		->withInput()
		->withErrors($validate)
		->with('message','some fields are incomplete');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Task::find($id)->delete();
		return Redirect::route('tasks.index')
					->withInput()
					->with('message','Successfully Deleted');
	}


}
