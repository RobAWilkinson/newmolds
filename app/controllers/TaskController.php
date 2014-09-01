<?php

class TaskController extends BaseController {

  public function index()
  {
	  // find all tasks
	  $tasks = Task::paginate(5);
	  // display all task
	  return View::make('tasks/index')->with('tasks', $tasks);
  }
  public function show($id)
  {
	  //find a specific task
	  $task = Task::findOrFail($id);
	  return View::make('tasks/show')->with('task', $task);
  }
}
