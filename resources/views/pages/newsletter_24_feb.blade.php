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
            <p class="px-4 hover:bg-[#ec3f4f] cursor-pointer pt-[6px] pb-[5px] group flex items-center newsletter-link active" id="february2024"> <i class="fa-solid fa-caret-right pr-2 text-[#13474d] group-hover:text-white"></i> <span class="t-shadow tracking-wide"> February 2024</span></p>
            <a href="https://www.ourkidsread.org/newsletter-24-may" style="color: #ffffff">
                <p class="px-4 hover:bg-[#ec3f4f] cursor-pointer pt-[6px] pb-[5px] group flex items-center newsletter-link " id="april2024"> <i class="fa-solid fa-caret-right pr-2 text-[#13474d] group-hover:text-white"></i> <span class="t-shadow tracking-wide"> May 2024</span></p>
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
                            <p class="px-4 hover:bg-[#ec3f4f] cursor-pointer pt-[6px] pb-[5px] group flex items-center newsletter-link active" id="february2024">
                                <i class="fa-solid fa-caret-right pr-2 text-[#13474d] group-hover:text-white"></i> <span class="t-shadow tracking-wide"> February 2024</span>
                            </p>
                            <a href="https://www.ourkidsread.org/newsletter-24-may" style="color: #ffffff">
                                <p class="px-4 hover:bg-[#ec3f4f] cursor-pointer pt-[6px] pb-[5px] group flex items-center newsletter-link " id="april2024">
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
                                    Our Kids Read Monthly Newsletter <span class="ms-5" style="color:rgb(236 63 79);">February 2024</span>
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
                                        <p style="margin-bottom:10px;     font-size: 14px;">The organization is settling nicely into 2024 and we are staying true to our promise: focusing on infrastructure development (grant writing, policy and procedure documentation, developing our metrics, logic model and theory of change and bringing on paid and volunteer staff).</p>
                                        <p style="margin-bottom:10px ;     font-size: 14px;">Enjoy this newsletter! We're committed to bringing our supporters on this journey with us and we hope that you're as excited as we are about the organization's meteoric growth! We believe it represents that you believe what we believe: bringing the right resources together with the right heart, the right discipline and the right technology and anything is possible.</p>
                                        <p style="margin-bottom:10px;     font-size: 14px;">We are taking January and February to plan our first 2024 events which will kick-off in Baltimore, Allentown, New York and Los Angeles in March. Click here to support these events by participating in a book drive or donating.</p>
                                        <p style="margin-bottom:10px;     font-size: 14px;">Have a great rest of this extra-long February and wishing you peace, love and solidarity.</p>
                                        <p style="margin-bottom:10px;     font-size: 14px;">Warmest Regards,</p>
                                        <p>Jahmal Lake</p>
                                        <p>Executive Director, Our Kids Read</p>
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
                                        EVENT: OKR SPOTLIGHTS IBI ZOBOI IN NYC HOLIDAY LITERACY CELEBRATION
                                    </h1>
                                    <div class="w-full rounded border-4 border-[#c0414f] border-light-gray">
                                        <img src="myimg/004.jpg" alt="pic-2" class="faatureimg">
                                    </div>
                                    <p class="onlyppp">
                                        Thanks to our first and youngest high school Reading Buddy, Ilianna Brett, we were able to highlight the amazing work of Haitian author, Ibi Zoboi. Ilianna approached OKR with a desire to highlight Zoboi's books and OKR was happy to support. OKR donated over 200 books and highlighted the young adult fiction of Ibi Zoboi at a December 21st Free Book Festival at the Grand Ballroom in Harlem for youth in the NYC shelter system.
                                    </p>
                                </div>
                                <div class="lg:w-[50%] flex flex-col justify-between1">
                                    <h1 class="text-[#13474d] text-2xl sm:text-base md:text-4xl lg:text-4xl font-extrabold uppercase pb-4">
                                        SUPPORT: PETRUCCI FAMILY FOUNDATION RENEWS SUPPORT FOR A 3RD YEAR
                                    </h1>
                                    <div class="w-full rounded border-4 border-[#c0414f] border-light-gray">
                                        <img src="myimg/005.jpg" alt="pic-3" class="faatureimg">
                                    </div>
                                    <p class="onlyppp">
                                        Special thanks to the Petrucci Family Foundation who, for the third consecuive year, renewed their support for Our Kids Read Free Book Festivals and Reading Buddy programs. The donation of over 5,000 books, 7 Free Book Festivals and the support of over 50 children are directly attributable to the Petrucci Family Foundation's support.
                                    </p>
                                </div>
                            </div>
                            <div class="flex flex-col lg:flex-row space-y-12 lg:space-y-0 lg:space-x-14 pt-12">
                                <div class="lg:w-[50%] flex flex-col justify-between1">
                                    <h1 class="text-[#13474d] text-2xl sm:text-base md:text-4xl lg:text-4xl font-extrabold uppercase pb-4">
                                        BOOKS: OKR SUPPORTS BLACK CHILDREN'S LITERATURE EVENT IN MONTCLAIR, NJ
                                    </h1>
                                    <div class="w-full rounded border-4 border-[#c0414f] border-light-gray">
                                        <img src="myimg/goerge_ford_collage_FINAL.jpg" alt="pic-2" class="faatureimg" style="height:auto;">
                                    </div>
                                    <p class="onlyppp">
                                        We were in the presence of literary greatness this weekend! Wade Hudson and Just Us Books invited Our Kids Read to the "Writing Our Future: A Celebration of Black Children's Literature" at the Montclair Public Library in Montclair, NJ on Saturday February 17th, 2024. The event's star-studded line-up included a number of award-winning authors and illustrators including: Valerie Wilson Wesley, Denise Lewis Patrick, Sharon Dennis Wyeth, Eric Velasquez, Torrey Maldonado, Olugbemisola Rhuday-Perkovich, Rita Williams-Garcia abd Wade and Cheryl Hudson. Pictured here is George Ford, pioneering children's book illustrator, the first illustrator to win a Coretta Scott King Award in 1974 for his illustrations in the book "Ray Charles" by Sharon Bell Mathis."
                                    </p>
                                </div>
                                <div class="lg:w-[50%] flex flex-col justify-between1">
                                    <h1 class="text-[#13474d] text-2xl sm:text-base md:text-4xl lg:text-4xl font-extrabold uppercase pb-4">
                                        PARTNER: ABACO CARES PROVIDES READING BUDDIES FOR D.C. GOVERNMENT PROJECT
                                    </h1>
                                    <div class="w-full rounded border-4 border-[#c0414f] border-light-gray">
                                        <img src="myimg/dc_government_harbor_light.jpg" alt="pic-3" class="faatureimg" style="height:auto;">
                                    </div>
                                    <p class="onlyppp">
                                        Our Kids Read has partnered with the D.C. government Office of Migrant Services to develop a Reading Buddies program at Harbor Lights, a migrant shelter on New York Avenue in Washington, D.C. OKR will bring 10 Spanish-speaking Reading Buddies once week for 45 minutes to read virtually with the students at Harbor Lights. Abaco Cares, a local DC-based foundation, has offered the first two bilingual candidates for the pilot. <a href="https://www.ourkidsread.org/volunteer
