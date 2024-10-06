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
                    <div class="inner-icon" style="--i: 84, 109, 254 ;">
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
                    <canvas id="myChart"></canvas>
                </div>
            </div>
            <div class="city-chart">
                <div class="city-chart-header">
                    <h2>Top Selling Cities</h2>
                </div>
                <div class="city-chart-body">
                    <div id="city-radar"></div>
                </div>
            </div>
        </div>

    </div>
@endsection
@section('script')
    <script>
        function SaleChart() {
            const ctx = document.getElementById('myChart');

            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June'],
                    datasets: [{
                            label: 'Profit',
                            data: [10, 15, 8, 12, 18, 20],
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1,
                            fill: true,
                            lineTension: 0.3,
                        },
                        {
                            label: 'Revenue',
                            data: [20, 25, 18, 30, 28, 35],
                            borderColor: 'rgba(255, 99, 132, 1)',
                            borderWidth: 1,
                            fill: true,
                            lineTension: 0.3,
                        },
                        {
                            label: 'Sales',
                            data: [15, 22, 20, 25, 30, 35],
                            borderColor: 'rgba(255, 206, 86, 1)',
                            borderWidth: 1,
                            fill: true,
                            lineTension: 0.3,
                        }
                    ]
                },
                options: {
                    responsive: true,
                    plugins: {
                        tooltip: {
                            enabled: true,
                            mode: 'index',
                            intersect: false,
                            callbacks: {
                                label: function(tooltipItem) {
                                    
                                    const label = tooltipItem.dataset.label || '';
                                    const value = tooltipItem.raw;

                                   
                                    if (label === 'Profit' || label === 'Revenue') {
                                        return `${label}: $${value.toFixed(2)}`; // Formatting as currency
                                    }

                                    // Return sales as normal
                                    return `${label}: ${value}`;
                                }
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }

        SaleChart()
    </script>
@endsection
