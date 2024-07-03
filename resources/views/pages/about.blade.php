<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Kids Read: Sparking the Joy of Reading in Low-Income Communities</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bundel.css') }}">
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

                </div><!-- /.header__bar -->
           
           
           
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
                    <h1>About Our Kids Read</h1>

                    <p>Incorporated in 2019, Our Kids Read is a MD-based 501c3 non-profit organization that serves the
                        students across the United States. Our two core programs are: (1) donations of diverse books
                        directly to children and also to the schools that they attend and (2) a Remote Reading Buddy
                        program where students read with one of our volunteers in the evening via Zoom. Please “play” on
                        the video embedded here to view a recent book donation event.</p>
                </div><!-- /.grid__col -->

                <div class="grid__col grid__col--6of12">
                    <div class="video">
                        <!--<iframe width="420" height="345" src="https://www.youtube.com/embed/r9PeYPHdpNo"></iframe>-->
                        <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/696842828?h=f547cf6a7e&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen="" style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Our Kids Read + Seattle Children&amp;#039;s-draft.mov" data-ready="true"></iframe></div>
                        <script src="https://player.vimeo.com/api/player.js"></script>
                    </div><!-- /.video -->
                </div><!-- /.grid__col -->
            </div><!-- /.grid -->
        </div><!-- /.shell -->
    </div><!-- /.page-head -->

    <div class="info">
        <div class="shell">
            <div class="grid grid--full">
                <div class="grid__col grid__col--6of12 grid__col--order-md-2">
                    <h2>Company</h2>

                    <h3>URLs</h3>

                    <ul class="list-info">
                        <li>
                            <strong>Website: </strong>

                            <a href="https://www.ourkidsread.org">https://www.ourkidsread.org</a>
                        </li>

                        <li>
                            <strong>Instagram: </strong>

                            <a href="https://www.instagram.com/ourkidsreadinc" target="_new">instagram.com/ourkidsreadinc</a>
                        </li>

                        <li>
                            <strong>Facebook: </strong>

                            <a href="https://www.facebook.com/ourkidsreadinc" target="_new">facebook.com/ourkidsreadinc</a>
                        </li>

                        <!--	<li>
                            <strong>Youtube: </strong>

                            <a href="#">youtube.com/channel/ourkidsreadinc</a>
                        </li>-->

                        <li>
                            <strong>Twitter: </strong>

                            <a href="https://twitter.com/ourkidsreadinc" target="_new">twitter.com/ourkidsreadinc</a>
                        </li>
                    </ul>

                    <h3>General Information</h3>

                    <ul class="list-info">
                        <li>
                            <strong>Founded: </strong> 2019
                        </li>

                        <li>
                            <strong>Employees:</strong> 3
                        </li>
                        <li>
                            <strong>Volunteers:</strong> 164
                        </li>
                        <li>
                            <strong>Headquarters:</strong> Laurel, MD
                        </li>
                    </ul>

                    <h3>Press Contact</h3>

                    <ul class="list-info">
                        <li>
                            <strong>
                                <i class="ico-envelope"></i>

                                <a href="mailto:jahmal.lake@ourkidsreadinc.org ">Jahmal Lake, Executive Director</a>
                            </strong>
                        </li>
                    </ul>
                </div><!-- /.grid__col -->

                <div class="grid__col grid__col--6of12">
                    <div class="info__content">
                        <h2>Our Story</h2>
                        <img class="img-responsive" src="{{ asset('new/assets/images/temp/mom_website.jpg ')}} " alt="" width="640" height="333">

                        <p class="text-large">
                            Our Kids Read was conceived in 2006 by Jahmal Lake and finally brought to life by a generous
                            gift from his mother, Dr. Obiagele Lake, upon her passing in 2020. Dr. Lake specified that
                            $50,000 of her son’s inheritance was to be used to start a program to uplift people of color
                            and make a meaningful difference in their lives. Dr. Lake’s son, Jahmal Lake, chose literacy
                            as mechanism by which to honor his mother’s legacy.
                        </p>

                        <p>
                            <b>Understanding the Problem</b><br>
                            Articulating the challenges African-American, Latinx and Indigenous people
                            disproportionately face in American is not difficult. While there are pockets of achievement
                            and success within all three of these communities, the vast majority of BIPOC communities
                            are disproportionately impacted by issues of lack of education, inadequate access to
                            financial resources and good paying jobs and poor healthcare systems. Making the decision
                            about which of the myriad of issues that plague communities of color to attack first is not
                            easy. Our Kids Read chose literacy only because education has traditionally been a reliable
                            path out of poverty and lack of opportunity. Taking a look at the literacy statistics in the
                            United States, a terrifying picture emerges: 18%, 19% and 23% of African-American,
                            Indigenous and Latinx children, respectively. are reading at grade-level by the end of the
                            3rd grade. Said a different way, 82%, 81% and 77% of these communities ARE NOT reading at
                            grade level, half-way through elementary school.

                        </p>

                        <p>
                            <b>Architecting Part of the Solution</b><br>
                            Our Kids Read understands that our programs alone will not solve the problem of low literacy
                            rates in BIPOC communities. What we do hope, however, is that by creating a scalable,
                            national program that make an appeal to ALL Americans to donate 30-minutes per week to read
                            to a child, we will be able to move the literacy needle, ever so slightly. Our approach
                            integrates the concepts of identity, choice and mentorship
                            <br>- leveraging books featuring BIPOC characters, we aim strengthen our participants
                            connection to the materials (IDENTITY)
                            <br>- by allowing the children that participate in our program to *choose their own books*
                            from our BIPOC book collection, we offer them a freedom to explore both their own interests
                            as well as explore new territory (CHOICE)
                            <br>- our mentors serve as another member of our students “tribe,” someone to laugh with,
                            read with, tell about their day and share both their frustrations and triumphs (MENTORSHIP)

                        </p>

                        <!--<div class="info__actions">
                            <a href="#" class="lnk lnk--primary lnk--ico-end">
                                Optional link <i class="ico-arrow-right"></i>
                            </a>
                        </div>--><!-- /.info__actions -->
                    </div><!-- /.info__content -->
                </div><!-- /.grid__col -->
            </div><!-- /.grid -->
        </div><!-- /.shell -->
    </div><!-- /.info -->
    <style>
        .d-flex {
            display: flex;
        }

        .member img {
            width: 100%;
            height: auto;
        }
    </style>
    <div class="section">
        <div class="shell">
            <div class="section__head">
                <h2>our team</h2>
            </div><!-- /.section__head -->

            <div class="grid grid--half">
                <div class="grid__col grid__col--3of12">
                    <div class="member">
                        <div class="member__image">
                            <img src="{{ asset('new/assets/images/temp1/1.jpg ')}}  " alt="" width="304" height="304">
                        </div>
                        <div class="member__body">
                            <h6>Jahmal Lake</h6>
                            <span>Executive Director, Executive Board Member</span>
                        </div><!-- /.member__body -->
                        <br>
                        <div class="member__actions d-flex">
                            <a href="https://www.linkedin.com/in/jahmal-lake/" class="lnk lnk--primary lnk--ico-start">
                                <i class="ico-linkedin-2"></i>
                            </a>
                            <a class="lnk lnk--primary lnk--ico-start view-bio" onclick="toggleDescription('jahmal-lake')">View bio</a>
                        </div><!-- /.member__actions -->
                        <!-- Description div -->
                        <div class="bio-jahmal-lake" style="display: none;">
                            Jahmal Lake brings years of leadership experience in the non-profit space as well as 20+
                            years of software engineering know-how to confront the challenge of literacy in underserved
                            US communities. Lake's vision is to connect the millions of children who are below grade
                            level in reading with millions of adult Americans looking to be mentors and reading
                            partners.
                            <br><br>
                            Lake started his first non-profit, ImagineAccess, in 1998 in New York City with the mission
                            to expose young people of color to coding and graphic design. ImagineAccess also partnered
                            with the Harlem YMCA and a group of local NYC spoken word artists to give YMCA teens an
                            opportunity to write poetry that was then converted into digital animation.
                            <br><br>
                            Lake's technical background includes coding and leading US-based and international teams to
                            deploy complex web portals for companies like American Express, Bailey, Banks and Biddle and Riddell Sports.
                            <br><br>
                            In 2019, with the encouragement of his late mother Dr. Obiagele Lake, Jahmal founded Our
                            Kids Read. Inspired by his mother's 50-year career in social justice and education, Lake
                            leveraged a $50K gift from her to lay the foundation for an organization dedicated to
                            sparking the joy of reading in children in underserved communities. In the first 18 months
                            of inception, Our Kids Read has secured partnerships with Microsoft, Hallmark, Dell, Nike
                            and Amazon, raised over a quarter million dollars and donated over 50,000 books to K-5th
                            grade students.
                            <br><br>
                            Lake is responsible for overseeing all facets of the organization, driving the mission,
                            fundraising, operations, and engagement with the board of directors. Lake has
                            single-handedly grown the organization from an idea to a national organization that has
                            served over 20,000 children in the last 18 months by aligning the day-to-day work with
                            values around diversity, equity, community and education.
                            <br><br>
                            Personal: In his "free time" Lake enjoys spending time with his wife, Andria Lake and his
                            two boys, Thomas and Tefari. He also enjoys traveling, reading, playing tennis/attending
                            tennis tournaments, weight lifting, tinkering with gadgets and tech, as well as watching
                            movies.

                        </div>
                    </div><!-- /.member -->
                </div><!-- /.grid__col -->

                <div class="grid__col grid__col--3of12">
                    <div class="member">
                        <div class="member__image">
                            <img src="{{ asset('new/assets/images/temp1/3.jpg')}}  " alt="" width="304" height="304">
                        </div>
                        <div class="member__body">
                            <h6>Karen Ali, Esquire</h6>
                            <span>Advisory Board Member</span>
                        </div><!-- /.member__body -->
                        <br>
                        <div class="member__actions d-flex">
                            <a href="https://www.linkedin.com/in/karen-s-a-2172343/" class="lnk lnk--primary lnk--ico-start">
                                <i class="ico-linkedin-2"></i>
                            </a>
                            <a class="lnk lnk--primary lnk--ico-start view-bio" onclick="toggleDescription('ali-karen')">View bio</a>
                        </div><!-- /.member__actions -->
                        <div class="bio-ali-karen" style="display: none;">
                            Karen Ali is active in the community, serving as president of the Board of Trustees of the
                            New Jersey State Museum Foundation and on the boards of Our Kids Read, the Executive Board
                            to The Auxiliary to the Isabella McCosh Infirmary (Princeton University), Association of
                            Black Princeton Alumni (ABPA), Princeton AlumniCorps, the Latin American Legal Defense and
                            Education Fund, and Passion of Hope International-US.
                            <br><br>
                            Karen is also active in several Princeton University alumni activities. In 2018, Karen
                            received ABPA's Alumni Service Award. In 2013, she volunteered through Princeton
                            AlumniCorps’ ARC Innovators program for Good Grief, Inc. and edited an anthology of
                            children’s essays, The Invisible Tattoo: True Stories about Children Grieving, Living, and
                            Loving After Loss (2014). For more than 20 years, she has served as an administrator for the
                            Fred Fox Class of 1939 Fund, a program that provides grants to students for academic-related
                            projects.
                            <br>
                            <br>
                            Karen retired from the New Jersey Hospital Association, a healthcare trade association in
                            Princeton, NJ where she served as senior vice president for community partnerships and prior
                            to that role, general counsel.
                            <br><br>
                            Karen received her Bachelor’s degree in Sociology, magna cum laude from Princeton University
                            in Princeton, NJ and her Juris Doctor degree from the University of Michigan Law School in
                            Ann Arbor, MI. She is a member of the New York and Virginia State bars and the United States
                            District Court for the Eastern District of Virginia federal bar.
                            <br><br>
                            Karen lives in Princeton Junction, NJ with her spouse, Deighton Weekes. She is the proud
                            mother of Justin (Adelphi University ’19; New York Film Academy, MA ’22) and grandmother of
                            Nahla, Sufyan and Maya from her daughter-in-law Aaliya and stepson Jamey. In honor of her
                            son and parents, Karen established the Ali-Weekes Endowed Scholarship at Adelphi in 2019 for
                            students pursuing Communications degrees.

                        </div><!-- /.bio-ali-karen -->
                    </div><!-- /.member -->
                </div><!-- /.grid__col -->
                
                <div class="grid__col grid__col--3of12">
                    <div class="member">
                        <div class="member__image">
                            <img src="{{ asset('new/assets/images/temp1/2.jpg ')}}  " alt="" width="304" height="304">
                        </div>
                        <div class="member__body">
                            <h6>Kamil Ali-Jackson, Esquire </h6>
                            <span>Advisory Board Member</span>
                        </div><!-- /.member__body -->
                        <br>
                        <div class="member__actions d-flex">
                            <a href="https://www.linkedin.com/in/kamil-a-310b1464/" class="lnk lnk--primary lnk--ico-start">
                                <i class="ico-linkedin-2"></i>
                            </a>
                            <a class="lnk lnk--primary lnk--ico-start view-bio" onclick="toggleDescription('ali-jackson-kamil')">View bio</a>
                        </div><!-- /.member__actions -->
                        <div class="bio-ali-jackson-kamil" style="display: none;">
                            Kamil Ali-Jackson, Esquire is an independent director, life sciences entrepreneur and a
                            co-founder of several specialty pharmaceutical and biopharmaceutical companies which were
                            successfully transitioned through multi-million-dollar acquisitions by global life science
                            companies. Kamil’s career spans almost four decades of experience as a C- suite leader,
                            legal counsel, and business partner with emerging, mid-size and large life sciences
                            companies.
                            <br><br>
                            Kamil has extensive legal, mergers and acquisitions, business development, product
                            licensing, corporate governance, compliance, and human resources experience. While building
                            her own companies, Kamil gained valuable expertise regarding the importance of establishing
                            company cultures which place “equitable” value and emphasis on developing and supporting an
                            organization’s people, mission, and economic interests as well as the interests of the
                            communities within which her companies were located.
                            <br><br>
                            Kamil is a Class of 1981 alumna from Princeton University and was recently elected as a
                            trustee to the board of Princeton University by her fellow alumni. She is also an inaugural
                            member of the Princeton University Dean for Research External Advisory Council for
                            Innovation and Entrepreneurship and START Entrepreneurs, a Princeton University
                            academic-based innovation incubator program. In addition, Kamil serves on the board of
                            directors of two NASDAQ-listed biotechnology companies and as a strategic advisor for
                            privately held companies and nonproﬁt organizations, and is an adjunct lecturer at the
                            University of Pennsylvania Carey Law School.
                            <br><br>
                            Kamil received a Juris Doctorate from Harvard Law School and a Bachelor of Arts in politics
                            from Princeton University. Kamil is married to an attorney, Michael Jackson, Princeton
                            University Class of 1979 and is the mother of four children-two lawyers and one law student,
                            including Karis Jackson, Princeton University Class of 2018.
                            <br><br>
                            Kamil embraces the servant-leader model of leadership which focuses on creating
                            opportunities to develop and thrive, not only for yourself, but for others. For Kamil, OKR
                            is a stellar example of how to put that leadership model in practice by developing and
                            supporting the next generation of leaders through literacy. Kamil believes reading is the
                            key to realizing an individual’s full potential which is why she is passionate about Our
                            Kids Read’s mission to use reading as the catalyst to develop the potential of our children.

                        </div><!-- /.bio-ali-jackson-kamil -->
                    </div><!-- /.member -->
                </div><!-- /.grid__col -->
                <div class="grid__col grid__col--3of12">
                    <div class="member">
                        <div class="member__image">
                            <img src="{{ asset('new/assets/images/temp1/headshot_antonia_brown_REDUCED.jpg')}}  " alt="" width="304" height="304">
                        </div>
                        <div class="member__body">
                            <h6>Antonia Baker </h6>
                            <span>Advisory Board Member</span>
                        </div><!-- /.member__body -->
                        <br>
                        <div class="member__actions d-flex">
                            <a href="https://www.linkedin.com/in/antoniabaker/" class="lnk lnk--primary lnk--ico-start">
                                <i class="ico-linkedin-2"></i>
                            </a>
                            <a class="lnk lnk--primary lnk--ico-start view-bio" onclick="toggleDescription('Antonia-Baker')">View bio</a>
                        </div><!-- /.member__actions -->
                        <div class="bio-Antonia-Baker" style="display: none;">
                            Antonia Baker is an multi-faceted brand marketer, culture creator and business advisor with over 20 yrs experience in both B2C and B2B marketing space working at the intersection of culture, community and creativity. Focused on driving transformational brand growth and revenue, Antonia's superpower is creating passionate global communities by marrying content and culture-forward strategies that cultivate brand love.
                            <br> <br>
