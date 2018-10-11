@extends('layouts.master')

@section('content')
    <div class="container">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Title</th>
                <th>Desctiption</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tasks as $task)
                <tr>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->body}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="float-right">{{ $tasks->links() }}</div>
    </div>


@endsection