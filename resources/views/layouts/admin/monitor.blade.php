<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/css/admin.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
       @include('layouts/admin/side')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
               @include('layouts/admin/topbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

<div class="row" >
    <div class="col-md-12">
<div class="card">
    <div class="card-header"></div>


<div class="card">
    <div class="container">
        <h1>Monitor Barang</h1>
    
        <div class="filter">
            <label for="filter_type">Filter:</label>
            <select id="filter_type" onchange="filterTable()">
                <option value="all">Semua</option>
                <option value="masuk">Barang Masuk</option>
                <option value="keluar">Barang Keluar</option>
            </select>
        </div>
    
      
        <table class="table" id="table_masuk">
            <thead>
                <h2 id="judul_masuk">Barang Masuk</h2>
                <tr>
                    <th>Id Produk</th>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                    <th>Tanggal Masuk</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->nama_produk }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ $product->created_at }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div id="pagination_masuk">
            {{ $products->links() }}
        </div>
    
        <table class="table" id="table_keluar">
         
        
            <thead>
                <h2 id="judul_keluar">Barang Keluar</h2>
                <tr>
                    <th>Id Produk</th>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                    <th>Tanggal Keluar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produks as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->nama_produk }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ $product->created_at }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div id="pagination_keluar">
            {{ $produks->links() }}
        </div>
    </div>
    
</div>
        </div>
    </div>
</div>

</div>
    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('layouts/admin/footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/js/demo/chart-area-demo.js"></script>
    <script src="/js/demo/chart-pie-demo.js"></script>

</body>

</html>  
<script>
    // Fungsi untuk menampilkan tabel sesuai dengan filter yang dipilih
    function filterTable() {
        var filterType = document.getElementById("filter_type").value;

        if (filterType === "masuk") {
            document.getElementById("table_masuk").style.display = "table";
            document.getElementById("pagination_masuk").style.display = "block";
            document.getElementById("table_keluar").style.display = "none";
            document.getElementById("pagination_keluar").style.display = "none";
            document.getElementById("judul_masuk").style.display = "block";
            document.getElementById("judul_keluar").style.display = "none";
        } else if (filterType === "keluar") {
            document.getElementById("table_masuk").style.display = "none";
            document.getElementById("pagination_masuk").style.display = "none";
            document.getElementById("table_keluar").style.display = "table";
            document.getElementById("pagination_keluar").style.display = "block";
            document.getElementById("judul_masuk").style.display = "none";
            document.getElementById("judul_keluar").style.display = "block";
        } else {
            document.getElementById("table_masuk").style.display = "table";
            document.getElementById("pagination_masuk").style.display = "block";
            document.getElementById("table_keluar").style.display = "table";
            document.getElementById("pagination_keluar").style.display = "block";
            document.getElementById("judul_masuk").style.display = "block";
            document.getElementById("judul_keluar").style.display = "block";
        }
    }
</script>
