@extends('Admin.master')

@section('content')
<div class="content">

    <div class="sale-main-heading">
        <h2>User Statistics</h2>
        <div class="sale-sub-heading">
            <h4>
                <a href="{{ route('Admin.dashboard.index') }}"> Dashboard</a>
               
            </h4>
            <i class="fa-solid fa-angles-right"></i>
            <h4>User Statistics</h4>
        </div>
    </div>

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