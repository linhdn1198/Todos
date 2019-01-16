@extends('layout')

@section('content')

<div class="content">


    <div class="content">
        <div class="title m-b-md">
            <form action="/create/todo" method="post">
                @csrf
                <input class="form-control" type="text" name="todo" placeholder="Create a new todo.">
            </form>
            <hr/>
            @foreach ($todos as $todo)
                {{$todo->todo}}
                <a class="btn btn-danger" href="{{route('delete',['id'=>$todo->id])}}">X</a>
                <a class="btn btn-warning btn-sx" href="{{route('update',['id'=>$todo->id])}}">update</a>

                @if($todo->completed==0)
                    <a class="btn btn-primary btn-sx" href="{{route('completed',['id'=>$todo->id])}}">Mark as completd</a>
                @else
                    <button class="btn btn-success btn-lg">Completd</button>
                @endif
                <hr/>
            @endforeach
        </div>
    </div>


@endsection