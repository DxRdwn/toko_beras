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


                <!-- Product 2 -->
                @foreach ($products as $product)
                    <div class="col-lg-3 col-md-6">
                        <div class="product-item">
                            <div class="product-image">
                                <div class="product-badge sale-badge">
                                    Diskon 25%
                                </div>
                                <img src="{{ $product->gambar ? asset('storage/' . $product->gambar) : 'assets/img/product/default.png' }}"
                                    alt="{{ $product->nama_produk }}" class="img-fluid" loading="lazy" />
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
                                <a href="{{ route('product.addToCart', $product->id) }}" class="cart-btn">Tambah ke
                                    Keranjang</a>
                                {{-- <button class="cart-btn">
                                    Tambah ke Keranjang
                                </button> --}}
                            </div>
                            <div class="product-info">
                                <div class="product-category">
                                    Produk Terlaris
                                </div>
                                <h4 class="product-name">
                                    <a href="">{{ $product->nama_produk }}</a>
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

                                    <span class="current-price">Rp{{ number_format($product->harga, 0, ',', '.') }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- End Product 2 -->


            </div>
        </div>
    </section>
    <!-- /Best Sellers Section -->
    >
@endsection
