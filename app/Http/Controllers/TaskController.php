<?php

namespace App\Http\Controllers;


use App\Models\Task;
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
        $tasks=Task::paginate(10);
        return view('dashboard.tasks.index',compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Task $model)
    {
        return view('dashboard.tasks.create', compact('model'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation =  $this->validate($request, [
            'title'=>'required',
            'content' => 'required',
            'project_id' => 'required',
            'status' => 'required',


        ]);
         Task::create($validation);
         return redirect('AdminPanel/Tasks')->with('success','success Adding Task!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = Task::findOrFail($id);
        return view('dashboard.tasks.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = Task::findOrFail($id);
        return view('dashboard.tasks.edit', compact('task'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation =  $this->validate($request, [
            'title'=>'required',
            'content' => 'required',
            'status' => 'required',
            'project_id' => 'required',


        ]);
        $tasks= Task::findOrFail($id);
        $tasks->update($validation);
        return redirect('AdminPanel/Tasks')->with('success','success EDiting Task!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

         Task::findOrFail($id)->delete() ;
        return redirect('AdminPanel/Tasks')->with('error','SuccessDeleting!');
    }



    public function finish($id)
    {
        $task = Task::findOrFail($id);
        $task->status = 1;
        $task->save();
        return back()->with('info',' Finished Task!');


    }

    public function notFinish($id)
    {
        $task = Task::findOrFail($id);
        $task->status = 0;
        $task->save();
        return back()->with('warning','Not Finished Task!');

    }


}
