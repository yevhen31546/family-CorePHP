<?php
session_start();
require_once '../config/config.php';
require_once BASE_PATH.'/includes/auth_validate.php';
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewpordt" content="width=device-width, initial-scale=1">

    <!-- ==== Document Title ==== -->
    <title>MyNotes4U</title>
    
    <!-- ==== Document Meta ==== -->
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- ==== Favicon ==== -->
    <link rel="icon" href="favicon.png" type="image/png">

    <!-- ==== Google Font ==== -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700%7CRoboto:300,400,400i,500,700">

    <!-- ==== Plugins Bundle ==== -->
    <link rel="stylesheet" href="css/plugins.min.css">
    
    <!-- ==== Main Stylesheet ==== -->
    <link rel="stylesheet" href="style.css">
    
    <!-- ==== Responsive Stylesheet ==== -->
    <link rel="stylesheet" href="css/responsive-style.css">
    
    <!-- ==== Color Scheme Stylesheet ==== -->
    <link rel="stylesheet" href="css/colors/color-1.css" id="changeColorScheme">
    
    <!-- ==== Custom Stylesheet ==== -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- ==== HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries ==== -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

    <!-- Preloader Start -->
    <div id="preloader">
        <div class="preloader--inner"></div>
    </div>
    <!-- Preloader End -->

    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Header Section Start -->
        <header class="header--section style--1">
            <!-- Header Topbar Start -->
            <div class="header--topbar bg-black">
                <div class="container">
                    <!-- Header Topbar Links Start -->
                    <ul class="header--topbar-links nav ff--primary float--left">
                        <!--<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span>En</span>
                                <i class="fa fa-caret-down"></i>
                            </a>

                            <ul class="dropdown-menu">
                                <li class="active"><a href="#">En</a></li>
                                <li><a href="#">Bn</a></li>
                                <li><a href="#">In</a></li>
                            </ul>
                        </li>-->
                    </ul>
                    <!-- Header Topbar Links End -->

                    <!-- Header Topbar Social Start -->
                    <ul class="header--topbar-social nav float--left hidden-xs">
                       <!-- <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>-->
                    </ul>
                    <!-- Header Topbar Social End -->

                    <!-- Header Topbar Links Start -->
                    <ul class="header--topbar-links nav ff--primary float--right">
                        <!--<li>
                            <a href="../cart.html" title="Cart" data-toggle="tooltip" data-placement="bottom">
                                <i class="fa fa-shopping-basket"></i>
                                <span class="badge">3</span>
                            </a>
                        </li>-->
                        <li class="dropdown active">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa mr--8 fa-user-o"></i>
                                <span>My Account</span>
                                <i class="fa fa-caret-down"></i>
                            </a>

                            <ul class="dropdown-menu">
                                <li class="active">
                                    <a href="<?php echo BASE_URL;?>/members/member-profile.php"><span>My Profile</span></a></li>
                                <li><a href="<?php echo BASE_URL;?>/members/logout.php"><span>Log out</span></a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- Header Topbar Links End -->
                </div>
            </div>
            <!-- Header Topbar End -->

            <!-- Header Navbar Start -->
            <div class="header--navbar navbar bg-black" data-trigger="sticky">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle style--1 collapsed" data-toggle="collapse" data-target="#headerNav">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <!-- Header Navbar Logo Start -->
                        <div class="header--navbar-logo navbar-brand">
                            <a href="<?php echo BASE_URL?>/members/home.php">
                                <img src="<?php echo BASE_URL?>/members/blacklogosm.png" class="normal" alt="">
                                <img src="<?php echo BASE_URL?>/members/whitelogosm.png" class="sticky" alt="">
                            </a>
                        </div>
                        <!-- Header Navbar Logo End -->
                    </div>

                    <div id="headerNav" class="navbar-collapse collapse float--right">
                       
						
						
						<!-- Header Nav Links Start -->
                        <ul class="header--nav-links style--1 nav ff--primary">
                           
							<li><a href="<?php echo BASE_URL?>/members/home.php"><span>Home</span></a></li>

							<li class="dropdown active">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <span>Albums</span>
                                    <i class="fa fa-caret-down"></i>
                                </a>

                                <ul class="dropdown-menu">
                                    <li class="active">
										<a href="<?php echo BASE_URL;?>/members/activity-me.php"><span>My Album</span></a></li>
                                    <li><a href="<?php echo BASE_URL;?>/members/activity-fam.html"><span>My Family</span></a></li>
                                    <li><a href="<?php echo BASE_URL;?>/members/activity-frd.html"><span>My Friends</span></a></li>
                                  
                                </ul>
                            </li>
						
							
							
						
                          <!-- <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <span>Members</span>
                                    <i class="fa fa-caret-down"></i>
                                </a>
							   
								<ul class="dropdown-menu"><li>
									<a href="members.php"><span>Members</span></a></li>-->
                                
                            <li><a href="<?php echo BASE_URL;?>/members/members.php"/><span>Members</span></a></li>
								
                               <!-- </ul>-->
                            </li>
						
						
						
						
						<li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <span>Groups</span>
                                    <i class="fa fa-caret-down"></i>
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo BASE_URL;?>/members/groups-church.html"><span>Church</span></a></li>
									<li><a href="<?php echo BASE_URL;?>/members/groups-events.html"><span>Events</span></a></li>
									<li><a href="<?php echo BASE_URL;?>/members/groups-homerepair.html"><span>Home Repairs</span></a></li>
									<li><a href="<?php echo BASE_URL;?>/members/groups-pets.html"><span>Pets</span></a></li>
									<li><a href="<?php echo BASE_URL;?>/members/groups-recipes.php"><span>Recipes</span></a></li>
									<li><a href="<?php echo BASE_URL;?>/members/groups-sports.html"><span>Sports</span></a></li>
									<li><a href="<?php echo BASE_URL;?>/members/groups-travel.html"><span>Travel</span></a></li>
								
                                </ul>
                            </li>
                            
                            </li>
                            <li><a href="<?php echo BASE_URL;?>/members/contact.html"><span>Contact</span></a></li>
                        </ul>
                        <!-- Header Nav Links End -->
                    </div>
                </div>
            </div>
            <!-- Header Navbar End -->
        </header>
        <!-- Header Section End -->

        

        <!-- Demos Section Start -->
        <section id="demos" class="pt--70">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section--title pb--50 text-center">
                    <div class="title lined">
                        <h2 class="h1">Select an Album</h1>
                    </div>
                </div>
                <!-- Section Title End -->

             <div class="row AdjustRow">
                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Image Block Start -->
                        <div class="img--block style--2">
                            <a href="activity-me.php" class="btn-link text-darkest text-center" target="">
                                <span><h2>My Album</h2></span>
                                <img src="grandma480x480.png" alt="">

                                <span>My memoirs, her memories.</span>
                            </a>
                        </div>
                        <!-- Image Block End -->
                    </div>

                        <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Image Block Start -->
                        <div class="img--block style--2">
                            <a href="activity-fam.html" class="btn-link text-darkest text-center" target="">
                                <span><h2>My Family Album</h2></span>
                                <img src="father480x480.png" alt="">

                                <span>Capture your memories as you live them!</span>
                            </a>
                        </div>
                        <!-- Image Block End -->
                    </div>
                    

                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Image Block Start -->
                        <div class="img--block style--2">
                            <a href="activity-frd.html" class="btn-link text-darkest text-center" target="">
                                <span><h2>My Friends Album</h2></span>
                                <img src="boys480x480.png" alt="">

                                <span>Fun that's safe, secure and private.</span>
                            </a>
                        </div>
                        <!-- Image Block End -->
                    </div>

                    <div class="col-md-4 col-md-offset-4 col-xs-6 col-xs-offset-0 col-xxs-12 pb--60">
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- Demos Section End -->

        <!-- Demos Section Start -->
        <section class="pt--150 pb--20 bg-primary section--arrow">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section--title pb--50 text-center">
                    <div class="title lined lined-white">
                        <h2 class="h2 text-white">Learn how to best use each album.</h2>
                    </div>
                </div>
                <!-- Section Title End -->
                <div class="row AdjustRow">
                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Feature Block Start -->
                        <div class="feature--block clearfix">
                            <div class="icon icon-block fs--24 mr--20 text-white bg-primary float--left">
                                <i class="fa fa-check-square-o"></i>
                            </div>

                            <div class="content ov--h mt--8">
                                <p class="text-white fs--22 fw--500">My Album</p>Use this album to preserve your personal thoughts, testimonies, special moments by adding your own notes, pictures, or videos. <strong>Be the author of your own story.</strong></p>
                            </div>
                        </div>
                        <!-- Feature Block End -->
                    </div>

                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Feature Block Start -->
                        <div class="feature--block clearfix">
                            <div class="icon icon-block fs--24 mr--20 text-white bg-primary float--left">
                                <i class="fa fa-check-square-o"></i>
                            </div>

                            <div class="content ov--h mt--8">
                                <p class="text-white fs--22 fw--500">My Family Album<p>Create your family history by sharing notes, pictures & videos with immediate and extended family. This space is used to <strong>build a lasting family legacy.</strong></p>
                            </div>
                        </div>
                        <!-- Feature Block End -->
                    </div>
                    
                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Feature Block Start -->
                        <div class="feature--block clearfix">
                            <div class="icon icon-block fs--24 mr--20 text-white bg-primary float--left">
                                <i class="fa fa-check-square-o"></i>
                            </div>

                            <div class="content ov--h mt--8">
                                <p class="text-white fs--22 fw--500">My Friends Album<p>Use this album to capture your advertures, special moments, good times and dreams shared with friends. <strong>Keeping the memories alive.</strong></p>
                            </div>
                        </div>
                        <!-- Feature Block End -->
                
            </div>
        </section>
        <!-- Demos Section End -->

        <!-- Features Section Start -->
        <section class="pt--150 pb--20 section--arrow section--arrow-primary">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section--title pb--50 text-center">
                    <div class="title lined">
                        <h2 class="h2">Our Guarantee</h2>
                    </div>
                </div>
                <!-- Section Title End -->

                <div class="row AdjustRow">
                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Feature Block Start -->
                        <div class="feature--block clearfix">
                            <div class="icon icon-block fs--16 mr--20 text-white bg-primary float--left">
                                <i class="fa fa-check-square-o"></i>
                            </div>

                            <div class="content ov--h mt--8">
                                <p class="text-black fs--14 fw--500">YOUR PRIVACY IS PROTECTED. A SAFE PLACE TO CAPTURE & SHARE MEMORIES.</p>
                            </div>
                        </div>
                        <!-- Feature Block End -->
                    </div>

                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Feature Block Start -->
                        <div class="feature--block clearfix">
                            <div class="icon icon-block fs--16 mr--20 text-white bg-primary float--left">
                                <i class="fa fa-check-square-o"></i>
                            </div>

                            <div class="content ov--h mt--8">
                                <p class="text-black fs--14 fw--500">YOUR PERSONAL INFORMATION WILL NOT BE SOLD</p>
                            </div>
                        </div>
                        <!-- Feature Block End -->
                    </div>
                    
                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--60">
                        <!-- Feature Block Start -->
                        <div class="feature--block clearfix">
                            <div class="icon icon-block fs--16 mr--20 text-white bg-primary float--left">
                                <i class="fa fa-check-square-o"></i>
                            </div>

                            <div class="content ov--h mt--8">
                                <p class="text-black fs--14 fw--500">SECURE MEMBER SIGN-IN AUTHENTICATION IS REQUIRED</italic></p>
                            </div> 
                        </div>
                        <!-- Feature Block End -->
                    </div>

                </div>
            </div>
        </section>
        <!-- Features Section End -->

        <!-- Footer Section Start -->
        <footer class="footer--section">
            <!-- Footer Widgets Start -->
            <div class="footer--widgets pt--70 pb--20 bg-lightdark" data-bg-img="img/footer-img/footer-widgets-bg.png">
                <div class="container">
                    <div class="row AdjustRow">
                        <div class="col-md-3 col-xs-6 col-xxs-12 pb--60">
                            <!-- Widget Start -->
                            <div class="widget">
                                <h2 class="h4 fw--700 widget--title">About Us</h2>

                                <!-- Text Widget Start -->
                                <div class="text--widget">
                                    <p> MyNotes4U is a collection of notes, pictures and videos capturing a lifetime of your adventures, thoughts and experiences in an album. We makes it easy for you to share with family and friends.</p>

                                    <p>A place were families can grow closer, save life moments and pass the family legacy onto future generations. Just image . . . now your great, great, great grandchildren can know their grandparent intimately. From your own words.  </p>
                                </div>
                                <!-- Text Widget End -->
                            </div>
                            <!-- Widget End -->
                        </div>

                        <div class="col-md-3 col-xs-6 col-xxs-12 pb--60">
                            <!-- Widget Start -->
                            <div class="widget">
                                <h2 class="h4 fw--700 widget--title">Recent Post</h2>

                                <!-- Recent Posts Widget Start -->
                                <div class="recent-posts--widget">
                                    <ul class="nav">
                                        <li>
                                            <p class="date fw--300">
                                                <a href="#"><i class="fa mr--8 fa-file-text-o"></i>Hari-Should be date posted</a>
                                            </p>
                                            <p class="title fw--700">
                                                <a href="blog-details.html">Hari this should autopopulate from recent additions.</a>
                                            </p>
                                        </li>
                                        <li>
                                            <p class="date fw--300">
                                                <a href="#"><i class="fa mr--8 fa-file-text-o"></i>Hari-Should be date posted</a>
                                            </p>
                                            <p class="title fw--700">
                                                <a href="blog-details.html">Hari this should autopopulate from recent additions.</a>
                                            </p>
                                        </li>
                                        <li>
                                            <p class="date fw--300">
                                                <a href="#"><i class="fa mr--8 fa-file-text-o"></i>Hari-Should be date posted</a>
                                            </p>
                                            <p class="title fw--700">
                                                <a href="blog-details.html">Hari this should autopopulate from recent additions. </a>
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Recent Posts Widget End -->
                            </div>
                            <!-- Widget End -->

                            
                        </div>

                        <div class="col-md-3 col-xs-6 col-xxs-12 pb--60">
                            <!-- Widget Start -->
                            <div class="widget">
                                <h2 class="h4 fw--700 widget--title">Favorite Groups</h2>

                                <!-- Nav Widget Start -->
                                <div class="nav--widget">
                                    <ul class="nav">
                                        <li>
                                            <a href="<?php echo BASE_URL;?>/members/groups-church.html">
                                                <i class="fa fa-folder-o"></i>
                                                <span class="text">Church</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo BASE_URL;?>/members/groups-recipes.php">
                                                <i class="fa fa-folder-o"></i>
                                                <span class="text">Recipes</span>
                                                
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo BASE_URL;?>/members/groups-homerepair.html">
                                                <i class="fa fa-folder-o"></i>
                                                <span class="text">Home Repair / Remodeling</span>
                                                
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo BASE_URL;?>/members/groups-sports.html">
                                                <i class="fa fa-folder-o"></i>
                                                <span class="text">Sports</span>
                                                
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo BASE_URL;?>/members/groups-pets.html">
                                                <i class="fa fa-folder-o"></i>
                                                <span class="text">Pets</span>  
                                            </a>
                                        </li>
										<li>
                                            <a href="<?php echo BASE_URL;?>/members/groups-travel.html">
                                                <i class="fa fa-folder-o"></i>
                                                <span class="text">Travel</span>
                                                
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Nav Widget End -->
                            </div>
                            <!-- Widget End -->

                        </div>

                        <div class="col-md-3 col-xs-6 col-xxs-12 pb--60">
                           
                            <!-- Widget Start -->
                            <div class="widget">
                                <h2 class="h4 fw--700 widget--title">Useful Links</h2>

                                <!-- Links Widget Start -->
                                <div class="links--widget">
                                    <ul class="nav">
                                        <li><a href="#">My Account</a></li>
                                        <li><a href="#">Join a Group</a></li>
                                        <li><a href="<?php echo BASE_URL;?>/members/contact.html">Contact</a></li>
                                    </ul>
                                </div>
                                <!-- Links Widget End -->
                            </div>
                            <!-- Widget End -->
                        </div>
                    </div>
                </div>

            </div>
            <!-- Footer Widgets End -->

            <!-- Footer Extra Start -->
            <div class="footer--extra bg-darker pt--30 pb--40 text-center">
                <div class="container">
                    <!-- Widget Start -->
                    <div class="widget">
                        <h2 class="h4 fw--700 widget--title">Recent Active Members-Hari this section should autopopulate</h2>

                        <!-- Recent Active Members Widget Start -->
                        <div class="recent-active-members--widget style--2">
                            <div class="owl-carousel" data-owl-items="12" data-owl-nav="true" data-owl-speed="1200" data-owl-responsive='{"0": {"items": "3"}, "481": {"items": "6"}, "768": {"items": "8"}, "992": {"items": "12"}}'>
                                <div class="img">
                                    <a href="member-activity-personal.php"><img src="img/widgets-img/recent-active-members/01.jpg" alt=""></a>
                                </div>

                                <div class="img">
                                    <a href="member-activity-personal.php"><img src="img/widgets-img/recent-active-members/02.jpg" alt=""></a>
                                </div>

                                <div class="img">
                                    <a href="member-activity-personal.php"><img src="img/widgets-img/recent-active-members/03.jpg" alt=""></a>
                                </div>

                                <div class="img">
                                    <a href="member-activity-personal.php"><img src="img/widgets-img/recent-active-members/04.jpg" alt=""></a>
                                </div>

                                <div class="img">
                                    <a href="member-activity-personal.php"><img src="img/widgets-img/recent-active-members/05.jpg" alt=""></a>
                                </div>

                                <div class="img">
                                    <a href="member-activity-personal.php"><img src="img/widgets-img/recent-active-members/06.jpg" alt=""></a>
                                </div>

                                <div class="img">
                                    <a href="member-activity-personal.php"><img src="img/widgets-img/recent-active-members/07.jpg" alt=""></a>
                                </div>

                                <div class="img">
                                    <a href="member-activity-personal.php"><img src="img/widgets-img/recent-active-members/08.jpg" alt=""></a>
                                </div>

                                <div class="img">
                                    <a href="member-activity-personal.php"><img src="img/widgets-img/recent-active-members/09.jpg" alt=""></a>
                                </div>

                                <div class="img">
                                    <a href="member-activity-personal.php"><img src="img/widgets-img/recent-active-members/10.jpg" alt=""></a>
                                </div>

                                <div class="img">
                                    <a href="member-activity-personal.php"><img src="img/widgets-img/recent-active-members/11.jpg" alt=""></a>
                                </div>

                                <div class="img">
                                    <a href="member-activity-personal.php"><img src="img/widgets-img/recent-active-members/12.jpg" alt=""></a>
                                </div>

                                <div class="img">
                                    <a href="member-activity-personal.php"><img src="img/widgets-img/recent-active-members/13.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <!-- Recent Active Members Widget End -->
                    </div>
                    <!-- Widget End -->
                </div>
            </div>
            <!-- Footer Extra End -->

            <!-- Footer Copyright Start -->
            <div class="footer--copyright pt--30 pb--30 bg-darkest">
                <div class="container">
                    <div class="text fw--500 fs--14 text-center">
                        <p>Copyright &copy; My<span>Notes</span>4U. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
            <!-- Footer Copyright End -->
        </footer>
        <!-- Footer Section End -->
    </div>
    <!-- Wrapper End -->

    <!-- Back To Top Button Start -->
    <div id="backToTop">
        <a href="#" class="btn"><i class="fa fa-caret-up"></i></a>
    </div>
    <!-- Back To Top Button End -->

    <!-- ==== Plugins Bundle ==== -->
    <script src="js/plugins.min.js"></script>

    <!-- ==== Main Script ==== -->
    <script src="js/main.js"></script>

</body>
</html>