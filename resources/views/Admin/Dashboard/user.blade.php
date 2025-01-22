@extends('Admin.Layout.master')

@section('content')
    <div class="content">
        <div class="title mt-3">
            <h1 class="mb-2">User Analytics</h1>
            <span class="dashboard-span">
                <a href="{{ route('Admin.dashboard.index') }}">Dashborads <i class="ml-2 fa-solid fa-angles-right"></i>
                </a>
                User Analytics
            </span>
        </div>

        <div class="user-dashboard-card-container">
            <div class="user-dashboard-card">
                <div class="user-dashboard-card-top">
                    <div class="user-card-icon" style="--i:84, 109, 254;">
                        <i class="fa-solid fa-user-group"></i>
                    </div>
                </div>
                <div class="user-dashboard-card-bottom">
                    <h4>Total Users</h4>
                    <div>
                        <h2>872</h2>
                        <span class="badge" style="background-color: #56e6cb69; color: #0cd7b1;">+0.45%</span>
                    </div>
                </div>
            </div>
            <div class="user-dashboard-card">
                <div class="user-dashboard-card-top">
                    <div class="user-card-icon" style="--i:215, 124, 247;">
                        <i class="fa-solid fa-user-group"></i>
                    </div>
                </div>
                <div class="user-dashboard-card-bottom">
                    <h4>Total Designers</h4>
                    <div>
                        <h2>872</h2>
                        <span class="badge" style="background-color: #56e6cb69; color: #0cd7b1;">+0.45%</span>
                    </div>
                </div>
            </div>
            <div class="user-dashboard-card">
                <div class="user-dashboard-card-top">
                    <div class="user-card-icon" style="--i:12, 215, 177;">
                        <i class="fa-solid fa-stopwatch"></i>
                    </div>
                </div>
                <div class="user-dashboard-card-bottom">
                    <h4>Total Sessions</h4>
                    <div>
                        <h2>872</h2>
                        <span class="badge" style="background-color: #56e6cb69; color: #0cd7b1;">+0.45%</span>
                    </div>
                </div>
            </div>
            <div class="user-dashboard-card">
                <div class="user-dashboard-card-top">
                    <div class="user-card-icon" style="--i:254, 124, 88 ;">
                        <i class="fa-solid fa-hourglass"></i>
                    </div>
                </div>
                <div class="user-dashboard-card-bottom">
                    <h4>Avg Session Duration</h4>
                    <div>
                        <h2>4.5min</h2>
                        <span class="badge" style="background-color: #56e6cb69; color: #0cd7b1;">+0.45%</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="chart-container">
            <div class="sale-chart">
                <div class="sale-chart-header">
                    <h2>Sessions Overview</h2>

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
                    <canvas id="SessionChart"></canvas>
                </div>
            </div>
            <div class="city-chart">
                <div class="city-chart-header">
                    <h2>User Overview</h2>
                </div>
                <div class="city-chart-body">
                    <canvas id="WeekChart"></canvas>
                </div>
            </div>
        </div>
        <div class="user-table-container">
            <div class="user-table">
                <div class="user-table-header">
                    <h2>Recent Users</h2>
                </div>
                <div class="user-table-body">
                    <table>
                        <thead>
                            <tr>
                                <th>Sno</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>City</th>
                                <th>Phone</th>
                                <th>Gender</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01234</td>
                                <td>
                                    
                                    Muhammad Saim
                                </td>
                                <td>msaimkzmsk2008@gmail.com</td>
                                <td>Karachi</td>
                                <td>03452256298</td>
                                <td>Male</td>
                                <td>
                                    <a href="">
                                        <span class="badge p-2" style="background-color: #56e6cb69; color: #0cd7b1;">View
                                            Profile</span>
                                    </a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="user-table-container">
            <div class="user-table">
                <div class="user-table-header">
                    <h2>Recent Designer</h2>
                </div>
                <div class="user-table-body">
                    <table>
                        <thead>
                            <tr>
                                <th>Sno</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>City</th>
                                <th>Phone</th>
                                <th>Gender</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01234</td>
                                <td>
                                   
                                    Muhammad Saim
                                </td>
                                <td>msaimkzmsk2008@gmail.com</td>
                                <td>Karachi</td>
                                <td>03452256298</td>
                                <td>Male</td>
                                <td>
                                    <a href="">
                                        <span class="badge p-2" style="background-color: #56e6cb69; color: #0cd7b1;">View
                                            Profile</span>
                                    </a>
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
    <script src="{{ asset('Asset/Admin/js/Dashboard/user.js') }}"></script>
@endsection
