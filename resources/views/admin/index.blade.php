@extends('layout.main')
@section('title')
Dashboard
@endsection
@section('username')
@if(Auth::check())
<h1 class="welcome-text">Welcome &nbsp;<span class="text-black fw-bold">{{ Auth::user()->name }}</span></h1>
@endif
@endsection
@section('logout')
<a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My Profile <span class="badge badge-pill badge-danger">1</span></a>
<a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-message-text-outline text-primary me-2"></i> Messages</a>
<a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-calendar-check-outline text-primary me-2"></i> Activity</a>
<a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-help-circle-outline text-primary me-2"></i> FAQ</a>
<a class="dropdown-item" href="{{ route('logout') }}" id="logout">
    <i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
@endsection
@section('content')

@endsection    
