@extends('layouts.app')
@section('content')
    <a href="/" class="btn btn-default">Go Back</a>
    <h1><a href="/todos/{{$todo->id}}">{{$todo->title}}</a></h1>
    <div class="label label-danger">{{$todo->due}}</div>
    <hr>
    <p>
    {{$todo->body}}
    </p>
    <a href="/todos/{{$todo->id}}/edit" class="btn btn-default">Edit</a>
    <form action="/todos/{{$todo->id}}" method="post" class="pull-right">
        {{method_field('delete')}}
        {{csrf_field()}}
        <input type="submit" value="delete" class="btn btn-danger">
    </form>
@endsection