">Click here</a> if you speak Spanish and would like to apply to read with one of our Harbor Lights students virtually on Wednesdays or Thursdays from 5:30 PM - 6:15 PM.
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
                        <div class="flex justify-center items-center mx-auto" style="background: #a7dcd1; padding: 20px 20px" id="event">
                            <div style="flex: 1; text-align: center; position: relative">
                                <div style="display: flex; justify-content: center;">
                                <img src="{{ asset('new/assets/images/events/calendar-icon.png')}}">    
                                </div>
                                
		            							<div class="calendar-meta onlyppp" style="position: absolute; top: 30%; width: 94%; height: 94%">
		            								<div class="calendar-month"style="font-size: 2rem">March</div>
		            								<div class="calendar-date" style="font-size: 3.5rem">01</div>
		            								<div class="calendar-date" style="font-size: 2rem">2024</div>
		            							</div>
                            </div>
                            <div style="flex: 2">
                                <div>
                                    <h1 class="text-[#13474d] text-2xl sm:text-base md:text-4xl lg:text-4xl font-extrabold uppercase pb-4">
                                        Event: Glenmount Elementary School Free Book Festival
                                    </h1>
                                    <h1 class="text-[#13474d] text-2xl sm:text-base md:text-4xl lg:text-4xl font-extrabold uppercase pb-4">
                                        Location: Baltimore, MD
                                    </h1>
                                    <h1 class="text-[#13474d] text-2xl sm:text-base md:text-4xl lg:text-4xl font-extrabold uppercase pb-4">
                                        Corporate Partner: Morgan Stanley
                                    </h1>
                                </div>
                                
                                <div class = "flex" style="gap: 20px">
                                    
                                    <a href="https://www.ourkidsread.org/free-book-festival-baltimore-glenmount" class="text-center" style="    display: flex; align-items: center; justify-content: center;
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
                                    <a href="https://www.ourkidsread.org/free-book-festival-baltimore-glenmount" class="text-center" style="display: flex; align-items: center; justify-content: space-evenly;
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
		            								<div class="calendar-month"style="font-size: 2rem">March</div>
		            								<div class="calendar-date" style="font-size: 3.5rem">18</div>
		            								<div class="calendar-date" style="font-size: 2rem">2024</div>
		            							</div>
                            </div>
                            <div style="flex: 2">
                                <div>
                                    <h1 class="text-[#13474d] text-2xl sm:text-base md:text-4xl lg:text-4xl font-extrabold uppercase pb-4">
                                        Event: Amber Charter School Free Book Festival
                                    </h1>
                                    <h1 class="text-[#13474d] text-2xl sm:text-base md:text-4xl lg:text-4xl font-extrabold uppercase pb-4">
                                        Location: Harlem, NY
                                    </h1>
                                    <h1 class="text-[#13474d] text-2xl sm:text-base md:text-4xl lg:text-4xl font-extrabold uppercase pb-4">
                                        Corporate Partner: National Football League Black Engagement Network (BEN)
                                    </h1>
                                </div>
                                
                                <div class = "flex" style="gap: 20px">
                                    
                                    <a href="https://www.ourkidsread.org/free-book-festival-nyc-amber" class="text-center" style="    display: flex; align-items: center; justify-content: center;
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
                                    <a href="https://www.ourkidsread.org/free-book-festival-nyc-amber" class="text-center" style="display: flex; align-items: center; justify-content: space-evenly;
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
		            								<div class="calendar-month"style="font-size: 2rem">March</div>
		            								<div class="calendar-date" style="font-size: 3.5rem">22</div>
		            								<div class="calendar-date" style="font-size: 2rem">2024</div>
		            							</div>
                            </div>
                            <div style="flex: 2">
                                <div>
                                    <h1 class="text-[#13474d] text-2xl sm:text-base md:text-4xl lg:text-4xl font-extrabold uppercase pb-4">
                                        Event: WLCAC Free Book Festival
                                    </h1>
                                    <h1 class="text-[#13474d] text-2xl sm:text-base md:text-4xl lg:text-4xl font-extrabold uppercase pb-4">
                                        Location: Watts, CA
                                    </h1>
                                    <h1 class="text-[#13474d] text-2xl sm:text-base md:text-4xl lg:text-4xl font-extrabold uppercase pb-4">
                                        Corporate Partner: TBD
                                    </h1>
                                </div>
                                
                                <div class = "flex" style="gap: 20px">
                                    
                                    <a href="https://www.ourkidsread.org/free-book-festival-la-wlcac" class="text-center" style="    display: flex; align-items: center; justify-content: center;
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
                                    <a href="https://www.ourkidsread.org/free-book-festival-la-wlcac" class="text-center" style="display: flex; align-items: center; justify-content: space-evenly;
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
		            								<div class="calendar-month"style="font-size: 2rem">April</div>
		            								<div class="calendar-date" style="font-size: 3.5rem">05</div>
		            								<div class="calendar-date" style="font-size: 2rem">2024</div>
		            							</div>
                            </div>
                            <div style="flex: 2">
                                <div>
                                    <h1 class="text-[#13474d] text-2xl sm:text-base md:text-4xl lg:text-4xl font-extrabold uppercase pb-4">
                                        Event: Mosser Elementary Free Book Festival
                                    </h1>
                                    <h1 class="text-[#13474d] text-2xl sm:text-base md:text-4xl lg:text-4xl font-extrabold uppercase pb-4">
                                        Location: Allentown, PA
                                    </h1>
                                    <h1 class="text-[#13474d] text-2xl sm:text-base md:text-4xl lg:text-4xl font-extrabold uppercase pb-4">
                                        Corporate Partner: Lehigh Valley Health System
                                    </h1>
                                </div>
                                
                                <div class = "flex" style="gap: 20px">
                                    
                                    <a href="https://www.ourkidsread.org/free-book-festival-allentown" class="text-center" style="    display: flex; align-items: center; justify-content: center;
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
                                    <a href="https://www.ourkidsread.org/free-book-festival-allentown" class="text-center" style="display: flex; align-items: center; justify-content: space-evenly;
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
		            								<div class="calendar-month"style="font-size: 2rem">May</div>
		            								<div class="calendar-date" style="font-size: 3.5rem">23</div>
		            								<div class="calendar-date" style="font-size: 2rem">2024</div>
		            							</div>
                            </div>
                            <div style="flex: 2; flex-direction: column; justify-content: space-between">
                                <div>
                                    <h1 class="text-[#13474d] text-2xl sm:text-base md:text-4xl lg:text-4xl font-extrabold uppercase pb-4">
                                        Corporate Partner: Class of 1979 Princeton University Reunions Literacy Event 
                                    </h1>
                                    <h1 class="text-[#13474d] text-2xl sm:text-base md:text-4xl lg:text-4xl font-extrabold uppercase pb-4">
                                        Location: Princeton, NJ
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
                        
                        
                        <div class="flex overflow-hidden">
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
                                <li> OKR partners with Reading with Reagan to offer reading assessment and tutoring services for 3rd - 5th graders who are one or more grades behind in their reading.</li>
                                <li> Partnered with Nike to staff the Watts, LA March 22nd event (Nike employee volunteers from Nike South Coast Plaza, Nike The Grove, Nike Rise Del Amo, Nike Santa Monica and other Nike retail locations).</li>
                                <li> Partnered with Morgan Stanley to plan and execute a Free Book Festival on March 1, 2024 in Baltimore, MD at Glenmount Elementary School.</li>
                                <li> Partnered with the NFL Black Engagement Network to plan and execute a Free Book Festival on March 18, 2024 in Harlem, NY at Amber Charter School.</li>
                                <li> Partnered with the Lehigh Valley Health Network to plan and execute a Free Booke Festival on March 8, 2024 in Allentown, PA.</li>
                                <li> OKR partners with Clever Noodle games, learn-to-read games based on science. The first physical product to be offered in v2 of Our Kids Read online Reading Portal launching in June 24.</li>
                            </ul>
                        </div>
                        
                        <div class="div-spave">
                            <h4> INFRASTRUCTURE DEVELOPMENT</h4>
                            <ul>
                                <li>OKR hired a part-time grant writer and submitted 5 grant applications over the last 6 weeks.</li>
                                <li>Honored by the addition of three new advisory board members to the organization: Kevin Hudson Princeton '97, Laren MacDonell (see article below) and Antonia Baker (see article below).</li>
                                <li>Our Kids Read claims ownership of ourkidsread.org domain! After 5 long years of attempting to purchase the ourkidsread.org domain from its previous owner, OKR was able to purchase the domain for $23 last month as the previous owner allowed the domain registration to expire. OKR will be transitioning website and e-mail to the ourkidsread.org domain in an orderly manner in the coming months.</li>
                                <li>Rem and Company Princeton student volunteers deliver a Donor Outreach Strategy, Volunteer Mobilization Plan, Social Media Outreach Guidebook, Plan to Optimize Manual Operation, Mobile App Development Outline and External Content Integration Strategy for the Our Kids Read Reading Portal.</li>
                                <li>Our Kids Read Princeterns delivered! From beginning the planning process for a Free Book Festival in South Tom's River, NJ to forging new publisher and author partnerships to exploring potential opportunities with the Draper Richards Kaplan Foundation, the team was able to produce tangible results in a very short period of time.</li>
                            </ul>
                        </div>
                        <div class="div-spave" style="margin-bottom: 20px">
                            <h4> GRANTS AND AWARDS</h4>
                            <ul>
                               
                                <li>Petrucci Family Foundation renews their support for Our Kids Read for a 3rd consecutive year.</li>
                                <li> A Jackson Neighbor Foundation designated a micro grant to OKR to support infrastructure development.</li>
                                <li>Amber Education Fund micro grant in support of the March 18, 2024 Free Book Festival.</li>
                                <li>Nike micro grant in recognition of the OKR's work supporting literacy in the Portland community.</li>
                                <li>Our Kids Read awarded micro grant from the Baltimore Community Foundation Mitzvah Fund for Good Deeds.</li>
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
                            <img src="myimg/headshot_ali_karen.jpg" alt="headshot" style="width: 300px; float: left; margin-right: 20px">
                                
                               Karen Ali is active in the community, serving as president of the Board of Trustees of the New Jersey State Museum Foundation and on the boards of Our Kids Read, the Executive Board to The Auxiliary to the Isabella McCosh Infirmary (Princeton University), Association of Black Princeton Alumni (ABPA), Princeton AlumniCorps, the Latin American Legal Defense and Education Fund, and Passion of Hope International-US.<br/><br/>
    
                               Karen is also active in several Princeton University alumni activities. In 2018, Karen received ABPA's Alumni Service Award. In 2013, she volunteered through Princeton AlumniCorps’ ARC Innovators program for Good Grief, Inc. and edited an anthology of children’s essays, The Invisible Tattoo: True Stories about Children Grieving, Living, and Loving After Loss (2014). For more than 20 years, she has served as an administrator for the Fred Fox Class of 1939 Fund, a program that provides grants to students for academic-related projects.<br/><br/>
    
    
                                Karen retired from the New Jersey Hospital Association, a healthcare trade association in Princeton, NJ where she served as senior vice president for community partnerships and prior to that role, general counsel.<br/><br/>
                                
                                Karen received her Bachelor’s degree in Sociology, magna cum laude from Princeton University in Princeton, NJ and her Juris Doctor degree from the University of Michigan Law School in Ann Arbor, MI. She is a member of the New York and Virginia State bars and the United States District Court for the Eastern District of Virginia federal bar.<br/><br/>
                                
                                Karen lives in Princeton Junction, NJ with her spouse, Deighton Weekes. She is the proud mother of Justin (Adelphi University ’19; New York Film Academy, MA ’22) and grandmother of Nahla, Sufyan and Maya from her daughter-in-law Aaliya and stepson Jamey. In honor of her son and parents, Karen established the Ali-Weekes Endowed Scholarship at Adelphi in 2019 for students pursuing Communications degrees.
                                </p>    
                        </div>
                        
                        <div class="flex overflow-hidden">
                            <div class="bg-[#13474d] pl-14 pr-14 w-min">
                                <h1 class="uppercase text-white text-sm sm:text-xl md:text-4xl lg:text-4xl font-extrabold pt-5 pb-5 sm:pt-8 sm:pb-9 whitespace-nowrap rotat">VOLUNTEER SPOTLIGHT</h1>
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
                            <img src="myimg/headshot_lauren.jpg" alt="headshot" style="width: 300px; float: left; margin-right: 20px">
                            <span style = "font-size: 1.8rem; font-weight: 700">Lauren MacDonell</span><br/><br/>
                            
                                Lauren MacDonell is a researcher, instructional design consultant, and teacher educator specializing in inclusive language and literacy learning. She holds a Master of Education in Instructional Design and a B.A. in Linguistics, and she is currently pursuing a PhD in literacy studies at Middle Tennessee State University. She teaches pre-service teachers about language science and the science of reading at CollegeUnbound.edu. She is also a veteran K-12 ELA and social sciences teacher and an absolute nerd for all things related to language. Coming from a linguistics background, Lauren has a different perspective on language and literacy than you probably encountered in your high school English classes. Her work centers a scientific, descriptive view of language that celebrates linguistic and cultural diversity in the classroom and strives to make language and literacy learning accessible to students of all language backgrounds.<br/><br/>

                                Lauren’s work also centers language equity and inclusion. As many of us remember from our school days, K-12 English Language Arts classes have traditionally elevated one particular form of English - the form in which most textbooks are written - over all others. The idea that there is one “proper” or “correct” way of using English is pervasive in the US's education systems. This presents a huge problem for students from diverse language and dialect backgrounds, whose home languages are implicitly and sometimes explicitly devalued by mainstream curricula and teaching methods. By integrating evidence-based literacy learning methods with inclusive, linguistics-based materials and methods for teaching about language, Lauren seeks to shift the paradigm in K-12 ELA instruction to fully serve students of all language backgrounds and abilities. You can read more about her work at LanguageScienceCentral.com<br/><br/>
                            
                                Lauren has been involved with OurKidsRead since 2021 and has served as a Reading Buddies volunteer, an advisory board member and, most recently, as the Literacy, Language and Equity Lead for the organization. As a researcher, she sees the power of OurKidsRead and other community literacy organizations to expand the literacy franchise by providing access to texts and positive reading role models to kids of all backgrounds and abilities, and she is thrilled to be part of that work.<br/><br/>
                                </p>    
                        </div>
                        
                        <div class="div-spave flex" style="margin: 15px 0">
                        
                            
                             <p class="text-sm sm:text-lg md:text-xl lg:text-2xl font-semibold text-justify alltext-ch" style="font-size: 13px; font-weight: 600;">
                            <img src="myimg/KevinHudson.jpg" alt="headshot" style="width: 300px; float: right; margin-left: 20px">
                            <span style = "font-size: 1.8rem; font-weight: 700">Kevin C. Hudson</span><br/><br/>
                            
                                We’d like to welcome our newest advisory board member, Kevin C Hudson, Princeton Class of 1997. Kevin’s deep background in education is a tremendous boost to the OKR Advisory Board. Mr. Hudson is the Associate Director for Diversity and College Opportunity in the Office of Provost at Princeton University. In this role, Kevin manages strategic partnerships and a portfolio of activities aligned with Princeton’s commitment to combat inequities in education. Kevin coordinates projects and partnerships with nonprofit organizations (e.g., Council for Opportunity in Education, LEDA, Matriculate), peer institutions, and researchers to support selective college access for traditionally underrepresented students. He additionally supports institutional collaborations with Historically Black Colleges and Universities (HBCUs) and other Minority Serving Institutions (MSIs).<br/><br/> He also serves as Office of Institutional Equity and Diversity’s liaison to the Office of Advancement, providing facilitation and strategic guidance for diversity, equity and inclusion-related alumni activities, outreach and interactions.
