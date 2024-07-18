@extends('layouts.app')

@section('title', 'Home - iWash')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">

    <div class="container-login py-5">
        <div class="container-form">
            <h1>Masuk layanan iWash</h1>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <h2 class="mt-5">Masuk Dengan Akun Anda</h2>
                <div class="form-input mt-3 mb-5">
                    <label for="email">Email<span>*</span></label>
                    <input type="email" id="email" name="email" placeholder="mail@domain.com" required>
                    <label for="password">Password<span>*</span></label>
                    <input type="password" id="password" name="password" placeholder="Silahkan isi password akun Anda"
                        required>
                    <div class="show-password">
                        <input type="checkbox" id="show-password" onclick="togglePassword()">
                        <label for="show-password">Tampilkan password</label>
                    </div>
                </div>
                <div class="btn-confirm mt-4">
                    <button type="button" class="btn-back"
                        onclick="window.location.href='{{ route('home') }}'">Kembali</button>
                    <button type="submit" class="btn-submit"
                        onclick="window.location.href='{{ route('login') }}'">Login</button>
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
