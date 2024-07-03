<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Kids Read: Sparking the Joy of Reading in Low-Income Communities</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bundel.css') }}">
    <style>
	    .page-head {
			font-size: 1.9rem;
		}
		.page-head h1 {
		    font-size: 5.6rem;
            line-height: 6rem;
            position: relative;
            margin-bottom: 5.6rem;
            letter-spacing: -0.19rem;
		}
		.page-head p {
			margin-bottom: 1em;
			line-height: 1.5;
		}
		.page-head ul {
			padding-left: 1em;
		}
		.page-head li {
			margin-bottom: 1em;
		}
		.event-lists {
			background: #004750;
			color: #FFF;
			line-height: 1.5;
			font-size: 1.9rem;
		}
		.event-lists h1, .video-library h1 {
		    font-weight: 600;
            font-size: 4rem;
            line-height: 4.4rem;
            position: relative;
            margin-bottom: 3.5rem;
            letter-spacing: -0.12rem;
		}
		.event-lists h1:after, .video-library h1:after {
            content: "";
            background: #FFF;
            height: 0.4rem;
            width: 9.4rem;
            position: absolute;
            bottom: -1.9rem;
            left: 0;
        }
		.event-list {
			padding-top: 70px;
			padding-bottom: 60px;
		}
		.event-lists-wrapper .event-list:nth-child(even) {
			background: #FFF;
			color: #004750;
		}
		h2 {
			font-size: 30px;
			margin-bottom: 1em;
			line-height: 1.2;
		}
		.event-list h2 ~ h2 {
			margin-top: 1.5em;
		}
		.event-list p {
			margin-bottom: 1em;
		}
		.event-list .button {
			display: block;
			outline: none;
			text-decoration: none !important;
			font-weight: bold;
			padding: 20px 10px;
			text-align: center;
			border: 1px solid;
			transition: all 0.3s;
			margin-top: 10px;
		}
		.event-list .button.button--primary {
			color: #004750;
			background: #9dd4ca;
		}
		.event-list .button:hover {
			background: #FFF;
			color: #004750;
		}
		.event-list p + .button {
			margin-top: 40px;
		}
		.event-list .calendar-info {
			position: relative;
			display: inline-flex;
			margin-bottom: 20px;
		}
		.event-list .calendar-meta {
			position: absolute;
			top: 50%;
			left: 0;
			width: 94%;	
			text-align: center;
			transform: translateY(-50%);
			color: #004750;
			font-weight: bold;
		}
		.event-list .calendar-month {
			font-size: 2.4rem;
			line-height: 2;
		}
		.event-list .calendar-date {
			font-size: 70px;
			line-height: 1;
		}
		.event-list .school-pending {
			padding: 10px;
			font-weight: bold;
			border: 1px solid;
			margin-top: -1em;
			margin-bottom: 0.5em;
			text-align: center;
		}

		.video-library {
			background: #004750;
			color: #FFF;
			line-height: 1.5;
			font-size: 1.9rem;
			padding: 70px 0;
		}
		.video-item {
			padding: 35px 0;
		}
		.video-item .detail-col .detail-text {
			font-size: 2.4rem;
		}
		.video-item .detail-col .detail-text > div{
			margin-bottom: 1em;
		}
		.video-item .detail-col .detail-text .event-description p {
			font-size: 1.9rem;
		}
		.video-item .detail-col .label {
			font-weight: 300;
		}
		.video-item h2 {
			padding: 0.5em;
			text-align: center;
			color: #004750;
			margin-bottom: 2.4rem;
		}
		.video-item h2.video-title {
			background: #FFF;
		}
		.video-item h2.detail-title {
			background: #9dd4ca;
		}
		@media (min-width: 768px) {
			.video-library .video-item:nth-child(even) .grid {
				flex-direction: row-reverse;
			}
			.video-library .video-item:nth-child(odd) .video-col {
				padding-right: 5%;
			}
			.video-library .video-item:nth-child(even) .video-col {
				padding-left: 5%;
			}
		}
		@media (max-width: 767px), screen and (max-width: 813px) and (orientation: landscape) {
			.page-head {
				font-size: 1.6rem;
			}
			.page-head h1 {
                font-size: 4.9rem;
            }
            .event-lists h1, .video-library h1 {
                font-size: 3.2rem;
                line-height: 3.6rem;
            }
			h2 {
				font-size: 2.4rem;
			}
			.event-list {
			    padding-top: 4rem;
			    padding-bottom: 4rem;
			}
			.event-list .detail-col {
				margin-top: 3rem;
			}
			.event-list .calendar-info {
				max-width: 120px;
			}
			.event-list .calendar-month {
				font-size: 1.6rem;
			}
			.event-list .calendar-date {
				font-size: 4rem;
			}
			.video-item {
				padding: 2rem 0;
			}
			.video-item .detail-title {
				margin-top: 2.4rem;
			}
			.event-lists, .video-library, .video-item .detail-col .detail-text {
				font-size: 1.6rem;
			}
			.video-item .detail-col .detail-text .event-description p {
				font-size: 1.4rem;
			}

		}
    </style>    	

    <script async="" type="text/javascript" src="https://cdn.livechatinc.com/tracking.js"></script>
