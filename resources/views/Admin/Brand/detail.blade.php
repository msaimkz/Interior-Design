@extends('Admin.Layout.master')

@section('content')
    <div class="content">
        <div class="title mt-3">
            <h1 class="mb-2">Brand Detail</h1>
            <span class="dashboard-span">
                <a href="{{ route('Admin.dashboard.index') }}">Dashborads <i class="ml-2 fa-solid fa-angles-right"></i>
                </a>
                <a href="{{ route('Admin.brand') }}">Brand <i class="ml-2 fa-solid fa-angles-right"></i>
                </a>
                Brand Detail
            </span>
        </div>

        <div class="brand-main-container">
            <div class="admin-main-detail-container">
                <div class="admin-main-detail-card-container">
                    
                    <div class="admin-main-detail-card" style="--i:215,124,257;">
                        <div class="admin-main-card-icon-box">
                            <div class="admin-main-card-icon">
                                <i class="fa-solid fa-couch"></i>
                            </div>
                        </div>
                        <div class="admin-main-card-text-box">
                            <span>Total Products</span>
                            <h3>14,732</h3>
                        </div>
                    </div>
                    <div class="admin-main-detail-card" style="--i:84,109,254;">
                        <div class="admin-main-card-icon-box">
                            <div class="admin-main-card-icon">
                                <i class="fa-solid fa-couch"></i>
                            </div>
                        </div>
                        <div class="admin-main-card-text-box">
                            <span>Total Selling Products</span>
                            <h3>14,732</h3>
                        </div>
                    </div>
                </div>
                <div class="admin-main-detail-chart-container">
                    <div class="admin-main-detail-chart-card">
                        <div class="admin-main-detail-chart-card-header">
                            <h3>Brand Product Summary</h3>
                        </div>
                        <div class="admin-main-detail-chart-card-body">
                            <canvas id="CategorySummary"></canvas>
                        </div>
                    </div>
                    <div class="admin-main-detail-chart-card">
                        <div class="admin-main-detail-chart-card-header">
                            <h3>Top Selling Product</h3>
                        </div>
                        <div class="admin-main-detail-chart-card-body">
                            <canvas id="TopSellingSubCaregory"></canvas>
                        </div>
                    </div>

                </div>
                <div class="admin-detail-bottom-container">
                    <div class="admin-detail-about-card">
                        <div class="admin-detail-about-card-header">
                            <div class="admin-detail-about-card-header-first-child">
                                <img src="{{ asset('Asset/Admin/img/table-img.jpg') }}" alt="">
                                <div>
                                    <h3>Kitchen</h3>
                                </div>
                            </div>
                            <div class="admin-detail-about-card-header-second-child">
                                <a href="{{ route('Admin.brand.edit') }}">
                                    <i class="ri-edit-line"></i>
                                    <span>Edit</span>
                                </a>
                            </div>
                        </div>
                        <div class="admin-detail-about-card-body">
                            <h3>About Brand</h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus ex nesciunt numquam
                                beatae laborum excepturi reiciendis nemo architecto quis, delectus sequi fuga! Maxime quas
                                repudiandae distinctio voluptatem minima quos error.
                            </p>
                        </div>

                    </div>
                    <div class="admin-detail-product-table">
                        <div class="admin-detail-product-table-header">
                            <h3>Most Selling Products</h3>
                        </div>
                        <div class="admin-detail-product-table-body">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Category</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="product-name">
                                                <img src="{{ asset('Asset/Admin/img/table-img.jpg') }}" alt="">
                                                <h3>Dinner Table</h3>
                                            </div>
                                        </td>
                                        <td>
                                            Kitchen
                                        </td>
                                        <td>
                                            Rs: 30,000
                                        </td>
                                        <td>
                                            <span class="product-status-badge product-status-success">Active</span>
                                        </td>
                                        <td>
                                            <a href="">
                                                <i class="fa-regular fa-eye"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="product-name">
                                                <img src="{{ asset('Asset/Admin/img/table-img.jpg') }}" alt="">
                                                <h3>Dinner Table</h3>
                                            </div>
                                        </td>
                                        <td>
                                            Kitchen
                                        </td>
                                        <td>
                                            Rs: 30,000
                                        </td>
                                        <td>
                                            <span class="product-status-badge product-status-success">Active</span>
                                        </td>
                                        <td>
                                            <a href="">
                                                <i class="fa-regular fa-eye"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="product-name">
                                                <img src="{{ asset('Asset/Admin/img/table-img.jpg') }}" alt="">
                                                <h3>Dinner Table</h3>
                                            </div>
                                        </td>
                                        <td>
                                            Kitchen
                                        </td>
                                        <td>
                                            Rs: 30,000
                                        </td>
                                        <td>
                                            <span class="product-status-badge product-status-success">Active</span>
                                        </td>
                                        <td>
                                            <a href="">
                                                <i class="fa-regular fa-eye"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="product-name">
                                                <img src="{{ asset('Asset/Admin/img/table-img.jpg') }}" alt="">
                                                <h3>Dinner Table</h3>
                                            </div>
                                        </td>
                                        <td>
                                            Kitchen
                                        </td>
                                        <td>
                                            Rs: 30,000
                                        </td>
                                        <td>
                                            <span class="product-status-badge product-status-success">Active</span>
                                        </td>
                                        <td>
                                            <a href="">
                                                <i class="fa-regular fa-eye"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('Asset/Admin/js/Brand/detail.js') }}"></script>
@endsection
