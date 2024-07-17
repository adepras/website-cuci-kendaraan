@extends('layouts.app')

@section('title', 'iWash - Menu Layanan')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">

    <div class="container-menu py-5">
        <h2>Pesan Layanan iWash</h2>
        <p class="mb-5">Mau pilih layanan apa?</p>
        <div class="option-menu">
            <a class="btn-menu" href="{{ route('wash', ['type' => 'menu1']) }}">Satu Kali Cuci <img
                    src="image/next-ill.png" alt=""></a>
            <a class="btn-menu" href="{{ route('wash', ['type' => 'menu2']) }}">Salon Mobil / Detailing <img
                    src="image/next-ill.png" alt=""></a>
            <a class="btn-menu" href="{{ route('wash', ['type' => 'menu3']) }}">Paket Super <img
                    src="image/next-ill.png" alt=""></a>
        </div>
    </div>
@endsection
