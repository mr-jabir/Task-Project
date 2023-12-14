<?php

namespace App\Http\Controllers;
use App\Models\Task;
use App\Models\Category;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function showtask(){
        $tasks=Task::all();
       return view('show',compact('tasks'));

    }

    public function createtaskpage(){

        $category=Category::all();
        return view('create',compact('category'));
    }

    public function createtask(Request $request){
        try{
            $request->validate([
                'title'=>'required',
                'description'=>'required',
                'due_date'=>'required|date',
                'category_id'=>'required'
            ]);
        
       
        Task::create($request->all());
        return redirect()->route('showtask');

    }catch(\Exception $e){
         return response()->json($e);
    }
    }

    public function edittaskpage($id){
       $task=Task::find(decrypt($id));
       $category=Category::all();
       return view('edit',compact('task','category')); 
    }
    public function updatetask(Request $request){
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'due_date'=>'required|date',
            'category_id'=>'required'
        ]);
        
       $task=Task::find(decrypt($request->id));
      
       $task->update(['title'=>$request->title,
    'description'=>$request->description,
    'due_date'=>$request->due_date,
    'category_id'=>$request->category_id]);
       return redirect()->route('showtask');
    }

    public function deletetask($id){
        $task=Task::find(decrypt($id));
        $task->delete();
        return redirect()->back();
    }
}
