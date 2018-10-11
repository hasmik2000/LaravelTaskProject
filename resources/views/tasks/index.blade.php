@extends('layouts.master')

@section('content')

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-8">
                    Current Tasks
                </div>
                <div class="col-auto">
                    <div class="form-group">
                        <a href="{{ route('profile.create') }}" class="btn btn-outline-dark" role="button">Add Task</a>
                    </div>
                </div>
            </div>
        </div>
        @if(count($tasks))
            <div class="card-body">
                <table id="example" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Task</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($tasks as $task)
                        <tr>
                            <td>
                                <div class="form-group">
                                    {{ $task->title }}
                                </div>
                            </td>
                            <td class="float-right">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="form-group">
                                            <a href="{{ route('profile.show', $task->id) }}" role="button"
                                               class="btn btn-outline-primary mb-2 " aria-pressed="true">View</a>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="form-group">
                                            <a href="{{ route('profile.edit', $task->id) }}" role="button"
                                               class="btn btn-primary mb-2" aria-pressed="true"><i class="fa fa-edit"></i> Edit</a>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        {!! Form::open(['route' => ['profile.destroy', $task->id], 'method' => 'delete']) !!}
                                        <div class="form-group">
                                            {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                        </div>
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
@endsection