Kevin previously managed college and career readiness districtwide at District of Columbia Public Schools and served as director of college admission and advising at a NJ non-profit boarding school placement organization. He began his career as an admission officer at Princeton University. As a first-generation, lower-income college student, Kevin earned his bachelor’s degree from Princeton University and his Master’s degree in Higher Education Management from University of Pennsylvania. He is currently pursuing an Ed.D at Rutgers University Graduate School of Education. He has served as a reader for several national scholarship programs by Gates Scholars Program, Jack Kent Cooke Foundation and Dell Scholars Program and Jack Kent Cooke Foundation. Kevin serves on various boards including Delbarton School, New Jersey Scholars Program, Princeton Blairstown Center, International Baccalaureate College and University Relations Committee and several College Board regional and national committees.<br/><br/>
                                </p>    
                        </div>
                        
                        <div class="div-spave flex" style="margin: 15px 0">
                        
                            
                             <p class="text-sm sm:text-lg md:text-xl lg:text-2xl font-semibold text-justify alltext-ch" style="font-size: 13px; font-weight: 600;">
                            <img src="myimg/headshot_antonia_baker.jpg" alt="headshot" style="width: 300px; float: left; margin-right: 20px">
                            <span style = "font-size: 1.8rem; font-weight: 700">Antonia Baker</span><br/><br/>
                            
                                Antonia Baker is an multi-faceted brand marketer, culture creator and business advisor with over 20 yrs experience in both B2C and B2B marketing space working at the intersection of culture, community and creativity. Focused on driving transformational brand growth and revenue, Antonia's superpower is creating passionate global communities by marrying content and culture-forward strategies that cultivate brand love.<br/><br/>

                                Currently, Antonia consults with brands and creators to craft their best stories to connect with consumers. Prior to this role, Antonia was the Global Head of Consumer Marketing at Twitter where she oversaw global consumer marketing strategy to drive engagement and culture that came alive on Twitter in 280 characters and beyond. Her previous experience includes marketing leadership roles at Hartbeat Productions, Paramount (MTV Entertainment Group), Food Network, AMC Networks, and Thomson Reuters, honing a diverse background in brand marketing, creative advertising, content development, digital strategy, and brand partnerships.<br/><br/>
                            
                                A first-generation Jamaican-American, Antonia is driven by impacting lives through mentorship and empowering the next generation of leaders to be fearless in changing the world. Antonia holds a B.S. in Marketing from Manhattan College and currently resides in her beloved hometown of NYC.<br/><br/>
                                </p>    
                        </div>
                        
                        <div class="div-spave flex" style="margin: 15px 0">
                        
                            
                             <p class="text-sm sm:text-lg md:text-xl lg:text-2xl font-semibold text-justify alltext-ch" style="font-size: 13px; font-weight: 600;">
                            <img src="myimg/headshot_jace_OPTIMIZED_CROPPED.jpg" alt="headshot" style="width: 300px; float: right; margin-left: 20px">
                            <span style = "font-size: 1.8rem; font-weight: 700">Jace Brett</span><br/><br/>
                                Jace Brett, a 8th grader at Kingswood Oxford School in Hartford, CT, brought both his writing talents and social media skills to Our Kids Read for 6 months in 2023. He created evergreen content for the Instagram, Facebook and LinkedIn platforms and create a social media schedule for the organization. Once a week Jace also served as a Reading Buddy to a student in one of Our Kids Read's Reading Buddy pilots in the Bronx, New York. Jace read with his student for 45 minutes, once per week, for 12 weeks.<br/><br/>
                                "In 2023, I served as a Reading Buddy for a fantastic fourth grader named Lyric, who lives in the Bronx. It has been a blessing to me to work with her every week for four months. Together, we select a Kindle book and work on everything from learning how to pronounce the words to the meaning behind them. Some of our favorite selections included Pelé: The King of Soccer and Who are Venus and Serena Williams?<br/><br/>

