@extends('Admin.Layout.master')

@section('content')
    <div class="content">
        <div class="title mt-3">
            <h1 class="mb-2">Setting</h1>
            <span class="dashboard-span">
                <a href="{{ route('Admin.dashboard.index') }}">Dashborads <i class="ml-2 fa-solid fa-angles-right"></i>
                </a>
                Setting
            </span>
        </div>

        <div class="setting-main-container">
            <div class="setting-left-container">
                <div class="setting-tab active">
                    <h3>Account Setting</h3>
                </div>
                <div class="setting-tab">
                    <h3>Security</h3>
                </div>

            </div>
            <div class="setting-right-container">
                <div class="setting-right-tab">
                    <div class="setting-right-content">
                        <div class="setting-right-content-head">
                            <h3>Two Step Verification</h3>
                            <p>Two step verificatoin is very secured and restricts in happening faulty practices.</p>
                        </div>

                        <div class="setting-right-content-checkbox">
                            <input type="checkbox"  name="TwoStepVerification" id="TwoStepVerification"
                                class="setting-checkbox">
                            <div>
                                <span class="setting-checkbox-slide"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="setting-right-tab"></div>
            </div>
        </div>
    </div>
@endsection
@section('script')

<script src="{{ asset('Asset/Admin/js/setting.js') }}"></script>

@endsection
