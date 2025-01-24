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
                        <div class="mail-left-second-child-item mail-tab-btn active" data-toggle="AllMails"
                            style="--i: 84,109,254 ;">
                            <p>
                                <i class="fa-solid fa-inbox"></i>
                                <span>All Mails</span>
                            </p>
                            <span class="mail-badge">6,789</span>
                        </div>
                        <div class="mail-left-second-child-item mail-tab-btn" data-toggle="Trash" style="--i: 254,84,84;">
                            <p>
                                <i class="fa-solid fa-trash-can"></i>
                                <span>Trash</span>
                            </p>
                            <span class="mail-badge">89</span>
                        </div>
                        <div class="mail-left-second-child-item mail-tab-btn" data-toggle="Starred"
                            style="--i: 244,167,66 ;">
                            <p>
                                <i class="fa-regular fa-star"></i>
                                <span>Starred</span>
                            </p>
                            <span class="mail-badge">22</span>
                        </div>


                    </div>

                </div>
            </div>
            <div class="mail-right-container">
                <div class="mail-tab-content active" id="AllMails">
                    <div class="mail-right-head">
                        <div>
                            <input class="form-check-input" type="checkbox" name="CheckAll" id="CheckAll">
                            <h3>All Mails</h3>
                        </div>
                        <button class="btn mail-dropdown-btn" data-toggle="AllMailDrop">
                            <i class="fa-solid fa-ellipsis-vertical"></i>
                        </button>
                        <ul class="mail-dropdown" id="AllMailDrop">
                            <li class="drop-item">
                                <a href="#">
                                    <span class="mail-text">Recent</span>
                                </a>
                            </li>
                            <li class="drop-item">
                                <a href="#">
                                    <span class="mail-text">Unread</span>
                                </a>
                            </li>
                            <li class="drop-item">
                                <a href="#">
                                    <span class="mail-text">Delete All</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <div class="mail-right-body">
                        <div class="mail-right-list">
                            <div class="mail-right-list-check">
                                <input class="form-check-input" type="checkbox" name="check" id="check">
                            </div>
                            <div class="mail-right-list-image">
                                <img src="{{ asset('Asset/Admin/img/men-avatar.jpg') }}" alt="">
                            </div>
                            <div class="mail-right-list-about">
                                <a href="javascript:void(0)" class="mail-username">
                                    <h3>Muhammad Saim</h3>
                                    <p>
                                        <i class="fa-solid fa-paperclip"></i>
                                        <span>1:34Am</span>
                                    </p>
                                </a>
                                <div class="mail-subject">
                                    <h2>Quarterly Report Review</h2>
                                    <p>
                                        <span>Dear Team, kindly review the attached quarterly report before our meeting at 2
                                            PM tomorrow. Your insights are appreciated.</span>
                                        <a href="javascript:void(0)">
                                            <i class="fa-solid fa-star"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="mail-right-list unread">
                            <div class="mail-right-list-check">
                                <input class="form-check-input" type="checkbox" name="check" id="check">
                            </div>
                            <div class="mail-right-list-image">
                                <img src="{{ asset('Asset/Admin/img/men-avatar.jpg') }}" alt="">
                            </div>
                            <div class="mail-right-list-about">
                                <a href="javascript:void(0)" class="mail-username">
                                    <h3>Muhammad Saim</h3>
                                    <p>
                                        <i class="fa-solid fa-paperclip"></i>
                                        <span>1:34Am</span>
                                    </p>
                                </a>
                                <div class="mail-subject">
                                    <h2>Quarterly Report Review</h2>
                                    <p>
                                        <span>Dear Team, kindly review the attached quarterly report before our meeting at 2
                                            PM tomorrow. Your insights are appreciated.</span>
                                        <a href="javascript:void(0)" class="active">
                                            <i class="fa-solid fa-star"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="mail-right-list ">
                            <div class="mail-right-list-check">
                                <input class="form-check-input" type="checkbox" name="check" id="check">
                            </div>
                            <div class="mail-right-list-image">
                                <img src="{{ asset('Asset/Admin/img/men-avatar.jpg') }}" alt="">
                            </div>
                            <div class="mail-right-list-about">
                                <a href="javascript:void(0)" class="mail-username">
                                    <h3>Muhammad Saim</h3>
                                    <p>
                                        <i class="fa-solid fa-paperclip"></i>
                                        <span>1:34Am</span>
                                    </p>
                                </a>
                                <div class="mail-subject">
                                    <h2>Quarterly Report Review</h2>
                                    <p>
                                        <span>Dear Team, kindly review the attached quarterly report before our meeting at 2
                                            PM tomorrow. Your insights are appreciated.</span>
                                        <a href="javascript:void(0)" class="active">
                                            <i class="fa-solid fa-star"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="mail-right-list ">
                            <div class="mail-right-list-check">
                                <input class="form-check-input" type="checkbox" name="check" id="check">
                            </div>
                            <div class="mail-right-list-image">
                                <img src="{{ asset('Asset/Admin/img/men-avatar.jpg') }}" alt="">
                            </div>
                            <div class="mail-right-list-about">
                                <a href="javascript:void(0)" class="mail-username">
                                    <h3>Muhammad Saim</h3>
                                    <p>
                                        <i class="fa-solid fa-paperclip"></i>
                                        <span>1:34Am</span>
                                    </p>
                                </a>
                                <div class="mail-subject">
                                    <h2>Quarterly Report Review</h2>
                                    <p>
                                        <span>Dear Team, kindly review the attached quarterly report before our meeting at 2
                                            PM tomorrow. Your insights are appreciated.</span>
                                        <a href="javascript:void(0)" class="active">
                                            <i class="fa-solid fa-star"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="mail-right-list ">
                            <div class="mail-right-list-check">
                                <input class="form-check-input" type="checkbox" name="check" id="check">
                            </div>
                            <div class="mail-right-list-image">
                                <img src="{{ asset('Asset/Admin/img/men-avatar.jpg') }}" alt="">
                            </div>
                            <div class="mail-right-list-about">
                                <a href="javascript:void(0)" class="mail-username">
                                    <h3>Muhammad Saim</h3>
                                    <p>
                                        <i class="fa-solid fa-paperclip"></i>
                                        <span>1:34Am</span>
                                    </p>
                                </a>
                                <div class="mail-subject">
                                    <h2>Quarterly Report Review</h2>
                                    <p>
                                        <span>Dear Team, kindly review the attached quarterly report before our meeting at 2
                                            PM tomorrow. Your insights are appreciated.</span>
                                        <a href="javascript:void(0)" class="active">
                                            <i class="fa-solid fa-star"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mail-tab-content" id="Trash">
                    <div class="mail-right-head">
                        <div>
                            <input class="form-check-input" type="checkbox" name="CheckAll" id="CheckAll">
                            <h3>Trash Mails</h3>
                        </div>
                        <button class="btn mail-dropdown-btn" data-toggle="TrashDrop">
                            <i class="fa-solid fa-ellipsis-vertical"></i>
                        </button>
                        <ul class="mail-dropdown" id="TrashDrop">
                            <li class="drop-item">
                                <a href="#">
                                    <span class="mail-text">Delete</span>
                                </a>
                            </li>
                            <li class="drop-item">
                                <a href="#">
                                    <span class="mail-text">Restore</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <div class="mail-right-body">
                        <div class="mail-right-list">
                            <div class="mail-right-list-check">
                                <input class="form-check-input" type="checkbox" name="check" id="check">
                            </div>
                            <div class="mail-right-list-image">
                                <img src="{{ asset('Asset/Admin/img/men-avatar.jpg') }}" alt="">
                            </div>
                            <div class="mail-right-list-about">
                                <a href="javascript:void(0)" class="mail-username">
                                    <h3>Muhammad Saim</h3>
                                    <p>
                                        <i class="fa-solid fa-paperclip"></i>
                                        <span>1:34Am</span>
                                    </p>
                                </a>
                                <div class="mail-subject">
                                    <h2>Quarterly Report Review</h2>
                                    <p>
                                        <span>Dear Team, kindly review the attached quarterly report before our meeting at 2
                                            PM tomorrow. Your insights are appreciated.</span>
                                        <a href="javascript:void(0)">
                                            <i class="fa-solid fa-star"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="mail-tab-content" id="Starred">
                    <div class="mail-right-head">
                        <div>
                            <input class="form-check-input" type="checkbox" name="CheckAll" id="CheckAll">
                            <h3>Starred Mails</h3>
                        </div>
                        <button class="btn mail-dropdown-btn" data-toggle="StarredDrop">
                            <i class="fa-solid fa-ellipsis-vertical"></i>
                        </button>
                        <ul class="mail-dropdown" id="StarredDrop">
                            <li class="drop-item">
                                <a href="#">
                                    <span class="mail-text">Recent</span>
                                </a>
                            </li>
                            <li class="drop-item">
                                <a href="#">
                                    <span class="mail-text">Unread</span>
                                </a>
                            </li>
                            <li class="drop-item">
                                <a href="#">
                                    <span class="mail-text">Delete All</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <div class="mail-right-body">
                        <div class="mail-right-list unread">
                            <div class="mail-right-list-check">
                                <input class="form-check-input" type="checkbox" name="check" id="check">
                            </div>
                            <div class="mail-right-list-image">
                                <img src="{{ asset('Asset/Admin/img/men-avatar.jpg') }}" alt="">
                            </div>
                            <div class="mail-right-list-about">
                                <a href="javascript:void(0)" class="mail-username">
                                    <h3>Muhammad Saim</h3>
                                    <p>
                                        <i class="fa-solid fa-paperclip"></i>
                                        <span>1:34Am</span>
                                    </p>
                                </a>
                                <div class="mail-subject">
                                    <h2>Quarterly Report Review</h2>
                                    <p>
                                        <span>Dear Team, kindly review the attached quarterly report before our meeting at 2
                                            PM tomorrow. Your insights are appreciated.</span>
                                        <a href="javascript:void(0)" class="active">
                                            <i class="fa-solid fa-star"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mail-detail-container">
            <div class="mail-detail-modal">
                <div class="mail-detail-modal-head">
                    <div class="mail-detail-modal-head-first">
                        <img src="{{ asset('Asset/Admin/img/men-avatar.jpg') }}" alt="">
                        <div>
                            <h4>Muhammad Saim</h4>
                            <span>msaimkzmsk2008@gmail.com</span>
                        </div>
                    </div>
                    <div class="mail-detail-modal-head-second">
                        <button class="btn" id="Modal-dropdown-btn">
                            <i class="fa-solid fa-ellipsis-vertical"></i>
                        </button>
                        <ul class="modal-mail-dropdown" id="ModalDropDown">
                            <li class="drop-item">
                                <a href="#">
                                    <i class="fa-solid fa-star"></i>
                                    <span class="modal-mail-text">Starred</span>
                                </a>
                            </li>
                            <li class="drop-item">

                                <a href="#">
                                    <i class="fa-solid fa-trash-can"></i>
                                    <span class="modal-mail-text">Delete</span>
                                </a>
                            </li>

                        </ul>

                        <button class="btn close-btn" id="Modal-Close-btn">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </div>
                </div>
                <div class="mail-detail-modal-body">
                    <h3>Greetings Mr Saim 🖐,</h3>
                    <p>
                        We're excited to invite you to our upcoming webinar, "Navigating Future Trends," where industry
                        experts will share strategic insights to help you stay ahead in an ever-evolving landscape. Join us
                        on [Date] at [Time] for an engaging session that promises to provide actionable knowledge and
                        valuable perspectives.
                    </p>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('Asset/Admin/js/mail.js') }}"></script>
@endsection
