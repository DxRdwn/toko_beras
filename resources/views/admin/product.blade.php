@extends('admin.layout.layout')
@section('content')
    <div class="pagetitle">
        <h1>Product</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>

                <li class="breadcrumb-item active">Produk</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">General Form Elements</h5>

                        <!-- General Form Elements -->
                        <form>
                            <div class="row mb-3">
                                <div class="col-lg-6">
                                    <div class="row align-items-center">
                                        <label for="kode" class="col-sm-4 col-form-label">Kode</label>
                                        <div class="col-sm-8">
                                            <input type="text" id="kode" class="form-control"
                                                placeholder="Masukkan kode produk">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mt-3 mt-lg-0">
                                    <div class="row align-items-center">
                                        <label for="nama_produk" class="col-sm-4 col-form-label">Nama Produk</label>
                                        <div class="col-sm-8">
                                            <input type="text" id="nama_produk" class="form-control"
                                                placeholder="Masukkan nama produk">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Baris 2: Stok + Harga -->
                            <div class="row mb-3">
                                <div class="col-lg-6">
                                    <div class="row align-items-center">
                                        <label for="stok" class="col-sm-4 col-form-label">Stok</label>
                                        <div class="col-sm-8">
                                            <input type="number" id="stok" class="form-control"
                                                placeholder="Masukkan jumlah stok">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mt-3 mt-lg-0">
                                    <div class="row align-items-center">
                                        <label for="harga" class="col-sm-4 col-form-label">Harga</label>
                                        <div class="col-sm-8">
                                            <input type="number" id="harga" class="form-control"
                                                placeholder="Masukkan harga produk">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Gambar</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                            </div>



                            <button type="submit" class="col-lg-12 btn btn-primary">Simpan</button>


                        </form><!-- End General Form Elements -->

                    </div>
                </div>

            </div>
        </div>

    </section>
    <section class="section dashboard">
        <!-- Recent Sales -->
        <div class="col-12">
            <div class="card recent-sales overflow-auto">



                <div class="card-body">
                    <h5 class="card-title">List <span>| Product</span></h5>

                    <table class="table table-borderless datatable">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Kode</th>
                                <th scope="col">Product</th>
                                <th scope="col">Stok</th>
                                <th scope="col">Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"><a href="#">1</a></th>
                                <td>001</td>
                                <td><a href="#" class="text-primary">Beras Premium</a>
                                </td>
                                <td>20</td>
                                <td>Rp. 36,000</td>
                            </tr>


                        </tbody>
                    </table>

                </div>

            </div>
        </div><!-- End Recent Sales -->
    </section>
@endsection
