<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Register | Toko Beras MUL</title>

    <!-- Favicons -->
    <link href="{{ asset('admin/assets/img/favicon.png') }}" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Nunito:300,400,600,700|Poppins:300,400,500,600,700"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">

    <!-- Template Main CSS -->
    <link href="{{ asset('admin/assets/css/style.css') }}" rel="stylesheet">
</head>

<body>

    <main>
        <div class="container">

            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <!-- Logo -->
                            <div class="d-flex justify-content-center py-4">
                                <a href="{{ url('/') }}" class="logo d-flex align-items-center w-auto">
                                    <img src="{{ asset('admin/assets/img/logo.png') }}" alt="">
                                    <span class="d-none d-lg-block">Toko Beras MUL</span>
                                </a>
                            </div>

                            <div class="card mb-3">
                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Buat Akun</h5>
                                        <p class="text-center small">Isi data untuk mendaftar</p>
                                    </div>

                                    {{-- ERROR VALIDATION --}}
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            {{ $errors->first() }}
                                        </div>
                                    @endif

                                    <form method="POST" action="{{ route('register') }}" class="row g-3">
                                        @csrf

                                        <div class="col-12">
                                            <label class="form-label">Nama Lengkap</label>
                                            <input type="text" name="name" class="form-control"
                                                value="{{ old('name') }}" required>
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label">Email</label>
                                            <input type="email" name="email" class="form-control"
                                                value="{{ old('email') }}" required>
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" required>
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label">Konfirmasi Password</label>
                                            <input type="password" name="password_confirmation" class="form-control"
                                                required>
                                        </div>

                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">
                                                Daftar
                                            </button>
                                        </div>

                                        <div class="col-12 text-center">
                                            <p class="small mb-0">
                                                Sudah punya akun?
                                                <a href="{{ route('login') }}">Login</a>
                                            </p>
                                        </div>
                                    </form>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

        </div>
    </main>

    <script src="{{ asset('admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/main.js') }}"></script>

</body>

</html>
