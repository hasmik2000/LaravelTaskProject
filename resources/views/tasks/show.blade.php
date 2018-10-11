@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-6">
                    Task
                </div>
                <div class="col-auto">
                    @if(count($task->categories))
                        @foreach($task->categories as $category)
                            <a href="/tasks/categories/{{ $category->category }}">
                                {{ $category->category }}
                            </a>
                        @endforeach
                    @endif
                </div>
            </div>

        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $task->title }}</h5>
            <div class="row mb-3">
                <div class="col-8">
                    <p class="card-text">{{$task->body}}</p>
                </div>
                <div class="col-4">
                    <div class="row">
                        <div class="col-auto">
                            <div class="form-group">
                                <a href="{{ route('profile.edit', $task->id) }}" role="button"
                                   class="btn btn-primary mb-2" aria-pressed="true"> <i class="fa fa-edit"></i> Edit</a>
                            </div>
                        </div>
                        <div class="col-auto">
                            {!! Form::open(['route' => ['profile.destroy', $task->id], 'method' => 'delete']) !!}
                            <div class="form-group">
                                {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                            </div>
                            {!! Form::close() !!}
                        </div>
                        <div class="col-auto">
                            <div class="form-group">
                                <a href="{{ route('profile.index') }}" role="button"
                                   class="btn btn-outline-primary mb-2" aria-pressed="true">All Tasks</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if(count($task->comments))
                <div class="comments">
                    <ul class="list-group">
                        @foreach($task->comments as $comment)
                            <li class="list-group-item">
                                <strong>
                                    {{ $comment->created_at->diffForHumans() }}
                                </strong>
                                <div class="comment-body">
                                    {{ $comment->body }}
                                </div>
                            </li>
                        @endforeach
                    </ul>

                </div>
            @endif
        </div>
        <div class="card-footer">
            {!! Form::open(['action' => ['CommentsController@store', $task->id]]) !!}
            <div class="row">
                <div class="col-5">
                    <div class="form-group">
                        {{ Form::textarea('body',null, array_merge(['class' => 'form-control'])) }}
                    </div>
                </div>
                <div class="col-auto">
                    <div class="form-group">
                        {{ Form::submit('Add Comment', ['class' => 'btn btn-primary']) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection