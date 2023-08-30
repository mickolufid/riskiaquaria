<!-- app -->
@extends('layouts.app')

@section('title')
Tambah Data Supplier | Riski Aquaria
@endsection

@section('content')
<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- header -->
            @include('layouts.header')

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-6">
                        <div class="card p-4">
                            <h3 class="text-center">Tambah Detail Supplier</h3>
                            <hr>
                            <form class="mt-3" action="{{ route('supplier.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                
                                <div class="form-group">
                                <label for="exampleInputEmail1">Nama Supplier</label>
                                            <input type="text" class="form-control" name="clientName">
                                        </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">No HP / Whatsapp</label>
                                            <input type="number" class="form-control" name="clientContact">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email</label>
                                            <input type="email" class="form-control" name="clientEmail">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                  <label for="">Alamat Supplier</label>
                                  <textarea class="form-control" name="clientAddress" id="" rows="3"></textarea>
                                </div>

                                <div class="text-right">
                                    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
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


<!-- app -->