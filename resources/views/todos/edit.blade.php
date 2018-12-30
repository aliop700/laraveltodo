@extends('layouts.app')
@section('content')
    <h1>Edit To Do</h1>
    <form action="/todos/{{$todo->id}}" method="POST">
        {{method_field('put')}}
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" placeholder="Title" value="{{$todo->title}}">
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea name="body" class="form-control">{{$todo->body}}</textarea>
        </div>
        <div class="form-group">
            <label for="due">due</label>
            <input type="text" class="form-control" name="due" value="{{$todo->due}}" placeholder="Title">
        </div>
        {{csrf_field()}}
        <div>
            <input type="submit" value="Update" class="btn btn-primary">
        </div>
    </form>
@endsection