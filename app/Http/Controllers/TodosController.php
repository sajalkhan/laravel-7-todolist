<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index()
    {
        return view('Todo.index')->with('todos', Todo::all());
    }

    public function show($todoId){

        return view('Todo.show')->with('todos', Todo::find($todoId));
    }

    public function create()
    {
        return view('Todo.create');
    }

    public function save(){

        $this->validate(request(),[
            'name' => 'required|min:6|max:20',
            'description' => 'required'
        ]);

        // dd(request()->all());
        $data = request()->all();

        $todo = new Todo();
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = false;

        $todo->save();

        return redirect('/');

    }

    public function editTodo($todoId)
    {
        return view('Todo.edit')->with('todos', Todo::find($todoId));
    }

    public function update($todoId)
    {
        $this->validate(request(), [
            'name' => 'required|min:6|max:20',
            'description' => 'required'
        ]);

        $data = request()->all();

        $todo = Todo::find($todoId);
        $todo->name = $data['name'];
        $todo->description = $data['description'];


        $todo->save();
        return redirect('/');

    }

    public function deleteTodo($todoId)
    {
        $todo = Todo::find($todoId);
        $todo->delete();

        return redirect('/');
    }

    public function completed($todoId)
    {
        $todo = Todo::find($todoId);

        $todo->completed = true;

        $todo->save();

        return redirect('/');
    }
}
