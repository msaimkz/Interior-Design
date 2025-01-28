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
                    <div class="admin-main-form-left-card-body">
                        <div class="admin-main-form-left-small-card">
                            <h3>Category Name</h3>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Category Name">
                            <span class="admin-invalid-feedback"></span>
                        </div>
                        <div class="admin-main-form-left-small-card">
                            <h3>Category Slug</h3>
                            <input type="text" name="slug" id="slug" class="form-control" placeholder="Category Slug">
                            <span class="admin-invalid-feedback"></span>
                        </div>
                        <div class="admin-main-left-large-card">
                            <h3>Status</h3>
                            <select  hidden name="status" id="status">
                                <option value="active">Active</option>
                                <option value="block">Block</option>
                            </select>
                            <div class="admin-form-select" id="status">
                               <div class="selected-option">
                                  <span data-value="active">Active</span>
                                  <i class="fa-solid fa-sort-down"></i>
                               </div>
                               <ul class="select-options">
                                  <li data-value="active">Active</li>
                                  <li data-value="block">Block</li>
                               </ul>

                            </div>
                            <span class="admin-invalid-feedback"></span>
                        </div>
                        <div class="admin-main-left-large-card">
                            <h3>Desscription</h3>
                            <textarea name="desscription" id="desscription" cols="10" rows="6"></textarea>
                            <span class="admin-invalid-feedback"></span>
                        </div>

                    </div>

                </div>
            </div>
            <div class="admin-main-form-right-container"></div>
        </div>
    </div>
</div>
    
@endsection

@section('script')

<script src="{{ asset('Asset/Admin/js/Category/create.js') }}"></script>
    
@endsection