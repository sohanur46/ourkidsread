<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Kids Read: Sparking the Joy of Reading in Low-Income Communities</title>

    <link href="{{ asset('newdesign/portal/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('newdesign/portal/css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('newdesign/portal/css/style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bundel.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css//bundeltwo.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet" />


    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');

        html,
        body {
            font-family: Montserrat;
            /* height: 100vh; */
            background-image: url("https://www.ourkidsread.org/myimg/dashboard/bg.webp");
            background-size: cover;
            background-color: inherit !important;
        }

        .page-wrapper {
            height: 100%;
        }

        .contain {
            display: flex;
            height: 100%;
        }

        .sidebar {
            width: 350px;
            color: #ffffff;
            font-size: 1.6rem;
            transition: all 0.3s ease;
            background: #004750;
            position: relative;
        }

        .sidebar.hidden {
            width: 0;
        }

        .sidebar .logo {
            margin: 20px 0 0 40px;
        }

        ul li,
        .hamburger {
            display: flex;
            align-items: center;
            padding: 15px 50px;
            font-weight: bold;
        }


        ul li:hover {
            background: #C4E8E0;
            color: #004750;
        }

        ul .nav-item-active {
            background: #C4E8E0;
            color: black;

            .list-img {
                filter: invert(100%);
            }

        }

        ul .row:hover {
            background: none;
        }

        .menu span {
            background: inherit;
            border: none;
        }

        span {
            margin-right: 20px;
            border-radius: 50%;
            background: #004750;
            padding: 5px;
            display: flex;
            border: 1px solid #ffffff;
        }

        .chat {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
            margin-top: 50px;
            font-weight: bold;
        }

        .avatar img {
            width: 100%;
        }

        .main {
            flex: 1;
            padding: 24px 50px 50px 36px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .inbox {
            flex: 3;
        }

        .news {
            flex: 2;
        }

        .header {
            font-weight: bold;
        }

        .hambuger {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            font-size: 3rem;
            font-weight: bold;
        }

        .hambuger img {
            width: 20px;
            height: 20px;
        }

        .hambuger span {
            background-color: transparent;
            display: none;
            /* position: absolute;
            top: 5px;
            right: 5px; */
            /* z-index: 30; */
        }

        .dashboard_profile {
            flex: 3;
            position: relative;
            display: flex;
            align-items: center;
        }

        .dashboard_profile .detail {
            position: absolute;
            right: 0;
            top: 25%;
            padding: 10px;
            max-width: 400px;
            width: 100%;
            border-radius: 5px;
            background: #FAFDFC;
            display: flex;
            flex-direction: column;
            row-gap: 10px;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }

        .detail .name {
            font-size: 2rem;
            font-weight: bold;
        }

        .announcement,
        .table,
        .news {
            flex: 2;
            padding: 30px;
            border-radius: 5px;
            background: #FAFDFC;
            display: flex;
            flex-direction: column;
            row-gap: 10px;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }

        .announcement,
        .news {
            position: relative;
        }

        .announcement .icon,
        .news .icon {
            position: absolute;
            top: -20px;
            left: 47%;
        }

        .announcement .icon img,
        .news .icon img {
            width: 25px;
            height: 25px;
        }


        .banner {
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            border-radius: 5px;
            overflow: hidden;
        }

        .inbox .header {
            display: flex;
            align-items: center;
        }

        .banner img {
            width: 450px;
        }

        .main .header {
            font-size: 3rem;
        }

        .schedule {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .schedule_btn {
            background: #ffffff;
            padding: 10px;
            border-radius: 5px;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            font-weight: bold;
        }

        .chat_btn {
            background: #ffffff;
            padding: 10px;
            border-radius: 5px;
            background: #C4E8E0;
            color: #004750;
        }

        @media screen and (max-width: 1500px) {
            .profile-announce {
                margin-bottom: 30px;
            }
        }

        @media screen and (max-width: 1024px) {

            .profile-announce,
            .inbox-news {
                display: block !important;
            }

            .announcement,
            .news,
            .inbox .header {
                margin-top: 50px;
                margin-bottom: 50px;
            }

            .hambuger span {
                display: flex;
            }

            #newHanburger {
                display: flex !important;
            }

            .sidebar.full {
                position: fixed;
                width: 100%;
                height: 100%;
                z-index: 10;
                overflow-y: scroll;
                top: 0px;
            }
        }

        @media only screen and (max-width: 1500px) and (min-width: 500px) {
            .dashboard_profile .detail {
                top: 62%;
            }
        }

        @media screen and (max-width: 500px) {
            .dashboard_profile {
                display: block;
            }

            .dashboard_profile .detail {
                position: relative;
                max-width: inherit;
            }
        }


        /* /// */
        .bi-power {
            width: 60px;
            height: 60px;
            background: #10433e;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            cursor: pointer;
        }

        .bi-power:hover {
            color: red;
        }

        a {
            color: white;
            text-decoration: none;
        }

        .image {
            /* width: 80px;
  height: 80px; */
            /* margin: 20px; */
        }

        .image img {
            /* border-radius: 50% !important; */
            width: 90px;
            height: 90px;
            object-fit: cover;
        }

        #newHanburger {
            display: none;
            position: absolute;
            top: 15px;
            right: 5px;

        }

        #newHanburger img {
            filter: brightness(0) invert(1);


        }
    </style>

