@extends('layout')

@section('content')

<div class="content">


    <div class="content">
        <div class="title">
            <form action="/update/todo/{{$todo->id}}" method="post">
                @csrf
                <input class="form-control" type="text" name="todo" value="{{$todo->todo}}" placeholder="Create a new todo.">
            </form>
            <hr/>
        </div>
    </div>


@endsection