Currently, Antonia consults with brands and creators to craft their best stories to connect with consumers. Prior to this role, Antonia was the Global Head of Consumer Marketing at Twitter where she oversaw global consumer marketing strategy to drive engagement and culture that came alive on Twitter in 280 characters and beyond. Her previous experience includes marketing leadership roles at Hartbeat Productions, Paramount (MTV Entertainment Group), Food Network, AMC Networks, and Thomson Reuters, honing a diverse background in brand marketing, creative advertising, content development, digital strategy, and brand partnerships.
<br> <br>
A first-generation Jamaican-American, Antonia is driven by impacting lives through mentorship and empowering the next generation of leaders to be fearless in changing the world. Antonia holds a B.S. in Marketing from Manhattan College and currently resides in her beloved hometown of New York City

                        </div><!-- /.bio-ali-jackson-kamil -->
                    </div><!-- /.member -->
                </div><!-- /.grid__col -->
  <div class="grid__col grid__col--3of12">
                    <div class="member">
                        <div class="member__image">
                            <img src="{{ asset('new/assets/images/temp1/11.jpg ')}}  " alt="" width="304" height="304">
                        </div>
                        <div class="member__body">
                            <h6>Beth Brett</h6>
                            <span>Advisory Board Member</span>
                        </div><!-- /.member__body -->
                        <br>
                        <div class="member__actions d-flex">
                            <a href="https://www.linkedin.com/in/bethgermanbrett/" class="lnk lnk--primary lnk--ico-start">
                                <i class="ico-linkedin-2"></i>
                            </a>
                            <a class="lnk lnk--primary lnk--ico-start view-bio" onclick="toggleDescription('BethBrett')">View bio</a>
                        </div><!-- /.member__actions -->
                        <div class="bio-BethBrett" style="display: none;">
                            BETH BRETT is immensely proud to serve on the advisory board of Our Kids Read. In her professional life, Beth is a seasoned communications and development strategist. As founder and CEO of Beth Brett Communications, she has the privilege of working with cutting-edge brands and overseeing her client's public relations and marketing needs.
                            <br> <br>
                            During her career, Beth served as Los Angeles Tourism's Communications Director, Lead Publicist for the Getty Museum, and Senior Communications Associate for the Hospital for Special Surgery. With a master's degree from Stanford University's J-School, she has penned bylined articles in The New York Times, Newsday, The San Francisco Chronicle, and Tennis Week.
                            <br> <br>
                            Beth holds an A.B. in Politics from Princeton University, where she was a competitive sportswoman, playing on both the varsity tennis and squash teams. An active alum, Beth has served on the Executive Committee of the Alumni Council and is her current Class President (2013-present). She has also chaired her Class Reunions, achieving a Guinness World Record for the "Largest Gathering of People Wearing a Tennis Outfit" during Reunions 2013 and leading P'98's win of The Class of 1960 Quenby Cullen Williamson Reunion Award for the most colorful and imaginative reunion costume during P-Rade 2018. She oversaw Communications and co-chaired Community Service for her 25th Reunion. She was particularly honored to help champion Our Kids Read's Literacy and Mentorship Program with 40 elementary school students from Foundation Academies, a Trenton-based school, for a meaningful campus-wide event. It was among her greatest joys to experience her client Cassidy Brianna, a noted child author, in conversation with prolific men's basketball coach and classmate Mitch Henderson.
                        </div><!-- /.bio-wright-eugene -->
                    </div><!-- /.member -->
                </div><!-- /.grid__col -->
                <div class="grid__col grid__col--3of12">
                    <div class="member">
                        <div class="member__image">
                            <img src="{{ asset('new/assets/images/temp1/4.jpg ')}} " alt="" width="304" height="304">
                        </div>
                        <div class="member__body">
                            <h6>Shawn Cole</h6>
                            <span>Advisory Board Member</span>
                        </div><!-- /.member__body -->
                        <br>
                        <div class="member__actions d-flex">
                            <a href="https://www.linkedin.com/in/shawn-cole-30786666/" class="lnk lnk--primary lnk--ico-start">
                                <i class="ico-linkedin-2"></i>
                            </a>
                            <a class="lnk lnk--primary lnk--ico-start view-bio" onclick="toggleDescription('cole-shawn')">View bio</a>
                        </div><!-- /.member__actions -->
                        <div class="bio-cole-shawn" style="display: none;">
                           Shawn Cole is a professor in the Finance Unit at Harvard Business School, where he teaches and conducts research on ﬁnancial services, social enterprise, and impact investing. He is the faculty chair of the HBS Social Enterprise Initiative.
 <br><br>
