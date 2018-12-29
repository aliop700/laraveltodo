@extends('layouts.app')
@section('content')
<h1>ToDos</h1>
@foreach($todos as $todo)
    <div class="well">
        <h3>
            <a href="/todos/{{$todo->id}}">{{$todo->title}}</a> <span class="label label-danger">{{$todo->due}}</span>
        </h3>
    </div>
@endforeach
@endsection