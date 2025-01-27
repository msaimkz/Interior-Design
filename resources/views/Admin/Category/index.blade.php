@extends('Admin.Layout.master')

@section('content')
    <div class="content">
        <div class="title mt-3">
            <h1 class="mb-2">All Categories</h1>
            <span class="dashboard-span">
                <a href="{{ route('Admin.dashboard.index') }}">Dashborads <i class="ml-2 fa-solid fa-angles-right"></i>
                </a>
                All Categories
            </span>
        </div>
        <div class="category-main-container">
            <div class="admin-main-table">
                <div class="admin-main-table-header">
                    <h3>Categories List</h3>
                    <div class="admin-main-table-header-sub">
                        <form name="SearchForm" id="SearchForm">
                            <input type="text" name="keyword" id="keyword" placeholder="Search Categories..">
                            <a href="javascript:void(0)">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </a>
                        </form>
                        <a href="" class="admin-main-table-header-button">
                            <i class="fa-solid fa-circle-plus"></i>
                            <span>Add Category</span>
                        </a>
                        <button class="admin-main-table-header-more-button">
                            <i class="fa-solid fa-ellipsis-vertical"></i>
                        </button>
                    </div>
                </div>
                <div class="admin-main-table-body"></div>
                <div class="admin-main-table-footer"></div>
                
            </div>
        </div>
    </div>
    
@endsection
