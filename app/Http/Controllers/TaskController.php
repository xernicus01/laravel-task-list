<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {   $id = Auth::user()->id;
        $tasks = DB::table('tasks')->where("user_id","=",$id)->get(); 
        $taille = DB::table('tasks')->where("user_id","=",$id)->count(); 
        if($request->status !=null && $request->status != "all" ){
            $tasks = DB::table('tasks')->where("user_id","=",$id)
            ->where("status","=",$request->status)
            ->get();
        }
        if($taille==0){
            $taille=1;
        }
        
        $p_pending = DB::table('tasks')->where("user_id","=",$id)->where("status","=","pending")->count();
        $p_waiting = DB::table('tasks')->where("user_id","=",$id)->where("status","=","waiting")->count();
        $p_complete = DB::table('tasks')->where("user_id","=",$id)->where("status","=","complete")->count();

        $p_complete = intdiv($p_complete*100,$taille);
        $p_waiting = intdiv($p_waiting*100,$taille);
        $p_pending = intdiv($p_pending*100,$taille);
        return view ('task.index',compact('tasks',"p_pending","p_waiting","p_complete","taille"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('task.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $input["creation"] = date('Y-m-d');
        $input["user_id"] = Auth::user()->id;
        Task::create($input);
        return redirect('task');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $task = Task::find($id);
        return view('task.show')->with('tasks', $task);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $task = task::find($id);
        return view('task.edit')->with('tasks', $task);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $task = task::find($id);
        $input = $request->all();
        $task->update($input);
        return redirect('task'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        task::destroy($id);
        return redirect('task');
    }

  
}
