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
            <div class="profile-about">
                <div class="profile-img">
                    <img src="{{ asset('Asset/Admin/img/men-avatar.jpg') }}" alt="">
                </div>
                <div class="profile-content">
                    <h3 class="profile-name">Muhammad Saim</h3>
                    <span class="profile-designation">Administration</span>
                    <div class="profile-location">
                        <p>
                            <i class="fa-solid fa-location-dot"></i>
                            <span>Pakistan</span>
                        </p>
                        <p>
                            <i class="fa-solid fa-city"></i>
                            <span>Karachi, Sindh</span>
                        </p>
                    </div>
                </div>


            </div>
            <div class="profile-tab">
                <div class="profile-tab-child">
                    <h4>About</h4>
                    <div class="line"></div>
                </div>
                <div class="profile-tab-child">
                    <h4>Edit Profile</h4>
                    <div class="line"></div>
                </div>
            </div>
        </div>
        <div class="profile-bottom-container">
            <div class="profile-bottom-left-container">
                <div class="profile-bottom-bio">
                    <div class="bio-heading">
                        <span><span class="me-1">✨</span></span>
                        <h3>About Us :</h3>
                    </div>
                    <p>
                        Hey there! I'm [Your Name], a passionate [Your Profession/Interest] based in [Your Location]. With a
                        love for [Your Hobbies/Interests], I find joy in exploring the beauty of [Your Industry/Field].
                        Whether it's [Specific Skills or Expertise], I'm always eager to learn and grow.

                        I specialize in [Your Specialization/Area of Expertise], bringing creativity and innovation to every
                        project. From [Key Achievements] to [Notable Experiences], my journey has been a thrilling ride, and
                        I'm excited to share it with you.
                    </p>
                </div>
                <div class="profile-bottom-contact">
                    <div class="contact-heading">
                        <h3>Contact Information :</h3>
                    </div>
                    <div class="contact-body">
                        <div class="contact-body-child" style="--i:84, 109, 254;">
                            <i class="fa-solid fa-envelope"></i>
                            <p><span>Email :</span> msaimkzmsk2008@gmail.com</p>
                        </div>
                        <div class="contact-body-child" style="--i: 215, 124, 247;">
                            <i class="fa-solid fa-phone"></i>
                            <p><span>Phone :</span> 03452256298</p>
                        </div>
                        <div class="contact-body-child" style="--i:12, 215, 177;">
                            <i class="fa-solid fa-city"></i>
                            <p><span>Location :</span> Karachi, Pakistan</p>
                        </div>
                        <div class="contact-body-child" style="--i:254, 124, 88 ;">
                            <i class="fa-solid fa-location-dot"></i>
                            <p><span>Address :</span> MC 460H Pather Road Green Town Shah Faisal Colony</p>
                        </div>
                    </div>
                </div>
                <div class="profile-bottom-social">
                    <div class="social-heading">
                        <h3>Social Media :</h3>
                    </div>
                    <div class="social-body">
                        <div class="social-body-child" style="--i:84, 109, 254;">
                            <div class="social-icon">
                                <i class="fa-brands fa-facebook-f"></i>
                            </div>
                            <div class="social-text">
                                <h3>Facebook</h3>
                                <span>facebook.com/ali</span>
                            </div>
                        </div>
                        <div class="social-body-child" style="--i: 215, 124, 247;">
                            <div class="social-icon">
                                <i class="fa-brands fa-x-twitter"></i>
                            </div>
                            <div class="social-text">
                                <h3>Twitter</h3>
                                <span>twitter.com/ali</span>
                            </div>
                        </div>
                        <div class="social-body-child" style="--i:12, 215, 177;">
                            <div class="social-icon">
                                <i class="fa-brands fa-square-instagram"></i>
                            </div>
                            <div class="social-text">
                                <h3>Instagram</h3>
                                <span>instagram.com/ali</span>
                            </div>
                        </div>
                        <div class="social-body-child" style="--i:254, 124, 88 ;">
                            <div class="social-icon">
                                <i class="fa-brands fa-youtube"></i>
                            </div>
                            <div class="social-text">
                                <h3>Youtube</h3>
                                <span>youtube.com/ali</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="profile-bottom-rigth-container">
                <div class="profile-bottom-rigth-heading">
                    <h3>Personal Info</h3>
                </div>
                <div class="profile-bottom-rigth-body">
                    <div class="profile-bottom-body-child">
                        <p>
                            <span>Name :</span>
                            Muhammad Saim
                        </p>


                    </div>
                    <div class="profile-bottom-body-child">
                        <p>
                            <span>Email :</span>
                            msaimkzmsk2008@gmail.com
                        </p>

                    </div>
                    <div class="profile-bottom-body-child">
                        <p>
                            <span>Phone :</span>
                            03452256298
                        </p>
                    </div>
                    <div class="profile-bottom-body-child">
                        <p>
                            <span>Age :</span>
                            30 Years
                        </p>
                    </div>
                    <div class="profile-bottom-body-child">
                        <p>
                            <span>Gender :</span>
                            Male
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
