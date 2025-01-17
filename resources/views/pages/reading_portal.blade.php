<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">-->

    <title>Our Kids Read: Sparking the Joy of Reading in Low-Income Communities</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bundel.css') }}">
    
    <style>
    
    body {
        background-color: #bfe9e1 !important;
    }
        
        .header__shell {
            align-items: center !important;
        }
        
        .header__bar {
            height: 80px;
            font-size: 3rem;
        }
        
        .modal {
          display: none; 
          position: fixed; 
          z-index: 1; 
          left: 0;
          top: 0;
          width: 100%; 
          height: 100%; 
          overflow: auto;
          background-color: rgb(0,0,0); 
          background-color: rgba(0,0,0,0.4); 
        }
        
        .modal-content {
          background-color: #fefefe;
          margin: 15% auto; 
          padding: 20px;
          border: 1px solid #888;
          width: 80%; 
        }
        
        .close {
          color: #aaa;
          float: right;
          font-size: 28px;
          font-weight: bold;
        }
        
        .close:hover,
        .close:focus {
          color: black;
          text-decoration: none;
          cursor: pointer;
        }
        
        .tab {
          overflow: hidden;
          background-color: #f1f1f1;
        }
        
        .tabcontent {
            padding: 12px;
        }
        
        .tabcontent>p {
            margin-bottom: 50px;
        }
        
        /* Style the buttons inside the tab */
        button {
          background-color: inherit;
          float: left;
          border: none;
          outline: none;
          cursor: pointer;
          padding: 12px;
          transition: 0.3s;
          font-size: 17px;
        }
        
        /* Change background color of buttons on hover */
        button:hover {
          background-color: #004750;
          color: #ffffff;
        }
        
        /* Create an active/current tablink class */
        button.active {
          background-color: #004750;
          color: #ffffff;
        }
        
        .element {
            position: relative;
            width: 45%;
            padding: 30px;
        }
        
        .element span {
            position: absolute;
            top: -30px;
            left: 40%;
            border-radius: 50%;
            background-color: #a7dcd1;
            padding: 10px;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
        }
        
        .element img {
            width: 30px;
            height: 30px;
        }
        
        .tabcontent .element {
            border: 1px solid #9DC8C0;
            border-style: dashed;
        }

    </style>
</head>

<body>
    
    <!--@if(session('alert'))-->
        <!--<div class="alert alert-success">-->
        <!--    {{ session('alert') }}-->
        <!--</div>-->
        
    <!--    <div id="myModal" class="modal">-->
    <!--      <div class="modal-content">-->
    <!--        <span class="close">&times;</span>-->
    <!--        <p id="alertMessage">{{ session('alert') }}</p>-->
    <!--      </div>-->
    <!--    </div>-->



    <!--@endif-->

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
        
        </header>
    <div class="main">
        <div class="section-forms">
            <div class="shell"> 
                <div class="section__inner">
                    <div class="section__content">
                        <h1 class="section__title">
                            OKR READING PORTAL

                        </h1><!-- /.section__title -->
    
                        <div style="display: flex; flex-direction: column">
                            <div>
                              <button class="tablinks" onclick="openCity(event, 'Overview')" id="defaultOpen">Overview</button>
                              <button class="tablinks" onclick="openCity(event, 'Eligibility')">Eligibility</button>
                              <button class="tablinks" onclick="openCity(event, 'Onboarding_process')">Onboarding Process</button>
                            </div>
                            <div id="Overview" class="tabcontent">
                              <p>Our Reading Portal is a unique online resource for children, teens and adults. The Reading Rortal allows</p>
                              
                              <div style="display: flex; flex-wrap: wrap; gap: 40px 20px; justify-content: space-evenly">
                                  <div class="element">
                                      <span><img src="{{ asset('new/assets/images/reading-portal/social-media.png ')}} " alt="" /></span>
                                      <p>K-5th Grade Students to Connect with reading mentors (their "Reading Buddy") online</p>
                                  </div>
                                  <div class="element">
                                      <span><img src="{{ asset('new/assets/images/reading-portal/console.png ')}} " alt="" /></span>
                                      <p>Play vocabulary-building and other fun literacy games</p>
                                  </div>
                                  <div class="element">
                                      <span><img src="{{ asset('new/assets/images/reading-portal/book_1.png ')}} " alt="" /></span>
                                      <p>Subscription to the Free Physical Book Program (limited spots available)</p>
                                  </div>
                                  <div class="element">
                                      <span><img src="{{ asset('new/assets/images/reading-portal/book_2.png ')}} " alt="" /></span>
                                      <p>Unlimited access to the Reading Portal FREE ONLINE BOOK collection</p>
                                  </div>
                              </div>
                            </div>
                            
                            <div id="Eligibility" class="tabcontent">
                              
                              <p>
                                  <br>
                                  To be eligible to become an Our Kids Read Reading Buddy you must:
<br>
- complete the online Reading Buddies Registration process<br>
- be 13 years of age or older<br>
- pass a criminal background check<br>
- complete the Reading Buddies training program<br>
- partipate in a camera-on video interview<br>
- particpate in a short personality survey<br>
<br>

