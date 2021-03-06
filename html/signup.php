<!DOCTYPE html>
<html lang="en" manifest="site.manifest">

<head>
    <meta charset="UTF-8">
    <title>Clannad</title>
    <?php include('../php/signupvalidation.php'); ?>
    <link rel=icon href=icon1.png>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/signup.css">
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="../js/signup.js"></script>
</head>

<body>
    <div class="popuptext" id="myPopup" style="font-family: museo-sans-rounded,sans-serif!important;">
        <form action="" method="post" style="position:absolute; background-color: white;box-shadow:0px 0px 20px 10px #202b307d; top: calc(50% - 257.44px);left: calc(50% - 179px); width: max-content; border-radius:5px; cursor: pointer">
            <div style="margin-top:-12px; margin-left: calc(100% - 12px);" onclick="leaveSignUp()">
                <svg class="feather7 feather-x-circle sc-dnqmqq jxshSx" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="white" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" data-reactid="1351">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="15" y1="9" x2="9" y2="15"></line>
                    <line x1="9" y1="9" x2="15" y2="15"></line>
                </svg>
            </div>
            <div style="border-bottom:solid 2px #dadada; margin:20px 25px;"><h1>Sign Up</h1>
                <table class="popup-table" cellpadding="15" border="2" style="text-align:left;background-color:#f0f0f0;border-collapse:collapse;border-radius:5px;border-style: hidden;box-shadow:0 0 0 2px #dadada;font-size:17px;font-weight: 600" cellspacing="0">
                    <tr>
                        <td style="border: 1px solid #dadada; display: flex;">
                            <label for="">Age</label><input class="popupinput" name="age" type="text" min="10" max="99">
                            <span  ><?= $age_error ?></span></td>
                            
                    </tr>
                    <tr>
                        <td style="border: 1px solid #dadada;display: flex;">
                            <label for="">Name</label><input class="popupinput" name="name" type="text">
                                <span  ><?= $name_error ?></span>

                        </td>
                            
                        
                    </tr>
                    <tr>
                        <td style="border: 1px solid #dadada;display: flex;">

                            <label for="email">Email</label><input class="popupinput"  name="email" type="text">
                            <span  ><?= $email_error ?></span>
                        </td>

                    </tr>
                    <tr>
                        <td style="border: 1px solid #dadada;display: flex;">
                            <label for="">Password</label><input minlength="8" class="popupinput" name="password" type="password">
                            <span  ><?= $password_error ?></span>
                            </td>
                    </tr>
                </table>
                <div style="margin-top:20px; ;display: flex; align-items: center;justify-content: center;">
                    <input type="radio" style="margin:0px 5px 3px 15px"  name="gender  " value="male"> Male<br> 
                    
                    <input type="radio" style="margin:0px 5px 3px 15px" name="gender" value="female"> Female<br>
                    
                    <input type="radio" style="margin:0px 5px 3px 15px" name="gender" value="other"> Other</div>
                                               

                <input type="submit" value="Submit" style="cursor:pointer;outline: none" class="signup-button">
            </div>
            <div style="margin:15px 0;display:flex; justify-content: space-evenly;">
                <div style="position: relative;">
                    <svg style="position: absolute;top:calc(50% - 9px); margin-left:5px;" class="feather6 feather-facebook sc-iwsKbI cnlcoQ" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="white" stroke="none" stroke-width="0" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" data-reactid="511">
                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                    </svg>
                    <button onclick="toFacebook()" style="color: white;background-color: #3b579d;padding:10px 20px;border-radius: 20px;font-size: 14px;">
                        <span style="margin-left:10px;">FACEBOOK</span>
                    </button>
                </div>
                <div style="position:relative; display: flex; align-items: center;">
                    <img src="img/google.png" height="28px" width="28px" alt="" style="position: absolute;margin-left:5px;">
                    <button onclick="toGoogle()" style="color: #777777;background-color: white;padding:10px 20px;border-radius: 20px;font-size: 14px;"><span style="margin-left:20px;">GOOGLE</span></button>
                </div>
            </div>
            <div style="display: flex;border-bottom-left-radius: 5px; border-bottom-right-radius: 5px;align-items:center; background-color: #f0f0f0;padding:20px; justify-content: center; color: #777777">Have an Account? <br><h5 style="margin:0;"> <a href="login.html" style="color:#202b30;margin:0; font-size:15px;">LOG IN</a></h5>
            </div>
        </form>
    </div>
    <div>
        <div class="nav-bar">
            <p class="contact-info">Tel: 0897 2537890 | Mail: info@clannadlang.com</p>
            <span class="search-input">
                <input class="input" type="text" placeholder="Search" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search'">
                <svg class="feather feather-search sc-dnqmqq jxshSx" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" data-reactid="1006"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
            </span>
        </div>
        <div class="table">
            <table>
                <tr>
                    <td class="route-links"><a href="" style="font-size: 20px"><h2>C</h2>LANNAD</a>
                        <p class="contact-info">Free language learning and resources</p>
                    </td>
                    <td class="route-links"><a href="index.html">HOMEPAGE</a>
                    </td>
                    <td class="route-links"><a href="articles.html">CONTACT</a>
                    </td>
                    <td class="route-links">
                        <a href="signup.html">SIGN UP</a>
                        <!--div class="signup" style="color: white" >SIGN UP
                        </div-->
                    </td>
                    <td class="route-links">
                        <a href="login.html">LOG IN</a>
                        <!--div class="signup" style="color: white" >LOG IN
                        </div-->
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="homepage">
        <div style="position: relative;display: flex;flex-direction: column;">
            <div class="photosection fade" style="display: flex">
                <img style="width: 100%;" src="../html/img/french1.jpg" alt="">
                <div class="black">
                    <p class="textdeco">Learn Languages for Free!</p>
                    <p class="textdeco1"> Hey you! Is your crush french? Do you want to impress her? Are you a kdrama fan? Do you wish you could pull that kawaii persona around your other anime friends? Yes? Well, guess you got lucky! Because that's why we're here. This website offers you free and really helpful resources to learn your target language. TSCHUSS!</p>
                    <button type="button" class="buttondeco"> CONTINUE READING</button>
                </div>
                <div class="black" style="height: 238px; filter:blur(5px);z-index: 0;"></div>
            </div>
            <div class="photosection fade" style="display: none">
                <img style="width: 100%;" src="../html/img/german1.jpg" alt="">
                <div class="black">
                    <p class="textdeco">Learn Languages for Free!</p>
                    <p class="textdeco1"> Hey you! Is your crush french? Do you want to impress her? Are you a kdrama fan? Do you wish you could pull that kawaii persona around your other anime friends? Yes? Well, guess you got lucky! Because that's why we're here. This website offers you free and really helpful resources to learn your target language. TSCHUSS!</p>
                    <button type="button" class="buttondeco"> CONTINUE READING</button>
                </div>
                <div class="black" style="height: 238px; filter:blur(5px);z-index: 0;"></div>
            </div>
            <div class="photosection fade" style="display: none">
                <img style="width: 100%;" src="../html/img/italian.jpg" alt="">
                <div class="black">
                    <p class="textdeco">Learn Languages for Free!</p>
                    <p class="textdeco1"> Hey you! Is your crush french? Do you want to impress her? Are you a kdrama fan? Do you wish you could pull that kawaii persona around your other anime friends? Yes? Well, guess you got lucky! Because that's why we're here. This website offers you free and really helpful resources to learn your target language. TSCHUSS!</p>
                    <button type="button" class="buttondeco"> CONTINUE READING</button>
                </div>
                <div class="black" style="height: 238px; filter:blur(5px);z-index: 0;"></div>
            </div>
            <div class="photosection fade" style="display: none">
                <img style="width: 100%;" src="../html/img/spanish.jpg" alt="">
                <div class="black">
                    <p class="textdeco">Learn Languages for Free!</p>
                    <p class="textdeco1"> Hey you! Is your crush french? Do you want to impress her? Are you a kdrama fan? Do you wish you could pull that kawaii persona around your other anime friends? Yes? Well, guess you got lucky! Because that's why we're here. This website offers you free and really helpful resources to learn your target language. TSCHUSS!</p>
                    <button type="button" class="buttondeco"> CONTINUE READING</button>
                </div>
                <div class="black" style="height: 238px; filter:blur(5px);z-index: 0;"></div>
            </div>
            <div class="photosection fade" style="display: none">
                <img style="width: 100%;" src="../html/img/korean.jpg" alt="">
                <div class="black">
                    <p class="textdeco">Learn Languages for Free!</p>
                    <p class="textdeco1"> Hey you! Is your crush french? Do you want to impress her? Are you a kdrama fan? Do you wish you could pull that kawaii persona around your other anime friends? Yes? Well, guess you got lucky! Because that's why we're here. This website offers you free and really helpful resources to learn your target language. TSCHUSS!</p>
                    <button type="button" class="buttondeco"> CONTINUE READING</button>
                </div>
                <div class="black" style="height: 238px; filter:blur(5px);z-index: 0;"></div>
            </div>
            <div class="photosection fade" style="display: none">
                <img style="width: 100%;" src="../html/img/japanese.jpg" alt="">
                <div class="black">
                    <p class="textdeco">Learn Languages for Free!</p>
                    <p class="textdeco1"> Hey you! Is your crush french? Do you want to impress her? Are you a kdrama fan? Do you wish you could pull that kawaii persona around your other anime friends? Yes? Well, guess you got lucky! Because that's why we're here. This website offers you free and really helpful resources to learn your target language. TSCHUSS!</p>
                    <button type="button" class="buttondeco"> CONTINUE READING</button>
                </div>
                <div class="black" style="height: 238px; filter:blur(5px);z-index: 0;"></div>
            </div>
            <div class="short_title">
                <table>
                    <tr class="click-to-slide-bar">
                        <td class="click-to-slide">
                            <button onclick="currentSlide(1)" class="slideshowButton">
                                <img src="../html/img/french.svg">
                            </button>
                                <p>French</p>
                        </td>
                        <td class="click-to-slide">
                            <button onclick="currentSlide(2)" class="slideshowButton">
                                <img src="../html/img/german.svg">
                            </button>
                                <p>German</p>
                        </td>
                        <td class="click-to-slide">
                            <button onclick="currentSlide(3)" class="slideshowButton">
                                <img src="../html/img/italian.svg">
                            </button>
                                <p>Italian</p>
                        </td>
                        <td class="click-to-slide">
                            <button onclick="currentSlide(4)" class="slideshowButton">
                                <img src="../html/img/spanish.svg">
                            </button>
                                <p>Spanish</p>
                        </td>
                        <td class="click-to-slide">
                            <button onclick="currentSlide(5)" class="slideshowButton">
                                <img src="../html/img/korean.svg">
                            </button>
                                <p>Korean</p>
                        </td>
                        <td class="click-to-slide">
                            <button onclick="currentSlide(6)" class="slideshowButton">
                                <img src="../html/img/japanese.svg">
                            </button>
                                <p>Japanese</p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="grid-container">
            <div class="item1">
                <ul>
                    <h4>Mini Guide</h4>
                    <li><svg class="feather2 feather-chevrons-right sc-dnqmqq jxshSx" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#52595c" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <polyline points="13 17 18 12 13 7"></polyline>
                            <polyline points="6 17 11 12 6 7"></polyline>
                        </svg>
                        <a class="quick-links" href="">News</a>
                    </li>
                    <li>
                        <svg class="feather2 feather-chevrons-right sc-dnqmqq jxshSx" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#52595c" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <polyline points="13 17 18 12 13 7"></polyline>
                            <polyline points="6 17 11 12 6 7"></polyline>
                        </svg>
                        <a class="quick-links" href="">Tips</a></li>
                    <li>
                        <svg class="feather2 feather-chevrons-right sc-dnqmqq jxshSx" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#52595c" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <polyline points="13 17 18 12 13 7"></polyline>
                            <polyline points="6 17 11 12 6 7"></polyline>
                        </svg>
                        <a class="quick-links" href="">Fun!</a></li>
                    <li>
                        <svg class="feather2 feather-chevrons-right sc-dnqmqq jxshSx" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#52595c" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <polyline points="13 17 18 12 13 7"></polyline>
                            <polyline points="6 17 11 12 6 7"></polyline>
                        </svg>
                        <a class="quick-links" href="">Games</a></li>
                    <li>
                        <svg class="feather2 feather-chevrons-right sc-dnqmqq jxshSx" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#52595c" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <polyline points="13 17 18 12 13 7"></polyline>
                            <polyline points="6 17 11 12 6 7"></polyline>
                        </svg>
                        <a class="quick-links" href="">Map and Directions</a></li>
                    <li>
                        <svg class="feather2 feather-chevrons-right sc-dnqmqq jxshSx" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#52595c" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <polyline points="13 17 18 12 13 7"></polyline>
                            <polyline points="6 17 11 12 6 7"></polyline>
                        </svg>
                        <a class="quick-links" href="">Our Team</a></li>
                    <li>
                        <svg class="feather2 feather-chevrons-right sc-dnqmqq jxshSx" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#52595c" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <polyline points="13 17 18 12 13 7"></polyline>
                            <polyline points="6 17 11 12 6 7"></polyline>
                        </svg>
                        <a class="quick-links" href="">Contact</a></li>
                    <li></li>
                </ul>
                <ul>
                    <h4>How To Find Us</h4>
                    <img height="150" width="200" src="../html/img/adresa.png">
                    <p class="contact-info">174</p>
                    <p class="contact-info">Rexhep Krasniqi</p>
                    <p class="contact-info">Prishtinë</p>
                    <p class="contact-info">10000</p>
                    <br>
                    <p class="contact-info">Tel: 0897 2537890</p>
                    <p class="contact-info">Email: contact@domain.com</p>
                </ul>
            </div>
            <div class="item2">
                <ul class="item-ul">
                    <h4>Take a Look Around</h4>
                    <div class="foto1border1" style="height: 170px">
                        <div class="foto1border2" style="height: 168px">
                            <div class="foto1border3" style="height: 162px">
                                <img src="">
                            </div>
                            </div>
                        </div>
                        <p class="textinfo">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. </p>
                        <p>
                            <a class="Tour" href="">Take the tour</a>
                            <svg class="feather2 feather-chevrons-right sc-dnqmqq jxshSx" xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="#52595c" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <polyline points="13 17 18 12 13 7"></polyline>
                                <polyline points="6 17 11 12 6 7"></polyline>
                            </svg>
                        </p>
                </ul>
                <ul class="item-ul">
                    <h4>Language learner</h4>
                    <p class="textinfo" style="font-style: normal;"> Nov 28:<a href="https://www.linguacore.com/blog/author/kevin-morehouse/"><strong class="Rugby"> Kevin Morehouse</strong></p>
                    <div class="foto1border1">
                        <div class="foto1border2">
                            <div class="foto1border3">
                                <img src="">
                            </div>
                            </div>
                        </div>
                        <p class="textinfo">I’m a language learner, just like you. And I’ve been one for many, many years.
                                                Over those years, I’ve turned to myriad online language learning articles to help answer my pressing language learning questions, much like you are doing right now.</p>
                        <p class="textinfo" style="font-style: normal;border-top: 1px solid rgb(215, 219, 224);padding-top: 7px"> Jan 06:
                            <strong class="Rugby">Volleyball</strong></p>
                        <div class="foto1border1">
                            <div class="foto1border2">
                                <div class="foto1border3">
                                    <img src="">
                            </div>
                                </div>
                            </div>
                            <p class="textinfo">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>
                            <p>
                                <a class="Tour" href="">View All</a>
                        <svg class="feather2 feather-chevrons-right sc-dnqmqq jxshSx" xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="#52595c" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <polyline points="13 17 18 12 13 7"></polyline>
                            <polyline points="6 17 11 12 6 7"></polyline>
                        </svg>
                    </p>
                </ul>
                <ul class="item-ul">
                    <h4>Upcoming Events</h4>
                    <p class="titleevent">Magna Phasellus</p>
                    <p class="textinfo">Monday 21st January </p>
                    <p class="textinfo"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <p class="titleevent" style="font-style: normal;border-top: 1px solid rgb(215, 219, 224);padding-top: 15px">Magna Phasellus</p>
                    <p class="textinfo">Monday 21st January </p>
                    <p class="textinfo"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <p class="titleevent" style="font-style: normal;border-top: 1px solid rgb(215, 219, 224);padding-top: 15px">Magna Phasellus</p>
                    <p class="textinfo">Monday 21st January </p>
                    <p class="textinfo"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </ul>
            </div>
            <div class="item3">
                <ul class="item-ul">
                    <h4>Current Students</h4>
                    <div class="foto1border1">
                        <div class="foto1border2">
                            <div class="foto1border3">
                                <img src="">
                            </div>
                            </div>
                        </div>
                </ul>
                <ul class="item-ul">
                    <h4>International students</h4>
                    <div class="foto1border1">
                        <div class="foto1border2">
                            <div class="foto1border3">
                                <img src="">
                            </div>
                            </div>
                        </div>
                </ul>
                <ul class="item-ul">
                    <h4>Prospective students</h4>
                    <div class="foto1border1">
                        <div class="foto1border2">
                            <div class="foto1border3">
                                <img src="">
                            </div>
                            </div>
                        </div>
                </ul>
            </div>
            <div class="item4">
                <div class="twitter-icon">
                    <img src="img/Icon.png" >
                    <p>FOLLOW US ON TWITTER</p>
                </div>
                <p class="twitterdesc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris <a href="" style="color: #53d0fb">@name</a> at 5 am </p>
            </div>
        </div>
        <div class="footer">
            <div class="footer1" onclick="showPanel();">
                <p href="">CLICK TO OPEN SLIDE PANEL</p>
                <svg id="feather-chevrons-down" class="feather3 feather-chevrons-down sc-dnqmqq jxshSx" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#7d8e95" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" data-reactid="286" style="margin-left:5px;">
                    <polyline points="7 13 12 18 17 13"></polyline>
                    <polyline points="7 6 12 11 17 6"></polyline>
                </svg>
                <svg id="feather-chevrons-up" class="feather3 feather-chevrons-up sc-dnqmqq jxshSx" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" style="display:none;margin-left:5px;" fill="none" stroke="#7d8e95" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <polyline points="17 11 12 6 7 11"></polyline>
                    <polyline points="17 18 12 13 7 18"></polyline>
                </svg>
            </div>
            <div id="hidden" style="display: none;">
                <div class="column">
                    <h5 class="footer-list-elements"
                    >ADMINISTRATION</h5>
                    <ul>
                        <li>
                            <a class="footer-links" "href=""> Disclaimer</a>
                            </li>
                            <li>
                                <a class="footer-links" href="">Accessibility</a>
                        </li>
                        <li>
                            <a class="footer-links" href="">Freedom of Information</a>
                        </li>
                        <li>
                            <a class="footer-links" href="">Website Privacy</a>
                        </li>
                        <li>
                            <a class="footer-links" href="">Press Information</a>
                        </li>
                        <li>
                            <a class="footer-links" href="">Annual Report</a>
                        </li>
                        <li>
                            <a class="footer-links" href="">Financial Statements</a>
                        </li>
                        <li>
                            <a class="footer-links" href="">Job Vacancies</a>
                        </li>
                        <li>
                            <a class="footer-links" href="">Semester Dates</a>
                        </li>
                    </ul>
                </div>
                <div class="column">
                    <h5 class="footer-list-elements">FRANCE IS....</h5>
                    <p class="footer-text">France is the world’s most popular tourist destination. Some 83.7 million visitors arrived in France, according to the World Tourism Organization report published in 2014, making it the world’s most-visited country.</p>
                </div>
                <div class="column">
                    <h5 class="footer-list-elements">A FACT ABOUT UK</h5>
                    <p class="footer-text">The United Kingdom runs under a unitary parliamentary constitutional monarchy, while the head of state being Queen Elizabeth II.</p>
                </div>
                <div class="column">
                    <h5 class="footer-list-elements">FUN FACT ABOUT SPAIN</h5>
                    <p class="footer-text">The first of our fun facts about Spain is that Madrid is not only the capital of Spain. It is also the geographical center of the country. And in the center of Madrid you can find the Puerta del Sol ("The Sun Gate"), which is the center of the country and the Spanish radial road system. </p>
                </div>
                <div class="column">
                    <h5 class="footer-list-elements">The busiest air route on Earth is there</h5>
                    <p class="footer-text">The most crowded flight path on Earth is found in South Korea. It is the 280-mile hop from Seoul to Jeju International.</p>
                </div>
                <div class="column">
                    <h5 class="footer-list-elements">THERE ARE MORE SENIORS THAN KIDS</h5>
                    <p class="footer-text">A pretty sad fact about Japan because it’s actually a big problem and there’s a lack of childbirth. The people don’t have time or money to have a family in today’s Japanese Society. And this has led to the situation where there are more seniors than children.</p>
                </div>
            </div>
            <div class="bottom-footer">
                <table>
                    <tr>
                        <td>
                            <p class="copyright"> Copyright &copy; 2018 - All Rights Reserved - Domain Name</p>
                        </td>
                        <td>
                            <p class="copyright" style="text-align: right;">Template by Clannad &trade;</p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>

</html>