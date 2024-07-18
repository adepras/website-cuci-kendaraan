@extends('layouts.app')

@section('title', 'iWash | Daftar')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">

    <div class="container-register py-5">
        <div class="container-form">
            <h1>Daftar layanan iWash</h1>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <h2 class="mt-5">Isi Data Diri</h2>
                <div class="form-input mt-3 mb-5">
                    <label for="name">Nama<span>*</span></label>
                    <input type="text" id="name" name="name" placeholder="Isi nama lengkap" required>
                    <div class="form-row">
                        <div class="form-col">
                            <label for="phone_number">Nomor WhatsApp<span>*</span></label>
                            <input type="text" id="phone_number" name="phone_number" placeholder="081122334455" required>
                        </div>
                        <div class="form-col">
                            <label for="email">Email<span>*</span></label>
                            <input type="email" id="email" name="email" placeholder="mail@domain.com" required>
                        </div>
                    </div>
                    <label for="password">Password<span>*</span></label>
                    <input type="password" id="password" name="password" placeholder="Buat password akun Anda" required>
                    <div class="show-password">
                        <input type="checkbox" id="show-password" onclick="togglePassword()">
                        <label for="show-password">Tampilkan password</label>
                    </div>
                    <label for="address">Alamat Lengkap<span>*</span></label>
                    <input type="text" id="address" name="address" placeholder="Tuliskan dengan lengkap dan benar"
                        required>
                </div>
                <h2 class="mt-4">Kendaraan</h2>
                <div class="form-input mt-3 mb-5">
                    <div class="form-row">
                        <div class="form-col">
                            <label for="vehicle_brand">Brand<span>*</span></label>
                            <input type="text" id="vehicle_brand" name="vehicle_brand" placeholder="Toyota" required>
                        </div>
                        <div class="form-col">
                            <label for="vehicle_type">Type<span>*</span></label>
                            <input type="text" id="vehicle_type" name="vehicle_type" placeholder="Kijang Innova Hybrid"
                                required>
                        </div>
                        <div class="form-col">
                            <label for="license_plate">Nomor Polisi<span>*</span></label>
                            <input type="text" id="license_plate" name="license_plate" placeholder="H 1234 T" required>
                        </div>
                    </div>
                </div>
                <div class="btn-confirm mt-4">
                    <button type="button" class="btn-back"
                        onclick="window.location.href='{{ route('home') }}'">Kembali</button>
                    <button type="submit" class="btn-submit"
                        onclick="window.location.href='{{ route('register') }}'">Daftar</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function togglePassword() {
            var passwordField = document.getElementById("password");
            var showPasswordCheckbox = document.getElementById("show-password");
            if (showPasswordCheckbox.checked) {
                passwordField.type = "text";
            } else {
                passwordField.type = "password";
            }
        }

        // Mencegah label bisa diklik
        var showPasswordLabel = document.querySelector('label[for="show-password"]');
        showPasswordLabel.addEventListener('click', function(event) {
            event.preventDefault();
        });
    </script>
@endsection
