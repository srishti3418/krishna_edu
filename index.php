<!DOCTYPE html>
<html lang="en">
    <head>
        <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>krishna education</title>
    <?php include('contactform.php');?>
    <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
    <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
    <link rel="stylesheet" type="text/css" href="resources/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <nav>
                <div class="row">
                    <img src="resources/img/logo.jpg" alt="logo_KEI" class="logo" id="ilogo">
                    <h3 class="name" id="iname">KRISHNA EDUCATION (INSTITUTION AND SCHOOL)</h3>
                    <h3 class="lowername" id="ilowername">KATIHAR, 854105</h3>
                    <h6 class="slogan" id="islogan"><em>Aim For Excellence</em></h6>
                    <ul class="main-nav" data-spy="affix" data-offset-top="197" id="imain-nav">
                        <li><a href="#first">ABOUT</a></li>
                        <li><a href="#second">ACADEMICS</a></li>
                        <li><a href="#third">HEAD</a></li>
                        <li><a href="#fourth">GET IN TOUCH</a></li>
                        <li><a href="#fifth">COMMUNITY</a></li>
                    </ul>
                </div>
            </nav>
         </header>
            <div class="bgimage" id="first">
            <div class="bg-text-box" id="bg-txt">
            <h1 id="heading1">We Welcome You.<br>Every Student Matters...Every<br> Moment Counts!</h1>
            <a class="btn btn-full" href="#" id="opt1">APPLY</a>
            <a class="btn btn-ghost" href="#" id="opt2">ENQUIRE</a>
            <a class="btn btn-host" href="#" id="opt3">CONTACT</a>
            </div>
            </div>
        <section class="section-features" id="second">
            <h2 id="heading2"><strong>Our Academics Section</strong></h2>
            <p class="quote" id="iquote"><em>A Building With Four Walls And Tomorrow Inside..</em></p>
            <div class="row">
                <div class="col span-1-of-4 box">
                    <img src="resources/img/design.png" alt="lowersch" id="img1">
                    <h3 class="smallhead" id="ismallhead">LOWER SCHOOL</h3>
                    <p>
                        Children in standards till 4 thrive in an experimental environment designed to leverage their natural curiosity and joy of learning.
                    </p>
                </div>
                <div class="col span-1-of-4 box">
                    <img src="resources/img/fountain-pen-emoji.png" alt="middlesch" id="img2">
                    <h3 class="middlehead">MIDDLE SCHOOL</h3>
                    <p>
                        Following academic passion, moral compass setting social skills and leadership developement are the work of students in standards 5-8.
                    </p>
                </div>
                <div class="col span-1-of-4 box">
                    <img src="resources/img/open-book-emoji.png" alt="uppersch" id="img3">
                    <h3 class="middlehead">UPPER SCHOOL</h3>
                    <p>
                        Students in our upper school have an abundance of opportunities to excel and lead through rigorous academics, competitive athetics and extracurrilars. 
                    </p>
                </div>
                <div class="col span-1-of-4 box">
                    <img src="resources/img/abacus-emoji.png" alt="competition" id="img4">
                    <h3 class="middlehead1">COMPETITIVE EXAMS</h3>
                    <p>
                        Students are here given enough practice and training for clearing competitive exams like JEE(Joint Entrance Examination) and NEET(National Eligibility Cum Entrance Test).
                    </p>
                </div>
            </div>
        </section>
        <section class="introduction" id="third">
            <div class="row">
            <div class="col span-1-of-2 intro" id="iintro">
                <img src="resources/img/user.jpeg">
                <li>ACADEMIC HEAD</li>
                <p>
                <strong class="head"><em>Ravikant Singh</em></strong><br>   
                An experienced teacher who has worked as a faculty of physics for more than 7 years, has persued his B. Tech in electronics and communication department. His methology of teaching helps student to get the stuff quickly and easily and his curriculum building ability is attention grabbing. He has helped lot of students in chasing their dreams not only
                in performing amaze at academics but also in the field of competitive exams like JEE(Joint Entrance Examination) and NEET(National Eligibility Cum Entrance Test).  
                </p>
                </div>
                <div class="col span-1-of-2 explain" id="iexplain">
                <img src="resources/img/user.jpeg">
                <li>ACADEMIC INCHARGE</li>
                <p>
                <strong class="head"><em>Saket Suman</em></strong><br>Is masterful at developing connections with students with his strong leadership and communication skills, has persued his B. Tech in civil department.He's fostering independence and self-regulation, facilitating peer conflict resolution and enabling the children to solve problems. An expertise in creating and exploiting new opportunities for knowledge transfer activity and arranging dynamic research environment. He is having amazing ambassadorial skills and has the ability to engage constructively with people.
                </p>
                </div>
                </div>
        </section>
        <section class="section-form" id="fourth">
            <div class="row">
                <h2 id="heading3">Fill out the form below and we'll be in contact soon.</h2>
            </div>
            <div class="row">
                <form action="index.html" method="post" class="contact-form" id="icontact-form">
                    <div class="row">
                        <div class="col span-1-of-3" id="form1">
                            <label for="name">First Name:</label>
                        </div>
                            <div class="col span-2-of-3" id="form2">
                                <input type="text" name="name" id="name" placeholder="Enter first name" required>
                            </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3" id="form3">
                            <label for="lname">Last Name:</label>
                        </div>
                            <div class="col span-2-of-3" id="form4">
                                <input type="text" name="lname" id="lname" placeholder="Enter last name" required>
                            </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3" id="form5">
                            <label for="email">Email:</label>
                        </div>
                            <div class="col span-2-of-3" id="form6">
                                <input type="email" name="email" id="email" placeholder="Enter your mail id">
                            </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3" id="form7">
                            <label for="number">Phone no:</label>
                        </div>
                            <div class="col span-2-of-3" id="form8">
                                <input type="number" name="number" id="number" placeholder="Enter mobile no." required> 
                             </div>                                                               
                        </div>
                    <div class="row">
                        <div class="col span-1-of-3" id="form9">
                            <label for="Tell-us">State yourself as:</label>
                        </div>
                            <div class="col span-2-of-3" id="form10">
                                <select name="Tell-us" id="Tell-us">
                                    <option value="Student" selected>Student</option>
                                    <option value="Parent">Parent</option>
                                    <option value="Others">Others</option>
                                </select>
                             </div>                                                
                        </div> 
                     <div class="row">
                        <div class="col span-1-of-3" id="form11">
                            <label for="news">Want to get more school news?</label>
                        </div>
                            <div class="col span-2-of-3">
                                <input type="checkbox" name="news" id="news" checked> Yes, please
                             </div>                                                               
                        </div>
                     <div class="row">
                        <div class="col span-1-of-3">
                            <label>&nbsp;</label>
                        </div>
                            <div class="col span-2-of-3">
                                <input type="submit" value="Send it!">
                             </div>                                                               
                        </div>
                </form>
            </div>
        </section>
            <section class="footerpart1" id="fifth">
                <div class="col span-1-of-3 firstextra">
                    <img src="resources/img/logo.jpg" alt="logo" class="small_logo" id="ismall_logo">
                    <p class="aim" id="iaim"><em>Aim For Excellence</em></p>
                    <p class="end" id="iend">KRISHNA EDUCATIONAL<br>(INSTITUTION AND SCHOOL)</p>
                    <a href="https://www.youtube.com/channel/UCp-fXDQn4G21dSlgCMv4YOQ"><img src="resources/img/youtube-play.png" alt="youtube" class="social" id="isocial1"></a>
                    <a href="https://www.facebook.com/Krishna-Educational-Institution-and-school-107804401003782"><img src="resources/img/facebook-new.png" alt="facebook" class="social" id="isocial2"></a>
                    <a href="https://www.instagram.com/krishnaedu.kir/"><img src="resources/img/instagram-new.png" alt="instagram" class="social" id="isocial3"></a>
                    <a href="https://twitter.com/Krishnaedu_kir"><img src="resources/img/twitter.png" alt="twitter" class="social" id="isocial4"></a>
                </div>
                 <div class="col span-1-of-3 secextra">
                    <h3 class="heading" id="heading4">Phone</h3><br>
                    <img src="resources/img/phone.png" alt="phone" id="phone1img">
                    <a href="tel:9470216925" id="phone1">9470216925</a><br>
                    <img src="resources/img/phone.png" alt="phone" id="phone2img">
                    <a href="tel:7903538677" id="phone2">7903538677</a>
                    <h3 class="mail" id="imail">Email</h3><br>
                    <img src="resources/img/message-squared.png" alt="gmail" id="mailimg">
                    <a href="mailto:krishnaedu.kir@gmail.com" class="ref" id="iref">krishnaedu.kir@gmail.com</a>
                </div>
                <div class="col span-1-of-3 secextra">
                    <h3 class="add" id="iadd">Address</h3><br>
                    <img src="resources/img/address.png" alt="address" id="addimg">
                    <p class="last" id="ilast">Garhbheli Road,<br>
                        Katihar 854105</p>
                    <div class="special">
                    <img src="resources/img/saving-book--v2.png" alt="for poor" class="poor">
                    <p class="poorpara1" id="ipoorpara1">SPECIAL FEATURES FOR</p>
                    <p class="poorpara2" id="ipoorpara2">UNDERPRIVILEGED KIDS.</p>
                    <p class="poorpara3" id="ipoorpara3">AVAILABLE!</p>
                    </div>
                </div>
                </section>
                <section class="footerpart2">
                </section>
                <section class="footerpart3">
                </section>
                
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
       
    </body>
</html>