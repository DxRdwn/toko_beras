@extends('admin.layout.layout')
@section('content')
    <div class="pagetitle">
        <h1>Pesanan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>

                <li class="breadcrumb-item active">Pesanan</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <!-- Recent Sales -->
    <div class="col-12">
        <div class="card recent-sales overflow-auto">



            <div class="card-body">
                <h5 class="card-title">List<span>| Pesanan</span></h5>

                <table class="table table-borderless datatable align-middle">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Customer</th>
                            <th scope="col">Pesanan</th>
                            <th scope="col">Total Harga</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"><a href="#">#2457</a></th>
                            <td>Brandon Jacob</td>
                            <td>
                                <ul>
                                    <li>Beras Premium 5kg</li>
                                    <li>Beras Premium 25kg</li>
                                </ul>
                            </td>
                            <td>$64</td>
                            <td>
                                <div class="status-container position-relative d-inline-block">
                                    <span class="badge bg-success status-badge" style="cursor:pointer;">Approved</span>
                                    <select class="form-select form-select-sm status-select position-absolute top-0 start-0"
                                        style="display:none; width:130px;">
                                        <option value="Approved" selected>Approved</option>
                                        <option value="Pending">Pending</option>
                                        <option value="Rejected">Rejected</option>
                                        <option value="On Hold">On Hold</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>

        </div>
    </div><!-- End Recent Sales -->
@section('script')
    <script>
        document.querySelectorAll('.status-container').forEach(container => {
            const badge = container.querySelector('.status-badge');
            const select = container.querySelector('.status-select');

            // Klik badge → tampilkan dropdown
            badge.addEventListener('click', () => {
                badge.style.display = 'none';
                select.style.display = 'block';
                select.focus();
            });

            // Saat dropdown berubah → update badge
            select.addEventListener('change', () => {
                const newStatus = select.value;
                badge.textContent = newStatus;

                // Reset warna badge
                badge.className = 'badge status-badge';
                if (newStatus === 'Approved') {
                    badge.classList.add('bg-success');
                } else if (newStatus === 'Pending') {
                    badge.classList.add('bg-warning', 'text-dark');
                } else if (newStatus === 'Rejected') {
                    badge.classList.add('bg-danger');
                } else {
                    badge.classList.add('bg-secondary');
                }

                // Kembalikan tampilan badge
                select.style.display = 'none';
                badge.style.display = 'inline-block';
            });

            // Jika dropdown kehilangan fokus → kembalikan ke badge
            select.addEventListener('blur', () => {
                select.style.display = 'none';
                badge.style.display = 'inline-block';
            });
        });
    </script>
@endsection
@endsection
