@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">

    <div class="container-profile py-5">
            <h2>Profile</h2>
            <p>Nama: {{ $user->name }}</p>
            <p>Email: {{ $user->email }}</p>
            <p>Nomor WhatsApp: {{ $user->phone_number }}</p>
            <p>Jenis Kelamin: {{ $user->gender_text }}</p>
            <p>Alamat: {{ $user->address }}</p>
    </div>
@endsection
