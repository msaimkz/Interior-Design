@extends('Admin.master')

@section('content')
<div class="content">

<div class="sale-dashboard-card-container">
    <div class="sale-dashboard-card">
        <div class="sale-dashboard-card-top">
            <div class="sale-card-icon"></div>
            
        </div>
        <div class="sale-dashboard-card-bottom"></div>

    </div>
</div>
    
</div>
@endsection
@section('script')
<script src="{{ asset('Asset/Admin/js/Dashboard/sale.js') }}"></script>
@endsection