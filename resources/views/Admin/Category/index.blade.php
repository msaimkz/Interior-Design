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
                        <a href="{{ route('Admin.category.create') }}" class="admin-main-table-header-button">
                            <i class="fa-solid fa-circle-plus"></i>
                            <span>Add Category</span>
                        </a>
                        <button class="admin-main-table-header-more-button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-ellipsis-vertical"></i>
                        </button>
                        <ul class="dropdown-menu" id="dropdown1" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" id="ShowCheckBoxBtn" href="javascript:void(0)">Select</a></li>
                            <li><a class="dropdown-item drop-delete-btn" id="ShowCheckBoxBtn" href="javascript:void(0)">Delete</a></li>
                            <li>
                                <a class="dropdown-item" href="#" id="exportButton">
                                    <span>Export</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="dropdown-menu export-dropdown" id="dropdown2">
                            <li><a class="dropdown-item" href="#">Excel</a></li>
                            <li><a class="dropdown-item" href="#">CSV</a></li>
                            <li><a class="dropdown-item" href="#">PDF</a></li>
                        </ul>

                    </div>
                </div>
                <div class="admin-main-table-body">
                    <table>
                        <thead>
                            <tr>
                                <th class="CheckInputThead">
                                    <input type="checkbox" class="form-check-input" name="CheckBoxSelection"
                                        id="CheckBoxSelection">
                                </th>
                                <th>Sno:</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="CheckInputTbody">
                                    <input type="checkbox" class="form-check-input" name="MultipleDeleteCheck"
                                        id="MultipleDeleteCheck" value="1">
                                </td>
                                <td>
                                    01
                                </td>
                                <td>
                                    <div class="table-name">
                                        <img src="{{ asset('Asset/Admin/img/table-img.jpg') }}" alt="">
                                        <a href="#">Kitchen</a>
                                    </div>
                                </td>
                                <td>
                                    <span class="table-badge table-success">Active</span>
                                </td>
                                <td>
                                    <div class="table-action">
                                        <a href="" class="table-action-btn" style="--i: 84 , 109, 254;">
                                            <i class="fa-regular fa-eye"></i>
                                        </a>
                                        <a href="{{ route('Admin.category.edit') }}" class="table-action-btn" style="--i: 12 , 215, 177;">
                                            <i class="ri-edit-line"></i>
                                        </a>
                                        <a href="" class="table-action-btn" style="--i: 254 ,84, 84;">
                                            <i class="ri-delete-bin-line"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="CheckInputTbody">
                                    <input type="checkbox" class="form-check-input" name="MultipleDeleteCheck"
                                        id="MultipleDeleteCheck" value="2">
                                </td>
                                <td>
                                    01
                                </td>
                                <td>
                                    <div class="table-name">
                                        <img src="{{ asset('Asset/Admin/img/table-img.jpg') }}" alt="">
                                        <a href="#">Kitchen</a>
                                    </div>
                                </td>
                                <td>
                                    <span class="table-badge table-success">Active</span>
                                </td>
                                <td>
                                    <div class="table-action">
                                        <a href="" class="table-action-btn" style="--i: 84 , 109, 254;">
                                            <i class="fa-regular fa-eye"></i>
                                        </a>
                                        <a href="" class="table-action-btn" style="--i: 12 , 215, 177;">
                                            <i class="ri-edit-line"></i>
                                        </a>
                                        <a href="" class="table-action-btn" style="--i: 254 ,84, 84;">
                                            <i class="ri-delete-bin-line"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="admin-main-table-footer">
                    <p>
                        Showing
                        <b>1</b>
                        to
                        <b>6</b>
                        of
                        <b>10</b>
                        entries
                    </p>
                    <div class="table-footer-pagination">
                        <nav aria-label="...">
                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item " aria-current="page">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('Asset/Admin/js/Category/index.js') }}"></script>
@endsection
