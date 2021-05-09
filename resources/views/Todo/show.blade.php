
@extends('layouts.app')
@section('content')

<div>
    <h4>{{$todos->name}}</h4>
</div>

<div>
    {{$todos->description}}
</div>

<a href="/{{$todos->id}}/editTodo" class="btn btn-sm btn-info mx-1">Edit</a>
<a href="/{{$todos->id}}/deleteTodo" onClick="return confirm('Do you want to delete?')" class="btn btn-sm btn-danger">Delete</a>

@endsection