<b>NOTE</b>: Selection to be a Reading Buddy in the Our Kids Read Reading Buddy program is not guaranteed. We take both the safety and emotional well-being of our students very seriously. Because of that, we are very selective in who we invite to read with our students.
                                  
                              </p>
                            </div>
                            
                            <div id="Onboarding_process" class="tabcontent">
                              
                              <p>Our Reading Portal is a unique online resource for children, teens and adults. The Reading Rortal allows</p>
                            </div>
                        </div>
                    </div><!-- /.section__content -->
    
                    <div class="section__form">
                        <div class="form form--alt form--contact">
                               
                            
                             <!--newslettersignup_info-->
                            <form action="" onsubmit="" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form__body">
                                    <div class="form__row">
                                        <div class="form__row">
                                            
                                                <label for="field-1#" class="form__label">Email</label>
    
                                                <div class="form__controls">
                                                     
                                                    <input type="email" class="form__field" name="email" value="" required>
                                                                                                </div><!-- /.form__controls -->
                                            <!-- /.form__col -->
                                        </div><!-- /.form__cols -->
                                    </div><!-- /.form__row -->
    
                                
    
                                    <div class="form__row">
                                        <div class="form__row">
                                            <label for="field-5#" class="form__label form__label--textarea">Password</label>
    
                                            <div class="form__controls">
                                                    <input type="password" class="form__field" name="password" id="field-4#" value="" required>
                                                                                            </div><!-- /.form__controls -->
    
                                        </div><!-- /.form__row -->
                                    </div><!-- /.form__row -->
                                </div><!-- /.form__body -->
                                
                                <div class="forget" style="margin-top: 10px">Forget Password</div>
    
                                <div class="form__actions" style="display: flex; justify-content: flex-end">
                                    <button type="submit" class="form__btn btn btn--secondary">
                                        Submit
                                    </button>
                                </div>
                                <div>
                                    <button>Create an account</button>
                                </div>
                            </form>
                                            </div><!-- /.form-donations -->
                    </div><!-- /.section__form -->
                    
                </div><!-- /.section__inner -->
            </div><!-- /.shell -->
        </div><!-- /.section-forms -->
        
            
            
    
        <!--<div class="section">-->
        <!--    <div class="shell">-->
        <!--        <div class="section__head">-->
        <!--            <h2>donate</h2>-->
        <!--        </div><!-- /.section__head -->
    
        <!--        <div class="grid">-->
        <!--            <div class="grid__col grid__col--6of12">-->
        <!--                <div class="callout">-->
        <!--                    <div class="callout__image">-->
        <!--                        <img src="{{ asset('new/assets/images/svg/illustration_heart.svg  ')}} " alt="" width="260" height="232">-->
        <!--                    </div><!-- /.callout__image -->
    
        <!--                    <div class="callout__content">-->
        <!--                        <h4>Make a Dollar Donation</h4>-->
    
        <!--                        <p>-->
        <!--                            Semper sed in massa ornare mattis turpis aliquam tellus augue. Morbi rutrum egestas parturient massa justo, convallis ornare. Vulputate nunc.-->
        <!--                        </p>-->
        <!--                    </div><!-- /.callout__content -->
    
        <!--                    <div class="callout__actions">-->
        <!--                        <a href="https://laravel.techizebuilder.net/donate-now" class="btn btn--primary">Give Money</a>-->
        <!--                    </div><!-- /.callout__actions -->
        <!--                </div><!-- /.callout -->
        <!--            </div><!-- /.grid__col -->
    
                    <!--<div class="grid__col grid__col--6of12">
                    <!--    <div class="callout">-->
                    <!--        <div class="callout__image">-->
                    <!--            <img src="{{ asset('new/assets/images/svg/illustration_books.svg  ')}}  " alt="" width="200" height="232">-->
                    <!--        </div><-->
    
                    <!--        <div class="callout__content">-->
                    <!--            <h4>Donate Diverse Books</h4>
    
                    <!--            <p>-->
                    <!--                Semper sed in massa ornare mattis turpis aliquam tellus augue. Morbi rutrum egestas parturient massa justo, convallis ornare. Vulputate nunc.-->
                    <!--            </p>-->
                    <!--        </div>-->
    
                    <!--        <div class="callout__actions">
                    <!--            <a href=" #" class="btn btn--primary">Give Books</a>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
        <!--        </div><!-- /.grid -->
        <!--    </div><!-- /.shell -->
        <!--</div>-->
    </div>
    <footer class="footer">
        <div class="shell">
            <div class="grid grid--align-center">
                <div class="grid__col grid__col--6of12">
                    <a href="home.html" class="logo logo--footer">
                        <img src="{{ asset('new/assets/images/svg/logo-compact.svg  ')}}  "
                            alt="">
                    </a><!-- /.logo -->

                    <div class="copyright">
                        <p>Copyright 2023 Our Kids Read</p>
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://www.ourkidsread.org/public/new/assets/js/bundle.js"></script>
    <script>
        function changeMargin() {
            var content = document.getElementById("myContent");
            if (content.style.marginLeft == "0px") {
                content.style.marginLeft = "-205px"; // Change margin-left to 0px
            } else {
                content.style.marginLeft = "0px"; // Change margin-left to 0px
            }
        }
    </script>
    <script>
        const div = document.querySelector(".page-header1");
        const toggleClass1 = "is-sticky1";

        window.addEventListener("scroll", () => {
            const currentScroll = window.pageYOffset;
            if (currentScroll > 1) {
                div.classList.add(toggleClass1);
            } else {
                div.classList.remove(toggleClass1);
            }
        });
    </script>
          <script>  
        $(document).ready(function(){
    var modal = document.getElementById("myModal");
    var span = document.getElementsByClassName("close")[0];

    // Display the modal
    modal.style.display = "block";

    // Close the modal when the close button is clicked
    span.onclick = function() {
        modal.style.display = "none";
    }

    // Close the modal after 5 seconds
    setTimeout(function(){
        modal.style.display = "none";
    }, 5000);
});

</script>

<script>
    function openCity(evt, tabName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
        tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(tabName).style.display = "block";
      evt.currentTarget.className += " active";
    }
    
    document.getElementById("defaultOpen").click();
</script>

</body>

</html>
