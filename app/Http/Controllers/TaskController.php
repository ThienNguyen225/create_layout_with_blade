<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('list', compact('tasks'));
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $task = new Task();
        $task->name = $request->input('enterName');
        $task->work_content = $request->input('enterWorkContent');
        $task->date = $request->input('enterDate');
        $task->save();
        return view('create');
    }

    public function show($id){
        $task = Task::findOrFail($id);
        return view('show', compact('task'));
    }

    public function edit($id){
        $task = Task::findOrFail($id);
        return view('edit', compact('task'));
    }

    public function update(Request $request, $id){
        $task = Task::findOrFail($id);
        $task->name = $request->input('Name');
        $task->work_content = $request->input('work_content');
        $task->date = $request->input('date');
        $task->save();
        return redirect()->route('task.list');
    }

    public function delete($id){
        $task = Task::findOrFail($id);
        return view('delete', compact('task'));
    }

    public function destroy($id){
        $task = Task::findOrFail($id);
        $task->destroy($id);
        return redirect()->route('task.list');
    }
}
