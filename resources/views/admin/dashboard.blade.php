@extends('admin.layout.layout')

@section('content')
    <div class="pagetitle">
        <h1>Dashboard</h1>
    </div>

    <section class="section dashboard">
        <div class="row">

            <!-- LEFT -->
            <div class="col-lg-8">
                <div class="row">

                    <!-- SALES -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">Sales</h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-cart"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $totalOrders }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- REVENUE -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card revenue-card">
                            <div class="card-body">
                                <h5 class="card-title">Revenue</h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-currency-dollar"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>Rp {{ number_format($totalRevenue, 0, ',', '.') }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CUSTOMERS -->
                    <div class="col-xxl-4 col-md-12">
                        <div class="card info-card customers-card">
                            <div class="card-body">
                                <h5 class="card-title">Customers</h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $totalCustomers }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- RECENT SALES -->
                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">
                            <div class="card-body">
                                <h5 class="card-title">Recent Sales</h5>

                                <table class="table table-borderless datatable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Customer</th>
                                            <th>Total</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($recentOrders as $order)
                                            <tr>
                                                <td>#{{ $order->id }}</td>
                                                <td>{{ $order->user->name }}</td>
                                                <td>Rp {{ number_format($order->total, 0, ',', '.') }}</td>
                                                <td>
                                                    <span
                                                        class="badge 
@if ($order->status == 'Approved') bg-success
@elseif($order->status == 'Pending') bg-warning
@else bg-danger @endif">
                                                        {{ $order->status }}
                                                    </span>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>



                </div>
            </div>
            <div class="col-lg-4">
                <!-- TOP SELLING -->
                <div class="col-12">
                    <div class="card top-selling overflow-auto">
                        <div class="card-body pb-0">
                            <h5 class="card-title">Top Selling</h5>

                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Sold</th>
                                        <th>Revenue</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($topProducts as $product)
                                        <tr>
                                            <td class="fw-bold">{{ $product->product_name }}</td>
                                            <td>{{ $product->sold }}</td>
                                            <td>Rp {{ number_format($product->revenue, 0, ',', '.') }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
