<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ToDo;
class ToDosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = ToDo::orderBy('created_at','desc')->get();

        return view('todos.index')->with(compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       return view('todos.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'title' => 'required'
        ]);

        $todo = new ToDo;
        ToDo::Create([
            'body' => request('body'),
            'title' => request('title'),
            'due' => request('due')
        ]);

        return redirect('/')->with('success','ToDo inserted');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ToDo $todo)
    {
        return view('todos.show')->with(compact('todo'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ToDo $todo)
    {
        //
        return view('todos.edit')->with(compact('todo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ToDo $todo)
    {
        //
        
        $todo->fill([
            'due' => request('due'),
            'body' => request('body'),
            'title' => request('title')
        ]);
        $todo->save();
         return redirect('/')->with('success','Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Todo $todo)
    {
        //
        $todo->delete();
        return redirect('/')->with('success','ToDo Deleted');

    }
}
