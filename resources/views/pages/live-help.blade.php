<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Kids Read: Sparking the Joy of Reading in Low-Income Communities</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bundel.css')}}">
    <!-- <link rel="stylesheet" href="stylesecond.css"> -->
    <!-- <link rel="stylesheet" href="boostrap.css"> -->
    <style>
        @media (max-width: 1023px) {
            .live-container {
                padding-left: 4.8rem;
                padding-right: 4.8rem;
            }
        }

        .live-container {
            text-align: justify;
            margin: 0 auto;
            margin-bottom: 100px;
            padding: 20px;
        }

        .live-container {
            padding-left: 6.4rem;
            padding-right: 6.4rem;
        }
        .main{
            padding:0px 20px;
        }
        .grid .grid__col--6of12{
            padding:0px 30px;
        }

        @media (max-width: 1023px) {
            .live-container {
                padding:0px !important;
            }
            .shell{
                padding:0px; 
            }
            .header__shell{
                padding:0px 20px;
            }
        }
  

        
        .image-container {
            margin-top: 20px;
            width: 100%;
            justify-content: center;
            display: flex;
        }

        .image-container img {
            width: 250px;
            height: 250px;
            /* You can adjust this height as needed */
            object-fit: contain;
            /* Maintain aspect ratio */
        }
    </style>
</head>

