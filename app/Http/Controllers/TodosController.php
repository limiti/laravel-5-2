<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Todos;
use App\Http\Requests;
use App\Http\Requests\TodosRequests;

class TodosController extends Controller
{
    public  function index()
    {
        return view('todo.index');
    }

    public function show(Todos $todos, $id)
    {

        $todo =  $todos->findOrFail($id);

        if(!$todo) return redirect('404');

        return view('todo.show', compact('todo'));
    }

    public function create(TodosRequests $requests, Todos $todos)
    {
        $data = $requests->all();

        $todos->create($data);

        return back();
    }

    public function edit(Todos $todos,$id)
    {

        $todos = $todos->find($id);
        return view('todo.edit', compact('todos'));
    }

    public function update(TodosRequests $requests,Todos $todos)
    {

    }





}
