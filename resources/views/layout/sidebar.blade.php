<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    @php
    $routeName = request()->route()->getName();
   //echo $routeName; 
   @endphp
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="{{$routeName == 'dashboard'? 'nav-item':''}}">
          <a class="nav-link" href="{{route('dashboard')}}" >
            <i class="mdi mdi-grid-large menu-icon"></i>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>
        <li class="nav-item nav-category">Product</li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <i class="menu-icon mdi mdi-floor-plan"></i>
            <span class="menu-title">Product</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
              <li class="{{$routeName == 'product'? 'nav-item': ''}}"> <a class="nav-link" href="{{route('product')}}">Product</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Category</a></li>
             </ul>
          </div>
        </li> 
      </ul>
    </nav>
    <!-- partial -->
 