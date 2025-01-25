<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Panel</title>

    {{-- font Awesome CDN  --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- font Awesome CDN  --}}

    {{-- Remis Icon CDN  --}}


    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />

    {{-- Remis Icon CDN  --}}



    {{-- Bootstarp CDN LINK  --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    {{-- Bootstarp CDN LINK  --}}


    {{-- Custom CSS LINK  --}}

    <link rel="stylesheet" href="{{ asset('Asset/Admin/css/style.css') }}">

    {{-- Custom CSS LINK  --}}

</head>

<body>

    <div class="main">

        <div class="blur-background">

        </div>


        {{-- SideBar --}}


        <div class="sidebar">
            <a href="#" class="logo-container">
                <img src="{{ asset('Asset/Admin/img/logo1.png') }}" alt="logo">
                <h2>Decor Vista</h2>
            </a>

            <ul class="link-container">
                <span class="link-title">Main</span>
                <li class="link-contain">
                    <a href="javascript:void(0)" class="dropdownlink">
                        <span class="link-icon"><i class="fa-solid fa-house"></i></span>
                        <div class="sub-link">
                            <span class="link-text">Dashboards</span>
                            <span class="sub-link-icon drop-icon"><i class="fa-solid fa-angle-down"></i></span>
                        </div>


                    </a>
                    <ul class="sub-link-container">
                        <li class="sub-link-contian">

                            <a href="{{ route('Admin.dashboard.index') }}">Sales Overview</a>
                        </li>
                        <li class="sub-link-contian">
                            <a href="{{ route('Admin.dashboard.user') }}">User Statistics</a>
                        </li>
                        <li class="sub-link-contian">
                            <a href="{{ route('Admin.dashboard.sale') }}">Products Analytics</a>
                        </li>
                    </ul>
                </li>
                <span class="link-title">Products</span>

                <li class="link-contain">
                    <a href="#">
                        <span class="link-icon"><i class="fa-solid fa-layer-group"></i></span>
                        <span class="link-text">Category</span>
                    </a>

                </li>
                <li class="link-contain">
                    <a href="#">
                        <span class="link-icon"><i class="fa-solid fa-layer-group"></i></span>
                        <span class="link-text">Sub-Category</span>
                    </a>

                </li>
                <li class="link-contain">
                    <a href="#">
                        <span class="link-icon"><i class="fa-solid fa-layer-group"></i></span>
                        <span class="link-text">Brand</span>
                    </a>

                </li>
                <li class="link-contain">
                    <a href="#">
                        <span class="link-icon"><i class="fa-solid fa-diamond"></i></span>
                        <span class="link-text">Shape</span>
                    </a>

                </li>
                <li class="link-contain">
                    <a href="#">
                        <span class="link-icon"><i class="fa-solid fa-couch"></i></span>
                        <span class="link-text">Products</span>
                    </a>

                </li>
                <span class="link-title">Orders</span>
                <li class="link-contain">
                    <a href="#">
                        <span class="link-icon"><i class="fa-solid fa-truck-fast"></i></span>
                        <span class="link-text">Shipping</span>
                    </a>
                </li>
                <li class="link-contain">
                    <a href="javascript:void(0)" class="dropdownlink">
                        <span class="link-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="20"
                                height="32" viewBox="0 0 256 256">
                                <path
                                    d="M58.89,154.89l42.22,42.22-50.63,18.4a7.79,7.79,0,0,1-10-10Zm138.82-4.72L105.83,58.29A7.79,7.79,0,0,0,93,61.14l-14.9,41,75.82,75.82,41-14.9A7.79,7.79,0,0,0,197.71,150.17Z"
                                    opacity="0.2"></path>
                                <path
                                    d="M111.49,52.63a15.8,15.8,0,0,0-26,5.77L33,202.78A15.83,15.83,0,0,0,47.76,224a16,16,0,0,0,5.46-1l144.37-52.5a15.8,15.8,0,0,0,5.78-26Zm-8.33,135.21-35-35,13.16-36.21,58.05,58.05Zm-55,20,14-38.41,24.45,24.45ZM156,168.64,87.36,100l13-35.87,91.43,91.43ZM160,72a37.8,37.8,0,0,1,3.84-15.58C169.14,45.83,179.14,40,192,40c6.7,0,11-2.29,13.65-7.21A22,22,0,0,0,208,23.94,8,8,0,0,1,224,24c0,12.86-8.52,32-32,32-6.7,0-11,2.29-13.65,7.21A22,22,0,0,0,176,72.06,8,8,0,0,1,160,72ZM136,40V16a8,8,0,0,1,16,0V40a8,8,0,0,1-16,0Zm101.66,82.34a8,8,0,1,1-11.32,11.31l-16-16a8,8,0,0,1,11.32-11.32Zm4.87-42.75-24,8a8,8,0,0,1-5.06-15.18l24-8a8,8,0,0,1,5.06,15.18Z">
                                </path>
                            </svg>
                        </span>
                        <div class="sub-link">
                            <span class="link-text">Dicount Program</span>
                            <span class="sub-link-icon drop-icon"><i class="fa-solid fa-angle-down"></i></span>
                        </div>


                    </a>
                    <ul class="sub-link-container">
                        <li class="sub-link-contian">

                            <a href="">Coupon Code</a>
                        </li>
                        <li class="sub-link-contian">
                            <a href="">Discount Week</a>
                        </li>

                    </ul>
                </li>
                <li class="link-contain">
                    <a href="javascript:void(0)" class="dropdownlink">
                        <span class="link-icon"><i class="fa-solid fa-boxes-packing"></i></span>
                        <div class="sub-link">
                            <span class="link-text">Order</span>
                            <span class="sub-link-icon drop-icon"><i class="fa-solid fa-angle-down"></i></span>
                        </div>


                    </a>
                    <ul class="sub-link-container">
                        <li class="sub-link-contian">

                            <a href="">Orders</a>
                        </li>
                        <li class="sub-link-contian">
                            <a href="">Exchange & Return</a>
                        </li>

                    </ul>
                </li>
                <span class="link-title">Users</span>
                <li class="link-contain">
                    <a href="javascript:void(0)" class="dropdownlink">
                        <span class="link-icon"><i class="fa-solid fa-user-group"></i></span>
                        <div class="sub-link">
                            <span class="link-text">Designer</span>
                            <span class="sub-link-icon drop-icon"><i class="fa-solid fa-angle-down"></i></span>
                        </div>


                    </a>
                    <ul class="sub-link-container">
                        <li class="sub-link-contian">

                            <a href="">Designer</a>
                        </li>
                        <li class="sub-link-contian">
                            <a href="">Designer Request</a>
                        </li>

                    </ul>
                </li>
                <li class="link-contain">
                    <a href="javascript:void(0)" class="dropdownlink">
                        <span class="link-icon"><i class="fa-solid fa-user-group"></i></span>
                        <div class="sub-link">
                            <span class="link-text">Customer</span>
                            <span class="sub-link-icon drop-icon"><i class="fa-solid fa-angle-down"></i></span>
                        </div>


                    </a>
                    <ul class="sub-link-container">
                        <li class="sub-link-contian">

                            <a href="">Customers</a>
                        </li>
                        <li class="sub-link-contian">
                            <a href="">Activity Report</a>
                        </li>

                    </ul>
                </li>
                <span class="link-title">Pages</span>
                <li class="link-contain">
                    <a href="#">
                        <span class="link-icon"><i class="fa-solid fa-newspaper"></i></span>
                        <span class="link-text">News</span>
                    </a>
                </li>
                <li class="link-contain">
                    <a href="#">
                        <span class="link-icon"><i class="fa-solid fa-circle-question"></i></span>
                        <span class="link-text">FAQs</span>
                    </a>
                </li>
                <span class="link-title">Reviews & Message</span>
                <li class="link-contain">
                    <a href="#">
                        <span class="link-icon"><i class="fa-solid fa-comments"></i></span>
                        <span class="link-text">News Comments</span>
                    </a>
                </li>
                <li class="link-contain">
                    <a href="#">
                        <span class="link-icon"><i class="fa-solid fa-star"></i></span>
                        <span class="link-text">Products Rating</span>
                    </a>
                </li>
                <li class="link-contain">
                    <a href="#">
                        <span class="link-icon"><i class="fa-solid fa-heart"></i></span>
                        <span class="link-text">Testimonial</span>
                    </a>
                </li>
                <li class="link-contain">
                    <a href="#">
                        <span class="link-icon"><i class="fa-regular fa-id-badge"></i></span>
                        <span class="link-text">Contact Us</span>
                    </a>
                </li>

            </ul>
        </div>

        {{-- SideBar --}}

        <div class="main-content">

            {{-- Header   --}}

            <div class="header">
                <div class="responsive-menu-bar">
                    <img src="{{ asset('Asset/Admin/img/logo1.png') }}" alt="">
                    <div class="menu-bar" id="ResmenuBar">
                        <div class="menu-icon">
                            <span class="bar"></span>
                            <span class="bar"></span>
                            <span class="bar"></span>
                        </div>
                    </div>
                </div>
                <div class="menu-bar" id="menuBar">
                    <div class="menu-icon" id="menuIcon">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </div>
                </div>

                <div class="header-second">
                    <a href="{{ route('Admin.mail') }}" class="notifications">
                        <i class="fa-solid fa-bell"></i>
                        <div class="dot"></div>
                    </a>
                    <div class="header-profile">
                        <div class="img">
                            <img src="{{ asset('Asset/Admin/img/men-avatar.jpg') }}" alt="">

                        </div>
                        <h3>M. Saim</h3>
                    </div>
                    <ul class="profile-dropdown">
                        <li class="drop-item" style="--i: #667CFE;">
                            <a href="{{ route('Admin.profile') }}">
                                <span class="profile-icon"><i class="fa-solid fa-user"></i></span>
                                <span class="profile-text">Profile</span>
                            </a>
                        </li>
                        <li class="drop-item" style="--i: #D77CF7;">
                            <a href="{{ route('Admin.setting') }}">
                                <span class="profile-icon"><i class="fa-solid fa-gear"></i></span>
                                <span class="profile-text">Settings</span>
                            </a>
                        </li>
                        <li class="drop-item" style="--i: #0CD7B1;">
                            <a href="{{ route('Admin.support') }}">
                                <span class="profile-icon"><i class="fa-solid fa-headset"></i></span>
                                <span class="profile-text">Support</span>
                            </a>
                        </li>
                        <li class="drop-item" style="--i: #F5BB71;">
                            <form action="">
                                <a href="">
                                    <span class="profile-icon"><i class="fa-solid fa-right-from-bracket"></i></span>
                                    <span class="profile-text">Logout</span>
                                </a>
                            </form>

                        </li>
                    </ul>
                </div>
            </div>

            {{-- Header   --}}

            @yield('content')



            {{-- Footer  --}}

            <footer>
                <p>Copyright &copy; <b>DecorVista</b> All Rights Reserved</p>
            </footer>

            {{-- Footer  --}}

        </div>
    </div>





    {{-- Bootstrap CDN Script  --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    {{-- Bootstrap CDN Script  --}}

    {{-- Apex Chart CDN Script  --}}



    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    {{-- Apex Chart CDN Script  --}}

    {{-- Custom  CDN  Script --}}

    <script src="{{ asset('Asset/Admin/js/script.js') }}"></script>
    {{-- Custom  CDN  Script --}}

    {{-- Jquery CDN Script --}}

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    {{-- Jquery CDN Script --}}


    @yield('script')

</body>

</html>
