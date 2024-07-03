<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Kids Read: Sparking the Joy of Reading in Low-Income Communities</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bundel.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bundeltwo.css')}}">
   
</head>
<body >

    <div class="wrapper">

        <header class="header js-header">
     
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

        <section class="section-forms section-forms--copy section-forms--blue">

            <div class="shell shell--small">

                <div class="section__inner">

                    <div class="section__content">

                        <h1 class="section__title">

                            Get Free Diverse Books

                        </h1><!-- /.section__title -->



                        <div class="section__entry">

                            <p>

                                We offer a free diverse book program to our partner schools as well as access to our free Reading Buddies program (extra virtual reading practice for students in your elementary school in the evening).  If you're an existing partner, use this portal to select your free books for the next donation cycle.  To request to be added to the growing list of schools that are Our Kids Read partners, click the "Register" button on this page and we'll get back to you within one (1) business day.

                            </p>

                        </div><!-- /.section__entry -->



                        <div class="section__images">

                            <figure class="section__image">

                                <a href="#">

                                    <img src="{{ asset('new/assets/images/temp/african_hes_got_the_whole_world@2x.jpg ')}}  " alt="" width="192" height="191">

                                </a>

                            </figure><!-- /.section__image -->

                            

                            <figure class="section__image">

                                <a href="#">

                                    <img src="{{ asset('new/assets/images/temp/african_i_am_every_good_thing@2x.jpg ')}}  " alt="" width="192" height="246">

                                </a>

                            </figure><!-- /.section__image -->

                            

                            <figure class="section__image">

                                <a href="#">  
                                    <img src="{{ asset('new/assets/images/temp/native_american_we_are_water_protectors@2x.jpg  ')}} " alt="" width="192" height="195">

                                </a>

                            </figure><!-- /.section__image -->

                        </div><!-- /.section__images -->



                        <!--<div class="section__body">

                            <p>

                                Interested in partnering with Our Kids Read? Please reach out to <a href="#">partnership@ourkidsreadinc.org</a>.

                            </p>

                        </div>--><!-- /.section__body -->

                    </div><!-- /.section__content -->



                    <div class="section__form">

                        <div class="form form--alt form--copy">

                            <form action="https://www.ourkidsread.org/static_page/home/login_do" method="post">

                                <header class="form__head">

                                    <h2>Sign-in</h2>

                                </header><!-- /.form__head -->

   

                                <div class="form__body">

                                    <div class="form__row">

                                        <label for="email" class="form__label">Email</label>

                                        

                                        <div class="form__controls">

                                            <input required="" type="email" class="form__field" name="email" id="email" value="" placeholder="">

                                        </div><!-- /.form__controls -->

                                    </div><!-- /.form__row -->

                                    

                                    <div class="form__row">

                                        <label for="password" class="form__label">Password</label>

                                        

                                        <div class="form__controls">

                                            <input required="" type="password" class="form__field" name="password" id="password" value="" placeholder="">

                                        </div><!-- /.form__controls -->

                                    </div><!-- /.form__row -->



                                    <a href="#" class="form__link">Forgot password</a>

                                </div><!-- /.form__body -->



                                <div class="form__actions">

                                    <input type="submit" class="form__btn btn btn--secondary" value="Sign in">

                                    



                                    <div class="form__actions-bar">

                                        <a href="https://www.ourkidsread.org/create-account" class="lnk lnk--primary lnk--arrow-right lnk--ico-end">

                                            Register Your School Now!<i class="ico-arrow-right"></i>

                                        </a>											

                                    </div><!-- /.form__actions-bar -->

                                </div><!-- /.form__actions -->

                            </form>

                        </div><!-- /.form -->

                    </div><!-- /.section__form -->

                </div><!-- /.section__inner -->

            </div><!-- /.shell -->	

        </section><!-- /.section-forms -->

    </main>
     
     
        <footer class="footer">
     
      <div class="shell">
     
          <div class="grid grid--align-center">
     
              <div class="grid__col grid__col--6of12">
     
                  <a href="home.html" class="logo logo--footer">
     
                      <img src="{{ asset('new/assets/images/svg/logo-compact.svg ')}}  " alt="">
     
                  </a><!-- /.logo -->
     
     
     
                  <div class="copyright">
     
                      <p>Copyright 2024Our Kids Read</p>
     
                  </div><!-- /.copyright -->
     
     
     
                  <nav class="nav-footer">
     
                      <ul>
     
                        <!--  <li>
     
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
     
     
     
                           <!-- <li>
     
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