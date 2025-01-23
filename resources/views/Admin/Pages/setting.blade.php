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
                <div class="setting-tab  active" data-toggle="AccountSetting">
                    <h3>Account Setting</h3>
                </div>
                <div class="setting-tab" data-toggle="Notification">
                    <h3>Notification</h3>
                </div>
                <div class="setting-tab" data-toggle="AccountSecurity">
                    <h3>Security</h3>
                </div>

            </div>
            <div class="setting-right-container">
                <form name="SettingForm" id="SettingForm">
                    <div class="setting-right-top">
                        <div class="setting-right-tab active" id="AccountSetting">
                            <div class="setting-right-content">
                                <div class="setting-right-content-head">
                                    <h3>Two Step Verification</h3>
                                    <p>Two step verificatoin is very secured and restricts in happening faulty practices.
                                    </p>
                                </div>

                                <div class="setting-right-content-checkbox">
                                    <input type="checkbox"  name="TwoStepVerification" id="TwoStepVerification"
                                        class="setting-checkbox">
                                    <div>
                                        <span class="setting-checkbox-slide"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="setting-right-content">
                                <div class="setting-right-content-head">
                                    <h3>Reset Password</h3>
                                    <p>Password should be min of <b>8 digits <sup>*</sup></b>,atleast <b>One Capital letter
                                            <sup>*</sup></b> and One <b>Special Character <sup>*</sup></b> included.</p>
                                </div>

                            </div>
                            <div class="setting-right-input">
                                <div class="setting-right-content-head">
                                    <h3>Current Password</h3>

                                </div>
                                <div class="setting-right-content-input">
                                    <input type="password" class="form-control" name="currentPassword" id="currentPassword"
                                        placeholder="Current Password">
                                    <span></span>
                                </div>

                            </div>
                            <div class="setting-right-input">
                                <div class="setting-right-content-head">
                                    <h3>New Password</h3>

                                </div>
                                <div class="setting-right-content-input">
                                    <input type="password" class="form-control" name="newPassword" id="newPassword"
                                        placeholder="New Password">
                                    <span></span>
                                </div>

                            </div>
                            <div class="setting-right-input">
                                <div class="setting-right-content-head">
                                    <h3>Confirm Password</h3>

                                </div>
                                <div class="setting-right-content-input">
                                    <input type="password" class="form-control" name="confirmPassword" id="confirmPassword"
                                        placeholder="Confirm Password">
                                    <span></span>
                                </div>

                            </div>
                        </div>
                        <div class="setting-right-tab" id="Notification">
                            <div class="security-main-content">
                                <div class="security-sub-content">
                                    <h3>Email Notifications</h3>
                                    <p>Email notifications are the notifications you will receeive when you are offline, you can customize them by enabling or disabling them.</p>
                                </div>
                                <div class="security-sub-second-content">
                                    <div class="security-sub-second-content-child">
                                        <div class="security-sub-second-content-text">
                                            <h4>Updates & Features</h4>
                                            <p>Notifications about new updates and their features.</p>
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
                            </div>
                        </div>     
                        <div class="setting-right-tab" id="AccountSecurity">
                            <div class="security-main-content">
                                <div class="security-sub-content">
                                    <h3>Logging In</h3>
                                    <p>Security settings related to logging into our email account and taking down account
                                        if any mischevious action happended.</p>
                                </div>
                                <div class="security-sub-second-content">
                                    <div class="security-sub-second-content-child">
                                        <div class="security-sub-second-content-text">
                                            <h4>Max Limit for login attempts</h4>
                                            <p>Account will freeze for 24hrs while attempt to login with wrong credentials
                                                for
                                                selected number of times</p>
                                        </div>
                                        <div class="security-sub-second-content-select">
                                            <select name="MaxLoginAttempt" id="MaxLoginAttempt">
                                                <option value="">Select a Attempt</option>
                                                <option value="3">3 Attempts</option>
                                                <option value="5">5 Attempts</option>
                                                <option value="10">10 Attempts</option>
                                                <option value="20">20 Attempts</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="security-sub-second-content-child">
                                        <div class="security-sub-second-content-text">
                                            <h4>Account Freeze time management</h4>
                                            <p>You can change the time for the account freeze when attempts for.</p>
                                        </div>
                                        <div class="security-sub-second-content-select">
                                            <select name="FreezeDuration" id="FreezeDuration">
                                                <option value="">Select a Time</option>
                                                <option value="1">1 Hour</option>
                                                <option value="3">3 Hours</option>
                                                <option value="5">5 Hours</option>
                                                <option value="24">1 Day</option>
                                            </select>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="setting-right-bottom">
                        <button type="submit" class="btn restore">Restore Default</button>
                        <button type="submit" class="btn save">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ asset('Asset/Admin/js/setting.js') }}"></script>
@endsection
