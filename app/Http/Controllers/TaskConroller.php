<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Enums\TaskEnum;

class TaskConroller extends Controller
{
    public function dashboard()
	{
		 $tasks = Task::all();
		 
		 
		 return view('dashboard' , [
	'tasks'=> $tasks]) ;
	}
	
	public function create()
	{
		return view('task.create ');
	}
	
	public function store(Request $request)
	{
	    $task = new Task();
		$task->title = $request->title;
		$task->status = TaskEnum::NEW;
		$task->user_id = $request->user()->id;
		$task->save();
		
		return redirect( to: '/dashboard');
	}
	
	public function edit(Task $task)
	{
		$statuses = array_map(fn (TaskEnum $tern) => $tern->value,TaskEnum::cases());
		return view('task.edit', ['task'=>$task, 'statuses' =>$statuses]);
	}	 
	
	public function update(Task $task, Request $request)
	{
		$task->update([
	        'title' => $request->title,
			'status' => $request->status ?? TaskEnum::NEW,
		]);
	return redirect('/dashboard');
	}
}
