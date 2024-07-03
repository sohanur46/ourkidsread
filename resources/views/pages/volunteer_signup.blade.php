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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('frontend/css/style.css')}}">

    <link rel="stylesheet" href="{{ asset('frontend/css/bundel.css')}}">

    <link rel="stylesheet" href="{{ asset('frontend/css//bundeltwo.css')}}">

    <style>
    section.loginTemp .form .form-peice {

        margin-top: 0px;

    }

    section.loginTemp .form form .form-group label {

        margin-bottom: 0px;

    }

    .reads_ss {

        margin-bottom: 0px;

    }

    * {

        font-family: unset;

    }

    .reads_ss {

        font-size: 20px;

    }

    .form_state {

        border: none;

        border-radius: 0;

        border-bottom: 1px solid #ddd;

    }
     section.loginTemp
    {
        padding-top:0px !important;
    }


    section.loginTemp .form form .form-group {

        margin-bottom: 0px;
    }

    section.loginTemp .form form input:not([type=submit]) {
        padding: 0px 0px;
    }

    section.loginTemp .form form .form-group {
        height: auto;
    }

    section.loginTemp .form form .CTA {

        margin-top: 10px;
    }

    section.loginTemp .form .form-peice {

        min-height: 539px;

    }



    .container {

        max-width: calc(131.2rem + 6.4rem * 2) !important;

        padding-left: 6.4rem !important;

        padding-right: 6.4rem !important;

        margin: auto !important;

        width: 100% !important;

        margin-top: 0px !important;

        box-sizing: border-box !important;

    }

    .navbar-brand img {

        display: block !important;

        max-width: 140px !important;

        z-index: 100 !important;

        width: 140px !important;

    }



    .second {

        font-family: "NeueHaasGroteskText Pro", Helvetica, sans-serif !important;

        font-weight: 600 !important;

        font-size: 1rem !important;

    }
    </style>



</head>

