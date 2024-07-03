<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Our Kids Read: Sparking the Joy of Reading in Low-Income Communities</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bundel.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/index-DYOtFvrw.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/newsletter-page-style.css') }}">
    <style>
 
@media only screen and (max-width: 768px) {
      #event {
        display: block;
    }
    
    .newsletter-signup {
        display: block;
    }
    
    .newsletter-signup a {
        margin-top: 10px;
        padding: 10px 0;
    }

}

.flex.flex-col.lg\:flex-row.xl\:max-w-5xl.max-w-7xl.px-4.py-6.mx-auto.lg\:space-x-8 a  , a.redlink{
    color: rgb(236 63 79 / var(--tw-text-opacity));
    font-weight: 700;
}
    </style>
</head>
<body style="background: #a7dcd1">
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
    <div class="fixed lg:hidden top-0 bottom-0 left-0 flex flex-col justify-center z-[1] w-0">
        <div id="myContent" class="content bg-[#13474d] border-2 border-[#ec3f4f] rounded-md text-white uppercase w-[200px] py-4 relative duration-300 ease-in-out -ml-[205px]">
            <div onclick="changeMargin()" class=" bg-[#13474d] border-2 border-[#ec3f4f] flex justify-center items-center w-8 h-8 rounded-full absolute right-0 -mr-12 shadow-md shadow-gray-200 hover:cursor-pointer hover:scale-110 duration-200 ease-in-out">
                <i class="fa-solid fa-envelope text-[#ec3f4f] t-shadow"></i>
            </div>
            <p class="text-lg mb-4 text-[#ec3f4f] text-center t-shadow tracking-wide">Newsletter Index</p>
            <a href="https://www.ourkidsread.org/newsletter-23-dec" style="color: #ffffff">
                <p class="px-4 hover:bg-[#ec3f4f] cursor-pointer pt-[6px] pb-[5px] group flex items-center newsletter-link " id="december2023"> <i class="fa-solid fa-caret-right pr-2 text-[#13474d] group-hover:text-white"></i> <span class="t-shadow tracking-wide"> December 2023</span></p>
            </a>
            <p class="px-4 hover:bg-[#ec3f4f] cursor-pointer pt-[6px] pb-[5px] group flex items-center newsletter-link " id="february2024"> <i class="fa-solid fa-caret-right pr-2 text-[#13474d] group-hover:text-white"></i> <span class="t-shadow tracking-wide"> February 2024</span></p>
            <a href="https://www.ourkidsread.org/newsletter-24-apr" style="color: #ffffff">
                <p class="px-4 hover:bg-[#ec3f4f] cursor-pointer pt-[6px] pb-[5px] group flex items-center newsletter-link active" id="april2024"> <i class="fa-solid fa-caret-right pr-2 text-[#13474d] group-hover:text-white"></i> <span class="t-shadow tracking-wide"> May 2024</span></p>
            </a>
            <a href="https://www.ourkidsread.org/newsletter-24-jun" style="color: #ffffff">
                <p class="px-4 hover:bg-[#ec3f4f] cursor-pointer pt-[6px] pb-[5px] group flex items-center newsletter-link " id="june2024"> <i class="fa-solid fa-caret-right pr-2 text-[#13474d] group-hover:text-white"></i> <span class="t-shadow tracking-wide"> June 2024</span></p>
            </a>
            
            <a href="https://www.ourkidsread.org/newsletter-24-aug" style="color: #ffffff">
                <p class="px-4 hover:bg-[#ec3f4f] cursor-pointer pt-[6px] pb-[5px] group flex items-center newsletter-link " id="august2024"> <i class="fa-solid fa-caret-right pr-2 text-[#13474d] group-hover:text-white"></i> <span class="t-shadow tracking-wide"> August 2024</span></p>
            </a>
            
            <a href="https://www.ourkidsread.org/newsletter-24-oct" style="color: #ffffff">
                <p class="px-4 hover:bg-[#ec3f4f] cursor-pointer pt-[6px] pb-[5px] group flex items-center newsletter-link " id="october2024"> <i class="fa-solid fa-caret-right pr-2 text-[#13474d] group-hover:text-white"></i> <span class="t-shadow tracking-wide"> October 2024</span></p>
            </a>
            
            <a href="https://www.ourkidsread.org/newsletter-24-dec" style="color: #ffffff">
                <p class="px-4 hover:bg-[#ec3f4f] cursor-pointer pt-[6px] pb-[5px] group flex items-center newsletter-link " id="december2024"> <i class="fa-solid fa-caret-right pr-2 text-[#13474d] group-hover:text-white"></i> <span class="t-shadow tracking-wide"> December 2024</span></p>
            </a>
        </div>
    </div>
    <div class="div-ssff bg-[#a7dcd1] shell">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <div class="  xl:block   fixed sildepop">
                        <div class="bg-[#13474d] text-white uppercase w-[200px] py-4 duration-300 ease-in-out absolute top-8">
                            <p class="text-lg mb-4 text-[#ec3f4f] text-center t-shadow tracking-wide">Newsletter Index
                            </p>
                            <a href="https://www.ourkidsread.org/newsletter-23-dec" style="color: #ffffff">
                                <p class="px-4 hover:bg-[#ec3f4f] cursor-pointer pt-[6px] pb-[5px] group flex items-center newsletter-link " id="december2023">
                                    <i class="fa-solid fa-caret-right pr-2 text-[#13474d] group-hover:text-white"></i> <span class="t-shadow tracking-wide"> December 2023</span>
                                </p>
                            </a>
                            <p class="px-4 hover:bg-[#ec3f4f] cursor-pointer pt-[6px] pb-[5px] group flex items-center newsletter-link " id="february2024">
                                <i class="fa-solid fa-caret-right pr-2 text-[#13474d] group-hover:text-white"></i> <span class="t-shadow tracking-wide"> February 2024</span>
                            </p>
                            <a href="https://www.ourkidsread.org/newsletter-24-apr" style="color: #ffffff">
                                <p class="px-4 hover:bg-[#ec3f4f] cursor-pointer pt-[6px] pb-[5px] group flex items-center newsletter-link active" id="april2024">
                                    <i class="fa-solid fa-caret-right pr-2 text-[#13474d] group-hover:text-white"></i> <span class="t-shadow tracking-wide"> May 2024</span>
                                </p>
                            </a>
                            <a href="https://www.ourkidsread.org/newsletter-24-jun" style="color: #ffffff">
                                <p class="px-4 hover:bg-[#ec3f4f] cursor-pointer pt-[6px] pb-[5px] group flex items-center newsletter-link " id="june2024">
                                    <i class="fa-solid fa-caret-right pr-2 text-[#13474d] group-hover:text-white"></i> <span class="t-shadow tracking-wide"> June 2024</span>
                                </p>
                            </a>
                            
                            <a href="https://www.ourkidsread.org/newsletter-24-aug" style="color: #ffffff">
                                <p class="px-4 hover:bg-[#ec3f4f] cursor-pointer pt-[6px] pb-[5px] group flex items-center newsletter-link " id="august2024">
                                    <i class="fa-solid fa-caret-right pr-2 text-[#13474d] group-hover:text-white"></i> <span class="t-shadow tracking-wide"> August 2024</span>
                                </p>
                            </a>
                            
                            <a href="https://www.ourkidsread.org/newsletter-24-oct" style="color: #ffffff">
                                <p class="px-4 hover:bg-[#ec3f4f] cursor-pointer pt-[6px] pb-[5px] group flex items-center newsletter-link " id="october2024">
                                    <i class="fa-solid fa-caret-right pr-2 text-[#13474d] group-hover:text-white"></i> <span class="t-shadow tracking-wide"> October 2024</span>
                                </p>
                            </a>
                            
                            <a href="https://www.ourkidsread.org/newsletter-24-dec" style="color: #ffffff">
                                <p class="px-4 hover:bg-[#ec3f4f] cursor-pointer pt-[6px] pb-[5px] group flex items-center newsletter-link " id="december2024">
                                    <i class="fa-solid fa-caret-right pr-2 text-[#13474d] group-hover:text-white"></i> <span class="t-shadow tracking-wide"> December 2024</span>
                                </p>
                            </a>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12">
                    <div class="w-full  ">
                        <div class="flex items-center w-full text-center  pt-8 pb-3 -space-x-3">
                            <div class="bg-[#13474d] flex pl-4 sm:pl-8 md:pl-12 flex-grow py-6 sm:py-4 max-w-xs main-h1">
                                <img src="{{ asset('new/assets/images/logo.svg')}}" alt="logo" class="w-14 sm:w-28 md:w-36">
                            </div>
                            <div class="bg-[#13474d] flex-grow py-8 sm:py-10 lg:py-10 main-h2">
                                <h1 class="uppercase text-white pl-3 tracking-tight text-xs sm:text-2xl md:text-4xl lg:text-5xl">
                                    Our Kids Read Monthly Newsletter <span class="ms-5" style="color:rgb(236 63 79);">May 2024</span>
                                </h1>
                            </div>
                        </div>
                        <!--<div class="mx-auto flex justify-center items-center pb-12 space-x-2 text-xl sm:text-2xl md:text-4xl lg:text-5xl text-[#13474d] uppercase">-->
                        <!--    <h1-->
                        <!--        class="Volume12 bg-[#ec3f4f] text-white px-4 pt-1 pb-2 lg:pt-4 lg:pb-5 flex justify-center items-center">-->
                        <!--        Volume 12:</h1>-->
                        <!--    <h1 class="datevoldown">December 2023 okr newsletter</h1>-->
                        <!--</div>-->
                        <div class="flex overflow-hidden newsletter-signup">
                            <div class="flex overflow-hidden" style="flex: 1">
                                <div class="bg-[#13474d] pl-14 pr-14 w-min">
                                    <h1 class="uppercase text-white text-sm sm:text-xl md:text-4xl lg:text-4xl font-extrabold pt-5 pb-5 sm:pt-8 sm:pb-9 whitespace-nowrap rotat">Letter from the Executive Director</h1>
                                </div>
                                <div class="bg-[#a7dcd1] flex -space-x-4 sm:-space-x-6 md:-space-x-8 pr-4 -ml-8 main-h5">
                                    <div class="main-h6 pl-12 sm:pl-16 rotate-180"></div>
                                    <div class="main-h3 hidden sm:block sm:p-4 md:p-6 rotate-180"></div>
                                    <div class="main-h4 hidden sm:block p-6 md:p-9 rotate-180"></div>
                                    <div class="main-h3 hidden sm:block sm:p-4 md:p-6 rotate-180"></div>
                                    <div class="main-h4 hidden sm:block p-6 md:p-9 rotate-180"></div>
                                </div>
                            </div>
                            <a href="https://www.ourkidsread.org/newsletter/signup" class="text-center" style="    display: flex; align-items: center; justify-content: center;
                                outline: none;
                                text-decoration: none !important;
                                font-weight: bold;
                                text-align: center;
                                border: 1px solid;
                                transition: all 0.3s;
                                flex: 1;
                                background: #dc3545;
                                border: none;
                                font-size: 1.5rem;
                                color: white;
                                border: 1px solid">
                                        <h1 style="font-size: 18px">SIGNUP FOR THE MONTHLY OKR NEWSLETTER!</h1>
                                    </a>
                            
                        </div>
                        <div class="pb-3"></div>
                        <div class="w-full py-61 bg-1 relative h-auto">
                            <div class="flex flex-col testimonial">
                                <div class="mr-auto pl-12"><i class="fa-solid fa-quote-left text-[#ec3f4f] text-5xl sm:text-6xl md:text-7xl lg:text-8xl"></i>
                                </div>
                                <div class="flex flex-col lg:flex-row xl:max-w-5xl max-w-7xl px-4 py-6 mx-auto lg:space-x-8">
                                    <div class="  lg:min-h-0 mx-auto lg:mx-0">
                                        <div class="author-info">
                                            <img src="myimg/2.jpg" alt="Author Image">
                                            <div class="dibvaut">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="alltext-ch  text-white text-sm sm:text-lg md:text-xl lg:text-2xl py-4 text-justify">
                                        <p style="margin-bottom:10px;     font-size: 14px;">
                                            Greetings Our Kids Read friends and family! So honored that OKR has an audience of over 2,000 book lovers who have requested to receive this newsletter. The support is palpable and we are able to deepen our impact as a result.

                                            
                                            </p>
                                        <p style="margin-bottom:10px ;     font-size: 14px;">
                                            True to our promise, infrastruture development continues to be our focus. We've doubled our part-time contract internal staff over the last couple of months! A special welcome to: Iris Jones (volunteer relationship management), Nicholas Cabrera '23 (IT Project Manager, Dr. Vicky Hioureas, *22 (program administration), Ciera Peart (grant writer) and Kesha Holloway (brand ambassador). I've seen great work from these new team members in just the last several weeks. Keep up the great work!

                                            </p>
                                        <p style="margin-bottom:10px;     font-size: 14px;">
                                            I have an exciting announcement: we're holding a fall gala in New York City! We're especially looking for folks who can help us with the event planning, corporate sponsorships and silent auction prize donations (points, timeshares, artwork, tickets, luxury gift baskets, whatever you think would make good silent auction items). E-mail <a href="mailto:gala@ourkidsread.org">gala@ourkidsread.org</a> if you’d like to help plan the event or donate to the silent auction.

                                        </p>
                                        <p style="margin-bottom:10px;     font-size: 14px;">I extend my thanks as always to the ever-expanding OKR family. It's been an honor leading this enterprise over the past few years and I remain inspired and energized by our impact and even more excited about our potential.
</p>
 <p style="margin-bottom:10px;     font-size: 14px;">If you love our mission and are in a position to support, please do! Gifts <a href="https://ourkidsread.org/make-a-donation">(click here to donate)</a> and volunteers <a href="https://ourkidsread.org/volunteer">(click here to volunter)</a> are our greatest need.
</p>
                                        <p style="margin-bottom:10px;     font-size: 14px;">Peace and blessings.</p>
                                        <p>Warmest Regards,</p>
                                        <p>Jahmal Lake</p>
                                    </div>
                                </div>
                                <div class="ml-auto pr-12"><i class="fa-solid fa-quote-right text-[#ec3f4f] text-5xl sm:text-6xl md:text-7xl lg:text-8xl"></i>
                                </div>
                            </div>
                        </div>
                        <div class="xl:max-w-5xl max-w-7xl mx-auto px-4 py-10 text-[#13474d]">
                            <h1 class="uppercase text-xl sm:text-2xl md:text-3xl lg:text-4xl font-extrabold heading-2">FEATURED STORIES:
                            </h1>
                            <div class="flex flex-col lg:flex-row space-y-12 lg:space-y-0 lg:space-x-14 pt-12">
                                <div class="lg:w-[50%] flex flex-col justify-between1">
                                    <h1 class="text-[#13474d] text-2xl sm:text-base md:text-4xl lg:text-4xl font-extrabold uppercase pb-4">
                                        BOOKS: OKR ESTABLISHES 3RD "BOOKS IN BARBERSHOPS" LOCATION ON FEBRUARY 23 2024 IN LAUREL, MD
                                    </h1>
                                    <div class="w-full rounded border-4 border-[#c0414f] border-light-gray">
                                        <img src="myimg/a_cut_above_e_jahmal_REDUCED.jpg" alt="pic-2" class="faatureimg">
                                    </div>
                                    <p class="onlyppp">
                                        Thanks A Cut Above for partnering with Our Kids Read to establish the 3rd Books in Barbershops location nationally (previous two were in Portland Oregan and Laurel, MD). Pictured here, Master Barber Ellis Daniels ("E") and OKR Executive Director, Jahmal Lake at A Cut Above Barbershop in Laurel, MD on the day of the bookshelf installation, Saturday February 24th, 2024.
                                    </p>
                                </div>
                                <div class="lg:w-[50%] flex flex-col justify-between1">
                                    <h1 class="text-[#13474d] text-2xl sm:text-base md:text-4xl lg:text-4xl font-extrabold uppercase pb-4">
                                        BOOKS: OKR PARTNERS WITH MORGAN STANLEY AND THE BALTIMORE COMMUNITY FOUNDATION FOR BALTIMOVE EVENT
                                    </h1>
                                    <div class="w-full rounded border-4 border-[#c0414f] border-light-gray">
                                        <img src="myimg/OKR-024_reduced.jpg" alt="pic-3" class="faatureimg">
                                    </div>
                                    <p class="onlyppp">
                                        Jona Masiya, our Batimore-based West African drummer and storyteller, had the students enthralled with his storytelling and percussion. Morgan Stanley volunteers joined forces with Our Kids Read staff to give away over 300 books to the 2nd grade classes at the Glenmount Elementary and Middle School in Baltimore City.
                                    </p>
                                </div>
                            </div>
                            <div class="flex flex-col lg:flex-row space-y-12 lg:space-y-0 lg:space-x-14 pt-12">
                                <div class="lg:w-[50%] flex flex-col justify-between1">
                                    <h1 class="text-[#13474d] text-2xl sm:text-base md:text-4xl lg:text-4xl font-extrabold uppercase pb-4">
                                        BOOKS: OKR INVITED BACK TO AMBER CHARTER SCHOOL TO CO-SPONSOR EVENT WITH NFL BLACK ENGAGEMENT NETWORK
                                    </h1>
                                    <div class="w-full rounded border-4 border-[#c0414f] border-light-gray" style="background-color: #13474d;">
                                        <img src="myimg/image_02.jpg" alt="pic-2" class="faatureimg">
                                    </div>
                                    <p class="onlyppp">
                                        Special thanks to the NFL's Black Engagement Network (BEN) for their partnership executing the Amber Charter School Free Book Festival on Monday, March 18, 2024. Students had the pleasure of celebrating story with master drummer and storyteller Fitzgerald Sam ("Fitz") and interacted with the NFL BEN team while selecting their books. Thanks also the Amber Charter School for their partnership, this is the second consecutive year OKR and Amber have partnered for literacy events.
                    </p>
                                </div>
                                <div class="lg:w-[50%] flex flex-col justify-between1">
                                    <h1 class="text-[#13474d] text-2xl sm:text-base md:text-4xl lg:text-4xl font-extrabold uppercase pb-4">
                                        BOOKS: OKR's 3RD WEST COAST EVENT BRINGS TOGETHER NIKE, CHASE AND THE WLCAC COMMUNITY CENTER
                                    </h1>
                                    <div class="w-full rounded border-4 border-[#c0414f] border-light-gray" style="background-color: #13474d;">
                                        <img src="myimg/IMG_4950_chase_okr_employee_pic.jpg" alt="pic-3" class="faatureimg">
                                    </div>
                                    <p class="onlyppp">
                                        Our Kids Read partnered with Nike, the WLCAC Community Center and Chase Bank in Los Angeles, CA to bring free books, storytelling and a financial literacy seminar (delivered by Chase). K-5th grade students were entertained with stories from Eastern and Western Africa and selected their own books at the end of the drumming and storytelling event.
                        </p>
                                </div>
                            </div>
                        </div>
                        <div class="flex overflow-hidden">
                            <div class="bg-[#13474d] pl-14 pr-14 w-min">
                                <h1 class="uppercase text-white text-sm sm:text-xl md:text-4xl lg:text-4xl font-extrabold pt-5 pb-5 sm:pt-8 sm:pb-9 whitespace-nowrap rotat">UPCOMING EVENTS</h1>
                            </div>
                            
                            <div class="bg-[#a7dcd1] flex -space-x-4 sm:-space-x-6 md:-space-x-8 pr-4 -ml-8 main-h5">
                                <div class="main-h6 pl-12 sm:pl-16 rotate-180"></div>
                                <div class="main-h3 hidden sm:block sm:p-4 md:p-6 rotate-180"></div>
                                <div class="main-h4 hidden sm:block p-6 md:p-9 rotate-180"></div>
                                <div class="main-h3 hidden sm:block sm:p-4 md:p-6 rotate-180"></div>
                                <div class="main-h4 hidden sm:block p-6 md:p-9 rotate-180"></div>
                            </div>
                            
                        </div>
    <!--                    <div class="flex justify-center items-center mx-auto" style="background: #a7dcd1; padding: 20px 20px" id="event">-->
    <!--                        <div style="flex: 1; text-align: center; position: relative">-->
    <!--                            <div style="display: flex; justify-content: center;">-->
    <!--                            <img src="{{ asset('new/assets/images/events/calendar-icon.png')}}">    -->
    <!--                            </div>-->
                                
		  <!--          							<div class="calendar-meta onlyppp" style="position: absolute; top: 30%; width: 94%; height: 94%">-->
		  <!--          								<div class="calendar-month"style="font-size: 2rem">March</div>-->
		  <!--          								<div class="calendar-date" style="font-size: 3.5rem">01</div>-->
		  <!--          								<div class="calendar-date" style="font-size: 2rem">2024</div>-->
		  <!--          							</div>-->
    <!--                        </div>-->
    <!--                        <div style="flex: 2">-->
    <!--                            <div>-->
    <!--                                <h1 class="text-[#13474d] text-2xl sm:text-base md:text-4xl lg:text-4xl font-extrabold uppercase pb-4">-->
    <!--                                    Event: Glenmount Elementary School Free Book Festival-->
    <!--                                </h1>-->
    <!--                                <h1 class="text-[#13474d] text-2xl sm:text-base md:text-4xl lg:text-4xl font-extrabold uppercase pb-4">-->
    <!--                                    Location: Baltimore, MD-->
    <!--                                </h1>-->
    <!--                                <h1 class="text-[#13474d] text-2xl sm:text-base md:text-4xl lg:text-4xl font-extrabold uppercase pb-4">-->
    <!--                                    Corporate Partner: Morgan Stanley-->
    <!--                                </h1>-->
    <!--                            </div>-->
                                
    <!--                            <div class = "flex" style="gap: 20px">-->
                                    
    <!--                                <a href="https://www.ourkidsread.org/free-book-festival-baltimore-glenmount" class="text-center" style="    display: flex; align-items: center; justify-content: center;-->
    <!--outline: none;-->
    <!--text-decoration: none !important;-->
    <!--font-weight: bold;-->
    <!--text-align: center;-->
    <!--border: 1px solid;-->
    <!--transition: all 0.3s;-->
    <!--flex: 1;-->
    <!--background: #a7dcd1;-->
    <!--border: none;-->
    <!--font-size: 1.5rem;-->
    <!--color: white;-->
    <!--border: 1px solid">-->
    <!--                                    Donate a Book (Virtual Book Drive)-->
    <!--                                </a>-->
    <!--                                <a href="https://www.ourkidsread.org/free-book-festival-baltimore-glenmount" class="text-center" style="display: flex; align-items: center; justify-content: space-evenly;-->
    <!--outline: none;-->
    <!--text-decoration: none !important;-->
    <!--font-weight: bold;-->
    <!--text-align: center;-->
    <!--border: 1px solid;-->
    <!--transition: all 0.3s;-->
    <!--flex: 1;-->
    <!--background: #ec3e4f;-->
    <!--border: none;-->
    <!--font-size: 1.5rem;-->
    <!--color: white">-->
    <!--                                    <div><img src="myimg/heart.png" /></div>-->
    <!--                                    Donate to Support this event-->
    <!--                                </a>-->
    <!--                            </div>-->
                                    
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="flex justify-center items-center mx-auto" style="background: #ffffff; padding: 20px 20px" id="event">-->
    <!--                        <div style="flex: 1; text-align: center; position: relative">-->
    <!--                            <div style="display: flex; justify-content: center;">-->
    <!--                            <img src="{{ asset('new/assets/images/events/calendar-icon.png')}}">    -->
    <!--                            </div>-->
                                
		  <!--          							<div class="calendar-meta onlyppp" style="position: absolute; top: 30%; width: 94%; height: 94%">-->
		  <!--          								<div class="calendar-month"style="font-size: 2rem">March</div>-->
		  <!--          								<div class="calendar-date" style="font-size: 3.5rem">18</div>-->
		  <!--          								<div class="calendar-date" style="font-size: 2rem">2024</div>-->
		  <!--          							</div>-->
    <!--                        </div>-->
    <!--                        <div style="flex: 2">-->
    <!--                            <div>-->
    <!--                                <h1 class="text-[#13474d] text-2xl sm:text-base md:text-4xl lg:text-4xl font-extrabold uppercase pb-4">-->
    <!--                                    Event: Amber Charter School Free Book Festival-->
    <!--                                </h1>-->
    <!--                                <h1 class="text-[#13474d] text-2xl sm:text-base md:text-4xl lg:text-4xl font-extrabold uppercase pb-4">-->
    <!--                                    Location: Harlem, NY-->
    <!--                                </h1>-->
    <!--                                <h1 class="text-[#13474d] text-2xl sm:text-base md:text-4xl lg:text-4xl font-extrabold uppercase pb-4">-->
    <!--                                    Corporate Partner: National Football League Black Engagement Network (BEN)-->
    <!--                                </h1>-->
    <!--                            </div>-->
                                
    <!--                            <div class = "flex" style="gap: 20px">-->
                                    
    <!--                                <a href="https://www.ourkidsread.org/free-book-festival-nyc-amber" class="text-center" style="    display: flex; align-items: center; justify-content: center;-->
    <!--outline: none;-->
    <!--text-decoration: none !important;-->
    <!--font-weight: bold;-->
    <!--text-align: center;-->
    <!--border: 1px solid;-->
    <!--transition: all 0.3s;-->
    <!--flex: 1;-->
    <!--background: #a7dcd1;-->
    <!--border: none;-->
    <!--font-size: 1.5rem;-->
    <!--color: white;-->
    <!--border: 1px solid">-->
    <!--                                    Donate a Book (Virtual Book Drive)-->
    <!--                                </a>-->
    <!--                                <a href="https://www.ourkidsread.org/free-book-festival-nyc-amber" class="text-center" style="display: flex; align-items: center; justify-content: space-evenly;-->
    <!--outline: none;-->
    <!--text-decoration: none !important;-->
    <!--font-weight: bold;-->
    <!--text-align: center;-->
    <!--border: 1px solid;-->
    <!--transition: all 0.3s;-->
    <!--flex: 1;-->
    <!--background: #ec3e4f;-->
    <!--border: none;-->
    <!--font-size: 1.5rem;-->
    <!--color: white">-->
    <!--                                    <div><img src="myimg/heart.png" /></div>-->
    <!--                                    Donate to Support this event-->
    <!--                                </a>-->
    <!--                            </div>-->
                                    
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="flex justify-center items-center mx-auto" style="background: #a7dcd1; padding: 20px 20px" id="event">-->
    <!--                        <div style="flex: 1; text-align: center; position: relative">-->
    <!--                            <div style="display: flex; justify-content: center;">-->
    <!--                            <img src="{{ asset('new/assets/images/events/calendar-icon.png')}}">    -->
    <!--                            </div>-->
                                
		  <!--          							<div class="calendar-meta onlyppp" style="position: absolute; top: 30%; width: 94%; height: 94%">-->
		  <!--          								<div class="calendar-month"style="font-size: 2rem">March</div>-->
		  <!--          								<div class="calendar-date" style="font-size: 3.5rem">22</div>-->
		  <!--          								<div class="calendar-date" style="font-size: 2rem">2024</div>-->
		  <!--          							</div>-->
    <!--                        </div>-->
    <!--                        <div style="flex: 2">-->
    <!--                            <div>-->
    <!--                                <h1 class="text-[#13474d] text-2xl sm:text-base md:text-4xl lg:text-4xl font-extrabold uppercase pb-4">-->
    <!--                                    Event: WLCAC Free Book Festival-->
    <!--                                </h1>-->
    <!--                                <h1 class="text-[#13474d] text-2xl sm:text-base md:text-4xl lg:text-4xl font-extrabold uppercase pb-4">-->
    <!--                                    Location: Watts, CA-->
    <!--                                </h1>-->
    <!--                                <h1 class="text-[#13474d] text-2xl sm:text-base md:text-4xl lg:text-4xl font-extrabold uppercase pb-4">-->
    <!--                                    Corporate Partner: TBD-->
    <!--                                </h1>-->
    <!--                            </div>-->
                                
    <!--                            <div class = "flex" style="gap: 20px">-->
                                    
    <!--                                <a href="https://www.ourkidsread.org/free-book-festival-la-wlcac" class="text-center" style="    display: flex; align-items: center; justify-content: center;-->
    <!--outline: none;-->
    <!--text-decoration: none !important;-->
    <!--font-weight: bold;-->
    <!--text-align: center;-->
    <!--border: 1px solid;-->
    <!--transition: all 0.3s;-->
    <!--flex: 1;-->
    <!--background: #a7dcd1;-->
    <!--border: none;-->
    <!--font-size: 1.5rem;-->
    <!--color: white;-->
    <!--border: 1px solid">-->
    <!--                                    Donate a Book (Virtual Book Drive)-->
    <!--                                </a>-->
    <!--                                <a href="https://www.ourkidsread.org/free-book-festival-la-wlcac" class="text-center" style="display: flex; align-items: center; justify-content: space-evenly;-->
    <!--outline: none;-->
    <!--text-decoration: none !important;-->
    <!--font-weight: bold;-->
    <!--text-align: center;-->
    <!--border: 1px solid;-->
    <!--transition: all 0.3s;-->
    <!--flex: 1;-->
    <!--background: #ec3e4f;-->
    <!--border: none;-->
    <!--font-size: 1.5rem;-->
    <!--color: white">-->
    <!--                                    <div><img src="myimg/heart.png" /></div>-->
    <!--                                    Donate to Support this event-->
    <!--                                </a>-->
    <!--                            </div>-->
                                    
    <!--                        </div>-->
    <!--                    </div>-->

                        <div class="flex justify-center items-center mx-auto" style="background: #ffffff; padding: 20px 20px" id="event">
                            <div style="flex: 1; text-align: center; position: relative">
                                <div style="display: flex; justify-content: center;">
                                <img src="{{ asset('new/assets/images/events/calendar-icon.png')}}">    
                                </div>
                                
		            							<div class="calendar-meta onlyppp" style="position: absolute; top: 30%; width: 94%; height: 94%">
		            								<div class="calendar-month"style="font-size: 2rem">May</div>
		            								<div class="calendar-date" style="font-size: 3.5rem">23</div>
		            								<div class="calendar-date" style="font-size: 2rem">2024</div>
		            							</div>
                            </div>
                            <div style="flex: 2; flex-direction: column; justify-content: space-between">
                                <div>
                                    <h1 class="text-[#13474d] text-2xl sm:text-base md:text-4xl lg:text-4xl font-extrabold uppercase pb-4">
                                        EVENT: CLASS OF 1979 PRINCETON UNIVERSITY REUNIONS LITERACY EVENT
                                    </h1>
                                    <h1 class="text-[#13474d] text-2xl sm:text-base md:text-4xl lg:text-4xl font-extrabold uppercase pb-4">
                                        Location: Princeton, NJ
                                    </h1>
                                    <h1 class="text-[#13474d] text-2xl sm:text-base md:text-4xl lg:text-4xl font-extrabold uppercase pb-4">
                                        PARTNER(S): PRINCETON CLASS OF 1979 , APGA
                                    </h1>
                                </div>
                                
                                <div class = "flex" style="gap: 20px">
                                    
                                    <a href="https://www.ourkidsread.org/free-book-festival-pureunions-2024" class="text-center" style="    display: flex; align-items: center; justify-content: center;
    outline: none;
    text-decoration: none !important;
    font-weight: bold;
    text-align: center;
    border: 1px solid;
    transition: all 0.3s;
    flex: 1;
    background: #a7dcd1;
    border: none;
    font-size: 1.5rem;
    color: white;
    border: 1px solid">
                                        Donate a Book (Virtual Book Drive)
                                    </a>
                                    <a href="https://www.ourkidsread.org/free-book-festival-pureunions-2024" class="text-center" style="display: flex; align-items: center; justify-content: space-evenly;
    outline: none;
    text-decoration: none !important;
    font-weight: bold;
    text-align: center;
    border: 1px solid;
    transition: all 0.3s;
    flex: 1;
    background: #ec3e4f;
    border: none;
    font-size: 1.5rem;
    color: white">
                                        <div><img src="myimg/heart.png" /></div>
                                        Donate to Support this event
                                    </a>
                                </div>
                                    
                            </div>
                        </div>
                        
                        
                        <div class="flex justify-center items-center mx-auto" style="background: #a7dcd1; padding: 20px 20px" id="event">
                            <div style="flex: 1; text-align: center; position: relative">
                                <div style="display: flex; justify-content: center;">
                                <img src="{{ asset('new/assets/images/events/calendar-icon.png')}}">    
                                </div>
                                
		            							<div class="calendar-meta onlyppp" style="position: absolute; top: 30%; width: 94%; height: 94%">
		            								<div class="calendar-month"style="font-size: 2rem">June</div>
		            								<div class="calendar-date" style="font-size: 3.5rem">15</div>
		            								<div class="calendar-date" style="font-size: 2rem">2024</div>
		            							</div>
                            </div>
                            <div style="flex: 2">
                                <div>
                                    <h1 class="text-[#13474d] text-2xl sm:text-base md:text-4xl lg:text-4xl font-extrabold uppercase pb-4">
                                        Event: DETROIT FORD COMMUNITY RESOURCE ENGAGEMENT CENTER (FREC) JUNETEENTH LITERACY CELEBRATION
                                    </h1>
                                    <h1 class="text-[#13474d] text-2xl sm:text-base md:text-4xl lg:text-4xl font-extrabold uppercase pb-4">
                                        Location: DETROIT, MI
                                    </h1>
                                    <h1 class="text-[#13474d] text-2xl sm:text-base md:text-4xl lg:text-4xl font-extrabold uppercase pb-4">
                                        Corporate Partner: FORD MOTOR COMPANY FUND
                                    </h1>
                                </div>
                                
                                <div class = "flex" style="gap: 20px">
                                    
                                    <a href="https://www.ourkidsread.org/free-book-festival-detroit-frec-2024" class="text-center" style="    display: flex; align-items: center; justify-content: center;
    outline: none;
    text-decoration: none !important;
    font-weight: bold;
    text-align: center;
    border: 1px solid;
    transition: all 0.3s;
    flex: 1;
    background: #a7dcd1;
    border: none;
    font-size: 1.5rem;
    color: white;
    border: 1px solid">
                                        Donate a Book (Virtual Book Drive)
                                    </a>
                                    <a href="https://www.ourkidsread.org/free-book-festival-detroit-frec-2024" class="text-center" style="display: flex; align-items: center; justify-content: space-evenly;
    outline: none;
    text-decoration: none !important;
    font-weight: bold;
    text-align: center;
    border: 1px solid;
    transition: all 0.3s;
    flex: 1;
    background: #ec3e4f;
    border: none;
    font-size: 1.5rem;
    color: white">
                                        <div><img src="myimg/heart.png" /></div>
                                        Donate to Support this event
                                    </a>
                                </div>
                                    
                            </div>
                        </div>
                        
                        
                        <div class="flex justify-center items-center mx-auto" style="background: #ffffff; padding: 20px 20px" id="event">
                            <div style="flex: 1; text-align: center; position: relative">
                                <div style="display: flex; justify-content: center;">
                                <img src="{{ asset('new/assets/images/events/calendar-icon.png')}}">    
                                </div>
                                
		            							<div class="calendar-meta onlyppp" style="position: absolute; top: 30%; width: 94%; height: 94%">
		            								<div class="calendar-month"style="font-size: 2rem">July</div>
		            								<div class="calendar-date" style="font-size: 3.5rem">26</div>
		            								<div class="calendar-date" style="font-size: 2rem">2024</div>
		            							</div>
                            </div>
                            <div style="flex: 2; flex-direction: column; justify-content: space-between">
                                <div>
                                     <h1 class="text-[#13474d] text-2xl sm:text-base md:text-4xl lg:text-4xl font-extrabold uppercase pb-4">
                                        Event: JASMINE NYREE CENTER PITTSBURGH SUMMER LITERACY CELEBRATION
                                    </h1>
                                    <h1 class="text-[#13474d] text-2xl sm:text-base md:text-4xl lg:text-4xl font-extrabold uppercase pb-4">
                                       PARTNER AND SPONSOR: ERIE INSURANCE COMPANY
                                    </h1>
                                    <h1 class="text-[#13474d] text-2xl sm:text-base md:text-4xl lg:text-4xl font-extrabold uppercase pb-4">
                                        Location: PITTSBURGH, PA
                                    </h1>
                                    
                                </div>
                                
                                <div class = "flex" style="gap: 20px">
                                    
                                    <a href="https://www.ourkidsread.org/free-book-festival-pitt-jasmine" class="text-center" style="    display: flex; align-items: center; justify-content: center;
    outline: none;
    text-decoration: none !important;
    font-weight: bold;
    text-align: center;
    border: 1px solid;
    transition: all 0.3s;
    flex: 1;
    background: #a7dcd1;
    border: none;
    font-size: 1.5rem;
    color: white;
    border: 1px solid">
                                        Donate a Book (Virtual Book Drive)
                                    </a>
                                    <a href="https://www.ourkidsread.org/free-book-festival-pitt-jasmine" class="text-center" style="display: flex; align-items: center; justify-content: space-evenly;
    outline: none;
    text-decoration: none !important;
    font-weight: bold;
    text-align: center;
    border: 1px solid;
    transition: all 0.3s;
    flex: 1;
    background: #ec3e4f;
    border: none;
    font-size: 1.5rem;
    color: white">
                                        <div><img src="myimg/heart.png" /></div>
                                        Donate to Support this event
                                    </a>
                                </div>
                                    
                            </div>
                        </div>
                        
                        
                        <div class="flex overflow-hidden" style="margin-top: 30px">
                            <div class="bg-[#13474d] pl-14 pr-14 w-min">
                                <h1 class="uppercase text-white text-sm sm:text-xl md:text-4xl lg:text-4xl font-extrabold pt-5 pb-5 sm:pt-8 sm:pb-9 whitespace-nowrap rotat">okr update in 60 seconds</h1>
                            </div>
                            <div class="bg-[#a7dcd1] flex -space-x-4 sm:-space-x-6 md:-space-x-8 pr-4 -ml-8 main-h5">
                                <div class="main-h6 pl-12 sm:pl-16 rotate-180"></div>
                                <div class="main-h3 hidden sm:block sm:p-4 md:p-6 rotate-180"></div>
                                <div class="main-h4 hidden sm:block p-6 md:p-9 rotate-180"></div>
                                <div class="main-h3 hidden sm:block sm:p-4 md:p-6 rotate-180"></div>
                                <div class="main-h4 hidden sm:block p-6 md:p-9 rotate-180"></div>
                            </div>
                        </div>
                        
                        
                    
                        <div class="div-spave">
                            <h4>Partnerships</h4>
                            <ul>
                                <li>OKR partnered with Morgan Stanley to execute a Free Book Festival at Glenmount Elementary on Friday, March 8th, 2024.</li>
                                <li>The NFL Black Engagement Network was a fantastic partner, helping us bring books, storytelling and West African drumming to the students at the Amber Charter School - East Harlem.</li>
                                
                                <li>Kicked off our relationship with the Lehigh Valley Health network, thanks to LVHN for your support of the OKR Free Book Festival in Allentown, PA on Friday, April 5, 2024.</li>
                                <li>Nike staff came through yet again as a key volunteer partner for the March 22nd event in Los Angeles at the WLCAC community center.</li>
                                <li>OKR continues to value our partnership with Dysability Alliance for Black Children (DABC), what a great event on Wednesday, April 17 2024 at the Chidren's Aid Society - Harlem.</li>
                                <li>For the 3rd year in a row, thanks for the invite Bissel Community Gardens - Bronx! Excited to spread the love of reading and teach children about sustainability at the same time!</li>
                                <li>Richmond Public library, gracias por todo! What a great Dia de los Ninos event on Saturday, April 27 2024.</li>
                            </ul>
                        </div>
                        
                        <div class="div-spave">
                            <h4> INFRASTRUCTURE DEVELOPMENT</h4>
                            <ul>
                                <li>OKR hired a part-time corporate partner relationship manager, Iris Clara Jones, to manage Our Kids Read's relationship with corporate partners Microsoft, Nike and Verizon.</li>
                                <li>Special welcome to our IT Project Manager who will be governing OKR Portal development moving forward, Class of '23 Computer Science Princeton grad Nicholas Cabrera</li>
                                <li>Many thanks to Vicky Hioureas, *22, for joining the team as an Administrative Officer, we need you!</li>
                                <li>Ciera Peart, we look forward to revving up the OKR grant writing engine, with your help!</li>
                                <li>Kesha Holloway, way to represent OKR at the Microsoft's Bring Your Daughter to Work Day 2024 (on Thursday, April 24, 2024)! Thanks for helping us grow the OKR-Microsoft relationship.</li>
                            </ul>
                        </div>
                        <div class="div-spave" style="margin-bottom: 20px">
                            <h4> GRANTS AND AWARDS</h4>
                            <ul>
                                
                                <li>Special thank you to Erie Insurance for sponsoring a Free Book Festival for 150 students at the Jasmine Nyree Center in Pittburgh, PA on July 26, 2024.</li>
                                <li>Penguin Random house made an incredbly generous 500+ book material donation in support of the Detroit Ford Motor Company Fund Juneteenth literacy event on June 15th.</li>
                                <li>Thanks to the Paypal Giving Fund for monthly contritbutions ranging from $200 to $400 per month (this is really a thanks to all of YOU who donated to OKR during your eBay, Paypal and other transactions - THANK YOU!).</li>
                                <li>Thanks to Nike and Microsoft for their policy of donating dollars to non-profits based on their employee's volunteer hours</li>
                               
                            </ul>
                        </div>
                        
                        <div class="flex overflow-hidden">
                            <div class="bg-[#13474d] pl-14 pr-14 w-min">
                                <h1 class="uppercase text-white text-sm sm:text-xl md:text-4xl lg:text-4xl font-extrabold pt-5 pb-5 sm:pt-8 sm:pb-9 whitespace-nowrap rotat">OKR ADVISORY Board Spotlight and Appreciation</h1>
                            </div>
                            <div class="bg-[#a7dcd1] flex -space-x-4 sm:-space-x-6 md:-space-x-8 pr-4 -ml-8 main-h5">
                                <div class="main-h6 pl-12 sm:pl-16 rotate-180"></div>
                                <div class="main-h3 hidden sm:block sm:p-4 md:p-6 rotate-180"></div>
                                <div class="main-h4 hidden sm:block p-6 md:p-9 rotate-180"></div>
                                <div class="main-h3 hidden sm:block sm:p-4 md:p-6 rotate-180"></div>
                                <div class="main-h4 hidden sm:block p-6 md:p-9 rotate-180"></div>
                            </div>
                        </div>
                        
                        <div class="div-spave" style="margin: 15px 0">
                        
                            
                             <p class="text-sm sm:text-lg md:text-xl lg:text-2xl font-semibold text-justify alltext-ch" style="font-size: 13px; font-weight: 600;">
                            <img src="myimg/kamil_ali_jackson_headshot.jpg" alt="headshot" style="width: 300px; float: left; margin-right: 20px">
                            <span style = "font-size: 1.8rem; font-weight: 700">Kamil Ali-Jackson</span><br/><br/>
                            
                            <span style="font-size: 1.5rem; font-weight: 600"><i>Co-founder, Life Sciences Entrepreneur, and Board member, NASDAQ-listed companies</i></span><br/><br/>
                                
                               After a series of successful exits with venture-funded specialty and biopharmaceutical companies which she co-founded, Kamil co-founded Aclaris Therapeutics, Inc. in 2012. As a member of the Executive Team, Kamil was responsible for Aclaris’ legal, compliance, quality, human resources, and corporate communications functions. Kamil oversaw the strategic repositioning of Aclaris from a venture-capital funded, single product commercial dermatology company to a publicly traded clinical stage biopharmaceutical company with a diverse immuno-inflammatory drug pipeline. Kamil retired from Aclaris in January 2022.<br/><br/>
    
                               Kamil currently serves on the boards of a NASDAQ-listed biopharmaceutical commercial stage company, Rigel Pharmaceuticals, Inc. and a NASDAQ-listed biopharmaceutical clinical development stage company, PDS Biotechnology Corporation. She is the chair of the PDS Biotechnology Nominating and Corporate Governance Committee and a member of the PDS and Rigel Audit and Compensation Committees. Kamil also serves on the board of privately held Moda Operandi, Inc., an online luxury fashion retailer and as an advisor for other private companies. In addition, she is on the Princeton University Board of Trustees and is the chair of the East Bradford Zoning Commission for the local township in which she lives in Pennsylvania.<br/><br/>
    
    
                                During her four decades in the legal field and the life sciences industry, Kamil has co-founded several venture-capital funded specialty and biopharmaceutical companies and a biopharmaceutical assets management company. Several of her companies were purchased in multimillion-dollar acquisitions by global life sciences companies. Two of those companies were sold for upfront payments of $250 million plus up to $1 billion in potential milestone and royalty payments. In 2015, Kamil took one of her companies public. It was the top-ranked initial public offering in any industry in 2015 (based on YTD increase in share price of over 160%). As a serial entrepreneur, Kamil has raised more than $1 billion in private and public equity/debt financings to support the clinical development of intellectual property assets, the growth of her companies, and the creation of more than 300 jobs. Her most recent multimillion-dollar company exit was in 2019.<br/><br/>
                                
                                Kamil’s extensive domestic and international transactional experience with global life sciences companies, such as Merck & Co., Inc., Endo Pharmaceuticals, Inc., and Dr. Reddy’s Laboratories, Inc., includes negotiating multibillion-dollar acquisitions of intellectual property assets and marketed drug products in various therapeutic areas such as vaccines, gastrointestinal, pain management, respiratory, and oncology.<br/><br/>
                                
                                Kamil is one of the few African American female entrepreneurs to co-found several life sciences companies. Kamil is an inaugural member of Princeton University’s Office of the Dean for Research External Advisory Council on Innovation and Entrepreneurship and an adjunct lecturer at the University of Pennsylvania Carey Law School. Kamil received a Juris Doctorate from Harvard Law School and a Bachelor of Arts in Politics from Princeton University. Kamil is married and is the mother of four children.
                                </p>    
                        </div>
                        
                        <div class="flex overflow-hidden">
                            <div class="bg-[#13474d] pl-14 pr-14 w-min">
                                <h1 class="uppercase text-white text-sm sm:text-xl md:text-4xl lg:text-4xl font-extrabold pt-5 pb-5 sm:pt-8 sm:pb-9 whitespace-nowrap rotat">OKR TEAM MEMBER SPOTLIGHT</h1>
                            </div>
                            <div class="bg-[#a7dcd1] flex -space-x-4 sm:-space-x-6 md:-space-x-8 pr-4 -ml-8 main-h5">
                                <div class="main-h6 pl-12 sm:pl-16 rotate-180"></div>
                                <div class="main-h3 hidden sm:block sm:p-4 md:p-6 rotate-180"></div>
                                <div class="main-h4 hidden sm:block p-6 md:p-9 rotate-180"></div>
                                <div class="main-h3 hidden sm:block sm:p-4 md:p-6 rotate-180"></div>
                                <div class="main-h4 hidden sm:block p-6 md:p-9 rotate-180"></div>
                            </div>
                        </div>
                        
                        <div class="div-spave flex" style="margin: 15px 0">
                        
                            
                             <p class="text-sm sm:text-lg md:text-xl lg:text-2xl font-semibold text-justify alltext-ch" style="font-size: 13px; font-weight: 600;">
                            <img src="myimg/headshot_leonela.png" alt="headshot" style="width: 300px; float: left; margin-right: 20px">
                            <span style = "font-size: 1.8rem; font-weight: 700">Leonela Mora</span><br/><br/>
                            
                            Leonela is one of Our Kids Read spokemodels for our NYC events.<br/><br/>
                            She represented the organization at Reverend Rhondas Holiday 2023 Literacy event in Harlem, NY. Over 100 books by Ibi Zaboi were distributed at that event as well as 200 books from other diverse authors.<br/><br/>
                            
                                Leonela Mora is originally from the Dominican Republic, and she currently lives in New Jersey. She doesn’t want to be known as just a “ model” she wants to be known as a role model, someone who inspires and motivates others to go after their dreams.<br/><br/>
                                
                                It is our responsibility to use our voice and platforms to make a difference. Leonela graduated from William Paterson University with a bachelor’s in Communication studies. She is passionate about helping others and making a difference in the world.<br/><br/>
                                
                                Leonela told us "I love being a part of Our Kids Read! Reading and literacy are very important to me. This is a wonderful organization that is passionate about improving the literacy skills of students with free tutoring services and providing children with books."<br/><br/>
                                </p>    
                        </div>
                        
                        <div class="div-spave flex" style="margin: 15px 0">
                        
                            
                             <p class="text-sm sm:text-lg md:text-xl lg:text-2xl font-semibold text-justify alltext-ch" style="font-size: 13px; font-weight: 600;">
                            <img src="myimg/headshot_Gerald_Santos.jpg" alt="headshot" style="width: 300px; float: right; margin-left: 20px">
                            <span style = "font-size: 1.8rem; font-weight: 700">Gerald Santos</span><br/><br/>
                            
                            Gerald is Our Kids Read’s oldest part time contractor, starting with the organization in October of 2021, even before the official programming kick-off.<br/><br/>
                            Based in the Philippines, Gerald has ben our lead researcher and Reading Buddy coordinator for over 2 years. He is currently enrolled in a certificate program to be a professional teacher. A non-profit professional, he has experience conducting research in education and public policy.<br/><br/>
                            
                                “I find working with Our Kids Read truly inspirational.<br/><br/>
                                
                                The same literacy problems faced by low-income students in the United States are also resonated in my country.<br/><br/>
                                
                                I believes that education is so imporrant for our young people. Not only does education nurture but it also empowers children.”<br/><br/>
                                
                                </p>    
                        </div>
                        
                        
                        
                        <div class="flex overflow-hidden" style="margin-bottom:10px; margin-top:10px;">
                            <div class="bg-[#13474d] pl-14 pr-14 w-min">
                                <h1 class="uppercase text-white text-sm sm:text-xl md:text-4xl lg:text-4xl font-extrabold pt-5 pb-5 sm:pt-8 sm:pb-9 whitespace-nowrap rotat">
                                    SUPPORT OUR KIDS READ</h1>
                            </div>
                            <div class="bg-[#a7dcd1] flex -space-x-4 sm:-space-x-6 md:-space-x-8 pr-4 -ml-8 main-h5">
                                <div class="main-h6 pl-12 sm:pl-16 rotate-180"></div>
                                <div class="main-h3 hidden sm:block sm:p-4 md:p-6 rotate-180"></div>
                                <div class="main-h4 hidden sm:block p-6 md:p-9 rotate-180"></div>
                                <div class="main-h3 hidden sm:block sm:p-4 md:p-6 rotate-180"></div>
                                <div class="main-h4 hidden sm:block p-6 md:p-9 rotate-180"></div>
                            </div>
                        </div>
                        
                        
                        <div class="setourchilfive">Three (3) ways to support Our Kids Read:</div>
                        
                        <div class="flex flex-col lg:flex-row xl:max-w-5xl max-w-7xl mx-auto space-y-12 lg:space-y-0 px-4 lg:px-0" style="padding-bottom: 15px">
                            <div class="flex w-full">
                                <div style="flex: 1">
                                    <img src="myimg/number_01.png" alt="pic-4" class="object-cover">
                                </div>
                                <div style="flex: 2">
                                    <img src="myimg/n_1.png" alt="pic-4" class="object-cover ">
                                </div>
                            </div>
                            <div class="w-full text-[#13474d] flex flex-col justify-center space-y-6 lg:px-12 ">
                                <h1 class="text-4xl md:text-4xl lg:text-4xl font-bold"><a href="https://a.co/4eqYtr1" style="text-decoration: underline">Purchase</a> a book for one of our students</h1>
                                
                                <!--<p  class="text-sm sm:text-lg md:text-xl lg:text-2xl font-semibold text-justify alltext-ch" style="font-size: 13px; font-weight: 600;     margin-top: 5px;">-->
                                <!--    OKR Kicks off Partnership with Princeton Internship (Princeternship) Program-->
                                <!--     </p>-->
                            </div>
                        </div>
                        
                        <div class="flex flex-col lg:flex-row xl:max-w-5xl max-w-7xl mx-auto space-y-12 lg:space-y-0 px-4 lg:px-0" style="padding-bottom: 15px">
                            
                            <div class="flex w-full">
                                <div style="flex: 1">
                                    <img src="myimg/number_02.png" alt="pic-4" class="object-cover">
                                </div>
                                <div style="flex: 2">
                                    <img src="myimg/n_2.png" alt="pic-4" class="object-cover ">
                                </div>
                            </div>
                            <div class="w-full text-[#13474d] flex flex-col justify-center space-y-6 lg:px-12 ">
                                <h1 class="text-4xl md:text-4xl lg:text-4xl font-bold"><a href="https://www.ourkidsread.org/make-a-donation" style="text-decoration: underline">Donate</a> to support our programming and infrastructure development</h1>
                                
                                <!--<p  class="text-sm sm:text-lg md:text-xl lg:text-2xl font-semibold text-justify alltext-ch" style="font-size: 13px; font-weight: 600;     margin-top: 5px;">-->
                                <!--    OKR Kicks off Partnership with Princeton Internship (Princeternship) Program-->
                                <!--     </p>-->
                            </div>
                        </div>
                        
                        <div class="flex flex-col lg:flex-row xl:max-w-5xl max-w-7xl mx-auto space-y-12 lg:space-y-0 px-4 lg:px-0" style="padding-bottom: 15px">
                            
                            <div class="flex w-full">
                                <div style="flex: 1">
                                    <img src="myimg/number_03.png" alt="pic-4" class="object-cover">
                                </div>
                                <div style="flex: 2">
                                    <img src="myimg/n_3.png" alt="pic-4" class="object-cover ">
                                </div>
                            </div>
                            <div class="w-full text-[#13474d] flex flex-col justify-center space-y-6 lg:px-12 ">
                                <h1 class="text-4xl md:text-4xl lg:text-4xl font-bold"><a href="https://www.ourkidsread.org/volunteer" style="text-decoration: underline">Volunteer</a> as a Reading Buddy or Bring Your Skills to Help OKR</h1>
                                
                                <!--<p  class="text-sm sm:text-lg md:text-xl lg:text-2xl font-semibold text-justify alltext-ch" style="font-size: 13px; font-weight: 600;     margin-top: 5px;">-->
                                <!--    OKR Kicks off Partnership with Princeton Internship (Princeternship) Program-->
                                <!--     </p>-->
                            </div>
                        </div>
                        
                        
                        
                        
                        <div class="flex overflow-hidden">
                            <div class="bg-[#13474d] pl-14 pr-14 w-min">
                                <h1 class="uppercase text-white text-sm sm:text-xl md:text-4xl lg:text-4xl font-extrabold pt-5 pb-5 sm:pt-8 sm:pb-9 whitespace-nowrap rotat">
                                    FEATURED ARTICLES</h1>
                            </div>
                            <div class="bg-[#a7dcd1] flex -space-x-4 sm:-space-x-6 md:-space-x-8 pr-4 -ml-8 main-h5">
                                <div class="main-h6 pl-12 sm:pl-16 rotate-180"></div>
                                <div class="main-h3 hidden sm:block sm:p-4 md:p-6 rotate-180"></div>
                                <div class="main-h4 hidden sm:block p-6 md:p-9 rotate-180"></div>
                                <div class="main-h3 hidden sm:block sm:p-4 md:p-6 rotate-180"></div>
                                <div class="main-h4 hidden sm:block p-6 md:p-9 rotate-180"></div>
                            </div>
                        </div>
                        
                        <div class="flex flex-col lg:flex-row xl:max-w-5xl max-w-7xl py-6 mx-auto my-6 space-y-12 lg:space-y-0 px-4 lg:px-0">
                            <div class="md:w-[500px] flex justify-center items-center mx-auto lg:mx-0 py-10"><img src="myimg/social_media.jpg" alt="pu_student_volunteer_dinner_2024_best_REDUCED.jpg" class="object-cover shadow-cs"></div>
                            <div class="w-full text-[#13474d] flex flex-col justify-center space-y-6 lg:px-12 ">
                                <h1 class="text-sm sm:text-lg md:text-xl lg:text-3xl font-bold">OKR LAUNCHES YOUTUBE CHANNEL AND HIRES INFLUENCER TO CREATE CONTENT</h1>
                                <p class="text-sm sm:text-lg md:text-xl lg:text-2xl font-semibold text-justify alltext-ch" style="font-size: 13px; font-weight: 600;">
                                    Every week, Our Kids Read will release a "deep-dive" into one diverse book. <a class="redlink" href=" https://www.youtube.com/watch?v=61RP2YSABC8&ab_channel=OurKidsRead
">Click here</a> to access Our Kids Read's YouTube account and our first Diverse Book Review. <a class="redlink" href="https://www.youtube.com/@ourkidsread">Please subscribe!</a>
 </p>
                                <!--<p  class="text-sm sm:text-lg md:text-xl lg:text-2xl font-semibold text-justify alltext-ch" style="font-size: 13px; font-weight: 600;     margin-top: 5px;">-->
                                <!--    OKR Kicks off Partnership with Princeton Internship (Princeternship) Program-->
                                <!--     </p>-->
                            </div>
                        </div>
                        
                                                <div class="flex flex-col lg:flex-row xl:max-w-5xl max-w-7xl py-6 mx-auto my-6 space-y-12 lg:space-y-0 px-4 lg:px-0">
                            <div class="md:w-[500px] flex justify-center items-center mx-auto lg:mx-0 py-10" style="align-items: flex-start"><img src="myimg/ddia_de_los_ninos_April_2024_REDUCED.jpg" alt="pic-4" class="object-cover shadow-cs" style="background-color: #ffffff"></div>
                            <div class="w-full text-[#13474d] flex flex-col justify-center  space-y-6 lg:px-12 ">
                                <h1 class="text-sm sm:text-lg md:text-xl lg:text-3xl font-bold">OUR KIDS READ AND CHASE TEAM UP FOR A POWERFUL LITERACY EVENT IN L.A.</h1>
                                <p class="text-sm sm:text-lg md:text-xl lg:text-2xl font-semibold text-justify alltext-ch" style="font-size: 13px; font-weight: 600;">
                                    Our Kids Read, in partnership with the Richmond Public Library, is brought free books for children and bilingual storytelling to this year's Día de los Niños celebration! This is the 3rd consecuritve year that Our Kids Read has supported this Richmond, VA-area bilingual (English/Spanish) event. Special thanks to OKR Advisory Board member Kortenay Gardiner for representing Our Kids Read at this event.
<br><br>
Our Kids Read gave away over 100 books at this event and regaled young festival attendees with bilingual stories by Johanna Aguilar.            </p>
                          
                            </div>
                        
                        
                        
                        
                        </div>
                        
                                                                        <div class="flex flex-col lg:flex-row xl:max-w-5xl max-w-7xl py-6 mx-auto my-6 space-y-12 lg:space-y-0 px-4 lg:px-0">
                            <div class="md:w-[500px] flex justify-center items-center mx-auto lg:mx-0 py-10" style="align-items: flex-start"><img src="myimg/DABC_Reduced.jpg" alt="pic-4" class="object-cover shadow-cs" style="background-color: #ffffff"></div>
                            <div class="w-full text-[#13474d] flex flex-col justify-center  space-y-6 lg:px-12 ">
                                <h1 class="text-sm sm:text-lg md:text-xl lg:text-3xl font-bold">OKR Partners with the Dyslexia Alliance for Black Children (DABC) for a Book Give-away event in Harlem, NY
</h1>
                                <p class="text-sm sm:text-lg md:text-xl lg:text-2xl font-semibold text-justify alltext-ch" style="font-size: 13px; font-weight: 600;">
                                  Special thanks for the invite DABC! Our Kids Read was happy to send two boxes of books in support of the DABC literacy event hosted at the Children's Aid Society in Harlem, NY. Smiling faces all around as each student was able to pick at least two diverse books to take home with them. this is the second consecutive year that OKR and DABC have teamed up to bring books and other literacy services to K-5th grade students and their families.
    </p>
                          
                            </div>
                        
                        
                        
                        
                        </div>
                        
                        <div class="flex flex-col lg:flex-row xl:max-w-5xl max-w-7xl py-6 mx-auto my-6 space-y-12 lg:space-y-0 px-4 lg:px-0">
                            <div class="md:w-[500px] flex justify-center items-center mx-auto lg:mx-0 py-10"><img src="myimg/sean_williams_girl_dad.jpg" alt="pu_student_volunteer_dinner_2024_best_REDUCED.jpg" class="object-cover shadow-cs"></div>
                            <div class="w-full text-[#13474d] flex flex-col justify-center space-y-6 lg:px-12 ">
                                <h1 class="text-sm sm:text-lg md:text-xl lg:text-3xl font-bold">OUR KIDS READ CONNECTS WITH SEAN WILLIAMS, AUTHOR OF THE GIRLD DAD AND BOY DAD BOOKS</h1>
                                <p class="text-sm sm:text-lg md:text-xl lg:text-2xl font-semibold text-justify alltext-ch" style="font-size: 13px; font-weight: 600;">
                                    Our Kids Read was thrilled to meet Sean Williams in-person! OKR purchased copies of Mr. Williams' books for the March Free Book Festivals in Baltimore, New York and Los Angeles. The students loved them!
                                </p>
                                <!--<p  class="text-sm sm:text-lg md:text-xl lg:text-2xl font-semibold text-justify alltext-ch" style="font-size: 13px; font-weight: 600;     margin-top: 5px;">-->
                                <!--    OKR Kicks off Partnership with Princeton Internship (Princeternship) Program-->
                                <!--     </p>-->
                            </div>
                        </div>
                                                <div class="flex flex-col lg:flex-row xl:max-w-5xl max-w-7xl py-6 mx-auto my-6 space-y-12 lg:space-y-0 px-4 lg:px-0">
                            <div class="md:w-[500px] flex justify-center items-center mx-auto lg:mx-0 py-10" style="align-items: flex-start"><img src="myimg/bissell_gardens_april_2024_REDUCED.jpg" alt="pic-4" class="object-cover shadow-cs" style="background-color: #ffffff"></div>
                            <div class="w-full text-[#13474d] flex flex-col justify-center  space-y-6 lg:px-12 ">
                                <h1 class="text-sm sm:text-lg md:text-xl lg:text-3xl font-bold">Bissel Gardens and Our Kids Read - A Match Made in the Garden!</h1>
                                <p class="text-sm sm:text-lg md:text-xl lg:text-2xl font-semibold text-justify alltext-ch" style="font-size: 13px; font-weight: 600;">
                                    Our Kids Read sent copies of Parker Grows a Garden, Indigo Bloom and the Garden City and many more to tie in the students' visit to the community gardens with books in the OKR book catalog. One of our key partners in NYC and a member of the leadership committee for Bissell Community Gardens in the Bronx, NY, Charles Vasser invited OKR to ensure the children had both exposure to nature and books during their visit. NY State Senator Jamaal Bailey and Bissel Commnunity gardens brought over 50 children to the gardens for the April 29, 2024 event.
 </p>
                          
                            </div>
                        
                        
                        
                        
                        </div>
                        <div class="flex flex-col lg:flex-row xl:max-w-5xl max-w-7xl py-6 mx-auto my-6 space-y-12 lg:space-y-0 px-4 lg:px-0">
                            <div class="md:w-[500px] flex justify-center items-center mx-auto lg:mx-0 py-10" style="align-items: flex-start"><img src="myimg/Chase_Bank_Logo.png" alt="pic-4" class="object-cover shadow-cs" style="background-color: #ffffff"></div>
                            <div class="w-full text-[#13474d] flex flex-col justify-center  space-y-6 lg:px-12 ">
                                <h1 class="text-sm sm:text-lg md:text-xl lg:text-3xl font-bold">OUR KIDS READ AND CHASE TEAM UP FOR A POWERFUL LITERACY EVENT IN L.A.</h1>
                                <p class="text-sm sm:text-lg md:text-xl lg:text-2xl font-semibold text-justify alltext-ch" style="font-size: 13px; font-weight: 600;">
                                    Chase and Our Kids Read teamed up in Los Angeles for an afternoon and evening of storytelling, drumming, free books and, thanks to Chase, financial literacy made fun! Chase brought six (6) volunteers to the OKR-WLCAC Free Book Festival in Los Angeles. The financial literacy games were targeted to three age groups: elementary, middle school and high school (three separate sets of activities to ensure that the content was age-appropriate). OKR looks forward to future collaboration with Chase, the next joint event will be in June 2024.<br/><br/>
                                </p>
                          
                            </div>
                        
                        
                        
                        
                        </div>
                        <div class="flex overflow-hidden" style="margin-bottom:10px; margin-top:10px;">
                            <div class="bg-[#13474d] pl-14 pr-14 w-min">
                                <h1 class="uppercase text-white text-sm sm:text-xl md:text-4xl lg:text-4xl font-extrabold pt-5 pb-5 sm:pt-8 sm:pb-9 whitespace-nowrap rotat">
                                    ORGANIZATIONAL DEVELOPMENT</h1>
                            </div>
                            <div class="bg-[#a7dcd1] flex -space-x-4 sm:-space-x-6 md:-space-x-8 pr-4 -ml-8 main-h5">
                                <div class="main-h6 pl-12 sm:pl-16 rotate-180"></div>
                                <div class="main-h3 hidden sm:block sm:p-4 md:p-6 rotate-180"></div>
                                <div class="main-h4 hidden sm:block p-6 md:p-9 rotate-180"></div>
                                <div class="main-h3 hidden sm:block sm:p-4 md:p-6 rotate-180"></div>
                                <div class="main-h4 hidden sm:block p-6 md:p-9 rotate-180"></div>
                            </div>
                        </div>
                        
                        <!--                        <div class="div-spave" style="margin: 15px 0; min-height: 200px; display: flex">-->
                        
                            
                        <!--     <p class="text-sm sm:text-lg md:text-xl lg:text-2xl font-semibold text-justify alltext-ch" style="font-size: 13px; font-weight: 600;">-->
                        <!--    <img src="myimg/64.jpg" alt="headshot" style="width: 350px; float: right; margin-left: 20px">-->
                            
                        <!--       Sending special thanks Rem and Company this year, an organization dedicated to providing volunteer support to small US-based businesses. The Princeton student arm of Rem and Company provided organizational support from October 2023 through January 2024 this year. Joseph Suharno '25, Hazel Gupta '26, Daniel Kim '26, Russell Fan '26 and Kristy Gonzalez '25 made up the core Princeton Rem and Company team. Deliverables produced by this team include: Donor Outreach Strategy, Volunteer Mobilization Plan, Social Media Outreach Guidebook, Plan to Optimize Manual Operations, Mobile App Development Outline and External Content Integration Strategy for the Our Kids Read Reading Portal. So impressive team! We are honored to be selected as one of the non-profits you support.<br/>-->
                        <!--        </p>    -->
                        <!--</div>-->
                        
                        <div class="div-spave flex" style="margin: 15px 0">
                        
                            
                             <p class="text-sm sm:text-lg md:text-xl lg:text-2xl font-semibold text-justify alltext-ch" style="font-size: 13px; font-weight: 600;">
                            <img src="myimg/Iris_Jones.jpg" alt="headshot" style="width: 300px; float: left; margin-right: 20px">
                            <span style = "font-size: 1.8rem; font-weight: 700">Iris Jones</span><br/><br/>
                            
                            We're pleased to announce the addition of Iris Jones as the first OKR project manager.<br/><br/>
                            
                                Iris is a Senior Project Manager at Verizon, she leverages her expertise in project management to drive successful outcomes.She is responsible for overseeing complex projects from initiation to completion, ensuring that they are delivered on time and within budget. Iris thrives in dynamic environments where she can collaborate with cross-functional teams to achieve strategic objectives.Her journey in project management began during high school when she took an elective course that sparked her interest and set her on this career path. She is a proud graduate of Purdue University Global, where she further honed her skills and acquired the knowledge necessary to excel in Project Management.<br/><br/>

                                Background:
                                Iris’ professional journey started at Granite Creations, where she served as an Office Manager. In this role, she led a team of kitchen designers, overseeing operations and ensuring seamless workflow. This experience instilled in her the importance of effective leadership and communication, skills that she continues to utilize in her current position at Verizon.<br/><br/>
                                                            
                                                                Interests:
                                Outside of my professional endeavors, she is an avid outdoor enthusiast. You can often find her hiking scenic trails, exploring new destinations, or participating in local entertainment events. She believes in the importance of maintaining a healthy work-life balance and finding joy in both her personal and professional pursuits. She is particularly excited about the opportunity to nurture the Our Kids Read program through her project management expertise. Education is a cause close to her heart, and she believes that every child deserves access to quality reading resources. By leveraging project management principles, she is dedicated to ensuring the success and scalability of this program, empowering children with the essential skill of literacy.<br/><br/>
                                </p>    
                        </div>
                        
                        <div class="div-spave" style="margin: 15px 0; min-height: 200px; display: flex">
                        
                            
                             <p class="text-sm sm:text-lg md:text-xl lg:text-2xl font-semibold text-justify alltext-ch" style="font-size: 13px; font-weight: 600;">
                            <img src="myimg/headshot_Whitney_Roberts_cropped.jpg" alt="headshot" style="width: 300px; float: right; margin-left: 20px">
                            <span style = "font-size: 1.8rem; font-weight: 700">Whitney Roberts</span><br/><br/>
                               Whitney Roberts is an award winning writer, podcaster, and content creator based in Philadelphia, Pa.<br/><br/>
                               
                               She has been honored by the NAACP and featured in Wired Magazine, i-D Magazine, and NBC. As a writer, she has contributed to TheRoot, Shondaland, Insider, Zora, and Parents.com. and as a content creator, she’s collaborated with NPR, WHYY, and various philanthropies. Learn more about her @TheReclaimed on Instagram.<br/>
                                </p>    
                        </div>
                        
                                            <div class="div-spave flex" style="margin: 15px 0">
                        
                            
                             <p class="text-sm sm:text-lg md:text-xl lg:text-2xl font-semibold text-justify alltext-ch" style="font-size: 13px; font-weight: 600;">
                            <img src="myimg/headshot_ciera_REDUCED.jpg" alt="headshot" style="width: 300px; float: left; margin-right: 20px">
                            <span style = "font-size: 1.8rem; font-weight: 700">Ciera Peart</span><br/><br/>
                            
                            Ciera Peart is the newest member of the team, the plan is for Ciera to support OKR's grant writing efforts. Ms. Peart is a student athlete with a passion for children and education! Ciera is in training to become a pediatric behavioral therapist.
<br/><br/>
                            
                                She is a Psychology major with a minor in Child development. <br/><br/>Ciera's passion is to make a positive difference in lives of the children she serves. <br><br>
                                Being on this journey of helping kids find the importance of education is everything. Including the opportunity to create excitement and ease in this process all because of Our Kids Read mission. This mission will help so many kids learn and open the door to understanding its importance.

                                </p>    
                        </div>
                        
                        <div class="div-spave" style="margin: 15px 0; min-height: 200px; display: flex">
                        
                            
                             <p class="text-sm sm:text-lg md:text-xl lg:text-2xl font-semibold text-justify alltext-ch" style="font-size: 13px; font-weight: 600;">
                            <img src="myimg/headshot_nicholas_cabrera_REDUCED.jpg" alt="headshot" style="width: 300px; float: right; margin-left: 20px">
                            <span style = "font-size: 1.8rem; font-weight: 700">Nicholas Cabrera</span><br/><br/>
                               Nicholas Cabrera '23 graduated with last year with a degree in Computer Science Engineering from Princeton University. While Nicholas was a CS major, he also took full advantage of Princeton's Liberal Arts curriculum. This led Nicholas to prioritize taking better use of technology within society as well as find ways to connect both user and creator in a more stable relationship. Furthermore, Nicholas has experience developing and coding projects aimed at connecting wider communities across the Internet.
<br/><br/>
                               
                               Currently, Nicholas is looking forward to taking part in Our Kids Read as the IT Project Manager due to his love of reading as a child and to help children who do not feel as represented by the books that they read, an idea he often struggled with as a child. Nicholas is excited to join the OKR team.
  </p>    
                        </div>
                        
                        <div class="div-spave flex" style="margin: 15px 0">
                        
                            
                             <p class="text-sm sm:text-lg md:text-xl lg:text-2xl font-semibold text-justify alltext-ch" style="font-size: 13px; font-weight: 600;">
                            <img src="myimg/volunteer_image.jpg" alt="headshot" style="width: 300px; float: left; margin-right: 20px">
                            <span style = "font-size: 1.8rem; font-weight: 700">Our Kids Read Needs Volunteers!</span><br/><br/>
                            
                                Our Kids Read is looking for volunteers, especially accountants. We are often asked to provide an audited financial statement with grant applications and have received quotes from $5,000 to $20,000 for a company to completed our audited financial record.
                                If you (or someone you know) can volunteer to help us in this area, we'd greatly appreciate it. In addition to accounting help, we also need: graphic designers, project managers, programmers, social media gurus and general volunteers.<br/><br/>
                                
                                </p>    
                        </div>
                        


                        
                        <!--<div class="w-full py-6 mt-5 bg-1 relative h-auto ">-->
                        <!--    <div class="flex flex-col lg:flex-row xl:max-w-5xl max-w-7xl py-6 mx-auto px-4 lg:space-x-6 table-three">-->
                        <!--        <div class="  border-4 rounded border-[#c0414f]  ">-->
                        <!--            <img src="myimg/64.jpg" alt="pic-5" class="object-cover " style="height:100%;">-->
                        <!--        </div>-->
                        <!--        <div class="alltext-ch w-full text-sm sm:text-xl md:text-2xl lg:text-3xl py-4 text-justify">-->
                        <!--            <h5>Rem & Co Princeton Donates Hundreds of Volunteer Hours to OKR 2023/2024 Projects</h5>-->
                        <!--            <p>-->
                        <!--                Our Kids Read connected with Rem & Co this year, an organization dedicated to providing volunteer support to small US-based businesses. Joseph Suharno '25 is working on strategies to integrate external content and literacy tools into OKR's reading portal, Hazel Gupta & Daniel Kim '26 are working to automate select manual OKR processes, Russel Fan '26 is working on a donor outreach and volunteer mobilization strategy and Kristy Gonzalez '25 is developin a social media optimization strategy for OKR.-->
                        <!--            </p>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <div class="flex overflow-hidden" style="margin-bottom:10px; margin-top:10px;">
                            <div class="bg-[#13474d] pl-14 pr-14 w-min">
                                <h1 class="text-white uppercase text-sm sm:text-xl md:text-4xl lg:text-4xl font-extrabold pt-5 pb-5 sm:pt-8 sm:pb-9 whitespace-nowrap rotat">
                                    READING BUDDIES PROGRAM</h1>
                            </div>
                            <div class="bg-[#a7dcd1] flex -space-x-4 sm:-space-x-6 md:-space-x-8 pr-4 -ml-8 main-h5">
                                <div class="main-h6 pl-12 sm:pl-16 rotate-180"></div>
                                <div class="main-h3 hidden sm:block sm:p-4 md:p-6 rotate-180"></div>
                                <div class="main-h4 hidden sm:block p-6 md:p-9 rotate-180"></div>
                                <div class="main-h3 hidden sm:block sm:p-4 md:p-6 rotate-180"></div>
                                <div class="main-h4 hidden sm:block p-6 md:p-9 rotate-180"></div>
                            </div>
                        </div>
                        <div class="w-full py-6 mt-5 bg-1 relative h-auto ">
                        <div class="div-spave" style="margin: 15px 0; min-height: 200px">
                        
                            
                             <p class="text-sm sm:text-lg md:text-xl lg:text-2xl font-semibold text-justify alltext-ch" style="font-size: 13px; font-weight: 600;">
                            <img src="myimg/reading_portal_screnshot.png" alt="headshot" style="width: 300px; float: left; margin-right: 20px; border: 5px solid #13474d; border-radius: .25rem">
                            <span style = "font-size: 1.6rem">Our Kids Read Launches v.0.4 of the OKR Reading Portal
</span>  <br/></br>                
                               Our Kids Read launched v.0.4 of the OKR Reading Portal! New features include: the ability to schedule students and readers based on availability of both parties, a streamlined onboarding experience and a new "Training" section which will continue to grow in the coming months.
 <br/></br>
 Coming next in v.0.5, the ability for readers to prview their students' background details prior to the first session, the ability to cancel and request a re-schdule of reading appointments from the online interface and text alerts to remind Reading Buddies and students/parents of upcoming sessions,.

 </p>    
                        </div>
                            
                        </div>
                        
                        <div class="flex overflow-hidden">
                            <div class="bg-[#13474d] pl-14 pr-14 w-min">
                                <h1 class="text-white uppercase text-sm sm:text-xl md:text-4xl lg:text-4xl font-extrabold pt-5 pb-5 sm:pt-8 sm:pb-9 whitespace-nowrap rotat">
                                    partners and donors</h1>
                            </div>
                            <div class="bg-[#a7dcd1] flex -space-x-4 sm:-space-x-6 md:-space-x-8 pr-4 -ml-8 main-h5">
                                <div class="main-h6 pl-12 sm:pl-16 rotate-180"></div>
                                <div class="main-h3 hidden sm:block sm:p-4 md:p-6 rotate-180"></div>
                                <div class="main-h4 hidden sm:block p-6 md:p-9 rotate-180"></div>
                                <div class="main-h3 hidden sm:block sm:p-4 md:p-6 rotate-180"></div>
                                <div class="main-h4 hidden sm:block p-6 md:p-9 rotate-180"></div>
                            </div>
                        </div>
                        <p class="onlyppp" style="font-size: 2rem; margin-bottom: 20px">A special thanks to the following corporate and foundation partners and sponsors:</p>
                        
                        
                        <div>
                            <div style="font-size: 1.8rem; margin-bottom: 15px; font-weight: bold">
                                OKR Donors and Book Festival Sponsors
                            </div>

                    
                            <div><img src="myimg/collage_donors_sponsors.jpg" alt=""/></div>
                        </div>
                        
                        <div>
                            <div style="font-size: 1.8rem; margin-bottom: 15px; font-weight: bold">
                                Companies Providing Volunteers for OKR Book Festivals and the OKR Reading Buddy Program
                            </div>

                    
                            <div><img src="myimg/collage_volunteer_partners_FINAL.jpg" alt=""/></div>
                        </div>
                            
                        <div>
                            <div style="font-size: 1.8rem; margin-bottom: 15px; font-weight: bold">
                                Book Donation Partners
                            </div>

                    
                            <div><img src="myimg/collage_book_donation_parnters_FINAL.jpg" alt=""/></div>
                        </div>
                            
                                
                            
                            <div class="flex overflow-hidden" style="margin-bottom:10px; margin-top:10px;">
                            <div class="bg-[#13474d] pl-14 pr-14 w-min">
                                <h1 class="text-white uppercase text-sm sm:text-xl md:text-4xl lg:text-4xl font-extrabold pt-5 pb-5 sm:pt-8 sm:pb-9 whitespace-nowrap rotat">
                                    SUPPORT OUR KIDS READ</h1>
                            </div>
                            <div class="bg-[#a7dcd1] flex -space-x-4 sm:-space-x-6 md:-space-x-8 pr-4 -ml-8 main-h5">
                                <div class="main-h6 pl-12 sm:pl-16 rotate-180"></div>
                                <div class="main-h3 hidden sm:block sm:p-4 md:p-6 rotate-180"></div>
                                <div class="main-h4 hidden sm:block p-6 md:p-9 rotate-180"></div>
                                <div class="main-h3 hidden sm:block sm:p-4 md:p-6 rotate-180"></div>
                                <div class="main-h4 hidden sm:block p-6 md:p-9 rotate-180"></div>
                            </div>
                        </div>
                        <div class="setourchilfive">Three (3) ways to support Our Kids Read:</div>
                        
                        <div class="flex flex-col lg:flex-row xl:max-w-5xl max-w-7xl mx-auto space-y-12 lg:space-y-0 px-4 lg:px-0" style="padding-bottom: 15px">
                            <div class="flex w-full">
                                <div style="flex: 1">
                                    <img src="myimg/number_01.png" alt="pic-4" class="object-cover">
                                </div>
                                <div style="flex: 2">
                                    <img src="myimg/n_1.png" alt="pic-4" class="object-cover ">
                                </div>
                            </div>
                            <div class="w-full text-[#13474d] flex flex-col justify-center space-y-6 lg:px-12 ">
                                <h1 class="text-4xl md:text-4xl lg:text-4xl font-bold"><a href="https://a.co/4eqYtr1" style="text-decoration: underline">Purchase</a> a book for one of our students</h1>
                                
                                <!--<p  class="text-sm sm:text-lg md:text-xl lg:text-2xl font-semibold text-justify alltext-ch" style="font-size: 13px; font-weight: 600;     margin-top: 5px;">-->
                                <!--    OKR Kicks off Partnership with Princeton Internship (Princeternship) Program-->
                                <!--     </p>-->
                            </div>
                        </div>
                        
                        <div class="flex flex-col lg:flex-row xl:max-w-5xl max-w-7xl mx-auto space-y-12 lg:space-y-0 px-4 lg:px-0" style="padding-bottom: 15px">
                            
                            <div class="flex w-full">
                                <div style="flex: 1">
                                    <img src="myimg/number_02.png" alt="pic-4" class="object-cover">
                                </div>
                                <div style="flex: 2">
                                    <img src="myimg/n_2.png" alt="pic-4" class="object-cover ">
                                </div>
                            </div>
                            <div class="w-full text-[#13474d] flex flex-col justify-center space-y-6 lg:px-12 ">
                                <h1 class="text-4xl md:text-4xl lg:text-4xl font-bold"><a href="https://www.ourkidsread.org/make-a-donation" style="text-decoration: underline">Donate</a> to support our programming and infrastructure development</h1>
                                
                                <!--<p  class="text-sm sm:text-lg md:text-xl lg:text-2xl font-semibold text-justify alltext-ch" style="font-size: 13px; font-weight: 600;     margin-top: 5px;">-->
                                <!--    OKR Kicks off Partnership with Princeton Internship (Princeternship) Program-->
                                <!--     </p>-->
                            </div>
                        </div>
                        
                        <div class="flex flex-col lg:flex-row xl:max-w-5xl max-w-7xl mx-auto space-y-12 lg:space-y-0 px-4 lg:px-0" style="padding-bottom: 15px">
                            
                            <div class="flex w-full">
                                <div style="flex: 1">
                                    <img src="myimg/number_03.png" alt="pic-4" class="object-cover">
                                </div>
                                <div style="flex: 2">
                                    <img src="myimg/n_3.png" alt="pic-4" class="object-cover ">
                                </div>
                            </div>
                            <div class="w-full text-[#13474d] flex flex-col justify-center space-y-6 lg:px-12 ">
                                <h1 class="text-4xl md:text-4xl lg:text-4xl font-bold"><a href="https://www.ourkidsread.org/volunteer" style="text-decoration: underline">Volunteer</a> as a Reading Buddy or Bring Your Skills to Help OKR</h1>
                                
                                <!--<p  class="text-sm sm:text-lg md:text-xl lg:text-2xl font-semibold text-justify alltext-ch" style="font-size: 13px; font-weight: 600;     margin-top: 5px;">-->
                                <!--    OKR Kicks off Partnership with Princeton Internship (Princeternship) Program-->
                                <!--     </p>-->
                            </div>
                        </div>
                        
                        <div class="flex py-16 items-center">
                            <div class="flex-grow bg-[#13474d] h-3 sm:h-6 mt-3 mb-2 md:mb-0"></div>
                            <p class="px-6 sm:text-xl md:text-4xl font-extrabold text-[#13474d]">www.ourkidsread.org
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="shell">
            <div class="grid grid--align-center">
                <div class="grid__col grid__col--6of12">
                    <a href="home.html" class="logo logo--footer">
                        <img src="https://www.ourkidsread.org/new/assets/images/svg/logo-compact.svg" alt="">
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
                        <p>Our Kids Read is a Federally recognized 501c3 not-for-profit entity, Federal</p>
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
            if(div) div.classList.add(toggleClass1);
        } else {
            if(div) div.classList.remove(toggleClass1);
        }
    });
    </script>
</body>

</html>