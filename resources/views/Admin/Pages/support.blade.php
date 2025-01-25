@extends('Admin.Layout.master')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.min.css"
        integrity="sha512-vEia6TQGr3FqC6h55/NdU3QSM5XR6HSl5fW71QTKrgeER98LIMGwymBVM867C1XHIkYD9nMTfWK2A0xcodKHNA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('content')
    <div class="content">
        <div class="title mt-3">
            <h1 class="mb-2">Support</h1>
            <span class="dashboard-span">
                <a href="{{ route('Admin.dashboard.index') }}">Dashborads <i class="ml-2 fa-solid fa-angles-right"></i>
                </a>
                Support
            </span>
        </div>

        <div class="support-main-container">
            <div class="support-left-container">
                <div class="support-left-head">
                    <div class="support-left-head-child active" data-toggle="CustomerTab">
                        <h3>Customers</h3>
                    </div>
                    <div class="support-left-head-child" data-toggle="DesignerTab">
                        <h3>Designers</h3>
                    </div>
                </div>
                <div class="support-left-body">
                    <div class="support-left-content-tab active" id="CustomerTab">
                        <div class="support-left-body-child">
                            <div class="support-left-body-head">
                                <h3>Active Chats</h3>

                            </div>
                            <div class="support-left-body-chart">
                                <div class="support-left-body-chart-item unread">
                                    <img src="{{ asset('Asset/Admin/img/men-avatar.jpg') }}" alt="">
                                    <div class="support-left-body-chart-item-contact">
                                        <div>
                                            <h3 class="name">Muhammad Rahim</h3>
                                            <span>rahim@gmail.com</span>
                                        </div>
                                        <span>1:30PM</span>

                                    </div>

                                </div>
                                <div class="support-left-body-chart-item">
                                    <img src="{{ asset('Asset/Admin/img/men-avatar.jpg') }}" alt="">
                                    <div class="support-left-body-chart-item-contact">
                                        <div>
                                            <h3 class="name">Muhammad Rahim</h3>
                                            <span>rahim@gmail.com</span>
                                        </div>
                                        <span>1:30PM</span>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="support-left-body-child">
                            <div class="support-left-body-head">
                                <h3>All Chats</h3>

                            </div>
                            <div class="support-left-body-chart">
                                <div class="support-left-body-chart-item unread">
                                    <img src="{{ asset('Asset/Admin/img/men-avatar.jpg') }}" alt="">
                                    <div class="support-left-body-chart-item-contact">
                                        <div>
                                            <h3 class="name">Muhammad Rahim</h3>
                                            <span>rahim@gmail.com</span>
                                        </div>
                                        <span>1:30PM</span>

                                    </div>

                                </div>
                                <div class="support-left-body-chart-item">
                                    <img src="{{ asset('Asset/Admin/img/men-avatar.jpg') }}" alt="">
                                    <div class="support-left-body-chart-item-contact">
                                        <div>
                                            <h3 class="name">Muhammad Rahim</h3>
                                            <span>rahim@gmail.com</span>
                                        </div>
                                        <span>1:30PM</span>

                                    </div>

                                </div>
                                <div class="support-left-body-chart-item">
                                    <img src="{{ asset('Asset/Admin/img/men-avatar.jpg') }}" alt="">
                                    <div class="support-left-body-chart-item-contact">
                                        <div>
                                            <h3 class="name">Muhammad Rahim</h3>
                                            <span>rahim@gmail.com</span>
                                        </div>
                                        <span>1:30PM</span>

                                    </div>

                                </div>
                                <div class="support-left-body-chart-item">
                                    <img src="{{ asset('Asset/Admin/img/men-avatar.jpg') }}" alt="">
                                    <div class="support-left-body-chart-item-contact">
                                        <div>
                                            <h3 class="name">Muhammad Rahim</h3>
                                            <span>rahim@gmail.com</span>
                                        </div>
                                        <span>1:30PM</span>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="support-left-content-tab" id="DesignerTab">
                        <div class="support-left-body-child">
                            <div class="support-left-body-head">
                                <h3>Active Chats</h3>

                            </div>
                            <div class="support-left-body-chart">
                                <div class="support-left-body-chart-item unread">
                                    <img src="{{ asset('Asset/Admin/img/men-avatar.jpg') }}" alt="">
                                    <div class="support-left-body-chart-item-contact">
                                        <div>
                                            <h3 class="name">Muhammad Saim</h3>
                                            <span>rahim@gmail.com</span>
                                        </div>
                                        <span>1:30PM</span>

                                    </div>

                                </div>
                                <div class="support-left-body-chart-item">
                                    <img src="{{ asset('Asset/Admin/img/men-avatar.jpg') }}" alt="">
                                    <div class="support-left-body-chart-item-contact">
                                        <div>
                                            <h3 class="name">Muhammad Rahim</h3>
                                            <span>rahim@gmail.com</span>
                                        </div>
                                        <span>1:30PM</span>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="support-left-body-child">
                            <div class="support-left-body-head">
                                <h3>All Chats</h3>

                            </div>
                            <div class="support-left-body-chart">
                                <div class="support-left-body-chart-item unread">
                                    <img src="{{ asset('Asset/Admin/img/men-avatar.jpg') }}" alt="">
                                    <div class="support-left-body-chart-item-contact">
                                        <div>
                                            <h3 class="name">Muhammad Rahim</h3>
                                            <span>rahim@gmail.com</span>
                                        </div>
                                        <span>1:30PM</span>

                                    </div>

                                </div>
                                <div class="support-left-body-chart-item">
                                    <img src="{{ asset('Asset/Admin/img/men-avatar.jpg') }}" alt="">
                                    <div class="support-left-body-chart-item-contact">
                                        <div>
                                            <h3 class="name">Muhammad Rahim</h3>
                                            <span>rahim@gmail.com</span>
                                        </div>
                                        <span>1:30PM</span>

                                    </div>

                                </div>
                                <div class="support-left-body-chart-item">
                                    <img src="{{ asset('Asset/Admin/img/men-avatar.jpg') }}" alt="">
                                    <div class="support-left-body-chart-item-contact">
                                        <div>
                                            <h3 class="name">Muhammad Rahim</h3>
                                            <span>rahim@gmail.com</span>
                                        </div>
                                        <span>1:30PM</span>

                                    </div>

                                </div>
                                <div class="support-left-body-chart-item">
                                    <img src="{{ asset('Asset/Admin/img/men-avatar.jpg') }}" alt="">
                                    <div class="support-left-body-chart-item-contact">
                                        <div>
                                            <h3 class="name">Muhammad Rahim</h3>
                                            <span>rahim@gmail.com</span>
                                        </div>
                                        <span>1:30PM</span>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="support-right-container">
                <div class="support-chat-tab" id="ChatTab">
                    <div class="support-chat-tab-head">
                        <img src="{{ asset('Asset/Admin/img/men-avatar.jpg') }}" alt="">
                        <h3>Muhammad Saim</h3>
                    </div>
                    <div class="support-chat-tab-body">
                        <div class="support-chat-tab-group">
                            <span class="chat-badge">Today</span>
                            <div class="chat-group">
                                <div class="chat-item" id="SenderMsg">
                                    <img src="{{ asset('Asset/Admin/img/men-avatar.jpg') }}" alt="">
                                    <div class="chat-item-about">
                                        <div class="chat-item-about-name">
                                            <h3>Saim</h3>
                                            <span>11:53PM</span>
                                        </div>
                                        <div class="chat-item-about-msg">
                                            <p>
                                                Not too bad, just chilling. Have any exciting plans for the weekend?
                                            </p>
                                        </div>

                                    </div>
                                </div>
                                <div class="chat-item" id="ReciverMsg">
                                    <img src="{{ asset('Asset/Admin/img/men-avatar.jpg') }}" alt="">
                                    <div class="chat-item-about">
                                        <div class="chat-item-about-name">
                                            <h3>Saim</h3>
                                            <span>11:53PM</span>
                                        </div>
                                        <div class="chat-item-about-msg">
                                            <p>
                                                Hey there! 😊 How's it going?
                                            </p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="support-chat-tab-group">
                            <span class="chat-badge">Yesterday</span>
                            <div class="chat-group">
                                <div class="chat-item" id="SenderMsg">
                                    <img src="{{ asset('Asset/Admin/img/men-avatar.jpg') }}" alt="">
                                    <div class="chat-item-about">
                                        <div class="chat-item-about-name">
                                            <h3>Saim</h3>
                                            <span>11:53PM</span>
                                        </div>
                                        <div class="chat-item-about-msg">
                                            <p>
                                                Not too bad, just chilling. Have any exciting plans for the weekend?
                                            </p>
                                        </div>

                                    </div>
                                </div>
                                <div class="chat-item" id="ReciverMsg">
                                    <img src="{{ asset('Asset/Admin/img/men-avatar.jpg') }}" alt="">
                                    <div class="chat-item-about">
                                        <div class="chat-item-about-name">
                                            <h3>Saim</h3>
                                            <span>11:53PM</span>
                                        </div>
                                        <div class="chat-item-about-msg">
                                            <p>
                                                Hey there! 😊 How's it going?
                                            </p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="support-chat-tab-footer">
                        <div class="support-chat-tab-footer-emoji" id="emojiButton">
                            <i class="fa-regular fa-face-laugh-wink"></i>
                        </div>
                        <form name="SupportMsgForm" id="SupportMsgForm">
                            <input type="text" name="msg" id="msg" placeholder="Type your message here...">
                            <button type="submit" class="support-chat-tab-footer-send">
                                <i class="ri-send-plane-2-line"></i>
                            </button>
                        </form>

                    </div>
                </div>
                <div class="support-chat-tab active" id="StartChatTab">
                    <div class="support-start-chat-body">
                        <img src="{{ asset('Asset/Admin/img/chat-background.jpg') }}" alt="">
                        <p>
                            Hey! 👋 You have no chats yet. Start a conversation by selecting a contact and saying hello!
                        </p>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection

@section('script')
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.min.js"
        integrity="sha512-hkvXFLlESjeYENO4CNi69z3A1puvONQV5Uh+G4TUDayZxSLyic5Kba9hhuiNLbHqdnKNMk2PxXKm0v7KDnWkYA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="{{ asset('Asset/Admin/js/support.js') }}"></script>
@endsection
