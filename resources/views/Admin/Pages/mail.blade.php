@extends('Admin.Layout.master')

@section('content')

<div class="content">
    <div class="title mt-3">
        <h1 class="mb-2">All Mails</h1>
        <span class="dashboard-span">
            <a href="{{ route('Admin.dashboard.index') }}">Dashborads <i class="ml-2 fa-solid fa-angles-right"></i>
            </a>
            All Mails
        </span>
    </div>

    <div class="mail-main-container">
        <div class="mail-left-container">
            <div class="mail-left-first-child">
                <img src="{{ asset('Asset/Admin/img/men-avatar.jpg') }}" alt="">
                <div>
                    <h4>Muhammad Saim</h4>
                    <span>msaimkzmsk2008@gmail.com</span>
                </div>
            </div>
            <div class="mail-left-second-child">
                <h3>Mails</h3>
                <div class="mail-left-second-child-list">
                    <div class="mail-left-second-child-item active" style="--i: 84,109,254 ;">
                        <p>
                            <i class="fa-solid fa-inbox"></i>
                            <span>All Mails</span>
                        </p>
                        <span class="mail-badge">6,789</span>
                    </div>
                    <div class="mail-left-second-child-item" style="--i: 254,84,84;">
                        <p>
                            <i class="fa-solid fa-trash-can"></i>
                            <span>Trash</span>
                        </p>
                        <span class="mail-badge">89</span>
                    </div>
                    <div class="mail-left-second-child-item" style="--i: 244,167,66 ;">
                        <p>
                            <i class="fa-regular fa-star"></i>
                            <span>Starred</span>
                        </p>
                        <span class="mail-badge">22</span>
                    </div>

                </div>

            </div>
        </div>
        <div class="mail-right-container"></div>
    </div>
</div>
    
@endsection