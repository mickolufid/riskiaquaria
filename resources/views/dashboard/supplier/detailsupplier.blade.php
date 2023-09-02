   <!-- app -->
   @extends('layouts.app')

   @section('title')
   Detail Supplier | Riski Aquaria
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
                               <h3 class="text-center">Detail Supplier</h3>
                               <hr>
                               <form class="mt-3" method="POST" enctype="multipart/form-data">
                                @csrf
                                
                                <div class="form-group">
                                <label for="exampleInputEmail1">Nama Supplier</label>
                                            <input type="text" value="{{ $supplier->clientName }}" class="form-control" name="clientName" readonly>
                                        </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">No HP / Whatsapp</label>
                                            <input type="number" value="{{ $supplier->clientContact }}" class="form-control" name="clientContact" readonly>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email</label>
                                            <input type="email" value="{{ $supplier->clientEmail }}" class="form-control" name="clientEmail" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                  <label for="">Alamat Supplier</label>
                                  <textarea class="form-control" name="clientAddress" id="" rows="3" readonly>{{ $supplier->clientAddress }}</textarea>
                                </div>

                                <div class="text-right">
                                    <a href="/dashboard/supplier" class="btn btn-md btn-danger">KEMBALI</a>
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