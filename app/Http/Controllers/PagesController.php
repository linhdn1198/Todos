<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todos;

class PagesController extends Controller
{
    public function index(){
        $todos = Todos::all();
        return view('todos')->with('todos',$todos);
    }

    public function store(Request $request){
        $todo = new Todos;

        $todo->todo = $request->todo;

        $todo->save();

        return redirect()->back();
    }

    public function delete($id){
        $todo = Todos::find($id);

        $todo->delete();
        
        return redirect()->back();
    }

    public function getEdit($id){
        $todo = Todos::find($id);
        
        return view('update')->with('todo',$todo);
    }

    public function postEdit(Request $request, $id){
        $todo = Todos::find($id);

        $todo->todo = $request->todo;

        $todo->save();

        return redirect()->route('todos');
    }

    public function completed($id){
        $todo = Todos::find($id);

        $todo->completed=1;

        $todo->save();

        return redirect()->route('todos');
    }
}
