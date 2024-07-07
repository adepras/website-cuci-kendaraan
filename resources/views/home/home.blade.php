<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('image/iwash-logo.png') }}" type="image/x-icon" sizes="64x64">
    <title>iWash</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="#">iWash</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#home">Home</a>
                        </li>
                        {{-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Cuci Kendaraan
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Mobil</a></li>
                                <li><a class="dropdown-item" href="#">Truk</a></li>
                            </ul>
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link" href="#layanan">Layanan Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#harga">Harga</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tentang-kami">Tentang Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#testimoni">Testimoni</a>
                        </li>
                    </ul>
                </div>
                <button class="btn btn-primary nav-login">Login</button>
                <button class="btn btn-primary nav-daftar">Daftar</button>
            </div>
        </nav>
    </header>

    <main>
        <section id="home" class="py-5">
            <div class="container-home">
                <div class="tagline">
                    <h4>Cuci dan Salon Mobil Profesional<img src="image/patch-check-fill.svg" alt=""></h4>
                    <p>Tidak perlu menunggu lama lagi saat ingin mencuci kendaraan Anda<br>Dan kami siap membersihkan
                        kendaraan Anda kapanpun dibutuhkan.</p>
                    <button class="btn btn-secondary btn-pesan">Pesan Sekarang</button>
                </div>
                <div class="image-container">
                    <img src="image/car-wash-ill.png" alt="" class="half-size">
                </div>
            </div>
        </section>
        <section id="layanan" class="py-5">
            <div class="container-layanan text-center">
                <h2 class="mb-4">Sekarang, cuci kendaraan lebih mudah dan terjadwal tanpa ribet antri.</h2>
                <p>Banyak orang sudah menggunakan layanan kami. <br>Apa yang kami tawarkan?</p>
                <ul class="text-service">
                    <li><img src="image/fast-time-ill.png" alt="">Cepat Tanpa Repot Antri</li>
                    <li><img src="image/calendar-check-ill.png" alt="">Bebas Atur Jadwal</li>
                    <li><img src="image/shield-check-ill.png" alt="">Kendaraan Aman Terjaga</li>
                    <li><img src="image/group-ill.png" alt="">Profesional dan Tanggap</li>
                    <li><img src="image/drips-ill.png" alt="">Sabun/Foam Premium</li>
                    <li><img src="image/verify-ill.png" alt="">Garansi Cuci Kembali</li>
                </ul>
            </div>
        </section>
        <section id="harga" class="py-5">
            <div class="container-harga">
                <h2 class="mb-4">Harga bersahabat hasil mantap.</h2>
                <p>Kami menawarkan paket pencucian sesuai dengan kebutuhan Anda.</p>
                <div class="harga-content">
                    <img src="image/character-top-ill.svg" alt="" style="margin-left: -100px;">
                    <div class="card-container">
                        <div class="card">
                            <div class="card-title">
                                <img src="image/p-basic.png" alt="">
                                <h4>Basic</h4>
                                <p>Membersihkan seluruh bagian mobil (eksterior dan interior) menggunakan sampo
                                    Meguiar's Gold Class dan peralatan standar profesional.</p>
                            </div>
                            <ul class="text-card">
                                <li><img src="image/check-ill.png" alt="">Hand Wash</li>
                                <li><img src="image/check-ill.png" alt="">Interior Cleaning</li>
                                <li><img src="image/check-ill.png" alt="">vacuum</li>
                                <li><img src="image/check-ill.png" alt="">Tire Polish</li>
                            </ul>
                            <p class="price">Rp 50.000</p>
                        </div>
                        <div class="card">
                            <div class="card-title">
                                <img src="image/p-standard.png" alt="">
                                <h4>Standard</h4>
                                <p>Paket Basic + membersihkan bercak atau noda berkerak pada permukaan cat dan bagian
                                    mesin.</p>
                            </div>
                            <ul class="text-card">
                                <li style="font-weight: 600"><img src="image/check-ill.png" alt="">All in
                                    Basic</li>
                                <li><img src="image/check-ill.png" alt="">Foam Wash</li>
                                <li><img src="image/check-ill.png" alt="">Spot Remover (Body)</li>
                                <li><img src="image/check-ill.png" alt="">Engine Cleaning</li>
                            </ul>
                            <p class="price">Rp 75.000</p>
                        </div>
                        <div class="card">
                            <div class="card-title">
                                <img src="image/p-professional.png" alt="">
                                <h4>Professional</h4>
                                <p>Paket Standard + membersihkan jamur, kerak pada kaca mobil dan noda aspal pada
                                    permukaan cat mobil.</p>
                            </div>
                            <ul class="text-card">
                                <li style="font-weight: 600"><img src="image/check-ill.png" alt="">All in
                                    Standard</li>
                                <li><img src="image/check-ill.png" alt="">Spot Remover (Window)</li>
                                <li><img src="image/check-ill.png" alt="">Tar Remover</li>
                            </ul>
                            <p class="price">Rp 100.000</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="tentang-kami" class="py-5">
            <div class="container-tentang-kami">
                <h2 class="mb-4">Tentang Kami</h2>
                {{-- Tentang Website iWash --}}
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
    </main>

    <footer>
        <div class="container-footer">
            <div class="licence">
                <div class="iwash-logo">
                    <img src="image/iwash-full-logo.png" alt="">
                </div>
                <ul class="licence-tile">
                    <li>
                        <h6>Powered by ADE STEAM</h6>
                    </li>
                    <img src="image/gmail-ill.png" alt="">
                </ul>
                <ul class="copy-rights">
                    <li>
                        <p><img src="image/c-circle.svg" alt="">iWash 2024. All rights reserved</p>
                    </li>
                </ul>
                <ul class="operasional">
                    <h6>Wilayah Operasional & Jam Kerja</h6>
                    <li>
                        <p>Kutoarjo</p>
                    </li>
                    <li>
                        <p>Senin - Minggu (08.00-16.00 WIB)</p>
                    </li>
                </ul>
            </div>
            <ul class="service">
                <h6>Layanan</h6>
                <li><a href="">Cuci Mobil Berlangganan</a></li>
                <li><a href="">Satu Kali Cuci</a></li>
                <li><a href="">Salon Mobil Interior</a></li>
                <li><a href="">Salon Mobil Eksterior</a></li>
                <li><a href="">Salon Mobil Kaca</a></li>
                <li><a href="">Salon Mobil Mesin</a></li>
                <li><a href="">Salon Mobil Ban & Velg</a></li>
            </ul>
            <ul class="about">
                <h6>Informasi</h6>
                <li><a href="">Tentang Kami</a></li>
                <li><a href="">Harga</a></li>
                <li><a href="">FAQ</a></li>
                <li><a href="">Karir</a></li>
            </ul>
        </div>
    </footer>

    <div id="whatsapp-popup">
        <a href="https://wa.me/" target="_blank">
            <img src="image/whatsapp-ill.svg" alt="whatsapp icon">
            <span>Konsultasi gratis!</span>
        </a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- Mengatur Navbar --}}
    <script>
        var lastScrollTop = 0;
        $(window).scroll(function() {
            var scrollTop = $(this).scrollTop();
            if (scrollTop > lastScrollTop) {
                // Scrolling bawah
                $('.navbar').css('top', '-100px');
            } else {
                // Scrolling atas
                $('.navbar').css('top', '0');
            }
            lastScrollTop = scrollTop;
        });
    </script>
    {{-- Mengatur scroll per-section --}}
    <script>
        document.querySelectorAll('nav a').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                const offset = 100;
                window.scrollTo({
                    top: target.offsetTop - offset,
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>

</html>
