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
			<div class="section-faq">
				<div class="shell">
					<div class="section__inner">
						<div class="section__head">
							<h1>Frequently Asked Questions</h1>
						</div><!-- /.section__head -->

						<div class="section__body">
							<div class="accordion js-accordion">
								<div class="accordion__section">
									<div class="accordion__head">
										<h5>Is my donation tax deductible?</h5>

										<i class="ico-chevron">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M12.0008 15.7575L18.8807 8.01953L20.0017 9.01621L12.5613 17.3846L12.0008 18.015L11.4403 17.3846L3.99991 9.01622L5.1209 8.01953L12.0008 15.7575Z" fill="#004750"></path>
											</svg>
										</i>
									</div><!-- /.accordion__head -->

									<div class="accordion__body" style="display: none;">
										<div class="accordion__entry">
											<p>
												Yes.  Our Kids Read is a 501c3 non-profit, recognized by the IRS as such.  Any donation is 100% tax dedictble.
											</p>
										</div><!-- /.accordion__entry -->

										
									</div><!-- /.accordion__body -->
								</div><!-- /.accordion__section -->

								<div class="accordion__section">
									<div class="accordion__head">
										<h5>How can I donate to my local school?</h5>

										<i class="ico-chevron">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M12.0008 15.7575L18.8807 8.01953L20.0017 9.01621L12.5613 17.3846L12.0008 18.015L11.4403 17.3846L3.99991 9.01622L5.1209 8.01953L12.0008 15.7575Z" fill="#004750"></path>
											</svg>
										</i>
									</div><!-- /.accordion__head -->

									<div class="accordion__body" style="display: none;">
										<div class="accordion__entry">
											<p>
												There are a few ways to donate to you local school.  You can make a material donation of books to Our Kids Read and we’ll incorporate that donation into a larger donation we make to the school of your choice (contact reading@ourkidreadinc.org and we’ll send you a shipping container for your donation or arrange for freight if it’s a larger donation).  Alternatively you can donate here and we can purchase the books, typically resulting in more books for your school given that we can take advantage of volume discounts to get bookls at a reduced cost.
											</p>
										</div><!-- /.accordion__entry -->

										
									</div><!-- /.accordion__body -->
								</div><!-- /.accordion__section -->

								<div class="accordion__section">
									<div class="accordion__head">
										<h5>Do you have book recommendations for my kids?</h5>

										<i class="ico-chevron">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M12.0008 15.7575L18.8807 8.01953L20.0017 9.01621L12.5613 17.3846L12.0008 18.015L11.4403 17.3846L3.99991 9.01622L5.1209 8.01953L12.0008 15.7575Z" fill="#004750"></path>
											</svg>
										</i>
									</div><!-- /.accordion__head -->

									<div class="accordion__body" style="display: none;">
										<div class="accordion__entry">
											<p>
Absolutely!  Send details regarding your child’s (or children’s) age(s), reading level(s), likes, dislikes, favorite sports, hobbies and our education team will come up with a customized recommendation.  Send your request to reading@ourkidsreadinc.org. 
											</p>
										</div><!-- /.accordion__entry -->

										
									</div><!-- /.accordion__body -->
								</div><!-- /.accordion__section -->

								<div class="accordion__section">
									<div class="accordion__head">
										<h5>Do you donate non-English language books?</h5>

										<i class="ico-chevron">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M12.0008 15.7575L18.8807 8.01953L20.0017 9.01621L12.5613 17.3846L12.0008 18.015L11.4403 17.3846L3.99991 9.01622L5.1209 8.01953L12.0008 15.7575Z" fill="#004750"></path>
											</svg>
										</i>
									</div><!-- /.accordion__head -->

									<div class="accordion__body" style="display: none;">
										<div class="accordion__entry">
											<p>
Yes!  Almost half of the children in our program have Spanish-speaking households.  Most of the books we donate are in English, but a portion are either English/Spanish and some are Spanish.
											</p>
										</div><!-- /.accordion__entry -->

										
									</div><!-- /.accordion__body -->
								</div><!-- /.accordion__section -->

	<div class="accordion__section">
									<div class="accordion__head">
										<h5>Are you a certified non profit?</h5>

										<i class="ico-chevron">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M12.0008 15.7575L18.8807 8.01953L20.0017 9.01621L12.5613 17.3846L12.0008 18.015L11.4403 17.3846L3.99991 9.01622L5.1209 8.01953L12.0008 15.7575Z" fill="#004750"></path>
											</svg>
										</i>
									</div><!-- /.accordion__head -->

									<div class="accordion__body" style="display: none;">
										<div class="accordion__entry">
											<p>
Yes, Our Kids Read is a 501c3 non-profit organization, recognized by the Internal Revenue Service as such.  All donations are therefore 100% tax deductible.
											</p>
										</div><!-- /.accordion__entry -->

										
									</div><!-- /.accordion__body -->
								</div><!-- /.accordion__section -->



								<div class="accordion__section">
									<div class="accordion__head">
										<h5>What cities do you currently serve?</h5>

										<i class="ico-chevron">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M12.0008 15.7575L18.8807 8.01953L20.0017 9.01621L12.5613 17.3846L12.0008 18.015L11.4403 17.3846L3.99991 9.01622L5.1209 8.01953L12.0008 15.7575Z" fill="#004750"></path>
											</svg>
										</i>
									</div><!-- /.accordion__head -->

									<div class="accordion__body" style="display: none;">
										<div class="accordion__entry">
											<p>
We are currently partnered with schools and organizations in Atlanta, Laurel, Richmond, Seattle, Los Angeles, Long Island, Washington, D.C., and Baltimore.  But we’re open to doing more good work in your city!  Send an e-mail to hello@ourkidsreadinc.org and we’ll let you know the timeline of starting work in your city.
											</p>
										</div><!-- /.accordion__entry -->

										
									</div><!-- /.accordion__body -->
								</div><!-- /.accordion__section -->

					
							
							</div><!-- /.accordion js-accordion -->
						</div><!-- /.section__body -->
					</div><!-- /.section__inner -->
				</div><!-- /.shell -->
			</div><!-- /.section-faq -->

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
									<a href="https://laravel.techizebuilder.net/donate-now" class="btn btn--primary">Give Money</a>
								</div><!-- /.callout__actions -->
							</div><!-- /.callout -->
						</div><!-- /.grid__col -->

						<!--<div class="grid__col grid__col--6of12">-->
						<!--	<div class="callout">-->
						<!--		<div class="callout__image">-->
						<!--			<img src="{{ asset('new/assets/images/svg/illustration_books.svg  ')}}  " alt="" width="200" height="232">-->
						<!--		</div>-->

						<!--		<div class="callout__content">-->
						<!--			<h4>Donate Diverse Books</h4>-->

						<!--			<p>-->
						<!--				Have gently used diverse books you'd like to donate to a child in our schools? We will send you a postage paid self-addressed media mailer for you to send the book to the Our Kids Read sorting depot for sterilization and distribution.-->
						<!--			</p>-->
						<!--		</div>-->

						<!--		<div class="callout__actions">-->
						<!--			<a href="#" class="btn btn--primary">Give Books</a>-->
						<!--		</div>-->
						<!--	</div>-->
						<!--</div>-->
					</div>
				</div><!-- /.shell -->
			</div><!-- /.section -->
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