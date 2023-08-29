   <!-- app -->
   @extends('layouts.app')

   @section('title')
   Tambah Data Pricelist | Riski Aquaria
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
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-white small">Admin</span>
                        <img class="img-profile rounded-circle" src="../../img/undraw_profile.svg">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
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
                        <h3 class="text-center">Edit Detail Pricelist</h3>
                        <hr>
                        <form class="mt-3" action="{{ route('pricelist.update', $pricelist->id) }}" method="POST" enctype="multipart/form-data">
                           @csrf
                           @method('PUT')
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Code</label>
                                        <input type="text" value="{{ old('productCode', $pricelist->productCode) }}" class="form-control" name="productCode">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Category</label>
                                        <input type="text" value="{{ old('productCategory', $pricelist->productCategory) }}" class="form-control" name="productCategory">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Common Name</label>
                                <input type="text" value="{{ old('productCommontName', $pricelist->productCommontName) }}" class="form-control" name="productCommontName">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Scientific Name</label>
                                <input type="text" value="{{ old('productScientificName', $pricelist->productScientificName) }}" class="form-control" name="productScientificName">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Indonesian Name</label>
                                <input type="text" value="{{ old('productIndonesianName', $pricelist->productIndonesianName) }}" class="form-control" name="productIndonesianName">
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Harga</label>
                                        <input type="text" value="Rp {{ old('productPrice', $pricelist->productPrice) }}" class="form-control" name="productPrice">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Size</label>
                                        <input type="text" value="{{ old('productSize', $pricelist->productSize) }}" class="form-control" name="productSize">
                                    </div>
                                </div>
                            </div>

                            <label for="exampleInputEmail1">Edit Gambar</label>
                            <div>
                                <img src="{{ asset('storage/pricelist/'.$pricelist->productImage) }}" width="30%" alt="">
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group mt-3">
                                    <input type="file" name="productImage" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6"></div>
                            </div>

                            <div class="text-right">
                            <button type="submit" class="btn btn-md btn-primary">UPDATE DATA</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>
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

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

   <!-- footer -->
@include('layouts.footer')
@endsection

