@extends('Admin.master')

@section('content')

<div class="content">
    <div class="title mt-3">
        <h1 class="mb-2">Profile</h1>
        <span class="dashboard-span">
            <a href="{{ route('Admin.dashboard.index') }}">Dashborads <i class="ml-2 fa-solid fa-angles-right"></i>
            </a>
            Profile
        </span>
    </div>
    <div class="profile-top-container">
        <div class="profile-background-image">
            <img src="{{ asset('Asset/Admin/img/Profile-Background.jpg') }}" alt="">
        </div>
        <div class="profile-about">
            <div class="profile-img">
                <img src="{{ asset('Asset/Admin/img/men-avatar.jpg') }}" alt="">
            </div>
            <div class="profile-content">
                <h3 class="profile-name">Muhammad Saim</h3>
                <span class="profile-designation">Administration</span>
                <div class="profile-location">
                    <p>
                        <i class="fa-solid fa-location-dot"></i>
                       <span>Pakistan</span>
                    </p>
                    <p>
                        <i class="fa-solid fa-city"></i>
                        <span>Karachi, Sindh</span>
                    </p>
                </div>
            </div>
           
            
        </div>
        <div class="profile-tab">
            <div class="profile-tab-child">
                <h4>About</h4>
                <div class="line"></div>
            </div>
            <div class="profile-tab-child">
                <h4>Edit Profile</h4>
                <div class="line"></div>
            </div>
        </div>
    </div>
</div>


    
@endsection