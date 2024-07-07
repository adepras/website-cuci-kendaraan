@extends('layouts.app')

@section('content')
    @include('partials.header')

    <main>
        <section id="about" class="py-5">
            <div class="container">
                <h1>Tentang Kami</h1>
                <p>Informasi tentang kami...</p>
            </div>
        </section>
    </main>

    @include('partials.footer')
@endsection
