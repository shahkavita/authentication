@include('layout.header')
@include('layout.sidebar')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-sm-12">
            @yield('content')
        </div>
      </div>

    </div>
  
    <!-- content-wrapper ends -->
 @include('layout.footer')
 