</head>

<body>

    <div class="page-wrapper">
        <div class="contain">
            <div class="sidebar">
                <div class="logo">
                    <img src="https://www.ourkidsread.org/public/new/assets/images/logo.svg" alt="logo" />
                </div>

                <div id="newHanburger" class="hamburger">
                    <span><img onClick="toggleSidebar()" src="https://www.ourkidsread.org/myimg/dashboard/hambuger.svg" alt="menu" /></span>
                </div>
                <div class="menu">
                    <ul>
                        <li class="row gap-10">
                            <div class="image d-flex ">
                                @if ($image)
                                @if ($image->image_path)
                                <img class="rounded-circle border border-light" src="{{ $image->image_path }}" alt="" />
                                @else
                                <img class="rounded-circle border border-light" src="https://cdn.vectorstock.com/i/preview-1x/76/27/default-profile-picture-avatar-photo-placeholder-vector-30247627.webp" alt="" />
                                @endif
                                @else
                                <img class="rounded-circle border border-light" src="https://cdn.vectorstock.com/i/preview-1x/76/27/default-profile-picture-avatar-photo-placeholder-vector-30247627.webp" alt="" />
                                @endif

                                <div class="p-3 d-flex text-sm-left text-md-left justify-content-center flex-column ">
                                    <b class="text-white">{{ $user->user_name_first . ' ' . $user->user_name_last }}</b>
                                    <div class="text-light">{{ $user->email }}</div>
                                </div>
                            </div>
                        </li>
                        @if ($user->sms_opt_in_flag)
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            You are opted in for SMS alerts!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @else
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            You are still not opted in for SMS alerts!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        <li class="{{ request()->routeIs(['home-dashboard']) ? 'nav-item-active' : '' }}" onmouseover="changeImageSrc(this)" onmouseout="restoreImageSrc(this)">
                            <span class="menu-icon" data-original-image="https://www.ourkidsread.org/myimg/dashboard/home_w.png">
                                <img src="https://www.ourkidsread.org/myimg/dashboard/home_w.png" alt="home" />
                            </span>
                            <a href="{{route('home-dashboard')}}">Home</a>
                        </li>
                        <li onmouseover="changeImageSrc(this)" onmouseout="restoreImageSrc(this)">
                            <span class="menu-icon" data-original-image="https://www.ourkidsread.org/myimg/dashboard/setting_w.png">
                                <img src="https://www.ourkidsread.org/myimg/dashboard/setting_w.png" alt="onboarding" />
                            </span>
                            <a href="{{route('main-dashboard')}}">OnBoarding</a>
                        </li>
                        <li onmouseover="changeImageSrc(this)" onmouseout="restoreImageSrc(this)">
                            <span class="menu-icon" data-original-image="https://www.ourkidsread.org/myimg/dashboard/traning_w.png">
                                <img src="https://www.ourkidsread.org/myimg/dashboard/training_w.png" alt="traning" />
                            </span>
                            <a href="{{route('training')}}">Training</a>
                        </li>
                        <li onmouseover="changeImageSrc(this)" onmouseout="restoreImageSrc(this)">
                            <span class="menu-icon" data-original-image="https://www.ourkidsread.org/myimg/dashboard/setting_w.png">
                                <img src="https://www.ourkidsread.org/myimg/dashboard/setting_w.png" alt="setting" />
                            </span>
                            Surveys And Tools
                        </li>
                        <li onmouseover="changeImageSrc(this)" onmouseout="restoreImageSrc(this)">
                            <span class="menu-icon" data-original-image="https://www.ourkidsread.org/myimg/dashboard/puzzle_w.png">
                                <img src="https://www.ourkidsread.org/myimg/dashboard/puzzle_w.png" alt="puzzle" />
                            </span>
                            Reading Library
                        </li>
                        <li onmouseover="changeImageSrc(this)" onmouseout="restoreImageSrc(this)">
                            <span class="menu-icon" data-original-image="https://www.ourkidsread.org/myimg/dashboard/puzzle_w.png">
                                <img src="https://www.ourkidsread.org/myimg/dashboard/puzzle_w.png" alt="puzzle" />
                            </span>
                            Games
                        </li>
                        <li onmouseover="changeImageSrc(this)" onmouseout="restoreImageSrc(this)">
                            <span class="menu-icon" data-original-image="https://www.ourkidsread.org/myimg/dashboard/fantasy_w.png">
                                <img src="https://www.ourkidsread.org/myimg/dashboard/fantasy_w.png" alt="fantasy" />
                            </span>
                            Animated Stories
                        </li>
                        <li onmouseover="changeImageSrc(this)" onmouseout="restoreImageSrc(this)">
                            <span class="menu-icon" data-original-image="https://www.ourkidsread.org/myimg/dashboard/book_w.png">
                                <img src="https://www.ourkidsread.org/myimg/dashboard/book_w.png" alt="book" />
                            </span>
                            Free Books
                        </li>
                        <!--<li><span class="menu-icon" data-original-image="https://www.ourkidsread.org/myimg/dashboard/home_w.png"><img src="https://www.ourkidsread.org/myimg/dashboard/home_w.png" alt="home" /></span>Home</li>-->
                        <!--<li><span class="menu-icon" data-original-image="https://www.ourkidsread.org/myimg/dashboard/training_w.png"><img src="https://www.ourkidsread.org/myimg/dashboard/training_w.png" alt="traning" /></span>Traning</li>-->
                        <!--<li><span class="menu-icon" data-original-image="https://www.ourkidsread.org/myimg/dashboard/setting_w.png"><img src="https://www.ourkidsread.org/myimg/dashboard/setting_w.png" alt="home" /></span>Surveys And Tools</li>-->
                        <!--<li><span class="menu-icon" data-original-image="https://www.ourkidsread.org/myimg/dashboard/home_w.png"><img src="https://www.ourkidsread.org/myimg/dashboard/home_w.png" alt="home" /></span>Reading Library</li>-->
                        <!--<li><span class="menu-icon" data-original-image="https://www.ourkidsread.org/myimg/dashboard/puzzle_w.png"><img src="https://www.ourkidsread.org/myimg/dashboard/puzzle_w.png" alt="puzzle" /></span>Games</li>-->
                        <!--<li><span class="menu-icon" data-original-image="https://www.ourkidsread.org/myimg/dashboard/fantasy_w.png"><img src="https://www.ourkidsread.org/myimg/dashboard/fantasy_w.png" alt="fantasy" /></span>Animated Stories</li>-->
                        <!--<li><span class="menu-icon" data-original-image="https://www.ourkidsread.org/myimg/dashboard/book_w.png"><img src="https://www.ourkidsread.org/myimg/dashboard/book_w.png" alt="book" /></span>Free Books</li>-->
                    </ul>
                </div>
                <div class="chat">
                    <div class="avatar"><img src="https://www.ourkidsread.org/myimg/dashboard/avatar.webp" alt="avatar" /></div>
                    <div class="chat_btn">Live Chat Help</div>
                </div>
            </div>
            <div class="main">

                <div class="hambuger">
                    <span><img onClick="toggleSidebar()" src="https://www.ourkidsread.org/myimg/dashboard/hambuger.svg" alt="menu" /></span>
                    <form class="ml-auto" action="{{route('reading-portal-logout')}}" method="post">
                        @csrf
                        <button type="submit" style="background: none; border: none;">
                            <i class="bi bi-power fs-1 rounded-circle"></i>
                        </button>
                    </form>
                </div>
                <div class="hambuger">READING SESSIONS</div>
                <div class="profile-announce" style="display: flex; gap: 30px; flex: 1">
                    <div class="dashboard_profile">
                        <div class="banner"><img src="https://www.ourkidsread.org/myimg/dashboard/anna_banner.png" alt="banner" /></div>
                        <div>
                            <div class="detail">
                                <div class="name">Anna</div>
                                <div class="age" style="display: flex"><span><img src="https://www.ourkidsread.org/myimg/dashboard/age.png" alt="age" style="width: 15px; height: 15px" /></span>9 years old</div>
                                <div class="address" style="display: flex"><span><img src="https://www.ourkidsread.org/myimg/dashboard/location.png" alt="age" style="width: 15px; height: 15px" /></span>New York, NY 3rd Grade</div>
                                <div class="interest" style="display: flex"><span><img src="https://www.ourkidsread.org/myimg/dashboard/love.png" alt="age" style="width: 15px; height: 15px" /></span>Interests: Pizza soccer, bownling</div>
                            </div>
                        </div>
                    </div>
                    <div class="announcement">
                        <div class="icon"><span><img src="https://www.ourkidsread.org/myimg/dashboard/announcement.png" alt="icon" /></span></div>
                        <div class="header" style="text-align: center">Announcements</div>
                        <div>Reading Budy Sessions Paused for the week of May 20, 2024, in between Spring and Summer sessions<br /><br />
                            New Tranining Available: Developing, Rapport with Your Student
                        </div>
                    </div>
                </div>
                <div class="inbox-news" style="display: flex; gap: 30px; margin-top: 30px; flex: 1">
                    <div class="inbox">
                        <div class="schedule">
                            <div class="date">
                                <div style="font-weight: bold">Session Schedule:</div>Tuesday, 5:30 PM EST
                            </div>
                            <div class="schedule_btn">CLICK HERE TO CONNECT TO YOUR SESSION</div>
                        </div>
                        <div class="header"><span><img src="https://www.ourkidsread.org/myimg/dashboard/news.png" alt="inbox_icon" /></span>INBOX</div>
                        <div class="table">
                            <table>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email Address</th>
                                </tr>
                                <tr>
                                    <td>Hillary</td>
                                    <td>Nyakundi</td>
                                    <td>tables@mail.com</td>
                                </tr>
                                <tr>
                                    <td>Lary</td>
                                    <td>Mak</td>
                                    <td>developer@mail.com</td>
                                </tr>
                                <tr>
                                    <td>Hillary</td>
                                    <td>Nyakundi</td>
                                    <td>tables@mail.com</td>
                                </tr>
                                <tr>
                                    <td>Lary</td>
                                    <td>Mak</td>
                                    <td>developer@mail.com</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="news">
                        <div class="icon"><span><img src="https://www.ourkidsread.org/myimg/dashboard/news.png" alt="icon" /></span></div>
                        <div class="header" style="text-align: center">News</div>
                        <div>New Jersey Schools Facing 2024-2025 Budget Cuts</div>
                        <div>________________________</div>
                        <div>New Jersey Schools Facing 2024-2025 Budget Cuts</div>
                        <div>________________________</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function toggleSidebar() {
            var sidebar = document.querySelector('.sidebar');
            sidebar.classList.toggle('hidden');
            sidebar.classList.add("full")
            var htmlBody = document.querySelectorAll('body');
            htmlBody.forEach(function(element) {
                if (!sidebar.classList.contains('hidden')) {
                    element.style.overflow = 'hidden';
                } else {
                    element.style.overflow = '';
                }
            });

        }

        function handleResize() {
            var sidebar = document.querySelector('.sidebar');
            if (window.innerWidth <= 1024) {
                sidebar.classList.add('hidden');
            }

            if (window.innerWidth > 1024) {
                sidebar.classList.remove('hidden');
            }
        }

        window.onload = function() {
            handleResize();
        }

        window.onresize = function() {
            handleResize();
        }
    </script>

    <script>
        // Function to change image src on mouseover
        function changeImageSrc(element) {
            var img = element.querySelector("img");
            var originalImage = img.src;
            var newImage = originalImage.replace("_w.png", "_g.png");
            img.src = newImage;
        }

        // Function to restore original image src on mouseout
        function restoreImageSrc(element) {
            var img = element.querySelector("img");
            var originalImage = img.src;
            var newImage = originalImage.replace("_g.png", "_w.png");
            img.src = newImage;
        }
    </script>


</body>

</html>