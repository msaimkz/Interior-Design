@extends('Admin.master')

@section('content')
<div class="content">
    <div class="title">
        <h1>Hello there, Muhammad Saim</h1>
        <span>Let's make today a productive one!</span>
    </div>


    <div class="dashboard-card-container">
        <div class="dashboard-card">
            <div class="dashboard-card-inner">
                <div class="inner-text">
                    <span>Sales</span>
                    <h2>32,567</h2>
                </div>
                <div class="inner-icon" style="--i: 84, 109, 254;">
                    <i class="fa-solid fa-bag-shopping"></i>
                </div>

            </div>
            <p class="percantage-container">
                <span class="percentage-arrow">
                    <i class="fa-solid fa-arrow-trend-up"></i>
                    0.45%
                </span>
                <span class="percentage-month">
                    Since Last Month
                </span>
            </p>

        </div>
        <div class="dashboard-card">
            <div class="dashboard-card-inner">
                <div class="inner-text">
                    <span>Profit</span>
                    <h2>$567</h2>
                </div>
                <div class="inner-icon" style="--i: 215, 124, 247 ;">
                    <i class="fa-solid fa-wallet"></i>
                </div>

            </div>
            <p class="percantage-container">
                <span class="percentage-arrow">
                    <i class="fa-solid fa-arrow-trend-up"></i>
                    0.25%
                </span>
                <span class="percentage-month">
                    Since Last Month
                </span>
            </p>

        </div>
        <div class="dashboard-card">
            <div class="dashboard-card-inner">
                <div class="inner-text">
                    <span>Revenue</span>
                    <h2>$2567</h2>
                </div>
                <div class="inner-icon" style="--i: 12, 215, 177 ;">
                    <i class="fa-solid fa-dollar-sign"></i>
                </div>

            </div>
            <p class="percantage-container">
                <span class="percentage-arrow">
                    <i class="fa-solid fa-arrow-trend-up"></i>
                    0.15%
                </span>
                <span class="percentage-month">
                    Since Last Month
                </span>
            </p>

        </div>
        <div class="dashboard-card">
            <div class="dashboard-card-inner">
                <div class="inner-text">
                    <span>Orders</span>
                    <h2>555</h2>
                </div>
                <div class="inner-icon" style="--i: 254, 124, 88 ;">
                    <i class="fa-solid fa-boxes-packing"></i>
                </div>

            </div>
            <p class="percantage-container">
                <span class="percentage-arrow danger">
                    <i class="fa-solid fa-arrow-trend-down"></i>
                    0.45%
                </span>
                <span class="percentage-month">
                    Since Last Month
                </span>
            </p>

        </div>

    </div>

    <div class="chart-container">
        <div class="sale-chart">
            <div class="sale-chart-header">
                <h2>Sale Statistics</h2>

                <div class="dropdown">
                    <span class="dropdown-toggle drop-down-span" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                        aria-expanded="false">Sort By</span>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">This Week</a></li>
                        <li><a class="dropdown-item" href="#">Last Week</a></li>
                        <li><a class="dropdown-item" href="#">This Month</a></li>
                    </ul>
                </div>
            </div>
            <div class="sale-chart-body">
                <canvas id="SaleChart"></canvas>
            </div>
        </div>
        <div class="city-chart">
            <div class="city-chart-header">
                <h2>Top Selling Cities</h2>
            </div>
            <div class="city-chart-body">
                <canvas id="CityChart"></canvas>
            </div>
        </div>
    </div>
    <div class="table-container">
        <div class="payment-table">
            <div class="payment-table-header">
                <h2>Recent Payment Status</h2>
            </div>
            <div class="payment-table-body">
                <table>
                    <thead>
                        <tr>
                            <th>Order Id</th>
                            <th>Payment Mode</th>
                            <th>Amount</th>
                            <th>Order Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01234</td>
                            <td>
                                <div class="payment-amount">
                                    <div class="amount-icon">
                                        <i class="fa-solid fa-dollar-sign"></i>
                                    </div>
                                    <div class="amount-text">
                                        <h5> Cash On Delivery</h5>
                                        <span>Pay On Delivery</span>
                                    </div>
                                </div>

                            </td>
                            <td>
                                <div class="price-text">
                                    <h5>Rs: 10,500</h5>
                                    <span>Nov 23, 2023</span>
                                </div>

                            </td>
                            <td>
                                <span style="--i:#0cd7b1 ;" class="order-status">
                                    Delivered
                                </span>

                            </td>
                        </tr>
                        <tr>
                            <td>01234</td>
                            <td>
                                <div class="payment-amount">
                                    <div class="amount-icon">
                                        <i class="fa-solid fa-dollar-sign"></i>
                                    </div>
                                    <div class="amount-text">
                                        <h5> Cash On Delivery</h5>
                                        <span>Pay On Delivery</span>
                                    </div>
                                </div>

                            </td>
                            <td>
                                <div class="price-text">
                                    <h5>Rs: 10,500</h5>
                                    <span>Nov 23, 2023</span>
                                </div>

                            </td>
                            <td>
                                <span style="--i:#0cd7b1 ;" class="order-status">
                                    Delivered
                                </span>

                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="order-table">
            <div class="order-table-header">
                <h2>Recent Orders</h2>
                <div class="dropdown">
                    <span class="btn btn-primary dropdown-toggle drop-down-span" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                        aria-expanded="false">Sort By</span>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">This Week</a></li>
                        <li><a class="dropdown-item" href="#">Last Week</a></li>
                        <li><a class="dropdown-item" href="#">This Month</a></li>
                    </ul>
                </div>
            </div>
            <div class="order-table-body">
                <table>
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Customer</th>
                            <th>Ordered Date</th>
                            <th>Total</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01256</td>
                            <td>
                                <div class="order-customer">
                                    <h5>Saim</h5>
                                    <span>msaimkzmsk2008@gmail.com</span>
                                </div>
                            </td>
                            <td>
                                03 Sep 2024
                            </td>
                            <td>
                                PKR 10,000
                            </td>
                            <td>
                            <span class="order-status-badge" style="--i: 70, 185, 237 ;">Delivered</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

</div>
@endsection
@section('script')
<script src="{{ asset('Asset/Admin/js/Dashboard/sale.js') }}"></script>
@endsection