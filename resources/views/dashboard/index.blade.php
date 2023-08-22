<!-- app -->
@extends('layouts.app')

@section('title')
Pricelist | Riski Aquaria
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
            <div class="container">

                <!-- Content Row -->
                <div class="row">

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-3">
                        <div class="card shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="box col mr-2">
                                        <a href="pricelist/" class="text-decoration-none text-dark">
                                            <img src="../img/pricelist.png" alt="" class="mx-auto d-block">
                                            <h4 class="text-center">PRICELIST</h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-3">
                        <div class="card shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <a href="stock/" class="text-decoration-none text-dark">
                                            <img src="../img/stockproduct.png" alt="" class="mx-auto d-block">
                                            <h4 class="text-center">STOCK PRODUCT</h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-3">
                        <div class="card shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <a href="supplier/" class="text-decoration-none text-dark">
                                            <img src="../img/listsupplier.png" alt="" class="mx-auto d-block">
                                            <h4 class="text-center">LIST SUPPLIER</h4>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-3">
                        <div class="card shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <a href="client/" class="text-decoration-none text-dark">
                                            <img src="../img/listclient.png" alt="" class="mx-auto d-block">
                                            <h4 class="text-center">LIST CLIENT</h4>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-3">
                        <div class="card shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <a href="invoice/" class="text-decoration-none text-dark">
                                            <img src="../img/invoicedata.png" alt="" class="mx-auto d-block">
                                            <h4 class="text-center">INVOICE</h4>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-3">
                        <div class="card shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <a href="loan/" class="text-decoration-none text-dark">
                                            <img src="../img/loandata.png" alt="" class="mx-auto d-block">
                                            <h4 class="text-center">LOAN</h4>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-3">
                        <div class="card shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <a href="report/" class="text-decoration-none text-dark">
                                            <img src="../img/business_report.png" alt="" class="mx-auto d-block">
                                            <h4 class="text-center">REPORT</h4>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <!-- Content Row -->

            </div>
            <!-- /.container-fluid -->

            <!-- footer -->
            @include('layouts.footer')
            @endsection
            <!-- app -->