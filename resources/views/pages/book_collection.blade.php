<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Kids Read: Sparking the Joy of Reading in Low-Income Communities</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bundel.css')}}">
    <!-- <link rel="stylesheet" href="stylesecond.css">
    <link rel="stylesheet" href="boostrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <style>
        .about-area {
        padding: 80px 0;
        }
        .rowg { 
            display: flex; 
            flex-wrap: wrap;
            padding: 0 4px;
            gap: 20px;
            margin-bottom: 40px;
        
        }
        .pb-60 {
            padding-bottom: 60px;
        }
        .padding-zero {
            padding-left: 0px;
            padding-right: 0px;
            width: 100%;
        }
        .hr-bg-green {
            background: #004750;
        }
        .sub-title {
            font-family: inherit;
        }
        .sub-title {
            font-family: inherit;
        }
        h2 {
            font-size: 42px;
            line-height: 40px;
            
        }
        a{
            text-decoration: none;
            color: black;
        }
        .sub-hr {
            border-color: transparent;
            height: 3px;
            margin-left: 0px;
            width: 100%;
            background: #004750;
            margin-top: 0px;
            margin-bottom: 70px;
        }
        .font-500 {
            font-weight: 500;
        }
        .col-md-3g{
            width: 25%;
        }
        .col-md-9g{
            width: 73%;
        }
        .hr-bg-green {
            background: #004750;
        }
        .hr-bg {
            border-color: transparent;
            height: 3px;
            max-width: 100px;
            margin-left: 0px;
            margin-top: 35px;
            margin-bottom: 30px;
        }
        body.collection-home, body.collection {
            background-color: #bfe9e1;
        }
        @media (max-width: 1100px){
            .col-md-3g{
            width: 33%;
        }
        .col-md-9g{
            width: 63%;
        }
        }
        @media (max-width: 767px){
            .col-md-3g{
            width: 60%;
        }
        .col-md-9g{
            width: 100%;
        }
        }
        @media (min-width: 768px){
        .sub-title-box {
            width: 95%;
            margin: auto;
        }
        .sub-page .sub-title-box {
            width: 100%;
        }
        }
    </style>
