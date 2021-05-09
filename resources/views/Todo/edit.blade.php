@extends('layouts.app')
@section('content')

@php
    $name = '';
    $description = '';
    $namePlaceholder= 'Name';
    $descPlaceholder = 'Description';
@endphp

<h1 class="text-center my-5">Edit Todos</h1>

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">Edit todo</div>
            <div class="card-body">
            <form action="/update/{{$todos->id}}" method="POST">

                    @csrf

                    {{-- check validation  --}}
                    @if($errors->any())
                        @foreach($errors->all() as $error)
                            @if (str_contains($error, 'name'))
                               @php $name = 'error'; $namePlaceholder=$error; @endphp
                            @elseif (str_contains($error, 'description'))
                                @php $description = 'error'; $descPlaceholder=$error; @endphp
                            @endif
                        @endforeach
                    @endif

                    <div class="form-group">
                        <input type="text" class="form-control {{$name}}" value="{{$todos->name}}" name="name" placeholder="{{$namePlaceholder}}" />
                    </div>

                    <div class="form-group">
                        <textarea class="form-control {{$description}}"  name="description" cols="30" rows="5" placeholder="{{$descPlaceholder}}">{{$todos->description}}</textarea>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-sm btn-success">Update</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection
