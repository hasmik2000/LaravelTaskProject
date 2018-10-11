<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="/css/dataTables.bootstrap4.css"/>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    @include('layouts.nav')

    @if($flash = session('message'))
        <div id="flash-message" class="alert alert-success" role="alert">
            {{ $flash }}
        </div>
    @endif

    @yield('content')

    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.min.js"></script>

    <script src="/js/jquery.dataTables.js"></script>
    <script src="/js/dataTables.bootstrap4.js"></script>

    <script src="/js/script.js"></script>
    {{--<script>--}}
        {{--$(document).ready(function () {--}}
            {{--$('#all-tasks').dataTable();--}}
            {{--alert("hello");--}}
        {{--});--}}
    {{--</script>--}}
</body>
</html>