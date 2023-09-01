@extends('layouts.app')

@section('title')
Login Pricelist | Riski Aquaria
@endsection

@section('content')
<style>
    body{
background: #c9ccd1; 
}
.form-style input{
	border:0;
	height:50px;
	border-radius:0;
border-bottom:1px solid #ebebeb;	
}
.form-style input:focus{
border-bottom:1px solid #007bff;	
box-shadow:none;
outline:0;
background-color:#ebebeb;	
}

button{
height:50px;	
}

</style>
<script src="https://use.fontawesome.com/f59bcd8580.js"></script>
<div class="container">
<div class="row m-5 no-gutters shadow-lg">
<div class="col-md-6 d-none d-block">
<img src="{{ asset('img/img_login.png') }}" style="width: 100%;">
</div>
<div class="col-md-6 bg-white p-5">
<h3 class="pb-3 text-center">Login Form</h3>
<div class="form-style">
<form action="/dashboard/">
  <div class="form-group pb-3">    
    <input type="email" placeholder="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">   
  </div>
  <div class="form-group pb-3">   
    <input type="password" placeholder="Password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="d-flex align-items-center justify-content-between">
<div><a href="#">Lupa Password?</a></div>
</div>
   <div class="pb-2">
  <button type="submit" class="btn btn-primary w-100 font-weight-bold mt-2">Login</button>
   </div>
</form>
</div>

</div>
</div>
</div>
@endsection