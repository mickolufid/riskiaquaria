@extends('layouts.app')

@section('title')
Login Pricelist | Riski Aquaria
@endsection

@section('content')
<style>
    .bg-login {
    background-image: url("../img/bg-login.jpg");
    background-size: cover;
}

.wrapper .wrapper-login {
    padding: 0 20px 0 20px;
}

.main .main-login {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

.row .row-login {
    width: 900px;
    height: 550px;
    border-radius: 10px;
    box-shadow: 5px 5px 10px 1px rgba(0, 0, 0, 0.2);
}
</style>
<div class="container-fluid bg-login" >
    <div class="wrapper wrapper-login" >
        <div class="container main main-login">
            <!-- Outer Row -->
            <div class="row justify-content-center">
                <div class="card o-hidden border-0 shadow-lg">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row row-login">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900" style="margin-top: 90px;">Welcome !!</h1>
                                        <p style="margin-top: 18px;">Login to your account</p>
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <a href="dashboard/" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </a>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>



    </div>
</div>

@endsection