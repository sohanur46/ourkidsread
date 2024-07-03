<?php

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

    html, body {
        font-family: Montserrat;
        height: 100vh;
        background-color: #C0E3DC !important;
    }
    
    .page-wrapper {
        height: 100%;
    }
    
    .contain {
        display: flex;
        height: 100%;
    }
    
    .sidebar {
        width: 350px;
        color: #ffffff;
        font-size: 1.6rem;
        transition: all 0.3s ease;
        background: #004750;
    }
    
    .menu li {
        margin: 10px 30px;
        padding: 10px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border: 1px solid #347079;
    }
    


    
    .main {
        flex: 1;
        padding: 24px 50px 50px 36px ;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    
   
    
    .hambuger {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
        font-size: 3rem;
        font-weight: bold;
    }
    
    .hambuger img {
        width: 20px;
        height: 20px;
    }
    
    .hambuger .hamburger_icon {
        background-color: transparent;
        display: none;
        position: absolute;
        top: 20px;
        right: 20px;
        z-index: 30;
    }
    
    .chat {
        display: flex;
        justify-content: flex-start;
        margin-left: 50px;
        align-items: center;
        gap: 20px;
    }
    
    .chat .avatar {
        border-radius: 50%;
    }
    
    .chat img {
        border-radius: 50%;
    }
    
    @media screen and (max-width: 1024px) {

        
        .hambuger .hamburger_icon {
            display: flex;
        }
        
        .sidebar.full {
            position: fixed;
            width: 100%;
            height: 100%;
            z-index: 10;
        }
    }

    
</style>
   
</head>
<body>

    <div class="page-wrapper">
     <div class="contain">
         <div class="sidebar">
            <div class="logo">
                <img src="https://www.ourkidsread.org/public/new/assets/images/logo.svg" alt="logo" />
            </div>
            <!--<div class="hamburger" onClick="toggleSidebar()">-->
            <!--    <span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25" height="25" viewBox="50 136 21 16"><image width="21" height="16" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAQCAYAAAD52jQlAAAAAXNSR0IArs4c6QAAASZJREFUOE+11DtKBEEQxvHf+gJFfIuZggZGiiabGXmTPYSBF/AChl5AEBREr2AkYrBGCoIgBr5AWHyvFLTJsDs7s2hD0dBT/e+vq77pSqN5Xx2qTO1gHg00lRsVDOANJ6jHwgHWMVyO1TL7FGcB3cQKZvGO75LwYPThFee4ioUJjGEEX11eP3TE3qcoYUD/fPxCY+7NURnfP4ueHsmDGE/x0QLcg4hHPBSBB3QDS5hOTcpaKnIi7nCEw2SftsIj+RhrBSz1jG1sJT/nQsNSVSwkBVmlUes4/BJ72E/Wy4UupquPpnploVHPgIbSG9x28vK/WqqoWwrlhdLJdP2YC3sxQ48ShR3DIS8BrWEZc20a1Uld9t+/joVdrGImdbWbp68/7a3j4gfK+EGkiHmJQAAAAABJRU5ErkJggg==" data-name="Layer 2" transform="translate(50 136)"/></svg></span>Menu-->
            <!--</div>-->
             <div class="chat">
                 <div class="avatar"><img src="https://www.ourkidsread.org/myimg/dashboard/avatar.webp" alt="avatar"/></div>
                 <div class="chat_btn">
                     <div>Name</div>
                     <div>Email</div>
                 </div>
             </div>
            <div class="menu">
                <ul>
                    <li>
                        Number Of Sessions Attend <span>30</span>
                    </li>
                </ul>
             </div>

         </div>
         <div class="main">
             <div class="hambuger">READING SESSIONS<span class="hamburger_icon" ><img onClick="toggleSidebar()" src="https://www.ourkidsread.org/myimg/dashboard/hambuger.svg" alt="menu" /></span><span><img src="https://www.ourkidsread.org/myimg/onboarding/power.png" alt="power" /></span></div>
         </div>
        </div>
     </div>
    <script>
        function toggleSidebar() {
            var sidebar = document.querySelector('.sidebar');
                sidebar.classList.toggle('hidden');
                sidebar.classList.add("full")
            }
            
            function handleResize() {
                var sidebar = document.querySelector('.sidebar');
                if (window.innerWidth <= 1024) {
                    sidebar.classList.add('hidden');
                }
                
                if (window.innerWidth > 1024) {
                    sidebar.classList.remove('hidden');
                }
            }
            
            window.onload = function() {
                handleResize();
            }
            
            window.onresize = function() {
                handleResize();
            }
    </script>
   

</body>
</html>