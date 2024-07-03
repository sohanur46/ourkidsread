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
</head>
<body>
    <div class="wrapper">
        
          
        <header class="header js-header ">
  
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
            <div class="" style="margin-left: 65px; margin-top: 45px;">
                <h1>Corporate and Foundation Sponsors</h1>
          </div>
            <div class="hero-section">
               <div class="main-sec shell">
                  <div class="left-sec">
                     <h1>Petrucci Family Foundation</h1>
                     <p>Founded in 2006, The Petrucci Family Foundation (PFF) actively responds to the needs of the communities it serves. The PFF mission is to support education
                     and create opportunities for Americans at every stage of and station of life. In 2012, The PFF Collection of African American Art was founded as a targeted 
                     initiative to bring focus to the full range of African-American visual creativity and its essential place in the history and discourse of American art.</p>
                     <!--<div class="hero__actions">-->
                     <!--   <a href="#" class="btn btn--primary">LEARN MORE ABOUT THE OKR – RANGAROK PARTNERSHIP</a>-->
                     <!--</div>-->
                  </div>
                  <div class="right-sec">
                     <img src="{{ asset('frontend/img/ragnaroklogo.png')}}" alt="">
                  </div>
               </div>
            </div>
            <div class="hero-section" style="background-color: white;">
               <div class="main-sec shell">
                  <div class="left-sec">
                     <h1>Ragnarok Technologies</h1>
                     <p>Ragnarok Technologies is a Reston, VA based company providing a wide range of IT focused services to their customers, including Systems Engineering, Software Development, Program Management and Cybersecurity. Ragnarok has partnered with Our Kids Read to provide financial support as well as volunteers for OKR's diverse book donations and literacy programs in Maryland and Virginia.</p>
                     <!--<div class="hero__actions">-->
                     <!--   <a href="#" class="btn btn--primary">LEARN MORE ABOUT THE OKR – RANGAROK PARTNERSHIP</a>-->
                     <!--</div>-->
                  </div>
                  <div class="right-sec">
                     <img src="{{ asset('frontend/img/hero.png')}}" alt="">
                  </div>
               </div>
            </div>
            <div class="hero-section" style="background-color: white;">
               <div class="main-sec shell">
                  <div class="left-sec">
                     <h1>Cocinas y Calaveras LLC</h1>
                     <p>Founded by Jesse Gomez with partner/chef Jose Acevedo, Cocinas y Calaveras restaurant group takes pride in offering a traditional yet contemporary 
                        experience that has paved the way for elevated Mexican cuisine that is accessible to everyone. Cocinas y Calaveras is honored that Mercado Los Angeles 
                        and Yxta Cocina Mexican were selected to be included in the MICHELIN Guide California 2021!
                     </p>
                     <!--<div class="hero__actions">-->
                     <!--   <a href="#" class="btn btn--primary">LEARN MORE ABOUT THE OKR – RANGAROK PARTNERSHIP</a>-->
                     <!--</div>-->
                  </div>
                  <div class="right-sec">
                     <img src="{{ asset('frontend/img/cocinas (1).png')}}" alt="">
                  </div>
               </div>
            </div>
            <div class="hero-section" style="background-color: white;">
               <div class="main-sec shell">
                  <div class="left-sec">
                     <h1>Connexsion</h1>
                     <p>Connexsion is a new breed of IT Services firm: a company that believes its worth and stature is solely based on its ability to surpass their client’s 
                        expectation. Connexsion leverages expertise in technology consulting, solutions integration, and infrastructure solutions to help take the hassle out of 
                        managing and working with technology, allowing you to focus more time on your business and less on IT.  Connexsion solutions helps small businesses solve 
                        critical business challenges, find the right technology, reduce telecommunications cost, and create an efficient, effective, and productivity business 
                        that helps your business look big and at the same time saves you money.
                     </p>
                     <!--<div class="hero__actions">-->
                     <!--   <a href="#" class="btn btn--primary">LEARN MORE ABOUT THE OKR – RANGAROK PARTNERSHIP</a>-->
                     <!--</div>-->
                  </div>
                  <div class="right-sec">
                     <img src="{{ asset('frontend/img/cocinas (2).png')}}" alt="">
                  </div>
               </div>
            </div>
            <div class="hero-section" style="background-color: white;">
               <div class="main-sec shell">
                  <div class="left-sec">
                     <h1 style="line-height: 45px;">Steven and Laura Mayer Family Foundation</h1>
                     <p>Steve And Laura Mayer Family Foundation is a Private Grantmaking Foundation located in Garden City, NY.  This organization is an independent organization and not affiliated with a larger national or regional group of organizations.
