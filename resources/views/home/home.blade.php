@extends('layouts.app')

@section('title', 'Home - iWash')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <section id="home" class="py-5">
        <div class="container-home">
            <div class="tagline">
                <h4>Cuci dan Salon Mobil Profesional<img src="image/patch-check-fill.svg" alt=""></h4>
                <p>Tidak perlu menunggu lama lagi saat ingin mencuci kendaraan Anda<br>Dan kami siap membersihkan
                    kendaraan Anda kapanpun dibutuhkan.</p>
                <button class="btn btn-secondary btn-pesan">Pelajari Lebih Lanjut</button>
            </div>
            <div class="image-container">
                <img src="image/car-wash-ill.png" alt="" class="half-size">
            </div>
        </div>
    </section>
    <section id="layanan" class="py-5">
        <div class="container-layanan text-center">
            <h2 class="mb-4">Sekarang, cuci kendaraan lebih mudah dan tanpa ribet antri.</h2>
            <p>Banyak orang sudah menggunakan layanan kami. <br>Apa yang kami tawarkan?</p>
            <ul class="text-service">
                <li><img src="image/fast-time-ill.png" alt="">Cepat Tanpa Repot Antri</li>
                <li><img src="image/calendar-check-ill.png" alt="">Bebas Atur Jadwal</li>
                <li><img src="image/shield-check-ill.png" alt="">Kendaraan Aman Terjaga</li>
                <li><img src="image/group-ill.png" alt="">Profesional dan Tanggap</li>
                <li><img src="image/drips-ill.png" alt="">Sabun/Foam Premium</li>
                <li><img src="image/verify-ill.png" alt="">Garansi Cuci Kembali</li>
            </ul>
            <h2 class="mb-4 mt-5">Pilihan Paket Lengkap dan Kualitas Terjamin <br>Ayo Cuci Mobil Anda Sekarang!</h2>
            <p>Pilihan paket dan harga yang bervariasi sesuai kebutuhanmu.</p>
        </div>
    </section>
    <section id="testimoni" class="py-5">
        <div class="container-testimoni">
            <div class="testimoni-title">
                <h3>Kata mereka yang telah<br>menggunakan iWash</h3>
            </div>
        </div>
        {{-- Slide Testimoni --}}
    </section>
@endsection