Much of his research examines corporate and household ﬁnance in emerging markets, with a focus on insurance, credit, and savings. He has also done extensive work on ﬁnancial education in the US and emerging markets. His recent research focuses on designing and delivering advice and education over mobile phones, with an emphasis on agricultural and
 <br><br>

He is an aﬃliate of the National Bureau of Economic Research, and the Bureau for Research and Economic Analysis of Development. He is on the board of the Jameel Poverty Action Lab, as the co-chair for research. He is also co-founder and a board member of Precision Development, an international non-profit providing agricultural advice to smallholder farmers.
 <br><br>
Before joining the Harvard Business School, Professor Cole worked at the Federal Reserve Bank of New York in the economic research department. He has served on the Boston Federal Reserve's Community Development Research Advisory Council, served as an external advisor to the Gates Foundation, and was the chair of the endowment management commitee of the Telluride Association, a non-proﬁt educational organization.
 <br><br>
He received a Ph.D. in economics from the Massachusets Institute of Technology in 2005, where he was an NSF and Javits Fellow, and an A.B. in Economics and German Literature from Cornell University. His work on insurance earned the 2015 "Shin Research Excellence Award;" in 2015 he was also named given a “Faculty Pioneer Award” from the Aspen Institute

                        </div><!-- /.bio-cole-shawn -->
                    </div><!-- /.member -->
                </div><!-- /.grid__col -->

                <div class="grid__col grid__col--3of12">
                    <div class="member">
                        <div class="member__image">
                            <img src="{{ asset('new/assets/images/temp1/5.jpg ')}}  " alt="" width="304" height="304">
                        </div>
                        <div class="member__body">
                            <h6>Lisa Dunkley</h6>
                            <span>Advisory Board Member</span>
                        </div><!-- /.member__body -->
                        <br>
                        <div class="member__actions d-flex">
                            <a href="https://www.linkedin.com/in/lisa-dunkley-42a4737/" class="lnk lnk--primary lnk--ico-start">
                                <i class="ico-linkedin-2"></i>
                            </a>
                            <a class="lnk lnk--primary lnk--ico-start view-bio" onclick="toggleDescription('dunkley-lisa')">View bio</a>
                        </div><!-- /.member__actions -->
                        <div class="bio-dunkley-lisa" style="display: none;">
                           Born in New York and raised in central new Jersey, Lisa Dunkley’s passion for books and reading was firmly established by the time she went Princeton University, from which she graduated in 1983 with a degree in English, a certificate in American Studies, and a thesis prize. After attending an intensive summer publishing course at Radcliffe College, Lisa decided to pursue a career in book publicity at Dell Publishing, and then at Doubleday. She found enormous joy in reading new books and authors, and helping readers to discover them. Lisa would take advantage of the companies’ continuing education programs,to earn a master’s degree in English from New York University. At that time the publishing industry was being transformed by mergers and acquisitions, and Lisa’s future seemed uncertain. She learned that Princeton’s new admission dean, Fred Hargadon, was looking for recent alumni to join the staff. As a former tour guide chair and student panelist, Lisa was drawn to the opportunity —and was thrilled to be in the newly hired group. She returned to campus in 1988. During the interview process she told Dean Hargadon she could see herself staying at Princeton for as long as five years. It would turn out to be a little longer than that.
 <br><br>

