<?php
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;
// require_once 'phpmailer/Exception.php';
// require_once 'phpmailer/PHPMailer.php';
// require_once 'phpmailer/SMTP.php';

// require_once "vendor/autoload.php";

// //PHPMailer Object
// $mail = new PHPMailer(true); //Argument true in constructor enables exceptions

// //From email address and name
// $mail->From = "from@yourdomain.com";
// $mail->FromName = "Full Name";

// //To address and name
// $mail->addAddress("hello@ourkidsreadinc.org", "Recepient Name");
// // $mail->addAddress("recepient1@example.com"); //Recipient name is optional

// //Address to which recipient will reply
// $mail->addReplyTo("hello@ourkidsreadinc.org", "Reply");

// //CC and BCC
// // $mail->addCC("cc@example.com");
// // $mail->addBCC("bcc@example.com");

// //Send HTML or Plain Text email
// $mail->isHTML(false);
// $mail->Subject = "Subject Text";
// $mail->Body = "This is a plain text email";

// try {
// $mail->send();
// echo "Message has been sent successfully";
// } catch (Exception $e) {
// echo "Mailer Error: " . $mail->ErrorInfo;
// }
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
    <style>
        section.loginTemp .form .form-peice{
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
  .reads_ss{
      font-size:20px;
  } 
  .form_state{
   border: none;
    border-radius: 0;
    border-bottom: 1px solid #ddd;   
  }
  section.loginTemp .form form .form-group {
    margin-bottom: 0px; }
    section.loginTemp .form form input:not([type=submit]){padding:0px 0px;}
    section.loginTemp .form form .form-group{height:auto;}
    section.loginTemp .form form .CTA {
    margin-top: 10px;}
    section.loginTemp .form .form-peice {
    min-height: 539px;
}

.container{
  max-width: calc(131.2rem + 6.4rem * 2) !important;
    padding-left: 6.4rem !important;
    padding-right: 6.4rem !important;
    margin: auto !important;
    width: 100% !important;
    margin-top: 0px !important;
    box-sizing: border-box !important;
}
.navbar-brand img{
    display: block !important;
    max-width: 140px !important;
    z-index: 100 !important;
    width: 140px !important;
}

.second{
     font-family: "NeueHaasGroteskText Pro", Helvetica, sans-serif  !important;
  font-weight:600!important;
    font-size: 1rem !important;
}
.area {
    outline: none;
    text-decoration: none !important;
    font-weight: bold;
    padding: 20px 10px;
    text-align: center;
    border: 1px solid;
    transition: all 0.3s;
    color: #004750;
    width: 48%;
    background: #9dd4ca;
}

.area.clicked{
    background: #13474d !important; /* Change to the desired hover background color */
    color: #ffffff !important; /* Change to the desired hover text color */
    cursor: pointer !important;
}

.modal-content {
    background-color: #fefefe;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

@media only screen and (max-width: 1024px) {
  #small {
      display: block !important;
  }
  
  .section__form {
      margin-left: 0 !important;
  }
  
  .area {
      width: 100%;
  }
}
    </style>
   
</head>
<body >
    
        @if(session('alert'))
        
        <div id="myModal" class="modal">
          <div class="modal-content">
            <span class="close">&times;</span>
            <p id="alertMessage">{{ session('alert') }}</p>
          </div>
        </div>
        @endif

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
        <div class="">
            <div class="shell">
                <div class="section__inner">
                    <form action="" onsubmit="" method="POST" enctype="multipart/form-data" id="volunteerForm">
                        <h1 class="section__title">
                            Volunteer
                        </h1><!-- /.section__title -->
    
                        <div class="section__entry">
                            <p>
                                Thanks for thinking of volunteering with <a href="#">Our Kids Read!</a> We are a largely volunteer-run organization and are able to keep our costs low because of the generous donations of time our volunteers make. We look forward to getting to know you and the skills you bring to OKR!
                            </p>
                        </div>
                        <div id="small" style="display: flex">
                            
                            <div class="section__content" style="flex: 1">
                        <!-- /.section__entry -->
                        <div style = "display: flex; flex-wrap: wrap; gap: 20px; justify-content: space-evenly; margin-top: 20px;">
                            <div class="button button--primary area">
                                <input type="hidden" id="v_buddy" name="v_buddy" onclick="toggleColor(this)" value="0">I WANT TO READ TO A STUDENT</input>
                            </div>
                            <div class="button button--primary area">
                                <input type="hidden" id="v_social_media" name="v_social_media" onclick="toggleColor(this)" value="0">VOLUNTEER A SKILL<br/>SOCIAL MEDIA</input>
                            </div>
                            <div class="button button--primary area">
                                <input type="hidden" id="v_marketing" name="v_marketing" onclick="toggleColor(this)" value="0">VOLUNTEER A SKILL<br/>MARKETING</input>
                            </div>
                            <div class="button button--primary area">
                                <input type="hidden" id="v_graphic_design" name="v_graphic_design" onclick="toggleColor(this)" value="0">VOLUNTEER SKILL<br/>GRAPHIC DESIGN</input>
                            </div>
                            <div class="button button--primary area">
                                <input type="hidden" id="v_ui_ux" name="v_ui_ux" onclick="toggleColor(this)" value="0">VOLUNTEER A SKILL<br/>UI/UX RESEARCH/DEV</input>
                            </div>
                            <div class="button button--primary area">
                                <input type="hidden" id="v_legal" name="v_legal" onclick="toggleColor(this)" value="0">VOLUNTEER A SKILL<br/>LEGAL</input>
                            </div>
                            <div class="button button--primary area">
                                <input type="hidden" id="v_accounting" name="v_accounting" onclick="toggleColor(this)" value="0">VOLUNTEER A SKILL<br/>ACCOUNTING </input>
                            </div>
                            <div class="button button--primary area">
                                <input type="hidden" id="v_fundraising" name="v_fundraising" onclick="toggleColor(this)" value="0">VOLUNTEER A SKILL<br/>FUNDRAISING</input>
                            </div>
                            <div class="button button--primary area">
                                <input type="hidden" id="v_crm" name="v_crm" onclick="toggleColor(this)" value="0">VOLUNTEER A SKILL<br/>CRM</input>
                            </div>
                            <div class="button button--primary area">
                                <input type="hidden" id="v_project_management" name="v_project_management" onclick="toggleColor(this)" value="0">VOLUNTEER A SKILL<br/>PROJECT MANAGEMENT</input>
                            </div>
                            <div class="button button--primary area">
                                <input type="hidden" id="v_book_advisory" name="v_book_advisory" onclick="toggleColor(this)" value="0">VOLUNTEER A SKILL<br/>BOOK ADVISORY</input>
                            </div>
                            <div class="button button--primary area">
                                <input type="hidden" id="v_it_technical" name="v_it_technical" onclick="toggleColor(this)" value="0">VOLUNTEER A SKILL<br/>IT/TECHNICAL</input>
                            </div>
                        </div>
                        
                    </div><!-- /.section__content -->
                            <div class="section__form" style = "margin-top: 20px; flex: 1; margin-left: 20px">
                                <div class="form form--alt form--contact">
                               
                                <?php echo((!empty($errorMessage)) ? $errorMessage : '') ?>
                                <?php echo((!empty($successMessage)) ? $successMessage : '') ?>
                             
                            
                                {{ csrf_field() }}
                                <div class="form__body">
                                    <div class="form__row">
                                        <div class="form__cols">
                                            <div class="form__col">
                                                <label for="field-1#" class="form__label">First Name*</label>
                                                <div class="form__controls">
                                                    <input type="text" class="form__field" name="firstname" value="" required>
                                                </div><!-- /.form__controls -->
                                            </div><!-- /.form__col -->
    
                                            <div class="form__col">
                                                <label for="field-2#" class="form__label">Last Name*</label>
                                                <div class="form__controls">
                                                    <input type="text" class="form__field" name="lastname" value="" required>
                                                </div><!-- /.form__controls -->
                                            </div><!-- /.form__col -->
                                        </div><!-- /.form__cols -->
                                    </div><!-- /.form__row -->
    
                                    <div class="form__row">
                                        <div class="">
                                            <div class="form__col">
                                                <label for="field-4#" class="form__label">Email*</label>
                                                <div class="form__controls">
                                                    <input type="email" class="form__field" name="email" id="field-4#" value="" required>
                                                    </div><!-- /.form__controls -->
                                            </div><!-- /.form__col -->
    
                                            
                                        </div><!-- /.form__cols -->
                                    </div><!-- /.form__row -->
    
                                    <div class="form__row">
                                        <div class="form__row">
                                            <label for="field-5#" class="form__label form__label--textarea">Message</label>
    
                                            <div class="form__controls">
                                                <textarea maxlength="500" class="form__textarea" name="message" id="limit" value="" placeholder="description here"></textarea>
                                            </div><!-- /.form__controls -->
    
                                            <span class="form__notice">Remaining: 500 char. </span>
                                        </div><!-- /.form__row -->
                                    </div><!-- /.form__row -->
                                </div><!-- /.form__body -->
    
                                <div class="form__actions">
                                    <button type="submit" class="form__btn btn btn--secondary" id="submitButton" disabled>
                                        Submit
                                    </button>
                                </div><!-- /.form__actions -->
                            
                        </div><!-- /.form-donations -->
                    </div>
                            <!-- /.section__form -->
                        </div>
                    
    
                    
                    </form>
                </div><!-- /.section__inner -->
            </div><!-- /.shell -->
        </div><!-- /.section-forms -->
    
        <div class="section">
            <div class="shell">
                <div class="section__head">
                    <h2>donate</h2>
                </div><!-- /.section__head -->
    
                <div class="grid">
                    <div class="grid__col grid__col--6of12">
                        <div class="callout">
                            <div class="callout__image">
                                <img src="{{ asset('new/assets/images/svg/illustration_heart.svg  ')}}  " alt="" width="260" height="232">
                            </div><!-- /.callout__image -->
    
                            <div class="callout__content">
                                <h4>Make a Dollar Donation</h4>
    
                                <p>
                                    Donate a book, a classroom full of books or just a few dollars to support diversity in your local schools. As Our Kids Read is 100% volunteer funded, 91 cents out of every dollar goes to the book giving program.
                                </p>
                            </div><!-- /.callout__content -->
    
                            <div class="callout__actions">
                                <a href="https://www.ourkidsread.org/make-a-donation" class="btn btn--primary">Give Money</a>
                            </div><!-- /.callout__actions -->
                        </div><!-- /.callout -->
                    </div><!-- /.grid__col -->
    
                    <!--<div class="grid__col grid__col--6of12">-->
                    <!--    <div class="callout">-->
                    <!--        <div class="callout__image">-->
                    <!--            <img src="{{ asset('new/assets/images/svg/illustration_books.svg  ')}} " alt="" width="200" height="232">-->
                    <!--        </div>-->
    
                    <!--        <div class="callout__content">-->
                    <!--            <h4>Donate Diverse Books</h4>-->
    
                    <!--            <p>-->
                    <!--                Semper sed in massa ornare mattis turpis aliquam tellus augue. Morbi rutrum egestas parturient massa justo, convallis ornare. Vulputate nunc.-->
                    <!--            </p>-->
                    <!--        </div>-->
    
                    <!--        <div class="callout__actions">-->
                    <!--            <a href="#" class="btn btn--primary">Give Books</a>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                </div><!-- /.grid -->
            </div><!-- /.shell -->
        </div><!-- /.section -->
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
    <script>
    $(document).ready(function() {
        $('.area').click(function() {
            $(this).toggleClass("clicked");
            var inputId = $(this).find('input[type="hidden"]').attr('id');
            var input = $('#' + inputId);
            var value = input.val();
            if (value === "0") {
                input.val("1");
            } else {
                input.val("0");
            }
            toggleSubmit(); // Call the toggleSubmit function after updating the input value
        });

        // Function to check if at least one area is selected
        function checkAreas() {
            var areas = document.querySelectorAll('.area input[type="hidden"]');
            for (var i = 0; i < areas.length; i++) {
                if (areas[i].value === '1') {
                    console.log("hello", areas[i]);
                    return true;
                }
            }
            return false;
        }

        // Function to enable/disable the submit button
        function toggleSubmit() {
            var submitBtn = document.querySelector('#volunteerForm button[type="submit"]');
            submitBtn.disabled = !checkAreas();
        }

        // Event listener for area clicks
        var areaInputs = document.querySelectorAll('.area input[type="hidden"]');
        areaInputs.forEach(function(input) {
            input.addEventListener('click', function() {
                toggleSubmit();
            });
        });
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

</body>
</html>