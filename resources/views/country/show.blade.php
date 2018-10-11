@extends('layouts.master')
    @section('content')
        <div class="container">
            <h3>Each users Country</h3>
            <table id="example" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Country</th>
                    <th>User</th>
                    <th>Task</th>
                </tr>
                </thead>
                <tbody>
                @foreach($tasks as $task)
                    <tr>
                        <td>
                            {{ $task->user->country->name }}
                        </td>
                        <td>
                            <a href="user/{{ $task->user->id }}">
                                {{ $task->user->name }}
                            </a>
                        </td>
                        <td>
                            {{ $task->title }}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @endsection