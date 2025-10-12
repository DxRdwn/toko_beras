@extends('layout.layout')
@section('content')
    <!-- Page Title -->
    <div class="page-title light-background">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Tentang Kami</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ url('/') }}">Beranda</a></li>
                    <li class="current">Tentang</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <!-- About 2 Section -->
    <section id="about-2" class="about-2 section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <span class="section-badge"><i class="bi bi-info-circle"></i> Tentang Kami</span>
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="about-title">Toko Beras MUL – Pusat Penjualan Beras Berkualitas</h2>
                    <p class="about-description">
                        Toko Beras MUL merupakan toko yang bergerak di bidang penjualan berbagai jenis beras
                        berkualitas dengan harga terjangkau. Kami berkomitmen untuk menyediakan beras terbaik
                        bagi kebutuhan rumah tangga, restoran, hingga usaha kuliner dengan pelayanan yang cepat
                        dan ramah.
                    </p>
                </div>
                <div class="col-lg-6">
                    <p class="about-text">
                        Dengan adanya sistem informasi penjualan berbasis web ini, pelanggan dapat dengan mudah melihat
                        stok beras yang tersedia, melakukan pemesanan, serta mengetahui detail harga secara transparan.
                        Sistem ini juga membantu pihak toko dalam mengelola data penjualan, stok, dan laporan keuangan
                        secara efisien dan terintegrasi.
                    </p>
                    <p class="about-text">
                        Kami percaya bahwa pelayanan yang baik harus didukung oleh sistem yang modern. Oleh karena itu,
                        Toko Beras MUL terus berinovasi dalam meningkatkan kemudahan transaksi dan pengalaman belanja
                        pelanggan melalui platform digital.
                    </p>
                </div>
            </div>

            <div class="row features-boxes gy-4 mt-3">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-box">
                        <div class="icon-box">
                            <i class="bi bi-bullseye"></i>
                        </div>
                        <h3><a href="#" class="stretched-link">Visi Kami</a></h3>
                        <p>
                            Menjadi toko beras terpercaya yang memberikan kemudahan dalam transaksi digital serta menjadi
                            pilihan utama masyarakat dalam memenuhi kebutuhan beras berkualitas.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-box">
                        <div class="icon-box">
                            <i class="bi bi-person-check"></i>
                        </div>
                        <h3><a href="#" class="stretched-link">Misi Kami</a></h3>
                        <p>
                            Memberikan pelayanan terbaik kepada pelanggan, menjaga kualitas beras, serta mengelola data
                            penjualan dengan sistem informasi yang akurat dan efisien.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="feature-box">
                        <div class="icon-box">
                            <i class="bi bi-clipboard-data"></i>
                        </div>
                        <h3><a href="#" class="stretched-link">Tujuan Sistem</a></h3>
                        <p>
                            Sistem Informasi Penjualan Beras pada Toko MUL dikembangkan untuk mempermudah pengelolaan data
                            penjualan, stok barang, dan laporan, sehingga operasional toko menjadi lebih efektif.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-lg-12" data-aos="zoom-in" data-aos-delay="200">
                    <div class="video-box">
                        <img src="assets/img/about/beras.jpg" class="img-fluid rounded" alt="Toko Beras MUL">
                        <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- /About 2 Section -->
@endsection