<body>



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



        <div class="main">


    <section class="loginTemp">
      <div class="containerInner">
        <div id="formHolder">

          <div class="row">

              <!-- Brand Box -->
              <div class="col-sm-6 brand">
                <div class="registerBlock switched">
                  <div class="heading">
                    <h2>Volunteer Signup</h2>
                    <p style="text-transform: capitalize;padding: 0px 20px;">Sign up to volunteer with Our Kids Read!</p>
                  </div>
                  <!--<div class="parent-list">-->
                  <!--  <a href="#">  -->
                  <!--   <div class="pa-list active">-->
                  <!--    <span>01</span>-->
                  <!--    <h3>Basic Registration Information</h3>-->
                  <!--   </div>-->
                  <!--  </a>-->
                  <!--  <a href="#">-->
                  <!--    <div class="pa-list ">-->
                  <!--      <span>02</span>-->
                  <!--      <h3>What Brought You to Us?</h3>-->
                  <!--    </div>-->
                  <!--  </a>-->
                  <!--  <a href="#">-->
                  <!--    <div class="pa-list">-->
                  <!--      <span>03</span>-->
                  <!--      <h3>Agreement</h3>-->
                  <!--    </div>-->
                  <!--  </a>-->
                  <!--  <a href="#">-->
                  <!--    <div class="pa-list">-->
                  <!--      <span>04</span>-->
                  <!--      <h3>Next Steps</h3>-->
                  <!--    </div>-->
                  <!--  </a>-->
                  <!--</div>-->
                  <div class="success-msg">
                      <p>Great! You are one of our members now</p>
                      <a href="#" class="profile">Your Profile</a>
                  </div>
                </div>
              </div>
                <!-- Form Box -->
              <div class="col-sm-6 form">
                <!-- Login Form -->
                <div class="form-peice">
                 <form action="" method="post">
                     
                     {{ csrf_field() }}


                      <!--<h3 class="reads_ss">Parent Register</h3>-->
                      <div class="form-group">
                          <label for="username">Volunteer First Name</label>
                          <input type="text"  name="name_first" id="fname" required>
                      </div>
                      <div class="form-group">
                          <label for="username">Volunteer Last Name</label>
                          <input type="text" name="name_last" id="lname" required>
                      </div>
                      <div class="form-group">
                          <label for="username">Email</label>
                          <input type="text" name="email" id="email" required>
                      </div>

                     <!-- <div class="form-group">
                          <label for="username">Password</label>
                          <input type="password" name="password" id="password" required>
                      </div>-->
                      <div class="form-group">
                          <label for="loginemail">City</label>
                          <input type="text" name="city" id="city" required>
                      </div>
                      <div class="form-group">
                          <label for="loginstate">State</label>

                          <select class="form-control form_state" required="" name="state">
                            		<option value="">--Select State--</option>
                            		<option value="Alabama">Alabama</option>
                            		<option value="Alaska">Alaska</option>
                            		<option value="Microsoft">Arizona</option>
                            		<option value="Arkansas">Arkansas</option>
                            		<option value="California">California</option>
                            		<option value="Colorado">Colorado</option>
                            		<option value="Connecticut">Connecticut</option>
                            		<option value="Delaware">Delaware</option>
                            		<option value="Florida">Florida</option>
                            		<option value="Georgia">Georgia</option>
                            		<option value="Hawaii">Hawaii</option>
                            		<option value="Idaho">Idaho</option>
                            		<option value="Illinois">Illinois</option>
                            		<option value="Indiana">Indiana</option>
                            		<option value="Iowa">Iowa</option>
                            		<option value="Kansas">Kansas</option>
                            		<option value="Kentucky">Kentucky</option>
                            		<option value="Louisiana">Louisiana</option>
                            		<option value="Maine">Maine</option>
                            		<option value="Maryland">Maryland</option>
                            		<option value="Massachusetts">Massachusetts</option>
                            		<option value="Michigan">Michigan</option>
                            		<option value="Minnesota">Minnesota</option>
                            		<option value="Mississippi">Mississippi</option>
                            		<option value="Missouri">Missouri</option>
                            		<option value="Montana">Montana</option>
                            		<option value="Nebraska">Nebraska</option>
                            		<option value="Nevada">Nevada</option>
                            		<option value="New Hampshire">New Hampshire</option>
                            		<option value="New Jersey">New Jersey</option>
                            		<option value="New Mexico">New Mexico</option>
                            		<option value="New York">New York</option>
                            		<option value="North Carolina">North Carolina</option>
                            		<option value="North Dakota">North Dakota</option>
                            		<option value="Ohio">Ohio</option>
                            		<option value="Oklahoma">Oklahoma</option>
                            		<option value="Oregon">Oregon</option>
                            		<option value="Pennsylvania">Pennsylvania</option>
                            		<option value="Rhode Island">Rhode Island</option>
                            		<option value="South Carolina">South Carolina</option>
                            		<option value="South Dakota">South Dakota</option>
                            		<option value="Tennessee">Tennessee</option>
                            		<option value="Texas">Texas</option>
                            		<option value="Utah">Utah</option>
                            		<option value="Vermont">Vermont</option>
                            		<option value="Virginia[D]">Virginia[D]</option>
                            		<option value="Washington">Washington</option>
                            		<option value="West Virginia">West Virginia</option>
                            		<option value="Wisconsin">Wisconsin</option>
                            		<option value="Wyoming">Wyoming</option>


                            </select>
                      </div>

                      <div class="form-group">
                          <label for="loginemail">ZipCode</label>
                          <input type="text" name="zip" id="zip" required>
                      </div>
                     <div class="form-group">
                          <label for="loginemail">Cell Phone Number</label>
                          <input type="text" name="phone_cell" id="phone_cell" required>
                      </div>
                      <div class="form-group">
                          <label for="loginstate">Services</label>
                          <select class="form-control form_state" required="" name="service">
                        	<option value="">--Select Service--</option>
                        	<option value="Legal">Legal</option>
                            <option value="Accounting">Accounting</option>
                            <option value="Graphic Design">Graphic Design</option>
                            <option value="Programming/Develop">Programming/Develop</option>
                            <option value="UI/UX">UI/UX</option>
                            <option value="Fundraising">Fundraising</option>
                            <option value="School Partnerships">School Partnerships</option>
                            <option value="Project Management">Project Management</option>
                            <option value="CRM">CRM</option>
                            <option value="Publisher Partnerships">Publisher Partnerships</option>
                            <option value="Children's Book Advisory Council">Children's Book Advisory Council</option>


                        </select>

                      </div>
                      <div class="form-group">
                          <label for="loginemail">Comments</label>
                          <textarea name="comments" id="comments"  class="form-control"></textarea>
                      </div>
                      <div class="CTA">
                            <input type='submit' value="Register" class='login'>
                      </div>

                    </form>
                </div><!-- End Login Form -->

              </div>


          </div>

        </div>
      </div>
    </section>

        </div>





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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://www.ourkidsread.org/public/new/assets/js/bundle.js"></script>
    <script src="{{ asset('newdesign/portal/js/slick.min.js') }}"></script>
    <script src="{{ asset('newdesign/portal/js/custom.js') }}"></script>

    <script>
    window.__lc = window.__lc || {};

    window.__lc.license = 16558326;

    ;
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
                n.async = !0, n.type = "text/javascript", n.src = "https://cdn.livechatinc.com/tracking.js",
                    t.head.appendChild(n)
            }
        };
        !n.__lc.asyncInit && e.init(), n.LiveChatWidget = n.LiveChatWidget || e
    }(window, document, [].slice))
    </script>

</body>

</html>