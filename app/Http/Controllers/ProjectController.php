<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects=Project::paginate(10);
        return view('dashboard.projects.index',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Project $model)
    {
        return view('dashboard.projects.create', compact('model'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $validation= $this->validate($request, [
            'title' => 'required',
            'content' => 'required',

        ]);

        Project::create($validation);
        return redirect('AdminPanel/Projects')->with('success','success Adding Project!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::findOrFail($id);
        $all_tasks=Task::where('project_id',$id)->get();
        $not_finished_tasks =Task::where('status',0)->where('project_id',$id)->get();
        $finished_tasks =Task::where('status',1)->where('project_id',$id)->get();
        return view('dashboard.projects.show', compact('project','finished_tasks','not_finished_tasks','all_tasks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('dashboard.projects.edit', compact('project'));

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
            'title' =>'required',
            'content' => 'required',

        ]);

        $projects = Project::findOrFail($id);
        $projects->update($validation);
        return redirect('AdminPanel/Projects')->with('success','success Editing Project!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          Project::findOrFail($id)->delete() ;
          return redirect('AdminPanel/Projects')->with('error','SuccessDeleting!');
    }
}
