<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin|
        Login
    </title>
    @yield('script')
    <!-- plugins:css -->
    <script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>
  <style>
    .error
    {
      color: red;
    }

  </style>
    <link rel="stylesheet" href="{{url('assets/vendors/feather/feather.css')}}">
    <link rel="stylesheet" href="{{url('assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{url('assets/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/vendors/typicons/typicons.css')}}">
    <link rel="stylesheet" href="{{url('assets/vendors/simple-line-icons/css/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{url('assets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{url('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{url('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/js/select.dataTables.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{url('assets/images/favicon.png')}}" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 
  </head>
  <body>
   <div class="container">
    <div class="row">
    <div class="main">
       
        <div class="container-fluid h-100">
         
         <div class="row justify-content-center align-items-center">
         
         <div class="col col-sm-12 col-md-6 col-xl-5">
           
                <br>
                
                 <a class="navbar-brand brand-logo">
                    <img src="{{url('assets/images/logo.svg')}}" alt="logo" />
                  </a>
                 <br>
          <br>
        
           <div class="col-12"> 
                <div class="card">
                  <div class="card-body">
               
                    <h4 class="card-title">Register</h4>
                    <form class="forms-sample" name="register" method="POST" id="registerform">
                      @csrf
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="username">
                     
                         <span class="error" id="name-error"></span>
                      </div>
                      <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                        <span class="error" id="email-error"></span>
                      </div>
                      <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                        <span class="error" id="password-error"></span>
                      </div>
                      <div class="form-group">
                        <label for="password">Re-Password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="repassword" placeholder="Password">
                       
                        <span class="error" id="password-confirmation-error"></span>
                      </div>
                      <div class="form-group">
                         <p class="form-group">Don't have an account?
                        <a href="{{route('login')}}" class="form-group">Login</a>&nbsp;&nbsp;
                        <a href="#!" class="form-group">Forgot password?</a>
                         </p>
                        </div>
                      <button type="submit" class="btn btn-primary me-2" name="register" id="register">Submit</button>
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

<!-- page-body-wrapper ends -->

<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{url('assets/js/custom/login.js')}}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{url('assets/vendors/chart.js/chart.umd.js')}}"></script>
<script src="{{url('assets/vendors/progressbar.js/progressbar.min.js')}}"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{url('assets/js/off-canvas.js')}}"></script>
<script src="{{url('assets/js/template.js')}}"></script>
<script src="{{url('assets/js/settings.js')}}"></script>
<script src="{{url('assets/js/hoverable-collapse.js')}}"></script>
<script src="{{url('assets/js/todolist.js')}}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{url('assets/js/jquery.cookie.js')}}" type="text/javascript"></script>
<script src="{{url('assets/js/dashboard.js')}}"></script>
<!-- <script src="assets/js/Chart.roundedBarCharts.js"></script> -->
<!-- End custom js for this page-->
</body>
</html>