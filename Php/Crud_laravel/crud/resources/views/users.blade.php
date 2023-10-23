@extends('master')

@section('content')

    <h2>Users</h2>

    <ul>
        @foreach($users as $user) @endforeach
        <li>{{$user->firstName}}</li>
    </ul>

@endsection
