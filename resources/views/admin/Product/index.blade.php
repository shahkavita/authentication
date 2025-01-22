@extends('layout.main')
@section('title')
Product
@endsection
@section('content')
@include('admin.Product.productmodel')
<button type="button" id="addproduct" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">New Product</button>
<br>
<br>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Product </h4>
          
            <div class="table-responsive pt-4">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th> # </th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody id="producttable">
                 
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

@endsection
@section('script')
<script src="{{asset('assets/js/custom/product.js')}}"></script>

@endsection