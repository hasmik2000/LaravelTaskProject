@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            Add New Task
        </div>
        <div class="card-body">
            {!! Form::open(['url' => 'profile']) !!}

            <div class="form-group">
                {{ Form::select('category', $categories, null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('Title', null, ['class' => 'control-label']) }}
                {{ Form::text('title', null, array_merge(['class' => 'form-control'])) }}
            </div>
            <div class="form-group">
                {{ Form::label('description', null, ['class' => 'control-label']) }}
                {{ Form::text('body', null, array_merge(['class' => 'form-control'])) }}
            </div>
            <div class="form-group">
                {{ Form::submit('Add Task', ['class' => 'btn btn-outline-dark']) }}
            </div>

            @include('layouts.errors')
            {!! Form::close() !!}
        </div>
    </div>
@endsection

