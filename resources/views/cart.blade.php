@extends('layout.layout')
@section('content')
    <!-- Page Title -->
    <div class="page-title light-background">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Keranjang Belanja</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="index.html">Beranda</a></li>
                    <li class="current">Keranjang</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <!-- Cart Section -->
    <section id="cart" class="cart section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row">
                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                    <div class="cart-items">
                        <div class="cart-header d-none d-lg-block">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <h5>Produk</h5>
                                </div>
                                <div class="col-lg-2 text-center">
                                    <h5>Harga</h5>
                                </div>
                                <div class="col-lg-2 text-center">
                                    <h5>Jumlah</h5>
                                </div>
                                <div class="col-lg-2 text-center">
                                    <h5>Total</h5>
                                </div>
                            </div>
                        </div>

                        <!-- Cart Item 1 -->
                        <div class="cart-item">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-12 mt-3 mt-lg-0 mb-lg-0 mb-3">
                                    <div class="product-info d-flex align-items-center">
                                        <div class="product-image">
                                            <img src="assets/img/product/beras2.jpg" alt="Product" class="img-fluid"
                                                loading="lazy">
                                        </div>
                                        <div class="product-details">
                                            <h6 class="product-title">Beras Pandan Wangi Super 5kg</h6>
                                            <div class="product-meta">
                                                <span class="product-color">Jenis: Premium</span>
                                                <span class="product-size">Kemasan: 5kg</span>
                                            </div>
                                            <button class="remove-item" type="button">
                                                <i class="bi bi-trash"></i> Hapus
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-12 text-center">
                                    <div class="price-tag">
                                        <span class="current-price">Rp89.000</span>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-12 text-center">
                                    <div class="quantity-selector">
                                        <button class="quantity-btn decrease"><i class="bi bi-dash"></i></button>
                                        <input type="number" class="quantity-input" value="1" min="1"
                                            max="10">
                                        <button class="quantity-btn increase"><i class="bi bi-plus"></i></button>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-12 text-center">
                                    <div class="item-total">
                                        <span>Rp89.000</span>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Cart Item -->

                        <!-- Cart Item 2 -->
                        <div class="cart-item">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-12 mt-3 mt-lg-0 mb-lg-0 mb-3">
                                    <div class="product-info d-flex align-items-center">
                                        <div class="product-image">
                                            <img src="assets/img/product/beras1.jpeg" alt="Product" class="img-fluid"
                                                loading="lazy">
                                        </div>
                                        <div class="product-details">
                                            <h6 class="product-title">Beras Merah Organik 5kg</h6>
                                            <div class="product-meta">
                                                <span class="product-color">Jenis: Organik</span>
                                                <span class="product-size">Kemasan: 5kg</span>
                                            </div>
                                            <button class="remove-item" type="button">
                                                <i class="bi bi-trash"></i> Hapus
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-12 text-center">
                                    <div class="price-tag">
                                        <span class="current-price">Rp64.000</span>
                                        <span class="original-price">Rp79.000</span>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-12 text-center">
                                    <div class="quantity-selector">
                                        <button class="quantity-btn decrease"><i class="bi bi-dash"></i></button>
                                        <input type="number" class="quantity-input" value="2" min="1"
                                            max="10">
                                        <button class="quantity-btn increase"><i class="bi bi-plus"></i></button>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-12 text-center">
                                    <div class="item-total">
                                        <span>Rp128.000</span>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Cart Item -->

                        <!-- Cart Item 3 -->
                        <div class="cart-item">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-12 mt-3 mt-lg-0 mb-lg-0 mb-3">
                                    <div class="product-info d-flex align-items-center">
                                        <div class="product-image">
                                            <img src="assets/img/product/beras4.png" alt="Product" class="img-fluid"
                                                loading="lazy">
                                        </div>
                                        <div class="product-details">
                                            <h6 class="product-title">Beras Hitam Premium 2kg</h6>
                                            <div class="product-meta">
                                                <span class="product-color">Jenis: Premium</span>
                                                <span class="product-size">Kemasan: 2kg</span>
                                            </div>
                                            <button class="remove-item" type="button">
                                                <i class="bi bi-trash"></i> Hapus
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-12 text-center">
                                    <div class="price-tag">
                                        <span class="current-price">Rp49.000</span>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-12 text-center">
                                    <div class="quantity-selector">
                                        <button class="quantity-btn decrease"><i class="bi bi-dash"></i></button>
                                        <input type="number" class="quantity-input" value="1" min="1"
                                            max="10">
                                        <button class="quantity-btn increase"><i class="bi bi-plus"></i></button>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-12 text-center">
                                    <div class="item-total">
                                        <span>Rp49.000</span>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Cart Item -->

                        <div class="cart-actions">
                            <div class="row">
                                <div class="col-lg-6 mb-3 mb-lg-0">

                                </div>
                                <div class="col-lg-6 text-md-end">
                                    <button class="btn btn-outline-heading me-2">
                                        <i class="bi bi-arrow-clockwise"></i> Perbarui Keranjang
                                    </button>
                                    <button class="btn btn-outline-remove">
                                        <i class="bi bi-trash"></i> Hapus Semua
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                    <div class="cart-summary">
                        <h4 class="summary-title">Ringkasan Pesanan</h4>

                        <div class="summary-item">
                            <span class="summary-label">Subtotal</span>
                            <span class="summary-value">Rp266.000</span>
                        </div>

                        <div class="summary-item shipping-item">
                            <span class="summary-label">Pengiriman</span>
                            <div class="shipping-options">
                                <div class="form-check text-end">
                                    <input class="form-check-input" type="radio" name="shipping" id="standard"
                                        checked="">
                                    <label class="form-check-label" for="standard">
                                        Pengiriman Kurang dari 1km - Rp5.000
                                    </label>
                                </div>
                                <div class="form-check text-end">
                                    <input class="form-check-input" type="radio" name="shipping" id="express">
                                    <label class="form-check-label" for="express">
                                        Pengiriman 1-3km - Rp10.000
                                    </label>
                                </div>

                            </div>
                        </div>
                        <div class="summary-item discount">
                            <span class="summary-label">Diskon</span>
                            <span class="summary-value">Rp0</span>
                        </div>

                        <div class="summary-total">
                            <span class="summary-label">Total</span>
                            <span class="summary-value">Rp281.000</span>
                        </div>

                        <div class="checkout-button">
                            <a href="#" class="btn btn-accent w-100">
                                Lanjut ke Pemesanan <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>

                        <div class="continue-shopping">
                            <a href="#" class="btn btn-link w-100">
                                <i class="bi bi-arrow-left"></i> Lanjut Belanja
                            </a>
                        </div>

                        <div class="payment-methods">
                            <p class="payment-title">Metode Pembayaran</p>
                            <div class="payment-icons">
                                <p>Chat Whatsapp </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Cart Section -->
@endsection
