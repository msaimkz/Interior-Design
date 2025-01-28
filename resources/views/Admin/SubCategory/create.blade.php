@extends('Admin.Layout.master')

@section('content')
    <div class="content">
        <div class="title mt-3">
            <h1 class="mb-2">Create Sub-Category</h1>
            <span class="dashboard-span">
                <a href="{{ route('Admin.dashboard.index') }}">Dashborads <i class="ml-2 fa-solid fa-angles-right"></i>
                </a>
                <a href="{{ route('Admin.Subcategory') }}">Sub-Category <i class="ml-2 fa-solid fa-angles-right"></i>
                </a>
                Create Sub-Category
            </span>
        </div>

        <div class="Sub-category-main-container">
            <div class="admin-main-form-container">
                <form name="SubCategoryForm" id="SubCategoryForm">
                    <div class="admin-main-form-top-container">
                        <div class="admin-main-form-left-container">
                            <div class="admin-main-form-left-card">
                                <div class="admin-main-form-left-card-header">
                                    <h3>Add Sub-Category</h3>
                                    <a href="{{ route('Admin.Subcategory') }}">
                                        <i class="fa-solid fa-arrow-left"></i>
                                        <span>Go Back</span>
                                    </a>
                                </div>
                                <div class="admin-main-form-left-card-body">
                                    <div class="admin-main-form-left-small-card">
                                        <h3>Sub-Category Name</h3>
                                        <input type="text" name="name" id="name" class="form-control"
                                            placeholder="Sub-Category Name">
                                        <span class="admin-invalid-feedback"></span>
                                    </div>
                                    <div class="admin-main-form-left-small-card">
                                        <h3>Sub-Category Slug</h3>
                                        <input type="text" name="slug" id="slug" class="form-control"
                                            placeholder="Sub-Category Slug">
                                        <span class="admin-invalid-feedback"></span>
                                    </div>
                                    <div class="admin-main-form-left-small-card">
                                        <h3>Category</h3>
                                        <select hidden name="category_id" class="hidden-select">
                                            <option value="active" selected>Active</option>
                                        </select>
                                        <div class="admin-form-select" id="category_id">
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
                                    <div class="admin-main-form-left-small-card">
                                        <h3>Status</h3>
                                        <select hidden name="status" class="hidden-select" id="status">
                                            <option value="active" selected>Active</option>
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
                        
                    </div>
                    <div class="admin-main-form-bottom-container">
                        <button type="submit">Add Sub-Category</button>
                    </div>
                </form>


            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('Asset/Admin/js/SubCategory/create.js') }}"></script>
@endsection
