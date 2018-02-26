<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $tasks = Task::orderBy('id','desc')->get();

        return view('task.index')->with('savedTask',$tasks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
          'taskName'=> 'required|min:5|max:250',
        ]);
        $task = new Task();
        $task->name = $request['taskName'];

        $task->save();
        return redirect()->route('task.index')->with('add','Task '.$task->name.' added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $task = Task::find($id);
        return view('task.edit')->with('taskEdit',$task);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request,[
        'updTask'=> 'required|min:5|max:250',
      ]);
        $task = Task::find($id);
        $task->name = $request->updTask;
        $task->save();
        return redirect()->route('task.index')->with('updateMsg','Task No : '.$request->id.'has been successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::find($id);

        $task->delete();

        return redirect()->route('task.index')->with('delete','Task Numer : '.$id.' deleted');
    }
}
