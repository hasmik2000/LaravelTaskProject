@extends('layouts.master')

@section('content')
    <div class="container">
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
                                <div class="form-group">
                                    {!! Form::open(['route' => ['profile.destroy', $task->id], 'method' => 'delete']) !!}
                                    <div class="form-group">
                                        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
@endsection