</head>
<body class="home sub-page collection collection-home">
    <div class="wrapper">
        
          
        <header class="header js-header ">
  
            <div class="shell header__shell">
   
                <a href="{{ route('home') }}" class="logo">
           
                    <img src="{{ asset('new/assets/images/logo.svg  ')}} " alt="">
           
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
        
            <section id="mission-area" class="mission-section about-area">
                
                <div class="shell">
                    <div class="row pb-60">
                        <div class="col-md-12 padding-zero">
                            <div class="sub-title-box">
                                <h2 class="sub-title" style="padding-bottom: 10px;"> Book collections </h2>
                                <hr class="sub-hr">
                            </div> 
                        </div>
                        <div class="col-md-12 padding-zero">
                            <div class="sub-title-box">
                                <h2 class="font-500 sub-sub-font">Our Kids Read Diverse Book Collections</h2>
                                <hr class="hr-bg hr-bg-yellow">
                                <p>At the behest of our partner schools, and in partnership with K-12 Advisory Council, Our Kids Read has created a number of diverse book "collections".</p>
                                <p>The collections below are just a sample from each category, become an Our Kids Read partner school to explore our full library.</p>
                            </div>
                        </div>
                    </div>
                    <div class="rowg pb-30 row-center">
                        <div class="col-md-3g  ">
                            <div class="about-image">
                                <!--https://www.ourkidsread.org/okr-collection-unity-->
                                <div class="btn"><img src="{{ asset('frontend/img/collection8.png')}}" class="img-responsive" alt="Image"></div>
                            </div>
                        </div>
                        <div class="col-md-9g">
                            <div class="about-content padding-text">
                                <div id="btn"><h2 class="font-500 sub-title">Unity Collection</h2></div>
                                <hr class="hr-bg hr-bg-green">
                                <p>Books in this collection explore the concepts of unity, love and cooperation. In this uncertain world it's always good to know that the power of fellowship with the right individuals or communities can be healing and nurturing.</p>
                            </div>
                        </div>
                    </div>
                    <div class="rowg pb-30 row-center">
                        <div class="col-md-3g  ">
                            <div class="about-image">
                                <!--https://www.ourkidsread.org/okr-collection-sickle-cell-->
                                <div class="btn"><img src="{{ asset('frontend/img/collection1.png')}}" class="img-responsive" alt="Image"></div>
                            </div>
                        </div>
                        <div class="col-md-9g">
                            <div class="about-content padding-text">
                                <div class="btn"><h2 class="font-500 sub-title">Sickle Cell Anemia Collection</h2></div>
                                <hr class="hr-bg hr-bg-green">
                                <p>Books in this collection tell the story of what sickle cell anemia is, how best to treat it and how to support those around you with the condition. The collection contains fiction and non-fiction books for children 0-18 including activity and picture books.</p>
                            </div>
                        </div>
                    </div>
                    <div class="rowg pb-30 row-center">
                        <div class="col-md-3g  ">
                            <div class="about-image">
                                <!--https://www.ourkidsread.org/okr-collection-grief-loss-->
                                <div class="btn"><img src="{{ asset('frontend/img/collection2.png')}}" class="img-responsive" alt="Image"></div>
                            </div>
                        </div>
                        <div class="col-md-9g">
                            <div class="about-content padding-text">
                                <div class="btn"><h2 class="font-500 sub-title">Grief / Loss Collection</h2></div>
                                <hr class="hr-bg hr-bg-green">
                                <p>Books in this collection help young readers deal with grief and loss, especially related to the loss of a pet, friend or family member.</p>
                            </div>
                        </div>
                    </div>
                    <div class="rowg pb-30 row-center">
                        <div class="col-md-3g  ">
                            <div class="about-image">
                                <!--https://www.ourkidsread.org/okr-collection-contemporary-leaders-->
                                <div class="btn"><img src="{{ asset('frontend/img/collection3.png')}}" class="img-responsive" alt="Image"></div>
                            </div>
                        </div>
                        <div class="col-md-9g">
                            <div class="about-content padding-text">
                                <div class="btn"><h2 class="font-500 sub-title">Contemporary leaders</h2></div>
                                <hr class="hr-bg hr-bg-green">
                                <p>Our Contemporary Leaders Collection focuses on people of color who blazed or are blazing a trail through the late 20th and 21st centuries.</p>
                            </div>
                        </div>
                    </div>
                    <div class="rowg pb-30 row-center">
                        <div class="col-md-3g  ">
                            <div class="about-image">
                                <!--https://www.ourkidsread.org/okr-collection-two-moms-->
                                <div class="btn"><img src="{{ asset('frontend/img/collection4.png')}}" class="img-responsive" alt="Image"></div>
                            </div>
                        </div>
                        <div class="col-md-9g">
                            <div class="about-content padding-text">
                                <div class="btn"><h2 class="font-500 sub-title">My Two Moms</h2></div>
                                <hr class="hr-bg hr-bg-green">
                                <p>Books in this collection feature main characters who are lucky enough to have two moms! <br> Normalizing the concept of gay couples as parents is the objective of these selections.</p>
                            </div>
                        </div>
                    </div>
                    <div class="rowg pb-30 row-center">
                        <div class="col-md-3g  ">
                            <div class="about-image">
                                <!--https://www.ourkidsread.org/okr-collection-two-dads-->
                                <div class="btn"><img src="{{ asset('frontend/img/collection5.png')}}" class="img-responsive" alt="Image"></div>
                            </div>
                        </div>
                        <div class="col-md-9g">
                            <div class="about-content padding-text">
                                <div class="btn"><h2 class="font-500 sub-title">My Two Dads</h2></div>
                                <hr class="hr-bg hr-bg-green">
                                <p>"My father gave me the greatest gift anyone could give a person: he believed in me." - Jim Valvano. This series explores books where the main characters are lucky enough to have two dads!</p>
                            </div>
                        </div>
                    </div>
                    <div class="rowg pb-30 row-center">
                        <div class="col-md-3g  ">
                            <div class="about-image">
                                <div class="btn"><img src="{{ asset('frontend/img/collection7.png')}}" class="img-responsive" alt="Image"></div>
                            </div>
                        </div>
                        <div class="col-md-9g">
                            <!--https://www.ourkidsread.org/okr-collection-native-american-->
                            <div class="about-content padding-text">
                                <div class="btn"><h2 class="font-500 sub-title">Native American / Indigenous People</h2></div>
                                <hr class="hr-bg hr-bg-green">
                                <p>"Native American / Indigenous people were some of the first people in what we now call North America. The Indigenous people in America were largely displaced through the genocide of the European settlers. These books atrempt to show the beauty of the Indigenous culture and highlight their struggle over the years.</p>
                            </div>
                        </div>
                    </div>
                    <div class="rowg pb-30 row-center">
                        <div class="col-md-3g  ">
                            <div class="about-image">
                                <div class="btn"><img src="{{ asset('frontend/img/collection6.png')}}" class="img-responsive" alt="Image"></div>
                            </div>
                        </div>
                        <div class="col-md-9g">
                            <!--https://www.ourkidsread.org/okr-collection-bi-racial-me-->
                            <div class="about-content padding-text">
                                <div class="btn"><h2 class="font-500 sub-title">Bi-Racial Me!</h2></div>
                                <hr class="hr-bg hr-bg-green">
                                <p>Books for children with Black Dad and White Mom, or Asian Mom and Black Dad </p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </section>
            
            <footer class="footer">
                <div class="shell">
                    <div class="grid grid--align-center">
                        <div class="grid__col grid__col--6of12">
                            <a href="home.html" class="logo logo--footer">
                                <img src=" {{ asset('new/assets/images/svg/logo-compact.svg ')}}  " alt="">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://www.ourkidsread.org/public/new/assets/js/bundle.js"></script>
    <script>
        window.__lc = window.__lc || {};
        window.__lc.license = 16558326;
        ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
    </script>
</body>
</html>