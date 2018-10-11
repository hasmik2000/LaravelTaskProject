@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            Update Existing Task
        </div>
        <div class="card-body">
            {!! Form::open(['route' => ['profile.update', $task->id]]) !!}
            <div class="form-group">
                {{ Form::label('Title', null, ['class' => 'control-label']) }}
                {{ Form::text('title', $task->title, array_merge(['class' => 'form-control'])) }}
            </div>
            <div class="form-group">
                {{ Form::label('description', null, ['class' => 'control-label']) }}
                {{ Form::text('body', $task->body, array_merge(['class' => 'form-control'])) }}
            </div>
            <div class="form-group">
                {{ Form::submit('Edit Task', ['class' => 'btn btn-outline-dark']) }}
            </div>

            @include('layouts.errors')
            {!! Form::close() !!}
        </div>
    </div>
@endsection
