@extends('layout.layout')
@section('content')
    <!-- Page Title -->
    <div class="page-title light-background">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Keranjang Belanja</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ url('/') }}">Beranda</a></li>
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

                        @php $subtotal = 0; @endphp
                        @forelse(session('cart', []) as $id => $item)
                            @php
                                $total = $item['price'] * $item['qty'];
                                $subtotal += $total;
                            @endphp
                            <div class="cart-item">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-12 mt-3 mt-lg-0 mb-lg-0 mb-3">
                                        <div class="product-info d-flex align-items-center">
                                            <div class="product-image">
                                                <img src="{{ asset('storage/' . $item['image']) }}"
                                                    alt="{{ $item['name'] }}" class="img-fluid" loading="lazy">
                                            </div>
                                            <div class="product-details">
                                                <h6 class="product-title">{{ $item['name'] }}</h6>
                                                <div class="product-meta">
                                                    <span class="product-color">Jenis: {{ $item['type'] ?? '-' }}</span>
                                                    <span class="product-size">Kemasan: {{ $item['size'] ?? '-' }}</span>
                                                </div>
                                                <a href="{{ route('cart.remove', $id) }}"
                                                    class="btn btn-link remove-item"><i class="bi bi-trash"></i> Hapus</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-12 text-center">
                                        <div class="price-tag"><span
                                                class="current-price">Rp{{ number_format($item['price']) }}</span></div>
                                    </div>
                                    <div class="col-lg-2 col-12 text-center">
                                        <div class="quantity-selector">
                                            <form action="{{ route('cart.update', $id) }}" method="POST">
                                                @csrf
                                                <input type="number" name="qty" value="{{ $item['qty'] }}"
                                                    min="1" max="100" class="form-control">
                                                <button type="submit"
                                                    class="btn btn-sm btn-outline-primary mt-1">Update</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-12 text-center">
                                        <div class="item-total"><span>Rp{{ number_format($total) }}</span></div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p class="text-center mt-3">Keranjang kosong.</p>
                        @endforelse

                        <div class="cart-actions mt-3">
                            <div class="row">
                                <div class="col-lg-6 mb-3 mb-lg-0"></div>
                                <div class="col-lg-6 text-md-end">
                                    <a href="{{ url('/') }}" class="btn btn-outline-primary me-2"><i
                                            class="bi bi-arrow-left"></i> Lanjut Belanja</a>
                                    <a href="" class="btn btn-outline-danger"><i class="bi bi-trash"></i> Hapus
                                        Semua</a>
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
                            <span class="summary-value">Rp{{ number_format($subtotal) }}</span>
                        </div>

                        <div class="summary-item shipping-item">
                            <span class="summary-label">Pengiriman</span>
                            <div class="shipping-options">
                                <form action="{{ route('cart.checkout') }}" method="POST">
                                    @csrf
                                    <div class="form-check text-end">
                                        <input class="form-check-input" type="radio" name="shipping" value="5000"
                                            checked>
                                        <label class="form-check-label">Kurir Kurang dari 1km - Rp5.000</label>
                                    </div>
                                    <div class="form-check text-end">
                                        <input class="form-check-input" type="radio" name="shipping" value="10000">
                                        <label class="form-check-label">Kurir 1-3km - Rp10.000</label>
                                    </div>

                                    <div class="summary-total mt-3">
                                        <span class="summary-label">Total</span>
                                        <span class="summary-value">Rp{{ number_format($subtotal + 5000) }}</span>
                                    </div>

                                    <button type="submit" class="btn btn-accent w-100 mt-3">Lanjut ke Pemesanan <i
                                            class="bi bi-arrow-right"></i></button>
                                </form>
                            </div>
                        </div>

                        <div class="payment-methods mt-3">
                            <p class="payment-title">Metode Pembayaran</p>
                            <p>Chat WhatsApp otomatis</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Cart Section -->
@endsection
