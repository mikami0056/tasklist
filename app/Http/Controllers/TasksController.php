<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Task;
use App\Http\Requests\StoreTaskPostRequest;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();
        
        return view('tasks.index',[
            'tasks' => $tasks
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $task = new Task;
        return view('tasks.create',[
            'task'=>$task
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\StoreTaskPostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTaskPostRequest $request)
    {
        $this->createOrUpdate($request);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = Task::find($id);
    
        return view('tasks.show', [
            'task' => $task,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = Task::find($id);

        return view('tasks.edit', [
            'task' => $task,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\StoreTaskPostRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreTaskPostRequest $request, $id)
    {
        $this->createOrUpdate($request,$id);
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    /**
     * 
     * タスクを登録または更新するメソッド
     * 引数に$idがある場合は更新、無い場合は登録を行う
     * 
     * @param App\Http\Requests\StoreTaskPostRequest $request
     * @param int $id
     * 
     */
    protected function createOrUpdate($request,$id=null){
        if($id == null){
            $task = new Task;
        }else{
            $task = Task::find($id);
        }
        
        if($request->title != ""){
            $task->title = $request->title;
        }
        $task->content = $request->content;
        $task->status = $request->status;
        $task->save();
    }
}
