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
    </div>
</div>


    
@endsection