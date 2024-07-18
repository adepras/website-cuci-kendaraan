@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    <div class="container">
        <h1>Profile</h1>
        <p>Nama: {{ $user->name }}</p>
        <p>Email: {{ $user->email }}</p>
        <p>Nomor WhatsApp: {{ $user->phone_number }}</p>
        <p>Alamat: {{ $user->address }}</p>
        <p>Jenis Kelamin: {{ $user->gender_text }}</p>
        <p>Brand Kendaraan: {{ $user->vehicle_brand }}</p>
        <p>Tipe Kendaraan: {{ $user->vehicle_type }}</p>
        <p>Nomor Polisi: {{ $user->license_plate }}</p>
    </div>
@endsection