<body>
    <div class="wrapper">


        <header class="header js-header ">

            <div class="shell header__shell">

                <a href="{{ route('home') }}" class="logo">

                    <img src="{{ asset('new/assets/images/logo.svg  ')}}  " alt="">

                </a>



                <div class="header__bar">
                    <nav class="nav-secondary">
                        <ul>
                            <li>
                                <a href="{{ route('free_book_festivals') }}">
                                    Free Book Festivals
                                </a>
                            </li>
                            <li>
                                <a href="https://www.ourkidsread.org/newsletter-24-may">
                                    <i class="ico-arrow-right"></i>
                                    Newsletter
                                </a>
                            </li>
                            <li>
                                <a href="{{route('reading-portal-login-form')}}">
                                    <i class="ico-arrow-right"></i>
                                    Reading Portal
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('volunteer') }}">
                                    <i class="ico-arrow-right"></i>
                                    Volunteer
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('faq') }}">
                                    <i class="ico-arrow-right"></i>
                                    FAQ
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('contact_us') }}">
                                    <i class="ico-arrow-right"></i>
                                    Contact Us
                                </a>
                            </li>
                        </ul>
                    </nav><!-- /.nav-secondary -->

                    <nav class="nav">
                        <ul>
                            <li>
                                <a href="{{ route('home') }}">
                                    <i class="ico-arrow-right"></i>
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('about') }}">
                                    <i class="ico-arrow-right"></i>
                                    About
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('mission') }}">
                                    <i class="ico-arrow-right"></i>
                                    Mission
                                </a>
                            </li>
                            <!--<li>-->
                            <!--    <a href="{{ route('book_collection') }}">-->
                            <!--        <i class="ico-arrow-right"></i>-->
                            <!--        Book Collections-->
                            <!--    </a>-->

                            <!--</li>-->
                            <li>
                                <a href="{{ route('succes_stories') }}">
                                    <i class="ico-arrow-right"></i>
                                    Success Stories
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('sponsors') }}">
                                    <i class="ico-arrow-right"></i>
                                    Sponsors
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('new_letter_sign_up') }}">
                                    <i class="ico-arrow-right"></i>
                                    Newsletter Sign-up
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('donate_now') }}">Donate Now</a>
                            </li>

                        </ul>

                    </nav><!-- /.nav -->

                </div>



                <div class="nav-toggle js-nav-mobile">

                    <span></span>



                    <span></span>



                    <span></span>

                </div><!-- /.nav-toggle -->

            </div><!-- /.shell -->

        </header><!-- /.header -->

        <main class="main">
            <div class="success-stories">
                <div class="privacy-policy__head">
                    <div class="shell">
                        <h1>Live Help</h1>
                    </div><!-- /.shell -->
                </div><!-- /.privacy-policy__head -->
                <div class="live-container">
                    <h2>Our Kids Read offers live chat customer support from 9 AM - 6 PM EST</h2>
                    <div class="image-container">
                        <img src="{{asset('assets/images/chat.png')}}" alt="Centered Image">
                    </div>
                </div>
            </div><!-- /.privacy-policy__body -->
    </div><!-- /.privacy-policy -->


    </main>
    <footer class="footer">
        <div class="shell">
            <div class="grid grid--align-center">
                <div class="grid__col grid__col--6of12">
                    <a href="home.html" class="logo logo--footer">
                        <img src="{{ asset('new/assets/images/svg/logo-compact.svg  ')}}" alt="">
                    </a><!-- /.logo -->

                    <div class="copyright">
                        <p>Copyright 2024 Our Kids Read</p>
                    </div><!-- /.copyright -->

                    <nav class="nav-footer">
                        <ul>
                            <!-- <li>
                                    <a href="#">Privacy Policy</a>
                                </li>
        
                                <li>
                                    <a href="#">Terms and Conditions</a>
                                </li>-->

                            <li>
                                <a href="https://www.ourkidsread.org/contact-us">Contact Us</a>

                                <span class="hidden">Tax ID: XXXXXXXXXXXXXX</span>
                            </li>
                        </ul>
                    </nav><!-- /.nav-footer -->

                    <div class="legal">
                        <p>Our Kids Read is a Federally recognized 501c3 not-for-profit entity, Federal Tax ID # 83-3401365</p>
                    </div><!-- /.legal -->
                </div><!-- /.grid__col -->

                <div class="grid__col grid__col--6of12">
                    <div class="socials">
                        <h6>Follow us</h6>

                        <ul>
                            <li>
                                <a href="https://www.facebook.com/ourkidsreadinc">
                                    <i class="ico-facebook"></i>
                                </a>
                            </li>

                            <li>
                                <a href="https://twitter.com/ourkidsreadinc">
                                    <i class="ico-twitter"></i>
                                </a>
                            </li>

                            <li>
                                <a href="https://www.instagram.com/ourkidsreadinc">
                                    <i class="ico-instagram"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="ico-linkedin"></i>
                                </a>
                            </li>

                            <!--<li>
                                    <a href="#">
                                        <i class="ico-youtube"></i>
                                    </a>
                                </li>-->
                        </ul>
                    </div><!-- /.socials -->
                </div><!-- /.grid__col -->
            </div><!-- /.grid -->
        </div><!-- /.shell -->
    </footer><!-- /.footer -->

    <!-- Start of LiveChat (www.livechat.com) code -->


    </div>
    <!--<script src="{{ asset('frontend/js/style.js') }}"></script>-->
    <!--<script src="{{ asset('frontend/js/styletwo.js') }}"></script>-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://www.ourkidsread.org/public/new/assets/js/bundle.js"></script>
    <script>
        window.__lc = window.__lc || {};
        window.__lc.license = 16558326;;
        (function(n, t, c) {
            function i(n) {
                return e._h ? e._h.apply(null, n) : e._q.push(n)
            }
            var e = {
                _q: [],
                _h: null,
                _v: "2.0",
                on: function() {
                    i(["on", c.call(arguments)])
                },
                once: function() {
                    i(["once", c.call(arguments)])
                },
                off: function() {
                    i(["off", c.call(arguments)])
                },
                get: function() {
                    if (!e._h) throw new Error("[LiveChatWidget] You can't use getters before load.");
                    return i(["get", c.call(arguments)])
                },
                call: function() {
                    i(["call", c.call(arguments)])
                },
                init: function() {
                    var n = t.createElement("script");
                    n.async = !0, n.type = "text/javascript", n.src = "https://cdn.livechatinc.com/tracking.js", t.head.appendChild(n)
                }
            };
            !n.__lc.asyncInit && e.init(), n.LiveChatWidget = n.LiveChatWidget || e
        }(window, document, [].slice))
    </script>
</body>

</html>