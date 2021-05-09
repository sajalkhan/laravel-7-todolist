@extends('layouts.app')
@section('content')

<h1 style="text-align: center">TODOS PAGES</h1>

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="container">
                <div class="card card-default">
                <div class="card-header">
                    Todos
                </div>

    <div class="card-body">
        <ul class="list-group">
            @foreach ($todos as $item)
            <li class="list-group-item completed-{{$item->completed+2}}">
                {{$item->name}}
                <a href="/{{$item->id}}/completed" class="btn btn-warning btn-sm float-right mx-1 completed-{{$item->completed}}">Completed</a>
                <a href="/{{$item->id}}" class="btn btn-primary btn-sm float-right">View</a>
            </li>
            @endforeach
        </ul>
        </div>
    </div>
            </div>
        </div>
    </div>

@endsection