</head>
<body>
    <div class="wrapper">

		<header class="header js-header header--white">
            <div class="shell header__shell">
   
                <a href="{{ route('home') }}" class="logo">
           
                    <img src="  {{ asset('new/assets/images/logo.svg ')}}" alt="">
           
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
            <div class="page-head page-head--turquoise">
                <div class="shell">
                    <div class="grid grid--full grid--align-center">
                        <div class="grid__col grid__col--6of12">
                            <h1>OKR National Book Donation Events</h1>
        
                            <p>Our Kids Read Free Book Festivals  are celebrations of books and reading!  OKR partners with schools and community centers across the country  to bring:</p>
                            <ul>
                                <li>free books (each student receives 3 free book to take home with then)</li>
                                <li>West African drummers or Latin American musicians </li>
                                <li>an invitation to join the OKR evening virtual reading program (our Reading Buddies program)</li>
                            </ul>                       
                        </div><!-- /.grid__col -->
        
                        <div class="grid__col grid__col--6of12">
                            <div class="video">
                                <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/874014079?h=e8d6538cc4" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>                            
                            </div><!-- /.video -->
                        </div><!-- /.grid__col -->
                    </div><!-- /.grid -->
                </div><!-- /.shell -->
            </div><!-- /.page-head -->

            <div class="event-lists">
            	<div class="shell">
            		<h1>Upcoming Free Book Festivals</h1>
            	</div><!-- /.shell -->
            	<div class="event-lists-wrapper">
	            	<div class="event-list">
	            		<div class="shell">
		        			<div class="grid grid--full">
		            			<div class="grid__col grid__col--6of12 calendar-col">
		            				<div class="grid">
		            					<div class="grid__col grid__col--4of8">
		            						<div class="calendar-info">
		            							<img src="{{ asset('new/assets/images/events/calendar-icon.png')}}">
		            							<div class="calendar-meta">
		            								<div class="calendar-month">March</div>
		            								<div class="calendar-date">19</div>
		            							</div>
		            						</div>
		            					</div>
		            					<div class="grid__col grid__col--8of12">
		            						<h2>Mosser Elementary Literacy Event</h2>
		            						<p>Location: Allentown, PA</p>
		            						<p>Description: 2nd grade students at Mosser Elementary will participate in an afternoon of interactive storytelling West African drumming.</p>
		            						<a href="{{ route('free_book_festival_allentown') }}" class="button button--primary">View Event Details</a>
		            						<a href="{{ route('free_book_festival_allentown') }}" class="button button--outline">Support Event Virtual Book Drive</a>
		            					</div>
		            				</div>
		            			</div>
		            			<div class="grid__col grid__col--2of12">
		            				
		            			</div>
		            			<div class="grid__col grid__col--4of12 detail-col">
		            				<h2>VOLUNTEERS FROM:</h2>
		        					<img src="{{ asset('new/assets/images/events/Mosser.png')}}">
		            				<h2>SCHOOL:</h2>
		            				<img src="{{ asset('new/assets/images/events/LVHN-partner-logo.png')}}" width="200" style="background:#FFF;">
		            			</div>
		            		</div>
	            		</div><!-- /.shell -->
	        		</div><!-- /.event-list -->

	        		<div class="event-list">
	            		<div class="shell">
		        			<div class="grid grid--full">
		            			<div class="grid__col grid__col--6of12 calendar-col">
		            				<div class="grid">
		            					<div class="grid__col grid__col--4of8">
		            						<div class="calendar-info">
		            							<img src="{{ asset('new/assets/images/events/calendar-icon.png')}}">
		            							<div class="calendar-meta">
		            								<div class="calendar-month">April</div>
		            								<div class="calendar-date">18</div>
		            							</div>
		            						</div>
		            					</div>
		            					<div class="grid__col grid__col--8of12">
		            						<h2>Mosser Elementary Literacy Event</h2>
		            						<p>Location: Allentown, PA</p>
		            						<p>Description: 2nd grade students at Mosser Elementary will participate in an afternoon of interactive storytelling West African drumming.</p>
		            						<a href="#" class="button button--primary">View Event Details</a>
		            						<a href="#" class="button button--outline">Support Event Virtual Book Drive</a>
		            					</div>
		            				</div>
		            			</div>
		            			<div class="grid__col grid__col--2of12">
		            				
		            			</div>
		            			<div class="grid__col grid__col--4of12 detail-col">
		            				<h2>VOLUNTEERS FROM:</h2>
		        					<img src="{{ asset('new/assets/images/events/NFL.png')}}">
		            				<h2>SCHOOL:</h2>
		            				<img src="{{ asset('new/assets/images/events/NFL-school.png')}}">
		            			</div>
		            		</div>
	            		</div><!-- /.shell -->
	        		</div><!-- /.event-list -->

	        		<div class="event-list">
	            		<div class="shell">
		        			<div class="grid grid--full">
		            			<div class="grid__col grid__col--6of12 calendar-col">
		            				<div class="grid">
		            					<div class="grid__col grid__col--4of8">
		            						<div class="calendar-info">
		            							<img src="{{ asset('new/assets/images/events/calendar-icon.png')}}">
		            							<div class="calendar-meta">
		            								<div class="calendar-month">March</div>
		            								<div class="calendar-date">19</div>
		            							</div>
		            						</div>
		            					</div>
		            					<div class="grid__col grid__col--8of12">
		            						<h2>Mosser Elementary Literacy Event</h2>
		            						<p>Location: Allentown, PA</p>
		            						<p>Description: 2nd grade students at Mosser Elementary will participate in an afternoon of interactive storytelling West African drumming.</p>
		            						<a href="#" class="button button--primary">View Event Details</a>
		            						<a href="#" class="button button--outline">Support Event Virtual Book Drive</a>
		            					</div>
		            				</div>
		            			</div>
		            			<div class="grid__col grid__col--2of12">
		            				
		            			</div>
		            			<div class="grid__col grid__col--4of12 detail-col">
		            				<h2>VOLUNTEERS FROM:</h2>
		        					<img src="{{ asset('new/assets/images/events/Mosser.png')}}">
		            				<h2>SCHOOL:</h2>
		            				<div class="school-pending">VOLUNTEER PARTNERSHIP PENDING</div>
		            				<img src="{{ asset('new/assets/images/events/logo_WLCAC.png')}}">
		            			</div>
		            		</div>
	            		</div><!-- /.shell -->
	        		</div><!-- /.event-list -->

	        		<div class="event-list">
	            		<div class="shell">
		        			<div class="grid grid--full">
		            			<div class="grid__col grid__col--6of12 calendar-col">
		            				<div class="grid">
		            					<div class="grid__col grid__col--4of8">
		            						<div class="calendar-info">
		            							<img src="{{ asset('new/assets/images/events/calendar-icon.png')}}">
		            							<div class="calendar-meta">
		            								<div class="calendar-month">April</div>
		            								<div class="calendar-date">18</div>
		            							</div>
		            						</div>
		            					</div>
		            					<div class="grid__col grid__col--8of12">
		            						<h2>Mosser Elementary Literacy Event</h2>
		            						<p>Location: Allentown, PA</p>
		            						<p>Description: 2nd grade students at Mosser Elementary will participate in an afternoon of interactive storytelling West African drumming.</p>
		            						<a href="#" class="button button--primary">View Event Details</a>
		            						<a href="#" class="button button--outline">Support Event Virtual Book Drive</a>
		            					</div>
		            				</div>
		            			</div>
		            			<div class="grid__col grid__col--2of12">
		            				
		            			</div>
		            			<div class="grid__col grid__col--4of12 detail-col">
		            				<h2>VOLUNTEERS FROM:</h2>
		        					<img src="{{ asset('new/assets/images/events/verizon_somos.png')}}">
		        					<img src="{{ asset('new/assets/images/events/logo_pu_class_of_1979.png')}}">
		            				<h2>SCHOOL:</h2>
		            				<img src="{{ asset('new/assets/images/events/TPS.png')}}">
		            			</div>
		            		</div>
	            		</div><!-- /.shell -->
	        		</div><!-- /.event-list -->
            	</div><!-- /.event-lists-wrapper -->
            </div><!-- /.event-lists -->

            <div class="video-library">
            	<div class="shell">
            		<h1>Free Book Festival Video Library</h1>
            	</div><!-- /.shell -->
            	<div class="video-library-wrapper">
            		<div class="video-item">
            			<div class="shell">
		        			<div class="grid grid--full">
		            			<div class="grid__col grid__col--7of12 video-col">
		            				<h2 class="video-title">Nike Global HQ</h2>
		            				<div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/874014079?h=e8d6538cc4" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe></div>
		            			</div>
		            			<div class="grid__col grid__col--5of12 detail-col">
		            				<h2 class="detail-title">Beaverton, OR</h2>
		            				<div class="detail-text">
		            					<div class="event-date"><span class="label">DATE: </span><strong>Thursday, September 21, 2023</strong></div>
		            					<div class="event-name"><span class="label">EVENT NAME: </span><strong>Boise Eliot Elementary School x Our Kids Read x Nike Literacy Event</strong></div>
		            					<div class="event-description">
		            						<span class="label">DESCRIPTION:</span>
		            						<p>In partnership with Boise-Eliot Elementary School, a Portland public school, and Nike,  we brought 42 student to Nike Global HQ in Beaverton, OR.  Nike executive leaders read with the students and West African drummer and storyteller Yaw Amponsah held students entranced with stories of Anansi the spider.</p>
		            					</div>
		            				</div>
		            			</div>
	            			</div>
            			</div>
            		</div><!-- /.video-item -->

            		<div class="video-item">
            			<div class="shell">
		        			<div class="grid grid--full">
		            			<div class="grid__col grid__col--7of12 video-col">
		            				<h2 class="video-title">Princeton University</h2>
		            				<div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/852227710?h=a1bf7b4984" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe></div>
		            			</div>
		            			<div class="grid__col grid__col--5of12 detail-col">
		            				<h2 class="detail-title">Princeton, NJ</h2>
		            				<div class="detail-text">
		            					<div class="event-date"><span class="label">DATE: </span><strong>Thursday, February 23, 2023</strong></div>
		            					<div class="event-name"><span class="label">EVENT NAME: </span><strong>Foundation Academy x Our Kids Read x Princeton Class of 1998 Reunions Service Event</strong></div>
		            					<div class="event-description">
		            						<span class="label">DESCRIPTION:</span>
		            						<p>In partnership with Trenton, NJ elementary school,| Foundation Academy and the Princeton University’s Class of 1998, OKR planned and executed a literacy event featuring a tour of Firestone Library, a tour of Princeton’s class, a visit by celebrity Princeton Men’s basketball coach Mitch Henderson, visit from celebrity guest 6-year old author Cassidy Bridges (author of  “Thank you!  It’s an Afro!”), professional storytelling by OKR storyteller Simi Murumba and masater drummer Fitz Sam and much more.</p>
		            					</div>
		            				</div>
		            			</div>
	            			</div>
            			</div>
            		</div><!-- /.video-item -->

            		<div class="video-item">
            			<div class="shell">
		        			<div class="grid grid--full">
		            			<div class="grid__col grid__col--7of12 video-col">
		            				<h2 class="video-title">Boys and Girls Club</h2>
		            				<div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/734346492?h=99e224695d" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe></div>
		            			</div>
		            			<div class="grid__col grid__col--5of12 detail-col">
		            				<h2 class="detail-title">Bronx, NY</h2>
		            				<div class="detail-text">
		            					<div class="event-date"><span class="label">DATE: </span><strong>Friday, July 22, 2022</strong></div>
		            					<div class="event-name"><span class="label">EVENT NAME: </span><strong>Joe E. Smilow x  Our Kids Read Free Book Festival</strong></div>
		            					<div class="event-description">
		            						<span class="label">DESCRIPTION:</span>
		            						<p>In partnership with the Joe E. Smilow Boys and Girls clubhouse, Our Kids Read brought over 1,200 books and master storyteller Simi Murumba to get students excited about readiny</p>
		            					</div>
		            				</div>
		            			</div>
	            			</div>
            			</div>
            		</div><!-- /.video-item -->
            	</div><!-- /.video-library-wrapper -->
            </div><!-- /.video-library -->
        </main><!-- /.main -->
 
    	<footer class="footer">
            <div class="shell">
                <div class="grid grid--align-center">
                    <div class="grid__col grid__col--6of12">
                        <a href="home.html" class="logo logo--footer">
                            <img src="{{ asset('new/assets/images/svg/logo-compact.svg') }}" alt="">
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
    </div>

    
    
    <!--<script src="https://www.ourkidsread.org/public/frontend/js/style.js"></script>-->
    <!--<script src="https://www.ourkidsread.org/public/frontend/js/styletwo.js"></script>-->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://www.ourkidsread.org/public/new/assets/js/bundle.js"></script>
    
    <script>
        window.__lc = window.__lc || {};
        window.__lc.license = 16558326;
        ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
    </script>
     
</body>
</html>