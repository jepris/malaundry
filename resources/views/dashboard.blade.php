<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Malaundry | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        .brandlogo {
            background-color: #50C227;
            padding-left: 50px;
        }

        .brandlogo a {
            text-decoration: none;
            color: white;
        }

        .brandlogo a span {
            color: white;
            font-weight: 900;
        }

        .navbar {
            margin-top: 0;
            background-color: #50C227;
        }

        .navbar-nav a {
            color: white;
        }

        .navbarside li {
            color: white;
        }

        hr {
            color: white;
        }

        .sidebar {
            background-color: #222D32;
        }

        .sidebar li p {
            color: white;
        }

        .info a {
            text-decoration: none;
            color: white;
        }

        .nav-bawah {
            border: solid 7px white;
            border-top-color: #50C227;
            padding-left: 15px;
            padding-right: 15px;
        }

        .navbaw {
            margin-bottom: 100px;

        }

        .form-control {
            width: 200px;
        }

        .dropdown button {
            width: 100px;
        }

        .create {
            width: 150px;
        }

        .breadcrumb a {
            text-decoration: none;
            color: black;
        }

        .label-success {
            background-color: #157347;
            color: white;
            font-weight: 100;
            width: 100px;
            display: flex;
            justify-content: center;
        }

        .label-danger {
            background-color: #dc3545;
            color: white;
            font-weight: 100;
            width: 100px;
            display: flex;
            justify-content: center;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i> inbox
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#"
                        role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar elevation-4">
            <!-- Brand Logo -->
            <div class="brandlogo">
                <a href="" class="brand-link">
                    <Span>Ma</Span>Laundry
                </a>
            </div>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="" class="d-block">Jepri Simbolon</a>
                        <a href="" class="d-block">admin</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="navbarside mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-header">MAIN NAVIGATION</li>
                        <hr>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <p>
                                    Registrasi
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <p>
                                    Pengambilan
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <p>
                                    Data Order
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <p>
                                    Data Transaksi Paket
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <p>
                                    Pengeluaran
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <p>
                                    Kas Laundry
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <p>
                                    Statistik
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <p>
                                    Pembayaran
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <p>
                                    Inbox
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <p>
                                    Laporan Keuangan
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <p>
                                    Request
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Paket Kuota</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                                <li class="breadcrumb-item active">Paket Kuota</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <div class="nav-bawah">
                <div class="navbaw">
                    <div class="row g-5">
                        <div class="col-sm">
                            <label for="date-start" class="form-label fw-bold">From</label>
                            <input type="date" name="date-start" class="form-control">
                        </div>
                        <div class="col-sm">
                            <label for="date-start" class="form-label fw-bold">To</label>
                            <input type="date" name="date-start" class="form-control">
                        </div>
                        <div class="col-sm">
                            <label for="date-start" class="form-label fw-bold">Filter</label><br>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>All</option>
                                <option value="1">Paket Kuota</option>
                                <option value="2">Berat</option>
                                <option value="3">Harga</option>
                                <option value="3">Cabang</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label for="date-start" class="form-label fw-bold">Export</label><br>
                            <a href="" class="btn btn-success">Excel</a>
                            <a href="" class="btn btn-danger">Pdf</a>
                        </div>
                        <div class="col-4">
                            <a href="" id="refresh-button"
                                class="create btn btn-primary mt-3 mb-4 ms-5">Refresh</a>
                            <a href="/createorder" class="create btn btn-secondary mt-3 mb-4 ms-4"
                                data-bs-toggle="modal" data-bs-target="#createdata">+ Create</a>
                        </div>
                    </div>
                </div>

                <!-- Main content -->
                <section class="content">
                    <div class="search d-flex justify-content-end">
                        <label for="search" class="form-label fw-bold">Search : </label>
                        <input type="text" class="rounded ms-1 mb-2" name="search" id="search">
                    </div>
                    <div class="row">
                        @if ($message = Session::get('Success'))
                            <div class="alert alert-success" role="alert">
                                {{ $message }}
                            </div>
                        @endif
                        <table class="table table-bordered">
                            <thead class="table-success">
                                <tr>
                                    <th scope="col">Paket Kuota</th>
                                    <th scope="col">Berat</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Cabang</th>
                                    <th scope="col">Create At</th>
                                    <th scope="col">Aktif</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $row)
                                    <tr>
                                        <td>{{ $row->paketkuota }}</td>
                                        <td>{{ $row->berat }} Kg</td>
                                        <td>Rp.{{ $row->harga }},00</td>
                                        <td>{{ $row->cabang }}</td>
                                        <td>{{ $row->created_at }}</td>
                                        <td>
                                            <label class="label {{ ($row->status == 1) ? 'label-success' : 'label-danger' }}">{{ $row->status == 1 ? 'Aktif' : 'Tidak Aktif' }}</label>
                                        </td>
                                        </td>
                                        <td>
                                            <div class="btn-group dropstart">
                                                <button type="button" class="btn btn-secondary dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    Action
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="/detaildata/{{ $row->id }}"
                                                            class="dropdown-item" data-bs-toggle="modal"
                                                            data-bs-target="#detaildata">DETAIL</a></li>
                                                    <li>
                                                        @if ($row->status == 1)
                                                        <a href="{{ url('/edit/'.$row->id) }}" class="btn btn-sm btn-danger">Non-Aktifkan</a>
                                                        @else
                                                        <a href="{{ url('/edit/'.$row->id) }}" class="btn btn-sm btn-success">Aktifkan</a>
                                                        @endif
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $data->links() }}
                    </div>
                </section>
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2022-2023 <a href="https://replit.com/@JepriSimbolon">Jepri Simbolon</a>.</strong>
            All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    {{-- modal --}}
    {{-- create modal --}}
    <div class="modal fade" id="createdata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-body">
                        <h3 class="text-center mb-4">Tambah Orderan</h3>
                        <div class="row justify-content-center">
                            <div class="col-8">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="/insertdata" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <p class="fs-2">Paket Kuota</p>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label fw-bold">Paket
                                                    Kuota</label>
                                                <select class="form-select" name="paketkuota"
                                                    id="floatingSelectGrid">
                                                    <option selected>--</option>
                                                    <option value="1">Kuota Cuci</option>
                                                    <option value="2">Kuota Setrika</option>
                                                    <option value="3">Kuota Cuci Setrika</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="exampleInputEmail1"
                                                            class="form-label fw-bold">Berat</label>
                                                        <input type="text" name="berat" class="form-control"
                                                            id="exampleInputEmail1" aria-describedby="emailHelp">
                                                    </div>
                                                    <div class="col">
                                                        <label for="exampleInputEmail1"
                                                            class="form-label fw-bold">Satuan Unit</label>
                                                        <select class="form-select"class id="floatingSelectGrid">
                                                            <option selected>Satuan Unit</option>
                                                            <option value="1">Ons</option>
                                                            <option value="2">Kg</option>
                                                            <option value="3">Kwintal</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1"
                                                    class="form-label fw-bold">Harga</label>
                                                <input type="text" name="harga" class="form-control"
                                                    id="exampleInputEmail1" aria-describedby="emailHelp">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1"
                                                    class="form-label fw-bold">Cabang</label>
                                                <select class="form-select" name="cabang" id="floatingSelectGrid">
                                                    <option selected> -- </option>
                                                    <option value="1">MLPTI Bekasi</option>
                                                    <option value="2">MLPTI Tangerang</option>
                                                </select>
                                            </div>
                                    </div>
                                    <div class="button d-flex justify-content-end">
                                        <a type="submit" class="btn btn-bg-transparent"
                                            data-bs-dismiss="modal">Close</a>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- edit modal --}}
    {{-- <div class="modal fade" id="editdata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-body">
                        <h3 class="text-center mb-4">Edit Orderan</h3>
                        <div class="row justify-content-center">
                            <div class="col-8">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="/updatedata/{{ $data->id }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <p class="fs-2">Paket Kuota</p>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label fw-bold">Paket
                                                    Kuota</label>
                                                <select class="form-select" name="paketkuota" id="floatingSelectGrid">
                                                    <option selected>{{ $data->paketkuota }}</option>
                                                    <option value="1">Kuota Cuci</option>
                                                    <option value="2">Kuota Setrika</option>
                                                    <option value="3">Kuota Cuci Setrika</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="exampleInputEmail1"
                                                            class="form-label fw-bold">Berat</label>
                                                        <input type="text" name="berat" class="form-control"
                                                            id="exampleInputEmail1" aria-describedby="emailHelp"
                                                            value="{{ $data->berat }}">
                                                    </div>
                                                    <div class="col">
                                                        <label for="exampleInputEmail1"
                                                            class="form-label fw-bold">Satuan Unit</label>
                                                        <select class="form-select"class id="floatingSelectGrid">
                                                            <option selected>{{ $data->paketkuota }}</option>
                                                            <option value="1">Ons</option>
                                                            <option value="2">Kg</option>
                                                            <option value="3">Kwintal</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label fw-bold">Harga</label>
                                                <input type="text" name="harga" class="form-control"
                                                    id="exampleInputEmail1" aria-describedby="emailHelp"
                                                    value="{{ $data->harga }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1"
                                                    class="form-label fw-bold">Cabang</label>
                                                <select class="form-select" name="cabang" id="floatingSelectGrid">
                                                    <option selected>{{ $data->cabang }}</option>
                                                    <option value="1">MLPTI Bekasi</option>
                                                    <option value="2">MLPTI Tangerang</option>
                                                </select>
                                            </div>
                                    </div>
                                    <div class="button d-flex justify-content-end">
                                        <button type="submit" class="btn btn-bg-transparent">Close</button>
                                        <button type="submit" class="btn btn-success">Update</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- detail modal --}}
    <div class="modal fade" id="detaildata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-body">
                        <h3 class="text-center mb-4">Detail Orderan</h3>
                        <div class="row justify-content-center">
                            <div class="col-8">
                                <div class="card">
                                    <div class="card-body">
                                        @if ($row->id)
                                            <form action="/insertdata{{ $row->id }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <p class="fs-2">Paket Kuota</p>
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label fw-bold">Paket
                                                        Kuota</label>
                                                    <span>{{ $row->paketkuota }}</span>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="row">
                                                        <div class="col">
                                                            <label for="exampleInputEmail1"
                                                                class="form-label fw-bold">Berat</label>
                                                            <span>{{ $row->berat }} kg</span>
                                                        </div>
                                                        <div class="col">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1"
                                                        class="form-label fw-bold">Harga</label>
                                                    <span>{{ $row->harga }}</span>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1"
                                                        class="form-label fw-bold">Cabang</label>
                                                    <span>{{ $row->cabang }}</span>
                                                </div>

                                                <div class="button d-flex justify-content-end">
                                                    <a type="submit" class="btn btn-bg-transparent"
                                                        data-bs-dismiss="modal">Close</a>
                                                </div>
                                            </form>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script>
        document.getElementById('refresh-button').addEventListener('click', function() {
            // Memuat ulang halaman saat tombol "Refresh" diklik
            location.reload();
        });
    </script>
</body>

</html>