In 1994 Lisa would begin a newly created position in the university’s annual fund oﬃce, focused on researching and sharing the stories of gifts, donors, honorees and beneﬁciaries. The projects required signiﬁcant time in libraries and other collections, and led to a revelation: maybe Lisa should become a librarian—and then she’d have to go there every day! Rutgers University had one of the best programs in the country, and with the unselﬁsh support of her boss, Lisa completed her degree going to school kart-time for three years. She had worked with the University Librarian on several projects through the years, and was surprised and deeply moved to be appointed to a 3-year position, and it was in her dream department: Special Collections. Lisa helped develop exhibitions, processed collections, and worked with the Friends, but her greatest joy was helping students and visitors through public services at the reference desk.
 <br><br>
Lisa’s fundraising background helped her create a much-needed database of endowed library funds (about 200 at the time), which she did with assistance from the treasurer’s office. When her library appointment came to a close, she was hired by the same group in the treasurer’s office to continue this work, but now for all of the university’s endowed funds (about 1200). Two years later, as this project neared completio, a new permanent position was created in the donor relations department within University Advancement. Its focus was a nearly perfect blend of the jobs Lisa most enjoyed: she researched the histories of gifts, and created impact reports for donors to understand how their gifts are used. It is the position Lisa would hold for the longest time—15 years—and it would be her last. Lisa retired from Princeton in 2019 after 30 years. She remains in the area, as she plans the next stages of her life, which will include music, sports (MLB and college basketball) and, always and forever, libraries, books and reading.

                        </div><!-- /.bio-dunkley-lisa -->
                    </div><!-- /.member -->
                </div><!-- /.grid__col -->

                <div class="grid__col grid__col--3of12">
                    <div class="member">
                        <div class="member__image">
                            <img src="{{ asset('new/assets/images/temp1/6.jpg ')}}  " alt="" width="304" height="304">
                        </div>
                        <div class="member__body">
                            <h6>Jaffet Ghebretnsae</h6>
                            <span>Advisory Board Member</span>
                        </div><!-- /.member__body -->
                        <br>
                        <div class="member__actions d-flex">
                            <a href="https://www.linkedin.com/in/jaffet-ghebretnsae-27a2b11/" class="lnk lnk--primary lnk--ico-start">
                                <i class="ico-linkedin-2"></i>
                            </a>
                            <a class="lnk lnk--primary lnk--ico-start view-bio" onclick="toggleDescription('ghebretnsae-jaffet')">View bio</a>
                        </div><!-- /.member__actions -->
                        <div class="bio-ghebretnsae-jaffet" style="display: none;">
                            Jaﬀet Ghebretnsae '99 is a patent-focused, servant leader, lean- certﬁed hospital
                            administrator, and strategy professional recognized for successfully implementng complex
                            solutons across matrixed organizatons and providing innovatve, creatve, results-oriented
                            leadership focused on generatng value and improving operatonal eﬃciency, quality outcomes,
                            and patent/family/provider satsfacton. Adept at ﬁnancial and quanttative analysis,
                            project/program/change/population health management, as well as designing, deﬁning, and
                            reﬁning systems to gain the best results and further continuous improvement.
                            Acknowledged for the ability to lead productive teams, communication, and presentation to
                            C-suite.

                        </div><!-- /.bio-ghebretnsae-jaffet -->
                    </div><!-- /.member -->
                </div><!-- /.grid__col -->
   <div class="grid__col grid__col--3of12">
                    <div class="member">
                        <div class="member__image">
                            <img src="{{ asset('new/assets/images/temp1/10.jpg ')}} " alt="" width="304" height="304">
                        </div>
                        <div class="member__body">
                            <h6>Lauren MacDonell</h6>
                            <span>Advisory Board Member</span>
                        </div><!-- /.member__body -->
                        <br>
                        <div class="member__actions d-flex">
                            <a href="https://www.linkedin.com/in/lauren-macdonell-980b17/" class="lnk lnk--primary lnk--ico-start">
                                <i class="ico-linkedin-2"></i>
                            </a>
                            <a class="lnk lnk--primary lnk--ico-start view-bio" onclick="toggleDescription('lauren_mcdonnel')">View bio</a>
                        </div><!-- /.member__actions -->
                        <div class="bio-lauren_mcdonnel" style="display: none;">
                            Lauren MacDonell is a researcher, instructional design consultant, and teacher educator specializing in inclusive language and literacy learning. She holds a Master of Education in Instructional Design and a B.A. in Linguistics, and she is currently pursuing a PhD in literacy studies at Middle Tennessee State University. She teaches pre-service teachers about language science and the science of reading at CollegeUnbound.edu. She is also a veteran K-12 ELA and social sciences teacher and an absolute nerd for all things related to language. Coming from a linguistics background, Lauren has a different perspective on language and literacy than you probably encountered in your high school English classes. Her work centers a scientific, descriptive view of language that celebrates linguistic and cultural diversity in the classroom and strives to make language and literacy learning accessible to students of all language backgrounds.
                            <br>
                            Lauren’s work also centers language equity and inclusion. As many of us remember from our school days, K-12 English Language Arts classes have traditionally elevated one particular form of English - the form in which most textbooks are written - over all others. The idea that there is one “proper” or “correct” way of using English is pervasive in the US's education systems. This presents a huge problem for students from diverse language and dialect backgrounds, whose home languages are implicitly and sometimes explicitly devalued by mainstream curricula and teaching methods. By integrating evidence-based literacy learning methods with inclusive, linguistics-based materials and methods for teaching about language, Lauren seeks to shift the paradigm in K-12 ELA instruction to fully serve students of all language backgrounds and abilities. You can read more about her work at LanguageScienceCentral.com.

                        </div><!-- /.bio-wright-eugene -->
                    </div><!-- /.member -->
                </div><!-- /.grid__col -->
                <div class="grid__col grid__col--3of12">
                    <div class="member">
                        <div class="member__image">
                            <img src="{{ asset('new/assets/images/temp1/7.jpg ')}}  " alt="" width="304" height="304">
                        </div>
                        <div class="member__body">
                            <h6>Marquis Parker</h6>
                            <span>Advisory Board Member</span>
                        </div><!-- /.member__body -->
                        <br>
                        <div class="member__actions d-flex">
                            <a href="https://www.linkedin.com/in/marquis/" class="lnk lnk--primary lnk--ico-start">
                                <i class="ico-linkedin-2"></i>
                            </a>
                            <a class="lnk lnk--primary lnk--ico-start view-bio" onclick="toggleDescription('parker-marquis')">View bio</a>
                        </div><!-- /.member__actions -->
                        <div class="bio-parker-marquis" style="display: none;">
                            Marquis Parker is an accomplished executive with broad- based experiences grounded in
                            business operations, strategy, services, and organizational improvement. Over the past 20+
                            years, he has established a reputation for identifying operational and ﬁnancial
                            risks/opportunities and developing viable solutions; being deployed in complex,
                            mission-critical situations and quickly delivering results; and balancing a “big picture”
                            perspective with strong detail-orientation to drive impact.
                            <br><br>
                            Currently, Marquis serves as Vice President of Global Product Commercialization for Indeed,
                            an HR technology ﬁrm that connects millions of job seekers to new opportunities. In this
                            role, he drives key business decisions, delivers on strategic initiatives, and identiﬁes
                            value crafted on opportunities to support the growth of Indeed’s products around the world.
                            A former Software Engineer, Marquis began his business career as a consultant at McKinsey &amp;
                            Company, where he advised both private and public sector clients on a range of topics,
                            including organization design, post-merger management, performance transformation, and
                            growth strategy. Later, <br>
                            he held multiple business operations and strategy leadership roles at Relativity
                            (Chicago-based software company in the LegalTech sector), Aon plc (global ﬁnancial services
                            and human capital ﬁrm), Waterstone Group Holdings (Chicago-based private equity investment
                            and strategic advisory holding company), and Management Recruiters International Inc.
                            (former portfolio company of AE Industrial Partners in the human capital sector).
                            <br><br>
                            Hailing from a small rural town in Virginia, Marquis holds degrees from Princeton University
                            (A.B. in Computer Science), Stanford University (M.B.A. and M.A. in Education), and the
                            University of Virginia
                            M.S. in Management of IT). He is a true believer in the power of education to open up doors
                            to opportunity and create new pathways for people's lives. The mission of Our Kids Read
                            speaks directly to his values and he is excited to play a small part in the great work that
                            it strives to do for children around the world.

                        </div><!-- /.bio-parker-marquis -->
                    </div><!-- /.member -->
                </div><!-- /.grid__col -->

                <div class="grid__col grid__col--3of12">
                    <div class="member">
                        <div class="member__image">
                            <img src=" {{ asset('new/assets/images/temp1/8.jpg ')}} " alt="" width="304" height="304">
                        </div>
                        <div class="member__body">
                            <h6>Eugene Wright</h6>
                            <span>Advisory Board Member</span>
                        </div><!-- /.member__body -->
                        <br>
                        <div class="member__actions d-flex">
                            <a href="https://www.linkedin.com/in/eugene-wright-jr-32931b94" class="lnk lnk--primary lnk--ico-start">
                                <i class="ico-linkedin-2"></i>
                            </a>
                            <a class="lnk lnk--primary lnk--ico-start view-bio" onclick="toggleDescription('wright-eugene')">View bio</a>
                        </div><!-- /.member__actions -->
                        <div class="bio-wright-eugene" style="display: none;">
                            Medical Director Performance Improvement <br>
                            South Piedmont Area Health Education Center (AHEC) Charlotte, NC <br>
                            Dr. Eugene E. Wright, Jr. hold an appointment as Consulting Associate in the Department of
                            Medicine of Duke University Medical Center.
                            <br>
                            Dr. Wright has over 40 years of clinical experience as a private practitioner, academic
                            clinician and educator, medical administrator, a rural physician in southeastern NC and a
                            volunteer physician. From 2000 to 2013, he served in several roles within the Cape Fear Valley Health System including Medical Director for Primary Care and Speciality Services and Chief Medical Officer for the health system.
                            <br>
                            Dr. Wright serves as an Associate Editor of Clinical Diabetes, and has served on several
                            advisory and editorial boards to include Diabetes Technology and Therapeutics and as a
                            content reviewer for UpToDate. He served as the inaugural chair of the ADA Primary Care
                            Interest Group, as a member of the ADA/AHA Know Diabetes by Heart Science Advisory Group and
                            in several leadership roles with the ADA Clinical Conference. Dr. Wright has published
                            numerous articles on diabetes diagnosis, treatments and management and has given
                            presentations at national and international meetings on new treatments and technology for
                            diabetes.
                            <br>
                            Dr. Wright has an undergraduate BSE in Electrical Engineering from Princeton University
                            (1973) and a medical degree from Duke University School of Medicine (1978). He completed his
                            internship and residency in Internal Medicine at Duke University Hospital in 1981.
                            <br>
                            Personal: Gene enjoys traveling internationally with his wife of over 50 years. He also
                            enjoys skiing with his wife and grandson and spending time with his family.

                        </div><!-- /.bio-wright-eugene -->
                    </div><!-- /.member -->
                </div><!-- /.grid__col -->
             
              


            </div><!-- /.grid -->
        </div><!-- /.shell -->
    </div><!-- /.section -->

    <div class="section">
        <div class="shell">
            <div class="section__head">
                <h2>donate</h2>
            </div><!-- /.section__head -->

            <div class="grid">
                <div class="grid__col grid__col--6of12">
                    <div class="callout">
                        <div class="callout__image">
                            <img src="{{ asset('new/assets/images/svg/illustration_heart.svg ')}}  " alt="" width="260" height="232">
                        </div><!-- /.callout__image -->

                        <div class="callout__content">
                            <h4>Make a Dollar Donation</h4>

                            <p>
                                Donate a book, a classroom full of books or just a few dollars to support diversity in
                                your local schools. As Our Kids Read is 100% volunteer funded, 91 cents out of every
                                dollar goes to the book giving program.
                            </p>
                        </div><!-- /.callout__content -->

                        <div class="callout__actions">
                            <a href=" https://laravel.techizebuilder.net/donate-now" class="btn btn--primary">Give Money</a>
                        </div><!-- /.callout__actions -->
                    </div><!-- /.callout -->
                </div><!-- /.grid__col -->

                <!--<div class="grid__col grid__col--6of12">-->
                <!--    <div class="callout">-->
                <!--        <div class="callout__image">-->
                <!--            <img src="{{ asset('new/assets/images/svg/illustration_books.svg ')}}  " alt="" width="200" height="232">-->
                <!--        </div>-->

                <!--        <div class="callout__content">-->
                <!--            <h4>Donate Diverse Books</h4>-->

                <!--            <p>-->
                <!--                Have gently used diverse books you'd like to donate to a child in our schools? We will-->
                <!--                send you a postage paid self-addressed media mailer for you to send the book to the Our-->
                <!--                Kids Read sorting depot for sterilization and distribution.-->
                <!--            </p>-->
                <!--        </div>-->

                <!--        <div class="callout__actions">-->
                <!--            <a href=" #" class="btn btn--primary">Give Books</a>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
        </div><!-- /.shell -->
    </div><!-- /.section -->
</main><!-- /.main -->
 
	<footer class="footer">
    <div class="shell">
        <div class="grid grid--align-center">
            <div class="grid__col grid__col--6of12">
                <a href="{{route('home')}}" class="logo logo--footer">
                    <img src="{{ asset('new/assets/images/svg/logo-compact.svg ')}} " alt="">
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


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--<script src="{{ asset('frontend/js/style.js') }}"></script>-->
    <!--<script src="{{ asset('frontend/js/styletwo.js') }}"></script>-->
    <script src="{{ asset('new/assets/js/bundle.js') }}"></script>
    <script>
        window.__lc = window.__lc || {};
        window.__lc.license = 16558326;
        ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
        </script>
        
    <script>
            function toggleDescription(memberId) {
        var bioElement = document.querySelector('.bio-' + memberId);
        if (bioElement.style.display === 'none' || bioElement.style.display === '') {
            bioElement.style.display = 'block';
        } else {
            bioElement.style.display = 'none';
        }
    }
    </script>
     
</body>
</html>