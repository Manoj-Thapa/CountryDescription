<?php

namespace App\Http\Controllers;

use App\Todo;

use Illuminate\Http\Request;

class ToDosController extends Controller
{
    public function index() {

        $todos = Todo::all();
        return view('todos.index')->with('todos',$todos);

    }

    public function show($todo) {

        return view('todos.show')->with('todo',Todo::find($todo));

    }

    public function create() {

      return view('todos.create');

    }

    public function store() {

      $this->validate(request(),
      [

        'name' => 'required|min:3|max:30',
        'description' => 'required'

      ]);

      $data = request()->all();

      $todo = new Todo ();

      $todo->name = $data['name'];

      $todo->description = $data['description'];

      $todo->completed = false;

      $todo->save();

      session()->flash('success','Country Created Successfully');

      return redirect('/todos');

    }

    public function edit($todoId) {

      $todo = Todo::find($todoId);

      return view('todos.edit')->with('todo',$todo);

    }

    public function update($todoId) {

      $this->validate(request(),
      [

        'name' => 'required|min:3|max:30',
        'description' => 'required'

      ]);

      $data = request()->all();

      $todo = Todo::find($todoId);

      $todo->name = $data['name'];

      $todo->description = $data['description'];

      $todo->save();

      session()->flash('success','Country Updated Successfully');

      return redirect('/todos');

    }

    public function destroy($todoId) {

        $todo = Todo::find($todoId);

        $todo->delete();

        session()->flash('success','Country Deleted Successfully');

        return redirect('/todos');

    }

    public function complete($todoId) {

      $todo = Todo::find($todoId);

      $todo->completed = true;

      $todo->save();

      session()->flash('success','Awesome, You liked the Description');

      return redirect('/todos');

    }
}
