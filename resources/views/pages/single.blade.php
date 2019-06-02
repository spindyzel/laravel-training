@extends('layouts.master')

@section('title', 'single blade dengan templating')

@section('content')
    <h1>Selamat datang  {{ $username }}</h1>

    {{-- @foreach($users as $user)
        <li> {{ $user->username . ' ' . $user->password }}</li>
    @endforeach

    @if(count($users) > 5)
        <p>usernya lebih dari lipa</p>
    @else
        <p>usernya tidak lebih dari lima</p>
    @endif --}}

    <h2>Ini adalah halaman profile {{ $users->username }}</h2>

@endsection
    