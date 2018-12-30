@extends('layouts.app')
@section('content')
    <h1>Create To Do</h1>
    <form action="/todos" method="POST">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" placeholder="Title">
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea name="body" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="due">due</label>
            <input type="text" class="form-control" name="due" placeholder="Title">
        </div>
        {{csrf_field()}}
        <div>
            <input type="submit" value="save" class="btn btn-primary">
        </div>
    </form>
@endsection