Since 2016, Steve And Laura Mayer Family Foundation has awarded over 186 individual grants totaling over $2,709,116.

                     </p>
                     <!--<div class="hero__actions">-->
                     <!--   <a href="#" class="btn btn--primary">LEARN MORE ABOUT THE OKR – RANGAROK PARTNERSHIP</a>-->
                     <!--</div>-->
                  </div>
                  <div class="right-sec">
                     <img src="{{ asset('frontend/img/steven-and-laura-png-logo.png')}}" alt="">
                  </div>
               </div>
            </div>
            <style>
               .main .hero-section
               {
               padding: 8rem 0 8rem 0;
               }
            </style>
            <div class="desc-section">
               <div class="main-sec shell">
                  <div class="heading-sec">
                     <h1>Individual Sponsors</h1>
                     <div class="divider"></div>
                     <div class="top-sec">
                        <div class="card">
                           <h2>Foundational Donors</h2>
                           <img src="{{ asset('blogassets/img/card-1.png  ')}}  " alt="">
                           <h2>$25K and up</h2>
                           <p>JAHMAL LAKE</p>
                        </div>
                        <div class="card">
                           <h2>School Sponsors</h2>
                           <img src="{{ asset('blogassets/img/cars-2.png  ')}}  " alt="">
                           <h2>$1K - $25K</h2>
                           <p>JERNEE AND DAVID BRAMBLE</p>
                           <p>SHAWN AND PETIYA COLE</p>
                           <p>MITESH PATEL</p>
                        </div>
                        <div class="card">
                           <h2>Library Sponsors </h2>
                           <img src="{{ asset('blogassets/img/card-3.png ')}}  " alt="">
                           <h2>$250 - $1K</h2>
                           <p>ADAM ARONSON</p>
                           <p>LAURA BANES</p>
                           <p>ANTHONY BOSWELL</p>
                           <p>CARLA CHOW</p>
                           <p>JOHN CLARKSON</p>
                           <p>JONATHAN DUBIN</p>
                           <p>ELISA DURRETTE</p>
                           <p>JAFFET GHEBRETNSAE</p>
                           <p>ELIZABETH GUMMERSON</p>
                           <p>RUBEN ILLESCAS</p>
                           <p> JENKINSANTHONY</p>
                           <p>ANTHONY JENKINS</p>
                           <p>JED KWARTLER</p>
                           <p>ANDRIA LAKE</p>
                           <p>LESLIE MARGOLIS</p>
                           <p>FELIX ODIGIE</p>
                           <p>YVETTE PASQUA</p>
                           <p>JEFFREY SIEGEL</p>
                           <p>MYRLEEN SPRINGER</p>
                           <p>CHRISTINE SHAW</p>
                        </div>
                     </div>
                     <div class="middle-sec">
                        <div class="sec-1">
                           <h2>Student Sponsors</h2>
                           <img src="{{ asset('blogassets/img/kids.png  ')}}  " alt="">
                           <h2>$5 - $100</h2>
                        </div>
                        <div class="sec-2">
                           <p>Comlan ANANI</p>
                           <p>Sasha Alston</p>
                           <p>Stephanie Armbruster</p>
                           <!-- <p>Adam Aronson</p> -->
                           <p>Audrey Austin</p>
                           <p>Antonia Baker</p>
                           <p>Denise Baker</p>
                           <p>Mykia Baxter</p>
                           <p>Johnnie Blackwell</p>
                           <p>Jason Bouleris</p>
                           <p>Corregan Brown</p>
                           <p>Stan Buch</p>
                           <p>Misha Charles</p>
                           <p>Nameundefined Contact</p>
                           <p>SHAMIKA DOWELL</p>
                           <p>Courtney-Rose Dantus</p>
                           <p>Jennifer Dickey</p>
                           <p>Denise Doig</p>
                           <p>Jonathan Dubin</p>
                           <p>Le Dunne</p>
                           <p>AMY FRANEY-CUNNINGHAM</p>
                           <p>Vanessa Fernandez</p>
                           <p>Edward Fields</p>
                           <p>Erik Franey</p>
                           <p>Jason Friedman</p>
                        </div>
                        <div class="sec-3">
                           <p>Sowmya Gadang</p>
                           <p>Filip Galiza</p>
                           <p>Heitham Ghariani</p>
                           <!-- <p>Jaffet Ghebretnsae</p> -->
                           <p>Mureen Gibson</p>
                           <p>Anish Goel</p>
                           <p>Robert Harbick</p>
                           <p>David Harris</p>
                           <p>Nolen Harris</p>
                           <p>Christopher Hoffmann</p>
                           <p>Paul Hunter</p>
                           <p>Carl II</p>
                           <p>Marcus Jackson</p>
                           <p>Rhonda Jones</p>
                           <p>Cindy Katz</p>
                           <p>Lisa Kelley</p>
                           <p>Suzanne Korff</p>
                           <p>Mary Langhorne</p>
                           <p>Katina Lillios</p>
                           <p>Tania Mabrey</p>
                           <p>Sarah Mackenzie</p>
                           <p>Harlan Magruder</p>
                           <p>Roger Mahach</p>
                           <p>David Marshall</p>
                           <p>Patrick McColloch</p>
                           <p>Calpurnia McLean</p>
                        </div>
                        <div class="sec-4">
                           <p>Dana Mcallister</p>
                           <p>Catherine Michaely</p>
                           <p>Benjy Milder</p>
                           <p>Aria Miles</p>
                           <p>Jenna Morrison</p>
                           <p>David Moss</p>
                           <p>Bathabile Mthombeni</p>
                           <p>Umar Munroe</p>
                           <p>Tricia Newell</p>
                           <p>Christin Park</p>
                           <p>Marquis Parker</p>
                           <p>Karee Payton</p>
                           <p>Martha Pitts</p>
                           <p>Keesha Ramsue</p>
                           <!-- <p>Our Read</p> -->
                           <p>Neemu Reddy</p>
                           <p>Sarah Reynolds</p>
                           <p>Robert Rounds</p>
                           <p>Alissa Sagri</p>
                           <p>Elizabeth Scott</p>
                           <p>Keatley Scroggins</p>
                           <!-- <p>Andria Selders</p> -->
                           <!-- <p>Alfreda Sellers</p> -->
                           <p>Alfreda Diamond</p>
                        </div>
                        <div class="sec-5">
                           <p>Cristina Simpetru</p>
                           <p>Veronica Sirvian</p>
                           <p>Elizabeth Sternberg</p>
                           <p>Ellen Sunshine</p>
                           <p>Cedric Tillman</p>
                           <p>Suhas Vasanth</p>
                           <p>Julie Vishnyakov</p>
                           <p>Larry Wade</p>
                           <p>Clara Woodson</p>
                           <p>hans hsu</p>
                           <p>susan mackenzie</p>
                           <!-- <p>christine shaw</p> -->
                        </div>
                     </div>
                     <div class="last-sec">
                        <div class="left-sec">
                           <div class="img-sec">
                              <img src="{{ asset('blogassets/img/tiger.png  ')}} " alt="">
                           </div>
                           <div class="head">
                              <h2>Special Thanks to<br>My Princeton Tiger Sponsors!</h2>
                           </div>
                        </div>
                        <!-- <div class="middle-secc">
                              <p>Jaffet Ghebretnsae, '99</p>
                              <p>Jahmal Lake, '98</p>
                              <p>Corregan Brown, '97</p>
                          </div> -->
                        <!-- <div class="last-secc">
                              <p>Denise Doig, '99</p>
                          </div> -->
                     </div>
                     <div class="middle-sec">
                        <div class="sec-2">
                            <p>Austin, Audrey '01</p>
                            <p>Baah, Eugene '02</p>
                            <p>Banes, Laura '84</p> 
                            <p>Bramble, David '98</p>
                            <p>Brown, Corregan '96</p>
                            <p>Brooks, Christopher, ‘97</p>
                            <p>Burgess, Granville '69</p>
                            <p>Charles, Misha '01</p>
                           <p>Chow, Carla '11</p>
                           <p>Clarkson, Tom '95</p>
                           <p>Detweiler, Zachary '14</p>
                           <p>Doig, Denise '99</p>
                           <p>Dunn, Gavin '98</p>
                           <p>Durrette, Elisa '98</p>
                           <p>Dash, Adam, ‘12</p>
                            
                        </div>
                        <div class="sec-2">
                            <p>Davis, DuVon, ‘98</p>
                            <p>Faillace, Valerie '98</p>
                            <p>Fernandez, Vanessa Marie '99</p>
                            <p>Fizazi, Kamel '95</p>
                            <p>Ghebretnsae, Jaffet '99</p>
                            <p>Gilmartin, John '98</p>
                            <p>Gomez, Jesse '98</p>
                            <p>Grad, Benjamin '98</p>
                            <p>Gummerson, Elizabeth '06</p>
                            <p>Harris, David '07</p>
                            <p>Helm, Danielle '96</p>
                            <p>Hertzog, Laura '87</p>
                            <p>Hoffmann, Christopher '91</p>
                            <p>High, Tizgel, ‘00</p>
                            <p>Kelley, Lisa '08</p>
                            
                            
                            
                        </div>
                        <div class="sec-3">
                            <p>King, Bobbie '06</p>
                            <p>Korff, Suzanne '06</p>
                            <p>Karen, Julie Kauffman, ‘98</p>
                            <p>Lake, Jahmal '98</p>
                            <p>Lamon, Bonnie Berry '84</p>
                            <p>Lapidus, Richard '98</p>
                            <p>Lokko, Nii '98</p>
                            <p>Levenson, Alec, ‘94</p>
                            <p>Margolis, Leslie '82</p>
                            <p>Marshall, David '93</p>
                            <p>Miles, Aria '14</p>
                            <p>Modu, Anaezi '82</p>
                            <p>Mthombeni, Bathabile '96</p>
                            <p>Murti, Vaidhy '15</p>
                            <p>Nixon, Mark ‘84</p>
                            
                            
                            
                        </div>
                        <div class="sec-4">
                            <p>Ofori, Kevin '13</p>
                            <p>Okusanya, Bayo '20</p>
                             <p>Owens, Shea ‘94</p>
                            <p>Park, Christin '18</p>
                            <p>Parker, Kyndall '06</p>
                            <p>Polacheck , Jeffrey, ‘96</p>
                            <p>Pendergrass, Sabrinia '02</p>
                            <p>Persons, Emily '11</p>
                            <p>Pitts, Martha '01</p>
                            <p>Scroggins, Keatley '97</p>
                            <p>Shaw, Christine '97</p>
                            <p>Siegel, Jeffrey '98</p>
                            <p>Smith, Kristen '03</p>
                            <p>Stern, Hal '84</p>
                            <p>Wood, Brendan '99</p>
                            <p>Yiadom, Maame Yaa A., ‘00</p>
                          
                            
                        </div>
                        <!-- <div class="sec-5">
                           <p>Cristina Simpetru</p>
                           <p>Veronica Sirvian</p>
                           <p>Elizabeth Sternberg</p>
                           <p>Ellen Sunshine</p>
                           <p>Cedric Tillman</p>
                           <p>Suhas Vasanth</p>
                           <p>Julie Vishnyakov</p>
                           <p>Larry Wade</p>
                           <p>Clara Woodson</p>
                           <p>hans hsu</p>
                           <p>susan mackenzie</p>
                           <p>christine shaw</p>
                        </div> -->
                     </div>
                  </div>
               </div>
            </div>
         </main>
      
        <footer class="footer">
            <div class="shell">
                <div class="grid grid--align-center">
                    <div class="grid__col grid__col--6of12">
                        <a href="{{route('home')}}" class="logo logo--footer">
                            <img src="{{ asset('new/assets/images/svg/logo-compact.svg  ')}}  " alt="">
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
        window.__lc.license = 16558326;
        ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
        </script>
</body>
</html>