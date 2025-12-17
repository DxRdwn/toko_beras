@extends('admin.layout.layout')
@section('content')
    @extends('admin.layout.toast')
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
                        <h5 class="card-title">Form Product</h5>

                        <!-- General Form Elements -->
                        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <div class="col-lg-6">
                                    <input type="text" name="kode" class="form-control" placeholder="Kode Produk">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="nama_produk" class="form-control" placeholder="Nama Produk">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-lg-6">
                                    <input type="number" name="stok" class="form-control" placeholder="Stok">
                                </div>
                                <div class="col-lg-6">
                                    <input type="number" name="harga" class="form-control" placeholder="Harga">
                                </div>
                            </div>

                            <div class="mb-3">
                                <input type="file" name="gambar" class="form-control">
                            </div>

                            <button class="btn btn-primary col-lg-12">Simpan</button>
                        </form>

                        <!-- End General Form Elements -->

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
                            @foreach ($products as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->kode }}</td>
                                    <td>{{ $item->nama_produk }}</td>
                                    <td>{{ $item->stok }}</td>
                                    <td>Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                                    <td>
                                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#deleteModal" onclick="setDelete({{ $item->id }})">
                                            Hapus
                                        </button>
                                        |
                                        <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#editModal" onclick="editProduct({{ $item }})">
                                            Edit
                                        </button>

                                    </td>

                                </tr>
                            @endforeach
                        </tbody>

                    </table>

                </div>

            </div>
        </div><!-- End Recent Sales -->

    </section>

    {{-- Modall Edit --}}
    <div class="modal fade" id="editModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <form id="editForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="modal-header">
                        <h5 class="modal-title">Edit Produk</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">
                        <input type="text" name="kode" id="edit_kode" class="form-control mb-2">
                        <input type="text" name="nama_produk" id="edit_nama" class="form-control mb-2">
                        <input type="number" name="stok" id="edit_stok" class="form-control mb-2">
                        <input type="number" name="harga" id="edit_harga" class="form-control mb-2">

                        <!-- PREVIEW GAMBAR -->
                        <div class="mb-3">
                            <label>Gambar</label><br>
                            <img id="edit_preview" width="150" class="mb-2 d-none">
                            <input type="file" name="gambar" class="form-control" onchange="previewEditImage(this)">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-primary">Update</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
    {{-- Modal Hapus --}}
    <div class="modal fade" id="deleteModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <form id="deleteForm" method="POST">
                    @csrf
                    @method('DELETE')

                    <div class="modal-header">
                        <h5 class="modal-title">Hapus Produk</h5>
                    </div>

                    <div class="modal-body">
                        <p>Yakin ingin menghapus produk ini?</p>
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-danger">Hapus</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
@section('script')
    @if (session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const toastEl = document.getElementById('toastSuccess');
                const toast = new bootstrap.Toast(toastEl, {
                    delay: 2500
                });
                toast.show();
            });
        </script>
    @endif
    @if (session('error'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const toastEl = document.getElementById('toastError');
                const toast = new bootstrap.Toast(toastEl, {
                    delay: 2500
                });
                toast.show();
            });
        </script>
    @endif
    <script>
        function setDelete(id) {
            document.getElementById('deleteForm').action = `/admin/product/${id}`;
        }
    </script>


    <script>
        function editProduct(product) {
            document.getElementById('edit_kode').value = product.kode;
            document.getElementById('edit_nama').value = product.nama_produk;
            document.getElementById('edit_stok').value = product.stok;
            document.getElementById('edit_harga').value = product.harga;

            // set action form
            document.getElementById('editForm').action = `/admin/product/${product.id}`;

            // tampilkan gambar lama
            const preview = document.getElementById('edit_preview');
            if (product.gambar) {
                preview.src = `/storage/${product.gambar}`;
                preview.classList.remove('d-none');
            } else {
                preview.classList.add('d-none');
            }
        }

        function previewEditImage(input) {
            const preview = document.getElementById('edit_preview');
            const file = input.files[0];

            if (file) {
                const reader = new FileReader();
                reader.onload = e => {
                    preview.src = e.target.result;
                    preview.classList.remove('d-none');
                }
                reader.readAsDataURL(file);
            }
        }
    </script>
@endsection
