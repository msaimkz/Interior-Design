@extends('Admin.Layout.master')

@section('content')

<div class="content">
    <div class="title mt-3">
        <h1 class="mb-2">Create Category</h1>
        <span class="dashboard-span">
            <a href="{{ route('Admin.dashboard.index') }}">Dashborads <i class="ml-2 fa-solid fa-angles-right"></i>
            </a>
            <a href="{{ route('Admin.category') }}">Category <i class="ml-2 fa-solid fa-angles-right"></i>
            </a>
            Create Category
        </span>
    </div>

    <div class="category-main-container">
        <div class="admin-main-form-container">
            <div class="admin-main-form-left-container">
                <div class="admin-main-form-left-card">
                    <div class="admin-main-form-left-card-header">
                        <h3>Add Category</h3>
                        <a href="{{ route('Admin.category') }}">
                            <i class="fa-solid fa-arrow-left"></i>
                            <span>Go Back</span>
                        </a>
                    </div>

                </div>
            </div>
            <div class="admin-main-form-right-container"></div>
        </div>
    </div>
</div>
    
@endsection