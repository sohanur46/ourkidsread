<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Kids Read: Sparking the Joy of Reading in Low-Income Communities</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bundel.css')}}">
</head>

<body>

    <div class="wrapper">

        <header class="header js-header header--white">

            <div class="shell header__shell">

                <a href="{{ route('home') }}" class="logo">

                    <img src="{{ asset('new/assets/images/logo.svg ')}}  " alt="">

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
            <div class="page-head page-head--coral">
                <div class="shell">
                    <div class="grid grid--full grid--align-center">
                        <div class="grid__col grid__col--6of12">
                            <h1>Our Mission</h1>

                            <p>Our mission is to both promote the love of physical diverse books with children ages 4-12
                                and to use technology to connect our students and mentors with diverse books that
                                encourage, inspire and educate.</p>
                        </div><!-- /.grid__col -->

                        <div class="grid__col grid__col--6of12">
                            <div class="video">
                                <!--<iframe width="420" height="345" src="https://www.youtube.com/embed/r9PeYPHdpNo"></iframe>-->
                                <div style="padding:56.25% 0 0 0;position:relative;"><iframe
                                        src="https://player.vimeo.com/video/711012349?h=ae3356de30&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
                                        frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                                        allowfullscreen=""
                                        style="position:absolute;top:0;left:0;width:100%;height:100%;"
                                        title="Garrett Heights Books-at-Home Book Giveaway and Storytelling.mp4"
                                        data-ready="true"></iframe></div>
                                <script src="https://player.vimeo.com/api/player.js"></script>
                            </div><!-- /.video -->
                        </div><!-- /.grid__col -->
                    </div><!-- /.grid -->
                </div><!-- /.shell -->
            </div><!-- /.page-head -->
            <style>
                .page-head h2 {
                    font-size: 25px;
                    line-height: 5.6rem;
                    font-weight: 500;
                    margin-bottom: 18px;
                    border-bottom: 2px solid #bdbdbd;
                }

                .page-head p {
                    padding-right: 10rem;
                    letter-spacing: 0.01rem;
                    font-size: 1.6rem;
                    line-height: 2.4rem;
                }
            </style>
            <div class="hr">
                <div class="shell">
                    <hr>
                </div><!-- /.shell -->
            </div><!-- /.hr -->

            <div class="page-head page-head--coral">
                <section class="mission-section about-area" id="mission-area">
                    <div class="shell">


                        <div class="grid grid--full grid--align-center">
                            <div class="grid__col grid__col--6of12 padding-zero">
                                <div class="about-image"><img alt="Image" class="img-responsive"
                                        src="{{ asset('/newdesign/images/mission1.png ')}}  "></div>
                            </div>

                            <div class="grid__col grid__col--6of12">
                                <div class="about-content padding-text">
                                    <h2 class="font-500 sub-sub-font">Creating Lifelong Readers</h2>


                                    <p>Reading (and being read to) has been linked to all sort of amazing benefits
                                        including enhancing creativity, releasing endorphins (positive effect on mood),
                                        increased empathy, decreased stress, enhanced memory, improved school
                                        performance and increased vocabulary. In addition, a long-term study by the Anne
                                        E. Casey Foundation (AECF-Early_Warning_Full_Report-2010.pdf) found that
                                        students who were not proficient in reading by the end of third grade were four
                                        times more likely to drop out of high school than proficient readers. The study
                                        further concluded that 88 percent of students who failed to earn a high school
                                        diploma were struggling readers in third grade.
                                        <br>
                                        Our Kids Read is therefore focusing on pre-K through 5th grade as the target for
                                        our reading programs, in hopes of creating life-long readers to can reap the
                                        benefits of reading and all of its benefits.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid--full grid--align-center flex-reverse">
                            <div class="grid__col grid__col--6of12">
                                <div class="about-content padding-text">
                                    <h2 class="font-500 sub-sub-font">Mentorship Through Reading</h2>

                                    <p>The Our Kids Read “Remote Reading Buddies” program connects white and blue collar
                                        professionals, retirees and high school students looking to satisfy their
                                        community service hours with young people in our programs who are behind in
                                        their reading skills. We recruit from large and small companies, looking for
                                        individuals who can spare at least 30 minutes per week to read to a child
                                        (minimum 8-week commitment). Our goal is to expand the Reading Buddies program
                                        exponentially over the next 5 years: 250 Reading Buddies in 2022, 1,000 Reading
                                        Buddies in 2023 and 10,000 Reading Buddies in 2024.</p>
                                </div>
                            </div>

                            <div class="grid__col grid__col--6of12 padding-zero">
                                <div class="about-image"><img alt="Image" class="img-responsive"
                                        src=" {{ asset('/newdesign/images/mission2.png')}} "></div>
                            </div>
                        </div>

                        <!--
                                    <div class="grid grid--full grid--align-center">
                                    <div class="grid__col grid__col--6of12 padding-zero">
                                    <div class="about-image"><img alt="Image" class="img-responsive" src="https://www.ourkidsread.org/assets/newdesign/images/mission3.png" /></div>
                                    </div>
                                    
                                    <div class="grid__col grid__col--6of12">
                                    <div class="about-content padding-text">
                                    <h2 class="font-500 sub-sub-font">Fostering a sense of belonging</h2>
                                    
                                    <p>Our Kids Read donations foster a sense of belonging by showing children that people that look like them have done (and continue) to do amazing things. Feeling like you are part of a powerful positive global community is a natural offshoot of representation. Seeing onself (or images similar to oneself) represented in a positive way in books in a universal conscious and subconscious affirmation.</p>
                                    </div>
                                    </div>
                                    </div>
                                   -->
                    </div>
                </section>
            </div>
            <!--<div class="info__actions">-->
            <!--    <a href="#" class="lnk lnk--primary lnk--ico-end">-->
            <!--        Optional link <i class="ico-arrow-right-white"></i>-->
            <!--    </a>-->
            <!--</div> -->


            <div class="section">
                <div class="shell">
                    <div class="section__head">
                        <h2>donate</h2>
                    </div><!-- /.section__head -->

                    <div class="grid">
                        <div class="grid__col grid__col--6of12">
                            <div class="callout">
                                <div class="callout__image">
                                    <img src=" {{ asset('new/assets/images/svg/illustration_heart.svg ')}}  "
                                        alt="" width="260" height="232">
                                </div><!-- /.callout__image -->

                                <div class="callout__content">
                                    <h4>Make a Dollar Donation</h4>

                                    <p>
                                        Donate a book, a classroom full of books or just a few dollars to support
                                        diversity in your local schools. As Our Kids Read is 100% volunteer funded, 91
                                        cents out of every dollar goes to the book giving program.
                                    </p>
                                </div><!-- /.callout__content -->

                                <div class="callout__actions">
                                    <a href="https://laravel.techizebuilder.net/donate-now"
                                        class="btn btn--primary">Give Money</a>
                                </div><!-- /.callout__actions -->
                            </div><!-- /.callout -->
                        </div><!-- /.grid__col -->

                        <!--<div class="grid__col grid__col--6of12">-->
                        <!--    <div class="callout">-->
                        <!--        <div class="callout__image">-->
                        <!--            <img src=" {{ asset('new/assets/images/svg/illustration_books.svg')}}  "-->
                        <!--                alt="" width="200" height="232">-->
                        <!--        </div>-->

                        <!--        <div class="callout__content">-->
                        <!--            <h4>Donate Diverse Books</h4>-->

                        <!--            <p>-->
                        <!--                Have gently used diverse books you'd like to donate to a child in our schools?-->
                        <!--                We will send you a postage paid self-addressed media mailer for you to send the-->
                        <!--                book to the Our Kids Read sorting depot for sterilization and distribution.-->
                        <!--            </p>-->
                        <!--        </div>-->

                        <!--        <div class="callout__actions">-->
                        <!--            <a href="#" class="btn btn--primary">Give-->
                        <!--                Books</a>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                    </div><!-- /.grid -->
                </div><!-- /.shell -->
            </div><!-- /.section -->
        </main><!-- /.main -->

        <footer class="footer">
            <div class="shell">
                <div class="grid grid--align-center">
                    <div class="grid__col grid__col--6of12">
                        <a href="{{route('home')}}" class="logo logo--footer">
                            <img src="{{ asset('new/assets/images/svg/logo-compact.svg ')}}  " alt="">
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
                            <p>Our Kids Read is a Federally recognized 501c3 not-for-profit entity, Federal Tax ID #
                                83-3401365</p>
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
    </div>

    <!--<script src="{{ asset('frontend/js/style.js') }}"></script>-->
    <!--<script src="{{ asset('frontend/js/styletwo.js') }}"></script>-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://www.ourkidsread.org/public/new/assets/js/bundle.js"></script>
    <script>
        window.__lc = window.__lc || {};
        window.__lc.license = 16558326;
        ; (function (n, t, c) { function i(n) { return e._h ? e._h.apply(null, n) : e._q.push(n) } var e = { _q: [], _h: null, _v: "2.0", on: function () { i(["on", c.call(arguments)]) }, once: function () { i(["once", c.call(arguments)]) }, off: function () { i(["off", c.call(arguments)]) }, get: function () { if (!e._h) throw new Error("[LiveChatWidget] You can't use getters before load."); return i(["get", c.call(arguments)]) }, call: function () { i(["call", c.call(arguments)]) }, init: function () { var n = t.createElement("script"); n.async = !0, n.type = "text/javascript", n.src = "https://cdn.livechatinc.com/tracking.js", t.head.appendChild(n) } }; !n.__lc.asyncInit && e.init(), n.LiveChatWidget = n.LiveChatWidget || e }(window, document, [].slice))
    </script>

</body>

</html>