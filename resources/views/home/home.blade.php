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
    <Header>
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
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Cuci Kendaraan
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Motor</a></li>
                                <li><a class="dropdown-item" href="#">Mobil</a></li>
                                <li><a class="dropdown-item" href="#">Truk</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#layanan">Layanan Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#harga">Harga</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tentang-kami">Tentang Kami</a>
                        </li>
                    </ul>
                </div>
                <button class="btn btn-primary nav-login">Login</button>
                <button class="btn btn-primary nav-daftar">Daftar</button>
            </div>
        </nav>
    </Header>

    <Body>
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
        <section id="layanan" class="py-5 bg-light">
            <div class="container-layanan text-center">
                <h2 class="mb-4">Sekarang, cuci kendaraan lebih mudah dan terjadwal tanpa ribet antri.</h2>
                <p>Banyak orang sudah menggunakan layanan kami. <br>Apa yang kami tawarkan?</p>
                <ul class="text-service">
                    <li><img src="image/fast-time-ill.png" alt="">Cepat Tanpa Repot Antri</li>
                    <li><img src="image/calendar-check-ill.png" alt="">Bebas Atur Jadwal</li>
                    <li><img src="image/fast-time-ill.png" alt="">Kendaraan Aman Terjaga</li>
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
                {{-- <div class="row row-cols-1 row-cols-md-4 g-4">
                    <div class="col">
                        <div class="card h-100">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Basic</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Standart</h5>
                                <p class="card-text">This is a short card.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Profesional</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in to additional content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Elite</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </section>
        <section id="tentang-kami" class="py-5 bg-light">
            <div class="container">
                <h2 class="mb-4">Tentang Kami</h2>
                <p>iWash is a professional vehicle washing and detailing service committed to providing top-quality care
                    for your car. Our team of experts ensures that your vehicle receives the best treatment possible,
                    leaving it spotless and shiny.</p>
                <p>We value our customers and strive to deliver exceptional service every time. Our goal is to make your
                    vehicle look its best and to provide a hassle-free experience.</p>
            </div>
        </section>
    </Body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
