<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Star Admin|
        Login
    </title>
    @yield('script')
    <style>
      .error
      {
        color: red;
      }
    
    </style>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{url('assets/vendors/feather/feather.css')}}">
    <link rel="stylesheet" href="{{url('assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{url('assets/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/vendors/typicons/typicons.css')}}">
    <link rel="stylesheet" href="{{url('assets/vendors/simple-line-icons/css/simple-line-icons.css')}}">
     <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{url('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/js/select.dataTables.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{url('assets/images/favicon.png')}}" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>
  <body>
   <div class="container">
    <div class="row">
    <div class="main">
       
        <div class="container-fluid h-100">
         
         <div class="row justify-content-center align-items-center h-100">
         
         <div class="col col-sm-8 col-md-8 col-lg-6 col-xl-4">
           
                <br>
                
                 <a class="navbar-brand brand-logo">
                    <img src="{{url('assets/images/logo.svg')}}" alt="logo" />
                  </a>
                 <br>
          <br>
           <div class="col-12 grid-margin stretch-card"> 
                <div class="card">
                 
                  <div class="card-body">
                    <h4 class="card-title">Login</h4>
                    <form class="forms-sample" name="login" method="POST" id="loginform">
                      @csrf
                      <div class="form-group">
                        <label for="exampleInputEmail3">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                        <span class="error" id="email-error"></span>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                        <span class="error" id="password-error"></span>
                      </div>
                      <div id="errorMessage" style="color: red;"></div>
                <div class="form-group">
                  <a href="#!" class="form-group">Forgot password?</a>
                  </div>
                      <div class="form-group">
                         <p class="form-group">Don't have an account?
                        <a href="{{route('register')}}" class="form-group">Register</a></p>
                      </div>
                      <button type="submit" class="btn btn-primary me-2" name="login" id="login">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
              
        </div>
         </div>
     </div>
    </div>
</div>
  <!-- partial:partials/_navbar.html --> 

<!-- main-panel ends -->

<!-- page-body-wrapper ends -->

<!-- container-scroller <script src="{{url('assets/vendors/js/vendor.bundle.base.js')}}"></script>-->
<!-- plugins:js -->
<script src="{{url('assets/js/custom/login.js')}}"></script>
    
<script src="{{url('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<!-- End plugin js for this page -->
<!-- inject:js -->
<!-- <script src="assets/js/Chart.roundedBarCharts.js"></script> -->
<!-- End custom js for this page-->
</body>
</html>