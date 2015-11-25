<!-- Stored in resources/views/layouts/master.blade.php -->
<!--这是文件的目录-->


{{--@extends('layouts.master')--}}
@extends('main')
@section('title', 'Page Title')

@section('sidebar')
    @@parent

    <p>This is appended to the master sidebar.</p>
@stop

@section('content')
    <p>This is my body content.</p>
@stop