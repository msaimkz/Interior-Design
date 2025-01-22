@extends('Admin.Layout.master')

@section('content')
    <div class="content">
        <div class="title mt-3">
            <h1 class="mb-2">Products Analytics</h1>
            <span class="dashboard-span">
                <a href="{{ route('Admin.dashboard.index') }}">Dashborads <i class="ml-2 fa-solid fa-angles-right"></i>
                </a>
                Products Analytics
            </span>
        </div>
        <div class="product-dashboard-card-container">
            <div class="product-dashboard-card">
                <div class="product-dashboard-card-top">
                    <div class="product-card-icon" style="--i:84, 109, 254;">
                        <i class="fa-solid fa-couch"></i>
                    </div>
                </div>
                <div class="product-dashboard-card-bottom">
                    <h4>Total Selling Products</h4>
                    <div>
                        <h2>872</h2>
                    </div>
                </div>
            </div>
            <div class="product-dashboard-card">
                <div class="product-dashboard-card-top">
                    <div class="product-card-icon" style="--i:215, 124, 247;">
                        <i class="fa-solid fa-couch"></i>
                    </div>
                </div>
                <div class="product-dashboard-card-bottom">
                    <h4>Total Products</h4>
                    <div>
                        <h2>872</h2>
                    </div>
                </div>
            </div>
            <div class="product-dashboard-card">
                <div class="product-dashboard-card-top">
                    <div class="product-card-icon" style="--i:12, 215, 177;">
                        <i class="fa-solid fa-layer-group"></i>
                    </div>
                </div>
                <div class="product-dashboard-card-bottom">
                    <h4>Total Categories</h4>
                    <div>
                        <h2>872</h2>
                    </div>
                </div>
            </div>
            <div class="product-dashboard-card">
                <div class="product-dashboard-card-top">
                    <div class="product-card-icon" style="--i:254, 124, 88 ;">
                        <i class="fa-solid fa-layer-group"></i>
                    </div>
                </div>
                <div class="product-dashboard-card-bottom">
                    <h4>Total Brands</h4>
                    <div>
                        <h2>456</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-dashboard-second-container">
            <div class="product-table-container">
                <div class="product-table-header">
                    <h2>Recent Selling Products</h2>
                    <div class="dropdown">
                        <span class="btn btn-primary dropdown-toggle drop-down-span" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">Sort By</span>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">This Week</a></li>
                            <li><a class="dropdown-item" href="#">Last Week</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                        </ul>
                    </div>
                </div>
                <div class="product-table-body">
                    <table>
                        <thead>
                            <tr>
                                <th>Sno</th>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Category</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01256</td>
                                <td>
                                    <img src="{{ asset('Asset/Admin/img/men-avatar.jpg') }}" class="thumbnail"
                                        alt="">
                                    Bed
                                </td>
                                <td>
                                    PKR 10,000
                                </td>
                                <td>
                                    <span class="badge p-2" style="background-color: #56e6cb69; color: #0cd7b1;">View
                                        Furniture</span>
                                </td>
                            </tr>
                            <tr>
                                <td>01256</td>
                                <td>
                                    <img src="{{ asset('Asset/Admin/img/men-avatar.jpg') }}" class="thumbnail"
                                        alt="">
                                    Bed
                                </td>
                                <td>
                                    PKR 10,000
                                </td>
                                <td>
                                    <span class="badge p-2" style="background-color: #56e6cb69; color: #0cd7b1;">View
                                        Furniture</span>
                                </td>
                            </tr>
                            <tr>
                                <td>01256</td>
                                <td>
                                    <img src="{{ asset('Asset/Admin/img/men-avatar.jpg') }}" class="thumbnail"
                                        alt="">
                                    Bed
                                </td>
                                <td>
                                    PKR 10,000
                                </td>
                                <td>
                                    <span class="badge p-2" style="background-color: #56e6cb69; color: #0cd7b1;">View
                                        Furniture</span>
                                </td>
                            </tr>
                            <tr>
                                <td>01256</td>
                                <td>
                                    <img src="{{ asset('Asset/Admin/img/men-avatar.jpg') }}" class="thumbnail"
                                        alt="">
                                    Bed
                                </td>
                                <td>
                                    PKR 10,000
                                </td>
                                <td>
                                    <span class="badge p-2" style="background-color: #56e6cb69; color: #0cd7b1;">View
                                        Furniture</span>
                                </td>
                            </tr>
                            <tr>
                                <td>01256</td>
                                <td>
                                    <img src="{{ asset('Asset/Admin/img/men-avatar.jpg') }}" class="thumbnail"
                                        alt="">
                                    Bed
                                </td>
                                <td>
                                    PKR 10,000
                                </td>
                                <td>
                                    <span class="badge p-2" style="background-color: #56e6cb69; color: #0cd7b1;">View
                                        Furniture</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="category-chart">
                <div class="category-chart-header">
                    <h2>Top Selling Categories</h2>
                </div>
                <div class="category-chart-body">
                    <canvas id="CategoryChart"></canvas>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('script')
 
 <script src="{{ asset('Asset/Admin/js/Dashboard/product.js') }}"></script>
@endsection
