<!-- app -->
@extends('layouts.app')

@section('title')
Detail Pricelist| Riski Aquaria
@endsection


@section('content')
<!-- Page Wrapper -->
<div id="wrapper">

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="container-fluid navbar navbar-expand topbar mb-5 static-top shadow">

            <a class="navbar-brand" href="#"><img src="../../img/logo.png" alt="" width="20%"><span>Riski Application</span></a>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">


                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-white small">Admin</span>
                        <img class="img-profile rounded-circle" src="../../img/undraw_profile.svg">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profile
                        </a>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>

            </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <div class="card p-4">
                        <h3 class="text-center">Detail Pricelist</h3>
                        <hr>
                        <form class="mt-3">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Code</label>
                                        <input type="text" value="RA516M" class="form-control"
                                            id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Category</label>
                                        <input type="text" value="Anemones" class="form-control"
                                            id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Common Name</label>
                                <input type="text" value="Red Fire Anemon" class="form-control"
                                    id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Scientific Name</label>
                                <input type="text" value="Phyllodiscus semoni (Anemon)" class="form-control"
                                    id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Indonesian Name</label>
                                <input type="text" value="Anemon Api" class="form-control"
                                    id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Harga</label>
                                        <input type="text" value="200,000" class="form-control"
                                            id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Size</label>
                                        <input type="text" value="Small" class="form-control"
                                            id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <img src="../../img/product/ikan1.jpg" width="30%" alt="">
                            </div>
                            <br>
                            <div class="text-right">
                                <a href="editPricelist.php" class="btn btn-warning">Edit</a>
                                <a href="#" data-toggle="modal" data-target="#hapusModal"
                                    class="btn btn-danger">Hapus</a>

                            </div>

                        </form>
                    </div>
                </div>
                <div class="col-3"></div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Riski Aquaria 2023</span>
            </div>
        </div>
    </footer>
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
<div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Are you sure? </h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">You won’t be able to revert this!</div>
        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-danger" href="index.php">Hapus Data</a>
        </div>
    </div>
</div>
</div>

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
            <a class="btn btn-danger" href="login.html">Logout</a>
        </div>
    </div>
</div>
</div>