I chose to work with Our Kids Read as it is a powerful platform to provide students with the resources they need to learn to read. Our Kids Read promises to positively impact the next generation while helping the world as a whole. Together, we can continue working towards a better tomorrow to build self-esteem for young students while growing their vocabulary and reading skills while engaging them through the joy of reading diverse books."
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
                            <div class="md:w-[500px] flex justify-center items-center mx-auto lg:mx-0 py-10"><img src="myimg/bcf_logo.png" alt="pu_student_volunteer_dinner_2024_best_REDUCED.jpg" class="object-cover shadow-cs"></div>
                            <div class="w-full text-[#13474d] flex flex-col justify-center space-y-6 lg:px-12 ">
                                <h1 class="text-sm sm:text-lg md:text-xl lg:text-3xl font-bold">Our Kids Read Awarded Mitzvah Fund for Good Deeds Micro Grant</h1>
                                <p class="text-sm sm:text-lg md:text-xl lg:text-2xl font-semibold text-justify alltext-ch" style="font-size: 13px; font-weight: 600;">
                                    Special thanks to the Baltimore Community Foundation (BCF) for the second award in as many years for the support of Our Kids Read's Free Book Festivals in Baltimore City. On February 13th, 2024, the Baltimore Community Foundation awarded OKR a micro grant from the BCF Mitzvah Fund for Good Deeds. The Mitzvah Fund for Good Deeds was established in 2012 for the purpose of providing gap funding for non-profits in the Baltimore community. BCF funding has been used to support events at the Garrett Heights Elementary and Middle School (GHEMS) and the Mt. Washington Elementary School Free Book Festival, co-sponsored by the Home Depot, Jernee and David Bramble and the Baltimore Community Foundation.
                                </p>
                                <!--<p  class="text-sm sm:text-lg md:text-xl lg:text-2xl font-semibold text-justify alltext-ch" style="font-size: 13px; font-weight: 600;     margin-top: 5px;">-->
                                <!--    OKR Kicks off Partnership with Princeton Internship (Princeternship) Program-->
                                <!--     </p>-->
                            </div>
                        </div>
                        
                        <div class="flex flex-col lg:flex-row xl:max-w-5xl max-w-7xl py-6 mx-auto my-6 space-y-12 lg:space-y-0 px-4 lg:px-0">
                            <div class="md:w-[500px] flex justify-center items-center mx-auto lg:mx-0 py-10"><img src="myimg/pu_student_volunteer_dinner_2024_best_REDUCED.jpg" alt="pu_student_volunteer_dinner_2024_best_REDUCED.jpg" class="object-cover shadow-cs"></div>
                            <div class="w-full text-[#13474d] flex flex-col justify-center space-y-6 lg:px-12 ">
                                <h1 class="text-sm sm:text-lg md:text-xl lg:text-3xl font-bold">OKR Board Members Share Dinner and Conversation with Princeton Student Volunteers</h1>
                                <p class="text-sm sm:text-lg md:text-xl lg:text-2xl font-semibold text-justify alltext-ch" style="font-size: 13px; font-weight: 600;">
                                    On Saturday, Febuary 10th, three of the Our Kids Read Board members and six (6) Princeton student OKR volunteers shared a fantastic meal and great conversation at Agricola restaurant in Princeton, NJ. The OKR Board offered to take the students out as a "thank you!" to for all of the students' hard work in 2023 an 2024. Featured in this photo are OKR board members Karen Ali, Kamil Ali-Jackson and Jahmal Lake and Princeton students Yusuf Abdelnur '27, Jerry Atunku ‘27, Russell Fan '26, Edouard Kwizera '27, Jules Regan ‘25 and Alena Zhang '27.
                                </p>
                                <!--<p  class="text-sm sm:text-lg md:text-xl lg:text-2xl font-semibold text-justify alltext-ch" style="font-size: 13px; font-weight: 600;     margin-top: 5px;">-->
                                <!--    OKR Kicks off Partnership with Princeton Internship (Princeternship) Program-->
                                <!--     </p>-->
                            </div>
                        </div>
                        
                        <div class="flex flex-col lg:flex-row xl:max-w-5xl max-w-7xl py-6 mx-auto my-6 space-y-12 lg:space-y-0 px-4 lg:px-0">
                            <div class="md:w-[500px] flex justify-center items-center mx-auto lg:mx-0 py-10" style="align-items: flex-start"><img src="myimg/9.jpg" alt="pic-4" class="object-cover shadow-cs"></div>
                            <div class="w-full text-[#13474d] flex flex-col justify-center  space-y-6 lg:px-12 ">
                                <h1 class="text-sm sm:text-lg md:text-xl lg:text-3xl font-bold">A Look Back: Ragnarok Technologies Unflagging Support of OKR Programming</h1>
                                <p class="text-sm sm:text-lg md:text-xl lg:text-2xl font-semibold text-justify alltext-ch" style="font-size: 13px; font-weight: 600;">
                                    Ragnarok Technologies, based in Reston, VA, has been a consistent OKR supporter beginning in 2022 and continuing into 2023. The most recent Ragnarok sponsored and volunteer-supported event at Guildford Elementary School in Sterling, VA resulted in 350 booksgoing home with the 1st and 2nd grade students at the school. Special thanks to Renee Jordan, Lois Pastor, Nora Young, April Blake, Chris Santiago who volunteered for this Sterling, VA event.<br/><br/>
                                    "There is no more rewarding personal experience a person can have than one supporting and encouraging young kids. My experience at Guilford was one filled with excitement. My own personal excitement to be involved in such a great cause and the excitement in the kids faces in response to the support they were receiving."<br/>- Chris Santiago, CEO Ragnarok Technologies<br/><br/>
                                    "Volunteering at Guilford allows me to give back not only to the local community, but to a community that I grew up in. It is a very different community now, than the one I grew up in; It has a lot of struggling families that have chosen it as their refuge and while that is heartwarming, it is simultaneously heartbreaking to see such a large community struggling to bring up the next generation of students and without volunteers and programs like Our Kids Read, some of these students won't have books in their bedrooms. Thankfully these programs exist and the educators currently in place aren't afraid to ask for help. I really hope that OKR gets another chance to help another local school, there are plenty of them that could use the morale and support boost."<br/>- Tara Reed, Ragnarok Employee<br/><br/>
                                    "Growing up as a minority child, I did not have representation in books that I read in school. To see that OKR was able to source a variety of books that represented the children at Guilford was remarkable! The idea that the children had an opportunity to identify with the characters in the books and be inspired to be the President, a scientist, or cooking with abuela is a real treasure.”<br/>- Lois Pastor, Ragnarok Employee<br/><br/>
                                </p>
                                <!--<p  class="text-sm sm:text-lg md:text-xl lg:text-2xl font-semibold text-justify alltext-ch" style="font-size: 13px; font-weight: 600;     margin-top: 5px;">-->
                                <!--    OKR Kicks off Partnership with Princeton Internship (Princeternship) Program-->
                                <!--     </p>-->
                            </div>
                        </div>
                        <div class="flex flex-col lg:flex-row xl:max-w-5xl max-w-7xl py-6 mx-auto my-6 space-y-12 lg:space-y-0 px-4 lg:px-0">
                            <div class="md:w-[500px] flex justify-center items-center mx-auto lg:mx-0 py-10"><img src="myimg/004.jpg" alt="pic-4" class="object-cover shadow-cs"></div>
                            <div class="w-full text-[#13474d] flex flex-col justify-center space-y-6 lg:px-12 ">
                                <h1 class="text-sm sm:text-lg md:text-xl lg:text-3xl font-bold">OKR SPOTLIGHTS IBI ZOBOI IN NYC HOLIDAY LITERACY CELEBRATION</h1>
                                <p class="text-sm sm:text-lg md:text-xl lg:text-2xl font-semibold text-justify alltext-ch" style="font-size: 13px; font-weight: 600;">
                                    Thanks to our first and youngest high school Reading Buddy, Ilianna Brett, we were able to highlight the amazing work of Haitian author, Ibi Zoboi. Ilianna approached OKR with a desire to highlight Zoboi's books and OKR was happy to support. OKR donated over 200 books and highlighted the young adult fiction of Ibi Zoboi at a December 21st Free Book Festival at the Grand Ballroom in Harlem for youth in the NYC shelter system
                                </p>
                                <!--<p  class="text-sm sm:text-lg md:text-xl lg:text-2xl font-semibold text-justify alltext-ch" style="font-size: 13px; font-weight: 600;     margin-top: 5px;">-->
                                <!--    OKR Kicks off Partnership with Princeton Internship (Princeternship) Program-->
                                <!--     </p>-->
                            </div>
                        </div>
                        
                        <div class="flex flex-col lg:flex-row xl:max-w-5xl max-w-7xl py-6 mx-auto my-6 space-y-12 lg:space-y-0 px-4 lg:px-0">
                            <div class="md:w-[500px] flex justify-center items-center mx-auto lg:mx-0 py-10"><img src="myimg/a_jackson_neighbor_foundation.jpg" alt="pic-4" class="object-cover shadow-cs"></div>
                            <div class="w-full text-[#13474d] flex flex-col justify-center space-y-6 lg:px-12 ">
                                <h1 class="text-sm sm:text-lg md:text-xl lg:text-3xl font-bold">A JACKSON NEIGHBOR FOUNDATION EXTENDS SUPPORT TO OUR KIDS READ</h1>
                                <p class="text-sm sm:text-lg md:text-xl lg:text-2xl font-semibold text-justify alltext-ch" style="font-size: 13px; font-weight: 600;">
                                    Our Kids Read was thrilled to receive an unsolicited micro-grant from A Jackson Neighbor foundation. Principal Cynthia Hogan informed OKR that A Jackson Neighbor Foundation supports projects related to education, health care and food security. While most of their giving is focused on Wyoming, occasionally they learn about grass roots projects in other communities and are able to support a few of these initiatives. Our Kids Read is an excellent example of one of these initiatives
                                </p>
                                <!--<p  class="text-sm sm:text-lg md:text-xl lg:text-2xl font-semibold text-justify alltext-ch" style="font-size: 13px; font-weight: 600;     margin-top: 5px;">-->
                                <!--    OKR Kicks off Partnership with Princeton Internship (Princeternship) Program-->
                                <!--     </p>-->
                            </div>
                        </div>
                        
                        
                        
                            <!--<div class="flex flex-col">-->
                            <!--    <div-->
                            <!--        class="flex flex-col lg:flex-row xl:max-w-5xl max-w-7xl py-6 mx-auto  lg:space-x-6">-->
                            <!--        <div-->
                            <!--            class="bg-[#a7dcd1] md:w-[450px] border-4 rounded border-[#c0414f] flex justify-center items-center mx-auto lg:mx-0 ">-->
                            <!--            <img src="myimg/35.jpg" alt="pic-2"-->
                            <!--                class="object-cover">-->
                            <!--        </div>-->
                            <!--        <div-->
                            <!--            class="alltext-ch w-full text-white text-sm sm:text-xl md:text-2xl lg:text-3xl py-4 text-justify">-->
                            <!--             </div>-->
                            <!--    </div>-->
                            <!--</div> -->
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
                        <div class="div-spave" style="margin: 15px 0; min-height: 200px">
                        
                            
                             <p class="text-sm sm:text-lg md:text-xl lg:text-2xl font-semibold text-justify alltext-ch" style="font-size: 13px; font-weight: 600;">
                            <img src="myimg/52.jpg" alt="headshot" style="width: 500px; float: left; margin-right: 20px">
                            
                               The three Princeternship students, Jerry Atunku ‘27, Jules Regan ‘25 and Alena Zhang, ‘27 completed their January Princeton-OKR internship last week. All three made significant contributions to OKR projects. From beginning the planning process for a Free Book Festival in South Tom's River, NJ to forging new publisher and author partnerships to exploring potential opportunities with the Draper Richards Kaplan Foundation, the team was able to produce tangible results in a very short period of time.<br/>
                                </p>    
                        </div>
                        
                        <div class="div-spave" style="margin: 15px 0; min-height: 200px">
                        
                            
                             <p class="text-sm sm:text-lg md:text-xl lg:text-2xl font-semibold text-justify alltext-ch" style="font-size: 13px; font-weight: 600;">
                            <img src="myimg/64.jpg" alt="headshot" style="width: 350px; float: right; margin-left: 20px">
                            
                               Sending special thanks Rem and Company this year, an organization dedicated to providing volunteer support to small US-based businesses. The Princeton student arm of Rem and Company provided organizational support from October 2023 through January 2024 this year. Joseph Suharno '25, Hazel Gupta '26, Daniel Kim '26, Russell Fan '26 and Kristy Gonzalez '25 made up the core Princeton Rem and Company team. Deliverables produced by this team include: Donor Outreach Strategy, Volunteer Mobilization Plan, Social Media Outreach Guidebook, Plan to Optimize Manual Operations, Mobile App Development Outline and External Content Integration Strategy for the Our Kids Read Reading Portal. So impressive team! We are honored to be selected as one of the non-profits you support.<br/>
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
                            <img src="myimg/dc_government_harbor_light.jpg" alt="headshot" style="width: 300px; float: left; margin-right: 20px; border: 5px solid #13474d; border-radius: .25rem">
                            <span style = "font-size: 1.6rem">Our Kids Read Partners with DC Government Office of Migrant Services to Bring Reading Buddies to DC Migrant Shelter, Harbor Lights</span>  <br/></br>                
                               Excited to partner with D.C. Government to bring the Reading Buddies program to the students in the Harbor Lights migrant shelter on New York Avenue in Washington, D.C. This pilot is planned for an April 2024 kick-off and will feature 10 Spanish-speaking Our Kids Read Reading Buddies reading with 10 Spanish-speaking students at the Harbor Lights Shelter. <a href="https://www.ourkidsread.org/volunteer">Click here</a> if you speak conversational Spanish and are available to read with a student between the hours of 5:30 PM and 6:30 PM on Thursdays from April 2024 through June 2024. The DC Government background screening process takes 4 weeks so sign-up now!<br/>
                                </p>    
                        </div>
                            <div class="flex flex-col xl:max-w-5xl max-w-7xl py-6 mx-auto px-4 table-three ">
                                
                                <div class="alltext-ch w-full text-sm sm:text-xl md:text-2xl lg:text-3xl py-4 text-justify lg:pr-6" style="margin-right: 50px">
                                    <h5>
                                        Our Kids Read Launching v.0.2 of the Reading Portal in June 2024
                                    </h5>
                                    <p>Our Kids Read will be launching version 0.2 of the Reading Portal over the summer (early June 2024). We're excited about one of the first design screens we received (see screenshot here), excellent work Ramon Tapales, Lead Web Design Advisor and Senior Designer at REI.
                                        Our roadmap leading to the June release follows:</p><br/>
                                        <h5>User Dashboard</h5>
                                        <p>The user dashboard will feature News, Announcements and the ability for students and Reading Buddies to send internal notes within the portal.</p><br/>
                                        
                                        <h5>Training</h5>
                                        <p>We will release new training videos 3-4 times per year, starting with the core Reading Buddies training videos, then addig videos related to "Building Rapport with your Student," "Understanding Why Reading to a 3rd-5th Grader who Cannot Read is Important," and more!</p><br/>
                                        
                                        <h5>Store</h5>
                                        <p>Our Kids Read is partnering with Clever Nooodle and other online merchants to bring fun literacy-focused games to our students and Reading Buddies. In addition, Reading Buddies and families will be able to purchase OKR swag from the portal</p><br/>
                                        
                                        <h5>Games</h5>
                                        <p>Our Kids Read is integrating vocabulary and reading games into the portal as part of this next release. We have negotiated agreements will all of our partners so our students will not have to pay for access to the games, OKR will cover the registration fees.</p><br/>
                                </div>
                                <h5>v.0.2 OKR Reading Portal Preview:</h1>
                                <div class="border-4 rounded border-[#c0414f]" style="border: 5px solid #13474d">
                                    <img src="myimg/OKR_Reading_Portal_Preview.jpg" alt="pic-2" class="object-cover" style="height: 100%">
                                </div>
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
                        <p class="onlyppp" style="font-size: 2rem">A special thanks to the following corporate and foundation partners and sponsors:</p>
                        <div class="w-full py-6 mt-1 mb-16 bg-1 relative h-auto px-4">
                            <div class="flex flex-col">
                                <div class="flex flex-col lg:flex-row xl:max-w-5xl max-w-7xl py-6 mx-auto1  lg:space-x-6">
                                    <div class="fit-height  border-4 rounded border-[#c0414f] flex justify-center items-center mx-auto lg:mx-0 " style="border: 5px solid #828282">
                                        <img src="myimg/12.jpg" alt="pic-2" class="object-cover partner">
                                    </div>
                                    <div class="alltext-ch w-full  py-4 text-justify">
                                        <h4 class="text-sm sm:text-xl md:text-3xl lg:text-3xl" style="font-weight: bold"> Petrucci Family Foundation</h4>
                                        <p class=" " style="">
                                            The Petrucci Foundation was our first donor when we kicked off our programming in 2022. Since then, their annual support has enabled OKR to launch over 16 Free Book Festivals and bring the joy of reading diverse books to over 200 students. The PFF mission, to support education and create opportunities for Americans at every stage and station of life, is directly aligned with OKR’s mission and vision, making them the perfect partner for Our Kids Read.<br/><br/>
                                        </p>
                                        <p class=" ">Q&A with PFF Executive Director, Jim Petrucci:<br/><br/></p>
                                        <p class=" ">Q: The Petrucci Family Foundation (PFF) has as its mission “to support education and create opportunities for Americans at every stage and station of life.”   In your view, how does the PFF mission align with the Our Kids Read mission to “connect children and communities to diverse books and reading programs in order to foster literacy, achievement and a positive self-view?</p>
                                        <p class=" ">A: You are creating opportunities and so are we.  Finding needs to fill is a worthy endeavor in general – and working with children in underserved communities is critically important.</p>
                                        <p class=" ">Q: As one of Our Kids Read first donors, what has been your perception of the organization’s progress over the past 2 years?  What do you feel has done well, what do you look forward to in the future for OKR?</p>
                                        <p class=" ">A: I think you’ve done everything exceptionally well, and I hope you focus on steady (not explosive) growth.  Create a sustainable path…</p>
                                        <p class=" ">
                                            Q: What were your own experiences with books and literacy as a child/young adult?  Did reading play a big role in your life growing up?
                                        </p>
                                        <p class=" ">A: I always had my nose in a book!</p>
                                        <p class=" ">Q: I understand you have mentored students yourself in the past, what programs have you been involved with and what drew you to that kind of work?</p>
                                        <p class=" ">A: Too many to mention, but one that we are excited about is a partnership with the African American Chamber of Commerce of NJ – we underwrite a Leadership Program for high school juniors in Irvington, NJ.  In general I find that there is tremendous positive energy surrounding young people with ambition – it fuels me.</p>
                                        <p class=" ">Q: If you had to tell a young person why it is important to learn to love to read, what would you tell them is the value of literacy?
                                            A: Making it simple I’d get them started with something of interest and make it fun!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <div class="flex flex-col lg:flex-row xl:max-w-5xl max-w-7xl py-6 mx-auto1  lg:space-x-6">
                                    <div class="    border-4 rounded border-[#c0414f] flex justify-center items-center mx-auto lg:mx-0 "  style="border: 5px solid #828282">
                                        <img src="myimg/13.jpg" alt="pic-2" class="object-cover partner">
                                    </div>
                                    <div class="alltext-ch w-full  py-4 text-justify">
                                        <h4 class=" text-sm sm:text-xl md:text-3xl lg:text-3xl" style="font-weight: bold">Microsoft </h4>
                                        <p class=" ">Microsoft employees have donated over 300 hours of their time reading with K-5th Grade Students. This translated into over $7,500 in funds for the organization since 2022 as Microsoft donates $25 to a non-profit for every hour their employee donates their time. In addition, four Microsoft employees have volunteered to assist in the technical aspects of the development of our "NextGen" on-line reading portal! Microsoft has accepted OKR into their Non-Profit Tech Acceleration (NTA) program for Black and African American Communities Program, granting hundreds of free Office 365 licenses to OKR staff and volunteers. Finally, OKR is the recipient of a $3,500 Microsoft Azure Grant which covers a significant portion of our technology/web hosting cost. Thank you Microsoft and Microsoft staff!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <div class="flex flex-col lg:flex-row xl:max-w-5xl max-w-7xl py-6 mx-auto1  lg:space-x-6">
                                    <div class="  border-4 rounded border-[#c0414f] flex justify-center items-center mx-auto lg:mx-0 " style="border: 5px solid #828282">
                                        <img src="myimg/14.jpg" alt="pic-2" class="object-cover partner">
                                    </div>
                                    <div class="alltext-ch w-full  py-4 text-justify">
                                        <h4 class=" text-sm sm:text-xl md:text-3xl lg:text-3xl" style="font-weight: bold"> Nike</h4>
                                        <p class=" ">OKR and Nike partnered to execute two Read-a-Thons in 2023, one in April and one in June (for Nike’s celebration of the Junetenth holiday), In addition, Nike and OKR joined forces in September of 2023 to execute a Free Book Festival at Nike Global HQ in Beaverton, OR. Students from a local Portland elementary school came to Beaverton for a day of storytelling, West African drumming and, of course FRE BOOKS! Click here for a video of the event.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <div class="flex flex-col lg:flex-row xl:max-w-5xl max-w-7xl py-6 mx-auto1  lg:space-x-6">
                                    <div class="  border-4 rounded border-[#c0414f] flex justify-center items-center mx-auto lg:mx-0 " style="border: 5px solid #828282">
                                        <img src="myimg/15.jpg" alt="pic-2" class="object-cover partner">
                                    </div>
                                    <div class="alltext-ch w-full  py-4 text-justify">
                                        <h4 class=" text-sm sm:text-xl md:text-3xl lg:text-3xl" style="font-weight: bold">Princeton University (Classes of 1998 and 1979) </h4>
                                        <p class=" ">The Our Kids Read Princeton Reunions 25th Reunion service event was one for the ages! Fifty students from Trenton’s Foundation Academies join the Princeton University Class of 1998 during their 25th Reunion for a day that featured a campus tour, free books, celebrity guests, lunch and storytelling and West African drumming.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <div class="flex flex-col lg:flex-row xl:max-w-5xl max-w-7xl py-6 mx-auto1  lg:space-x-6">
                                    <div class="  border-4 rounded border-[#c0414f] flex justify-center items-center mx-auto lg:mx-0 " style="border: 5px solid #828282">
                                        <img src="myimg/16.jpg" alt="pic-2" class="object-cover partner">
                                    </div>
                                    <div class="alltext-ch w-full  py-4 text-justify">
                                        <h4 class=" text-sm sm:text-xl md:text-3xl lg:text-3xl" style="font-weight: bold">NFL Black Employees Network (BEN) </h4>
                                        <p class="  ">OKR and the NFL are in the planning stages of a Free Book Festival to be held at the Amber Charter School in Harlem NY in March 2024. The event will feature the standard storytelling, free books and West African drumming and students will be offered a chance to enroll in the evening Reading Buddies program (students read one-on-one with a reading mentor over Zoom). This will be Our Kids Read’s second event at the Amber Charter School In March 2023, thanks to a generous gift from the New York Public Library, OKR was able to bring a literacy festival to the school with over 600 books donated to the Amber Charter 1st, 2nd and 3rd grade classes.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <div class="flex flex-col lg:flex-row xl:max-w-5xl max-w-7xl py-6 mx-auto1  lg:space-x-6">
                                    <div class="  border-4 rounded border-[#c0414f] flex justify-center items-center mx-auto lg:mx-0 " style="border: 5px solid #828282">
                                        <img src="myimg/17.jpg" alt="pic-2" class="object-cover partner">
                                    </div>
                                    <div class="alltext-ch w-full  py-4 text-justify">
                                        <h4 class=" text-sm sm:text-xl md:text-3xl lg:text-3xl" style="font-weight: bold">Home Depot Donates 8’ Tables and Makes a Donation to Support a Book Festival at Mount Washington Elementary School, Baltimore, MD </h4>
                                        <p class="  ">Mount Washington Elementary School welcomed our Baltimore storytelling partner/griot Janice Curtis Greene and West African drummer extraordinaire “Mama Dot.”. The 1st and 2nd grade classes all received three free books and enjoyed an afternoon of storytelling and drumming. Special thanks to Principal Sara Long and sponsors Jernee and David Bramble and Home Depot. Listen to the interview with Home Depot’s Metacha Abel and her sister Bridget Abel of Microsoft:
                                            https://vimeo.com/879305140.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <div class="flex flex-col lg:flex-row xl:max-w-5xl max-w-7xl py-6 mx-auto1  lg:space-x-6">
                                    <div class="  border-4 rounded border-[#c0414f] flex justify-center items-center mx-auto lg:mx-0 " style="border: 5px solid #828282">
                                        <img src="myimg/18.jpg" alt="pic-2" class="object-cover partner">
                                    </div>
                                    <div class="alltext-ch w-full  py-4 text-justify">
                                        <h4 class=" text-sm sm:text-xl md:text-3xl lg:text-3xl" style="font-weight: bold"> Ragnarok Technologies Brings Diverse Books and Storytelling to Low-Income VA Students</h4>
                                        <p class="  ">Ragnarok Technologies Brings Diverse Books and Storytelling to Low-Income VA Students Ragnarok Technologies has been a long-time supporter of OKR Free Book Festivals, beginning in 2022. In March of 2023, Lois Pastor, Chris Santiago, Nora Young, Renee Jordon, Tara Reed and April Blake volunteered to deliver over 300 books to 1st and 2nd graders at Guilford Elementary School in Sterling, VA. As Guildford Elementary School has a large Hispanic population, OKR brought bi-lingual Mexican storyteller and musician Marilyn Castillo to tell stories and sing songs in English and Spanish.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <div class="flex flex-col lg:flex-row xl:max-w-5xl max-w-7xl py-6 mx-auto1  lg:space-x-6">
                                    <div class="  border-4 rounded border-[#c0414f] flex justify-center items-center mx-auto lg:mx-0 " style="border: 5px solid #828282">
                                        <img src="myimg/19.jpg" alt="pic-2" class="object-cover partner">
                                    </div>
                                    <div class="alltext-ch w-full  py-4 text-justify">
                                        <h4 class=" text-sm sm:text-xl md:text-3xl lg:text-3xl" style="font-weight: bold">Lehigh Valley Health Network Donates $250 to Support Literacy Efforts in Allentown, VA </h4>
                                        <p class="  ">Our Kids Read is working closely with the Lehigh Valley Health Network (LHVN) to coordinate LHVN volunteer efforts and logistics planning in support of the March 2024 planned event at Mosser Elementary School.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <div class="flex flex-col lg:flex-row xl:max-w-5xl max-w-7xl py-6 mx-auto1  lg:space-x-6">
                                    <div class="  border-4 rounded border-[#c0414f] flex justify-center items-center mx-auto lg:mx-0 " style="border: 5px solid #828282">
                                        <img src="myimg/20.jpg" alt="pic-2" class="object-cover partner">
                                    </div>
                                    <div class="alltext-ch w-full  py-4 text-justify">
                                        <h4 class=" text-sm sm:text-xl md:text-3xl lg:text-3xl" style="font-weight: bold"> Penguin Random House Shows Strong Support of Diverse Author Visits and OKR Literacy Events in 2023</h4>
                                        <p class="  ">Penuin Random House has supported four (4) Our Kids Read events in 2023: books for Trenton 4th graders at this year’s Princeton Reunions 25th Service Event, copies of Nic Stone’s Clean Getaway and Fast Pitch in support of OKR’s Diverse Author Visit at Atlanta’s SLAM School and donation of books in support of four NY and Portland Free Book Festivals.</p>
                                        <p class="  ">PRH’s strong commitment to putting diverse childrens books in the handls of those who need it most is evidenced by their continued support of OKR’s programming in underserved communities. We look forward to growing the relationship in 2024.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <div class="flex flex-col lg:flex-row xl:max-w-5xl max-w-7xl py-6 mx-auto1  lg:space-x-6">
                                    <div class="  border-4 rounded border-[#c0414f] flex justify-center items-center mx-auto lg:mx-0 " style="border: 5px solid #828282">
                                        <img src="myimg/50.jpg" alt="pic-2" class="object-cover partner">
                                    </div>
                                    <div class="alltext-ch w-full  py-4 text-justify">
                                        <h4 class=" text-sm sm:text-xl md:text-3xl lg:text-3xl" style="font-weight: bold">St Albans School Makes $2,500 Material Donation of a DTEN-D7 55" All-In-One Interactive Whiteboard Display </h4>
                                        <p class="  ">St. Albans School selected Our Kids Read as one of the local Washington, D.C/VA/MD non-profits to receive an All-in-One DTEN D7 (https://www.dten.com/products/dten-d7/) Zoom conferencing monitors. Designed for Zoom Rooms, it combines video conferencing, digital whiteboarding, and content sharing into a single device.</p>
                                        <p class="  ">Our Kids Read plans to use the monitor and stand both for classroom and internal conferences.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <div class="flex flex-col lg:flex-row xl:max-w-5xl max-w-7xl py-6 mx-auto1  lg:space-x-6">
                                    <div class=" border-4 rounded border-[#c0414f] flex justify-center items-center mx-auto lg:mx-0 " style="border: 5px solid #828282">
                                        <img src="myimg/10.jpg" alt="pic-2" class="object-cover partner">
                                    </div>
                                    <div class="alltext-ch w-full  py-4 text-justify">
                                        <h4 class=" text-sm sm:text-xl md:text-3xl lg:text-3xl" style="font-weight: bold"> Kingswood Oxford (West Hartford, CT) Joins OKR in High School Student Reading Buddy Pilot</h4>
                                        <p class="  ">2023 saw the first high school student Reading Buddies! Thanks to introductions by OKR Advisory Board Member, Beth Brett, Kinswood Oxford submitted a number of high school honors students as potential Reading Buddies. Three students are currently readin with children in the OKR Reading Buddies Program.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <div class="flex flex-col lg:flex-row xl:max-w-5xl max-w-7xl py-6 mx-auto1  lg:space-x-6">
                                    <div class="  border-4 rounded border-[#c0414f] flex justify-center items-center mx-auto lg:mx-0 " style="border: 5px solid #828282">
                                        <img src="myimg/21.jpg" alt="pic-2" class="object-cover partner">
                                    </div>
                                    <div class="alltext-ch w-full  py-4 text-justify">
                                        <h4 class=" text-sm sm:text-xl md:text-3xl lg:text-3xl" style="font-weight: bold">NYPL Donates Over 37,000 Books to Support OKR’s Low-Income Literacy Programming in NYC </h4>
                                        <p class="  ">OKR conducted over 60 Free Book Festivals in NYC between 2022 and 2023, largely thanks to a generous donation from the New York Public Library. Concentrating programming in Manhattan and the Bronx, OKR was able to both encourage young people to become familiar with their local library AND gave each student who attended an OKR event 3 free books.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <div class="flex flex-col lg:flex-row xl:max-w-5xl max-w-7xl py-6 mx-auto1  lg:space-x-6">
                                    <div class=" border-4 rounded border-[#c0414f] flex justify-center items-center mx-auto lg:mx-0 " style="border: 5px solid #828282">
                                        <img src="myimg/22.jpg" alt="pic-2" class="object-cover partner">
                                    </div>
                                    <div class="alltext-ch w-full  py-4 text-justify">
                                        <h4 class=" text-sm sm:text-xl md:text-3xl lg:text-3xl" style="font-weight: bold"> Scholastic Possible Fund Donates Bilingual Books to Support OKR Free Book Festivals</h4>
                                        <p class="  ">Thanks to the Scholastic Possible Fund, Our Kids Read will be able to add 200 English Spanish versions of Mambo King / Rey del Mambo, My Name is Celia / Me llamo Celia, and Green Is a Chile Pepper / El chile es verde.</p>
                                        <p class="  ">OKR looks forward to conversations with Scholastic in 2024 to explore other opportunities to multiply the impact of both OKR and the Possible Fund.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <div class="flex flex-col lg:flex-row xl:max-w-5xl max-w-7xl py-6 mx-auto1  lg:space-x-6">
                                    <div class=" border-4 rounded border-[#c0414f] flex justify-center items-center mx-auto lg:mx-0 " style="border: 5px solid #828282">
                                        <img src="myimg/23.jpg" alt="pic-2" class="object-cover partner">
                                    </div>
                                    <div class="alltext-ch w-full  py-4 text-justify">
                                        <h4 class=" text-sm sm:text-xl md:text-3xl lg:text-3xl" style="font-weight: bold">OKR Joins the Diverse Books for All Coalition for Bulk Purchasing Power </h4>
                                        <p class="  ">In November of 2023, OKR joined the national Diverse Books for All Coalition (Home - Full (diversebooksforall.org)), sponsored by First Book.</p>
                                        <p class="  ">The Diverse Books for All Coalition is a national consortium of nonprofits and membership organizations working together to increase access to affordable, high quality children’s books by and about diverse races, cultures, identities, and abilities. The coalition places bulk book orders to bring down the cost for each participating organization.</p>
                                        <p class="  ">OKR looks forward to leveraging the power of bulk purchases to multiply the impact of the dollars donated to the organization.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <div class="flex flex-col lg:flex-row xl:max-w-5xl max-w-7xl py-6 mx-auto1  lg:space-x-6">
                                    <div class="  border-4 rounded border-[#c0414f] flex justify-center items-center mx-auto lg:mx-0 " style="border: 5px solid #828282">
                                        <img src="myimg/24.jpg" alt="pic-2" class="object-cover partner">
                                    </div>
                                    <div class="alltext-ch w-full  py-4 text-justify">
                                        <h4 class=" text-sm sm:text-xl md:text-3xl lg:text-3xl" style="font-weight: bold">Arch Capital Sponsors a Bronx Public Prep Free Book Festival </h4>
                                        <p class="  ">What an amazing event at Bronx Public Prep! And special thanks to Arch Capital Insurance for their sponsorship of the event. Over 2,000 books were donated to the school and, as with all Free Book Festivals, students participated in interactive running and storytelling.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <div class="flex flex-col lg:flex-row xl:max-w-5xl max-w-7xl py-6 mx-auto1  lg:space-x-6">
                                    <div class="  border-4 rounded border-[#c0414f] flex justify-center items-center mx-auto lg:mx-0 " style="border: 5px solid #828282">
                                        <img src="myimg/25.jpg" alt="pic-2" class="object-cover partner">
                                    </div>
                                    <div class="alltext-ch w-full  py-4 text-justify">
                                        <h4 class=" text-sm sm:text-xl md:text-3xl lg:text-3xl" style="font-weight: bold">Easy AD Harris of the Legendary Cold Crush Brothers and the Universal Hip Hop Museum Sponsor a Free Book Festival </h4>
                                        <!--<p></p>-->
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <div class="flex flex-col lg:flex-row xl:max-w-5xl max-w-7xl py-6 mx-auto1  lg:space-x-6">
                                    <div class="  border-4 rounded border-[#c0414f] flex justify-center items-center mx-auto lg:mx-0 " style="border: 5px solid #828282">
                                        <img src="myimg/26.jpg" alt="pic-2" class="object-cover partner">
                                    </div>
                                    <div class="alltext-ch w-full  py-4 text-justify">
                                        <h4 class=" text-sm sm:text-xl md:text-3xl lg:text-3xl" style="font-weight: bold">Verizon SOMOS Partners with Our Kids Read for a Pop-up Free Book Festival in Thomas Jefferson Park, Amber Charter School and WIN Shelter </h4>
                                        <p class="  ">Our most consistent volunteer partner by far, the Verizon SOMOS team have been stalwart supporters of the Our Kids Read Free Book Festival programming. See video “Thank you!” to SOMOS here.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <div class="flex flex-col lg:flex-row xl:max-w-5xl max-w-7xl py-6 mx-auto1  lg:space-x-6">
                                    <div class="  border-4 rounded border-[#c0414f] flex justify-center items-center mx-auto lg:mx-0 " style="border: 5px solid #828282">
                                        <img src="myimg/27.jpg" alt="pic-2" class="object-cover partner">
                                    </div>
                                    <div class="alltext-ch w-full  py-4 text-justify">
                                        <h4 class=" text-sm sm:text-xl md:text-3xl lg:text-3xl" style="font-weight: bold">WIN Shelters in Brooklyn and Harlem tapped as Locations for OKR Free Book Festivals, OKR Makes donate of 600 Book to Support WIN Libraries </h4>
                                        <p class="  ">OKR understands that some of the most vulnerable and needy American citizens are those who are housing insecure/homeless. When a partnership with WIN NYC shelters was proposed it was an easy “yes!” for us. Free Book Festivals in Brooklyn (East New York) and Harlem brought an evening of joy and free books to residents, both old and young.</p>
                                        <p class="  ">In addition, OKR donated 600 books ($6,000 value) to WIN (OKR was the recipient of a generous gift from a partner non-profit) in November 2023.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <div class="flex flex-col lg:flex-row xl:max-w-5xl max-w-7xl py-6 mx-auto1  lg:space-x-6">
                                    <div class="  border-4 rounded border-[#c0414f] flex justify-center items-center mx-auto lg:mx-0 " style="border: 5px solid #828282">
                                        <img src="myimg/28.jpg" alt="pic-2" class="object-cover partner">
                                    </div>
                                    <div class="alltext-ch w-full  py-4 text-justify">
                                        <h4 class=" text-sm sm:text-xl md:text-3xl lg:text-3xl" style="font-weight: bold"> Baltimore Community Foundation awards $15,000 Book Grant to OKR to Support Baltimore Book Festivals</h4>
                                        <p>The Baltimore Community Foundation, recognizing the importance of putting diverse books in the handls of Baltimore’s young people, awarded a $15K book grant to OKR.</p>
                                        <p class="  ">OKR will be holding a Free Book Festival at Glenmount Elementary School in Baltimore in March 2024 leveraging this grant and volunteers from the Moran Stanley Baltimore offices.</p>
                                        <!--<p></p>-->
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <div class="flex flex-col lg:flex-row xl:max-w-5xl max-w-7xl py-6 mx-auto1  lg:space-x-6">
                                    <div class="  border-4 rounded border-[#c0414f] flex justify-center items-center mx-auto lg:mx-0 " style="border: 5px solid #828282">
                                        <img src="myimg/31.jpg" alt="pic-2" class="object-cover partner">
                                    </div>
                                    <div class="alltext-ch w-full  py-4 text-justify">
                                        <h4 class=" text-sm sm:text-xl md:text-3xl lg:text-3xl" style="font-weight: bold">OKR’s First Ever Grant Came from the Nora Roberts Foundation in Support of Free Book Festivals Around the Country </h4>
                                        <p class=" ">The Nora Roberts Foundation mission statement reads: “As we believe literacy is a human right, we have made supporting literacy organizations our highest priority. In order to create a beautiful, equitable, and safe world, we also support organizations focused on the arts, children, social justice, and the environment.”</p>
                                        <p class="  ">The perfect partner for Our Kids Read! OKR plans to continue to build a relationship with this foundation after our first award.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <div class="flex flex-col lg:flex-row xl:max-w-5xl max-w-7xl py-6 mx-auto1  lg:space-x-6">
                                    <div class=" border-4 rounded border-[#c0414f] flex justify-center items-center mx-auto lg:mx-0 " style="border: 5px solid #828282">
                                        <img src="myimg/32.jpg" alt="pic-2" class="object-cover partner">
                                    </div>
                                    <div class="alltext-ch w-full  py-4 text-justify">
                                        <h4 class=" text-sm sm:text-xl md:text-3xl lg:text-3xl" style="font-weight: bold">Orijin Bees Donates Dolls in Support of the OKR 2023 Princeton Reunions Youth Literacy Service Event </h4>
                                        <p class="  ">Special thanks to Orijin Bees founder Melissa Oriin who donated 40 Black and brown dolls for the participants of the 2023 Princeton Reunions Youth Literacy Service Event.</p>
                                        <p class=" ">Having goodie bags and giveaways at our Free Book Festivals adds a level of excitement for the young scholars who participate. This “value add” did not go unnoticed by the Foundation Academies staff who brought the students to Princeton’s campus. They expressed extreme gratitude for the Origin Bees donation. Thanks Melissa!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <div class="flex flex-col lg:flex-row xl:max-w-5xl max-w-7xl py-6 mx-auto1  lg:space-x-6">
                                    <div class="  border-4 rounded border-[#c0414f] flex justify-center items-center mx-auto lg:mx-0 " style="border: 5px solid #828282">
                                        <img src="myimg/33.jpg" alt="pic-2" class="object-cover partner">
                                    </div>
                                    <div class="alltext-ch w-full  py-4 text-justify">
                                        <h4 class="text-sm sm:text-xl md:text-3xl lg:text-3xl" style="font-weight: bold">Afro Unicorn Brand Offers Partnership and Books to OKR Youth Literacy Events </h4>
                                        <p class="  ">Our Kids Read was happy to be on the periphery of the explosion of the Afro Unicorn brand in 2023. To steal a line from the AfroUnicorns.com website, “the brand has skyrocketed onto the scene with 25 categories, from apparel and accessories to toys, puzzles, books, bedding, bandages, backpacks, collectibles, and more to inspire and remind women and children of color how unique, divine and magical we truly are.”</p>
                                        <p class=" ">April Showers, the founder, has donated hundreds of books to OKR programs and partnered with OKR to bring Cassidy Bridges, 6-year-old author of “Thank You! It’s an Afro” to the Princeton Reunions-OKR Youth Literacy service event. Special thanks to April Showers and Askia Fountain for their support.</p>
                                        <p class=" ">OKR looks forward to strengthening the OKR-Afro Unicorn partnership in 2024.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <div class="flex flex-col lg:flex-row xl:max-w-5xl max-w-7xl py-6 mx-auto1  lg:space-x-6">
                                    <div class="  border-4 rounded border-[#c0414f] flex justify-center items-center mx-auto lg:mx-0 " style="border: 5px solid #828282">
                                        <img src="myimg/34.jpg" alt="pic-2" class="object-cover partner">
                                    </div>
                                    <div class="alltext-ch w-full  py-4 text-justify">
                                        <h4 class=" text-sm sm:text-xl md:text-3xl lg:text-3xl" tyle="font-weight: bold">Salesforce Awards 10 Free Licenses to Our Kids Read </h4>
                                        <p class="  ">The Power of Us Program provides discounted Salesforce technology to education institutions and nonprofit organizations looking to get started with the world’s #1 CRM platform.</p>
                                        <p class="  ">Our Kids Read received a Power of Us grant in 2023 and is in the process of configuring Salesforce to automate selected internal processes.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <div class="flex flex-col lg:flex-row xl:max-w-5xl max-w-7xl py-6 mx-auto1  lg:space-x-6">
                                    <div class="  border-4 rounded border-[#c0414f] flex justify-center items-center mx-auto lg:mx-0 " style="border: 5px solid #828282">
                                        <img src="myimg/35.jpg" alt="pic-2" class="object-cover partner">
                                    </div>
                                    <div class="alltext-ch w-full  py-4 text-justify">
                                        <h4 class=" text-sm sm:text-xl md:text-3xl lg:text-3xl" style="font-weight: bold"> Monday.com Awards $3,000 in Monday.com licenses to Our Kids Read</h4>
                                        <p class=" ">Our Kids Read applied for and was accepted into Monday.com's Nonprofit Program in 2023. This meant that OKR received its 10 first seats (licenses) for free.</p>
                                        <p class=" ">To be eligible to participate in the monday.com for Nonprofit Program, you must be recognized as a charity, nonprofit, nongovernmental, or social change organization in the country in which you are located.</p>
                                    </div>
                                </div>
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