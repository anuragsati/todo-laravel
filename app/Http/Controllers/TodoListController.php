<?php

namespace App\Http\Controllers;

use App\Models\todo_list;
use Illuminate\Http\Request;

class TodoListController extends Controller
{
    public function index() {
        return view('index')->with('todo_arr', todo_list::all());
    }

    public function store(Request $request) {
        $userinput = $request->input('name');

        if($userinput == ""){
            return redirect('/');
        }

        $todo = new todo_list();
        $todo->name = $userinput;
        $todo->save();
        return redirect('/');
    }

    public function destroy(todo_list $todo_list, $id) {
        todo_list::destroy($id);
        return redirect('/');
    }
}



