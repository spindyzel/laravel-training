@extends('layouts.master')

@section('title', 'Hamalam Utama dengan templating title')

@section('content')
    <h1>Selamat datang di HALAMAN UTAMA</h1>
    <p>wadidaw</p>
    <hr>
    @foreach ($members as $member)
        <li> <a href="/test/{{$member->id}}">{{ $member->username }} </a></li>
    @endforeach
@endsection