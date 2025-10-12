@extends('layout.layout')
@section('content')
    <!-- Page Title -->
    <div class="page-title light-background">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Product</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li class="current">Product</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->
    <!-- Best Sellers Section -->
    <section id="best-sellers" class="best-sellers section">


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
                            <img src="assets/img/product/beras2.jpg" alt="Product Image" class="img-fluid" loading="lazy" />
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
