@extends('layout.master')

@section('content')
    <h1>Dashboard</h1>
    <body>
        @include('fragment.subview')
        {{ $post }}
    </body>
    @endsectiont
