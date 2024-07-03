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
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">iWash</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#home">Home</a>
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
                            <a class="nav-link" href="#salon-mobil">Salon Mobil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#paket">Paket</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tentang-kami">Tentang Kami</a>
                        </li>
                    </ul>
                </div>
                <button class="btn btn-primary pesan-sekarang">Pesan Sekarang</button>
            </div>
        </nav>
    </Header>

    <Body>
        <section id="home" class="py-5">
            <div class="container">
                <div class="image-container">
                    <img src="image/car-wash-ill.png" alt="" class="half-size">
                </div>
                <div class="tagline">
                    <h4>Cuci dan Salon Mobil Profesional</h4>
                    <p>Tidak perlu menunggu lama lagi saat ingin mencuci kendaraan Anda <br> Dan kami siap membersihkan
                        kendaraan Anda kapanpun dibutuhkan</p>
                </div>
            </div>
        </section>
        <section id="salon-mobil" class="py-5 bg-light">
            <div class="container">
                <h2 class="mb-4">Salon Mobil</h2>
                <p>Our car salon services offer a complete makeover for your vehicle, ensuring it looks brand new inside
                    and out. We use the best products and techniques to provide a thorough cleaning, polishing, and
                    detailing service.</p>
            </div>
        </section>
        <section id="paket" class="py-5">
            <div class="container">
                <h2 class="mb-4">Paket</h2>
                <p>Choose from our range of packages tailored to meet your needs. Whether you need a quick wash or a
                    complete detailing service, we have the perfect package for you.</p>
                <ul>
                    <li>Paket A: Basic Wash</li>
                    <li>Paket B: Full Wash</li>
                    <li>Paket C: Premium Detail</li>
                </ul>
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
