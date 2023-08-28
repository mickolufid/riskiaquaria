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
                               <h3 class="text-center">Detail Pricelist</h3>
                               <hr>
                               <form class="mt-3">
                                   <div class="row">
                                       <div class="col-6">
                                           <div class="form-group">
                                               <label for="exampleInputEmail1">Code</label>
                                               <input type="text" value="{{ $pricelist->productCode }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
                                           </div>
                                       </div>
                                       <div class="col-6">
                                           <div class="form-group">
                                               <label for="exampleInputEmail1">Category</label>
                                               <input type="text" value="{{ $pricelist->productCategory }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="form-group">
                                       <label for="exampleInputEmail1">Common Name</label>
                                       <input type="text" value="{{ $pricelist->productCommontName }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
                                   </div>
                                   <div class="form-group">
                                       <label for="exampleInputEmail1">Scientific Name</label>
                                       <input type="text" value="{{ $pricelist->productScientificName }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
                                   </div>
                                   <div class="form-group">
                                       <label for="exampleInputEmail1">Indonesian Name</label>
                                       <input type="text" value="{{ $pricelist->productIndonesianName }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
                                   </div>
                                   <div class="row">
                                       <div class="col-6">
                                           <div class="form-group">
                                               <label for="exampleInputEmail1">Harga</label>
                                               <input type="text" value="Rp {{ $pricelist->productPrice }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
                                           </div>
                                       </div>
                                       <div class="col-6">
                                           <div class="form-group">
                                               <label for="exampleInputEmail1">Size</label>
                                               <input type="text" value="Small" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
                                           </div>
                                       </div>
                                   </div>
                                   <div>
                                       <img src="../../img/product/ikan1.jpg" width="30%" alt="">
                                   </div>
                                   <br>
                                   <div class="text-right">
                                       <a href="editPricelist.php" class="btn btn-warning">Edit</a>
                                       <a href="#" data-toggle="modal" data-target="#hapusModal" class="btn btn-danger">Hapus</a>

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

         
   <!-- footer -->
   @include('layouts.footer')
   @endsection


   <!-- app -->