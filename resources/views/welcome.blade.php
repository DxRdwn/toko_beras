@extends('layout/layout')
@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section">
        <div class="hero-container">
            <div class="hero-content">
                <div class="content-wrapper" data-aos="fade-up" data-aos-delay="100">
                    <h1 class="hero-title">
                        Toko Beras MUL – Solusi Beras Berkualitas untuk Kebutuhan Anda
                    </h1>
                    <p class="hero-description">
                        Selamat datang di Toko Beras MUL! Kami menyediakan berbagai jenis beras pilihan
                        dengan kualitas unggul dan harga terjangkau. Belanja beras kini lebih mudah dan cepat —
                        cukup dari rumah, pesanan Anda akan kami antar dengan pelayanan terbaik.
                    </p>
                    <div class="hero-actions" data-aos="fade-up" data-aos-delay="200">
                        <a href="#products" class="btn-primary">Belanja Sekarang</a>
                        <a href="#categories" class="btn-secondary">Lihat Jenis Beras</a>
                    </div>
                    <div class="features-list" data-aos="fade-up" data-aos-delay="300">
                        <div class="feature-item">
                            <i class="bi bi-truck"></i>
                            <span>Pengiriman Cepat</span>
                        </div>
                        <div class="feature-item">
                            <i class="bi bi-award"></i>
                            <span>Kualitas Terjamin</span>
                        </div>
                        <div class="feature-item">
                            <i class="bi bi-headset"></i>
                            <span>Layanan Pelanggan 24 Jam</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hero-visuals">
                <div class="product-showcase" data-aos="fade-left" data-aos-delay="200">
                    <div class="product-card featured">
                        <img src="assets/img/product/pandan.jpeg" alt="Featured Product" class="img-fluid" />
                        <div class="product-badge">Terlaris</div>
                        <div class="product-info">
                            <h4>Beras Premium Pandan Wangi 5Kg</h4>
                            <div class="price">
                                <span class="sale-price">Rp75.000</span>
                                <span class="original-price">Rp82.000</span>
                            </div>
                        </div>
                    </div>

                    <div class="product-grid">
                        <div class="product-mini" data-aos="zoom-in" data-aos-delay="400">
                            <img src="assets/img/product/beras1.jpeg" alt="Product" class="img-fluid" />
                            <span class="mini-price">Rp68.000</span>
                        </div>
                        <div class="product-mini" data-aos="zoom-in" data-aos-delay="500">
                            <img src="assets/img/product/beras2.jpg" alt="Product" class="img-fluid" />
                            <span class="mini-price">Rp60.000</span>
                        </div>
                    </div>
                </div>

                <div class="floating-elements">
                    <div class="floating-icon cart" data-aos="fade-up" data-aos-delay="600">
                        <i class="bi bi-cart3"></i>
                        <span class="notification-dot">2</span>
                    </div>
                    <div class="floating-icon wishlist" data-aos="fade-up" data-aos-delay="700">
                        <i class="bi bi-heart"></i>
                    </div>
                    <div class="floating-icon search" data-aos="fade-up" data-aos-delay="800">
                        <i class="bi bi-search"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Hero Section -->


    <!-- Promo Cards Section -->
    <section id="promo-cards" class="promo-cards section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4">
                <div class="col-lg-6">
                    <div class="category-featured" data-aos="fade-right" data-aos-delay="200">
                        <div class="category-image">
                            <img src="assets/img/product/pandan.jpeg" alt="Promo Beras" class="img-fluid" />
                        </div>
                        <div class="category-content">
                            <span class="category-tag">Promo Spesial</span>
                            <h2>Beras Premium Harga Terbaik</h2>
                            <p>
                                Dapatkan beras pilihan dengan harga spesial di Toko Beras MUL!
                                Kualitas terjamin, tekstur pulen, dan cocok untuk kebutuhan rumah tangga maupun usaha.
                                Nikmati kemudahan berbelanja beras tanpa keluar rumah.
                            </p>
                            <a href="#" class="btn-shop">Lihat Promo
                                <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="row gy-4">
                        <div class="col-xl-6">
                            <div class="category-card cat-men" data-aos="fade-up" data-aos-delay="300">
                                <div class="category-image">
                                    <img src="assets/img/product/beras4.png" alt="Beras Premium" class="img-fluid" />
                                </div>
                                <div class="category-content">
                                    <h4>Beras Pandan Wangi</h4>
                                    <p>25 produk tersedia</p>
                                    <a href="#" class="card-link">Beli Sekarang
                                        <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="category-card cat-kids" data-aos="fade-up" data-aos-delay="400">
                                <div class="category-image">
                                    <img src="assets/img/product/beras1.jpeg" alt="Beras Medium" class="img-fluid" />
                                </div>
                                <div class="category-content">
                                    <h4>Beras Rojolele</h4>
                                    <p>18 produk tersedia</p>
                                    <a href="#" class="card-link">Lihat Detail
                                        <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="category-card cat-cosmetics" data-aos="fade-up" data-aos-delay="500">
                                <div class="category-image">
                                    <img src="assets/img/product/beras2.jpg" alt="Beras Setra Ramos" class="img-fluid" />
                                </div>
                                <div class="category-content">
                                    <h4>Beras Setra Ramos</h4>
                                    <p>15 produk tersedia</p>
                                    <a href="#" class="card-link">Pesan Sekarang
                                        <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="category-card cat-accessories" data-aos="fade-up" data-aos-delay="600">
                                <div class="category-image">
                                    <img src="assets/img/product/beras3.webp" alt="Beras Organik" class="img-fluid" />
                                </div>
                                <div class="category-content">
                                    <h4>Beras Organik</h4>
                                    <p>12 produk tersedia</p>
                                    <a href="#" class="card-link">Lihat Produk
                                        <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Promo Cards Section -->


    <!-- Best Sellers Section -->
    <section id="best-sellers" class="best-sellers section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Produk Terlaris</h2>
            <p>
                Nikmati berbagai pilihan beras berkualitas tinggi yang paling diminati pelanggan Toko MUL.
            </p>
        </div>
        <!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row g-5">
                <!-- Product 1 -->
                <div class="col-lg-3 col-md-6">
                    <div class="product-item">
                        <div class="product-image">
                            <div class="product-badge">Stok Terbatas</div>
                            <img src="assets/img/product/beras1.jpeg" alt="Product Image" class="img-fluid"
                                loading="lazy" />
                            <div class="product-actions">
                                <button class="action-btn wishlist-btn">
                                    <i class="bi bi-heart"></i>
                                </button>
                                <button class="action-btn compare-btn">
                                    <i class="bi bi-arrow-left-right"></i>
                                </button>
                                <button class="action-btn quickview-btn">
                                    <i class="bi bi-zoom-in"></i>
                                </button>
                            </div>
                            <button class="cart-btn">
                                Pilih Varian
                            </button>
                        </div>
                        <div class="product-info">
                            <div class="product-category">
                                Beras Premium
                            </div>
                            <h4 class="product-name">
                                <a href="product-details.html">Beras Pandan Wangi Super</a>
                            </h4>
                            <div class="product-rating">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                </div>
                                <span class="rating-count">(24)</span>
                            </div>
                            <div class="product-price">Rp189.000 / karung</div>
                        </div>
                    </div>
                </div>
                <!-- End Product 1 -->

                <!-- Product 2 -->
                <div class="col-lg-3 col-md-6">
                    <div class="product-item">
                        <div class="product-image">
                            <div class="product-badge sale-badge">
                                Diskon 25%
                            </div>
                            <img src="assets/img/product/beras2.jpg" alt="Product Image" class="img-fluid"
                                loading="lazy" />
                            <div class="product-actions">
                                <button class="action-btn wishlist-btn">
                                    <i class="bi bi-heart"></i>
                                </button>
                                <button class="action-btn compare-btn">
                                    <i class="bi bi-arrow-left-right"></i>
                                </button>
                                <button class="action-btn quickview-btn">
                                    <i class="bi bi-zoom-in"></i>
                                </button>
                            </div>
                            <button class="cart-btn">
                                Tambah ke Keranjang
                            </button>
                        </div>
                        <div class="product-info">
                            <div class="product-category">
                                Produk Terlaris
                            </div>
                            <h4 class="product-name">
                                <a href="product-details.html">Beras Merah Organik 5kg</a>
                            </h4>
                            <div class="product-rating">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-half"></i>
                                </div>
                                <span class="rating-count">(38)</span>
                            </div>
                            <div class="product-price">
                                <span class="old-price">Rp240.000</span>
                                <span class="current-price">Rp180.000</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Product 2 -->

                <!-- Product 3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="product-item">
                        <div class="product-image">
                            <img src="assets/img/product/pandan.jpeg" alt="Product Image" class="img-fluid"
                                loading="lazy" />
                            <div class="product-actions">
                                <button class="action-btn wishlist-btn">
                                    <i class="bi bi-heart"></i>
                                </button>
                                <button class="action-btn compare-btn">
                                    <i class="bi bi-arrow-left-right"></i>
                                </button>
                                <button class="action-btn quickview-btn">
                                    <i class="bi bi-zoom-in"></i>
                                </button>
                            </div>
                            <button class="cart-btn">
                                Tambah ke Keranjang
                            </button>
                        </div>
                        <div class="product-info">
                            <div class="product-category">
                                Produk Baru
                            </div>
                            <h4 class="product-name">
                                <a href="product-details.html">Beras Hitam Premium 5kg</a>
                            </h4>
                            <div class="product-rating">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                    <i class="bi bi-star"></i>
                                </div>
                                <span class="rating-count">(12)</span>
                            </div>
                            <div class="product-price">Rp95.000 / sak</div>
                        </div>
                    </div>
                </div>
                <!-- End Product 3 -->

                <!-- Product 4 -->
                <div class="col-lg-3 col-md-6">
                    <div class="product-item">
                        <div class="product-image">
                            <div class="product-badge trending-badge">
                                Terlaris
                            </div>
                            <img src="assets/img/product/beras2.jpg" alt="Product Image" class="img-fluid"
                                loading="lazy" />
                            <div class="product-actions">
                                <button class="action-btn wishlist-btn active">
                                    <i class="bi bi-heart-fill"></i>
                                </button>
                                <button class="action-btn compare-btn">
                                    <i class="bi bi-arrow-left-right"></i>
                                </button>
                                <button class="action-btn quickview-btn">
                                    <i class="bi bi-zoom-in"></i>
                                </button>
                            </div>
                            <button class="cart-btn">
                                Tambah ke Keranjang
                            </button>
                        </div>
                        <div class="product-info">
                            <div class="product-category">
                                Seri Premium
                            </div>
                            <h4 class="product-name">
                                <a href="product-details.html">Beras Ramos Super 10kg</a>
                            </h4>
                            <div class="product-rating">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <span class="rating-count">(56)</span>
                            </div>
                            <div class="product-price">Rp165.000 / karung</div>
                        </div>
                    </div>
                </div>
                <!-- End Product 4 -->
            </div>
        </div>
    </section>
    <!-- /Best Sellers Section -->
    >
@endsection
