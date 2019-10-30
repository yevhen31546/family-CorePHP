<?php
session_start();
require_once '../config/config.php';
require_once BASE_PATH.'/includes/auth_validate.php';
$db = getDbInstance();
$rows = $db->get('tbl_users');
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ==== Document Title ==== -->
    <title>SociFly - Multipurpose Social Network HTML5 Template</title>
    
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
                       <!-- <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span>En</span>
                                <i class="fa fa-caret-down"></i>
                            </a>

                            <ul class="dropdown-menu">
                                <li class="active"><a href="#">En</a></li>
                                <li><a href="#">Bn</a></li>
                                <li><a href="#">In</a></li>
                            </ul>-->
                        </li>
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
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#headerNav">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <!-- Header Navbar Logo Start -->
                        <div class="header--navbar-logo navbar-brand">
                            <a href="../members/home.php">
                                <img src="../members/blacklogosm.png" class="normal" alt="">
                                <img src="../members/whitelogosm.png" class="sticky" alt="">
                            </a>
                        </div>
                        <!-- Header Navbar Logo End -->
                    </div>

                    <div id="headerNav" class="navbar-collapse collapse float--right">
                        <!-- Header Nav Links Start -->
                        <ul class="header--nav-links style--1 nav ff--primary">
                           
							<li><a href="../members/home.php"><span>Home</span></a></li>

                          
                            
							<li class="dropdown active">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <span>Albums</span>
                                    <i class="fa fa-caret-down"></i>
                                </a>

                                <ul class="dropdown-menu">
                                    <li class="active">
										<a href="activity-me.php"><span>My Album</span></a></li>
                                    <li><a href="activity-fam.html"><span>My Family</span></a></li>
                                    <li><a href="activity-frd.html"><span>My Friends</span></a></li>
                                  
                                </ul>
                            
							
							</li>
                                
                            <li><a href="members.php"><span>Members</span></a></li>
								
                               <!-- </ul>-->
                            </li>
						
						
						<li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <span>Groups</span>
                                    <i class="fa fa-caret-down"></i>
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a href="groups-church.html"><span>Church</span></a></li>
									<li><a href="groups-events.html"><span>Events</span></a></li>
									<li><a href="groups-homerepair.html"><span>Home Repairs</span></a></li>
									<li><a href="groups-pets.html"><span>Pets</span></a></li>
									<li><a href="groups-recipes.php"><span>Recipes</span></a></li>
									<li><a href="groups-sports.html"><span>Sports</span></a></li>
									<li><a href="groups-travel.html"><span>Travel</span></a></li>
								
                                </ul>
                            </li>
                            
                            </li>
                            <li><a href="contact.html"><span>Contact</span></a></li>
                        </ul>
                        <!-- Header Nav Links End -->
                    </div>
                </div>
            </div>
            <!-- Header Navbar End -->
        </header>
        <!-- Header Section End -->

        <!-- Page Header Start -->
        <div class="page--header pt--60 pb--60 text-center" data-bg-img="img/page-header-img/bg.jpg" data-overlay="0.85">
            <div class="container">
                <div class="title">
                    <h2 class="h1 text-white">Members</h2>
                </div>

                <ul class="breadcrumb text-gray ff--primary">
                    <li><a href="../members/home.php" class="btn-link">Home</a></li>
                    <li class="active"><span class="text-primary">Members</span></li>
                </ul>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Page Wrapper Start -->
        <section class="page--wrapper pt--80 pb--20">
            <div class="container">
                <div class="row">
                    <!-- Main Content Start -->
                    <div class="main--content col-md-8 pb--60" data-trigger="stickyScroll">
                        <div class="main--content-inner">
                            <!-- Filter Nav Start -->
                            <div class="filter--nav pb--30 clearfix">
                                <div class="filter--link float--left">
                                    <h2 class="h4">Total My Notes Members : Hari can this be a count?</h2>
                                </div>

                                <div class="filter--options float--right">
                                    <label>
                                        <span class="fs--14 ff--primary fw--500 text-darker">Show By :</span>

                                        <select name="membersfilter" class="form-control form-sm" data-trigger="selectmenu">
                                            <option value="last-active" selected>Last Active</option>
                                            <option value="new-registered">New Registerd</option>
                                            <option value="alphabetical">Alphabetical</option>
                                        </select>
                                    </label>
                                </div>
                            </div>
                            <!-- Filter Nav End -->

                            <!-- Member Items Start -->
                            <div class="member--items">
                                <div class="row gutter--15 AdjustRow">
                                    <?php foreach ($rows as $row):?>
                                        <div class="col-md-3 col-xs-6 col-xxs-12">
                                            <!-- Member Item Start -->
                                            <div class="member--item online">
                                                <div class="img img-circle">
                                                    <a href="member-activity-personal.php?user=<?php echo $row['id'];?>" class="btn-link">
                                                        <img src="img/members-img/member-01.jpg" alt="">
                                                    </a>
                                                </div>

                                                <div class="name">
                                                    <h3 class="h6 fs--12">
                                                        <a href="member-activity-personal.php?user=<?php echo $row['id'];?>" class="btn-link"><?php echo $row['first_name'].$row['last_name'];?></a>
                                                    </h3>
                                                </div>

                                                <div class="activity">
                                                    <p><i class="fa mr--8 fa-clock-o"></i>Active 5 monts ago</p>
                                                </div>

                                                <div class="actions">
                                                    <ul class="nav">
                                                        <li>
                                                            <a href="#" title="Send Message" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                                <i class="fa fa-envelope-o"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add Friend" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                                <i class="fa fa-user-plus"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Media" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                                <i class="fa fa-folder-o"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Member Item End -->
                                        </div>
                                    <?php endforeach;?>
                                </div>
                            </div>
                            <!-- Member Items End -->

                            <!-- Page Count Start -->
                            <div class="page--count pt--30">
                                <label class="ff--primary fs--14 fw--500 text-darker">
                                    <span>Viewing</span>

                                    <a href="#" class="btn-link"><i class="fa fa-caret-left"></i></a>
                                    <input type="number" name="page-count" value="01" class="form-control form-sm">
                                    <a href="#" class="btn-link"><i class="fa fa-caret-right"></i></a>

                                    <span>of 2,500</span>
                                </label>
                            </div>
                            <!-- Page Count End -->
                        </div>
                    </div>
                    <!-- Main Content End -->

                    <!-- Main Sidebar Start -->
                    <div class="main--sidebar col-md-4 pb--60" data-trigger="stickyScroll">
                        <!-- Widget Start -->
                        <div class="widget">
                            <h2 class="h4 fw--700 widget--title">Find A Buddy</h2>

                            <!-- Buddy Finder Widget Start -->
                            <div class="buddy-finder--widget">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-xs-6 col-xxs-12">
                                            <div class="form-group">
                                                <label>
                                                    <span class="text-darker ff--primary fw--500">I Am</span>

                                                    <select name="gender" class="form-control form-sm" data-trigger="selectmenu">
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                        <option value="other">Other</option>
                                                    </select>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-xxs-12">
                                            <div class="form-group">
                                                <label>
                                                    <span class="text-darker ff--primary fw--500">Looking For</span>

                                                    <select name="lookingfor" class="form-control form-sm" data-trigger="selectmenu">
                                                        <option value="female">Female</option>
                                                        <option value="male">Male</option>
                                                        <option value="other">Other</option>
                                                    </select>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-xxs-12">
                                            <div class="form-group">
                                                <label>
                                                    <span class="text-darker ff--primary fw--500">Age</span>

                                                    <select name="age" class="form-control form-sm" data-trigger="selectmenu">
                                                        <option value="18to25">18 to 25</option>
                                                        <option value="25to30">25 to 30</option>
                                                        <option value="30to35">30 to 35</option>
                                                        <option value="35to40">35 to 40</option>
                                                        <option value="40plus">40+</option>
                                                    </select>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-xxs-12">
                                            <div class="form-group">
                                                <label>
                                                    <span class="text-darker ff--primary fw--500">City</span>

                                                    <select name="city" class="form-control form-sm" data-trigger="selectmenu">
                                                        <option value="newyork">New York</option>
                                                        <option value="California">California</option>
                                                        <option value="Atlanta">Atlanta</option>
                                                    </select>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <label>
                                                    <span class="text-darker ff--primary fw--500">Filter Country</span>

                                                    <select name="city" class="form-control form-sm" data-trigger="selectmenu">
                                                        <option value="unitedstates">United States</option>
                                                        <option value="australia">Australia</option>
                                                        <option value="turkey">Turkey</option>
                                                        <option value="vietnam">Vietnam</option>
                                                    </select>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-xs-12">
                                            <button type="submit" class="btn btn-primary">Search</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Buddy Finder Widget End -->
                        </div>
                        <!-- Widget End -->

                        <!-- Widget Start -->
                        <div class="widget">
                            <h2 class="h4 fw--700 widget--title">Notice</h2>

                            <!-- Text Widget Start -->
                            <div class="text--widget">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some  look even slightly believable.</p>
                            </div>
                            <!-- Text Widget End -->
                        </div>
                        <!-- Widget End -->

                        <!-- Widget Start -->
                        <div class="widget">
                            <h2 class="h4 fw--700 widget--title">Forums</h2>

                            <!-- Links Widget Start -->
                            <div class="links--widget">
                                <ul class="nav">
                                    <li><a href="sub-forums.html">User Interface Design<span>(12)</span></a></li>
                                    <li><a href="sub-forums.html">Front-End Engineering<span>(07)</span></a></li>
                                    <li><a href="sub-forums.html">Web Development<span>(37)</span></a></li>
                                    <li><a href="sub-forums.html">Social Media Marketing<span>(13)</span></a></li>
                                    <li><a href="sub-forums.html">Content Marketing<span>(28)</span></a></li>
                                </ul>
                            </div>
                            <!-- Links Widget End -->
                        </div>
                        <!-- Widget End -->

                        <!-- Widget Start -->
                        <div class="widget">
                            <h2 class="h4 fw--700 widget--title">Archives</h2>

                            <!-- Nav Widget Start -->
                            <div class="nav--widget">
                                <ul class="nav">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-calendar-o"></i>
                                            <span class="text">Jan - July 2017</span>
                                            <span class="count">(86)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-calendar-o"></i>
                                            <span class="text">Jan - Dce 2016</span>
                                            <span class="count">(328)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-calendar-o"></i>
                                            <span class="text">Jan - Dec 2015</span>
                                            <span class="count">(427)</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Nav Widget End -->
                        </div>
                        <!-- Widget End -->

                        <!-- Widget Start -->
                        <div class="widget">
                            <h2 class="h4 fw--700 widget--title">Advertisements</h2>

                            <!-- Ad Widget Start -->
                            <div class="ad--widget">
                                <a href="#">
                                    <img src="img/widgets-img/ad.jpg" alt="" class="center-block">
                                </a>
                            </div>
                            <!-- Ad Widget End -->
                        </div>
                        <!-- Widget End -->
                    </div>
                    <!-- Main Sidebar End -->
                </div>
            </div>
        </section>
        <!-- Page Wrapper End -->

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
                                <p> MyNotes4U is a collection of notes, pictures and videos capturing a lifetime of your adventures, thoughts and experiences in an album. We make it easy for you to share with family and friends.</p>

                                <p>A place where families can grow closer, save life moments and pass the family legacy on to future generations. Just imagine . . . now your great, great, great
                                grandchildren can know their grandparent directly from you. </p>
                            </div>
                            <!-- Text Widget End -->
                        </div>
                        <!-- Widget End -->
                    </div>

                    <div class="col-md-3 col-xs-6 col-xxs-12 pb--60">
                        <!-- Widget Start -->
                        <div class="widget">
                            <h2 class="h4 fw--700 widget--title">Recent Posts</h2>

                            <!-- Recent Posts Widget Start -->
                            <div class="recent-posts--widget">
                                <ul class="nav">
                                    <li>
                                        <p class="date fw--300">
                                            <a href="#"><i class="fa mr--8 fa-file-text-o"></i>Hari-Should be date
                                                posted</a>
                                        </p>
                                        <p class="title fw--700">
                                            <a href="blog-details.html">Hari this should autopopulate from recent
                                                additions.</a>
                                        </p>
                                    </li>
                                    <li>
                                        <p class="date fw--300">
                                            <a href="#"><i class="fa mr--8 fa-file-text-o"></i>Hari-Should be date
                                                posted</a>
                                        </p>
                                        <p class="title fw--700">
                                            <a href="blog-details.html">Hari this should autopopulate from recent
                                                additions.</a>
                                        </p>
                                    </li>
                                    <li>
                                        <p class="date fw--300">
                                            <a href="#"><i class="fa mr--8 fa-file-text-o"></i>Hari-Should be date
                                                posted</a>
                                        </p>
                                        <p class="title fw--700">
                                            <a href="blog-details.html">Hari this should autopopulate from recent
                                                additions. </a>
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
                                            <a href="../members/groups-church.html">
                                                <i class="fa fa-folder-o"></i>
                                                <span class="text">Church</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="groups-recipes.php">
                                                <i class="fa fa-folder-o"></i>
                                                <span class="text">Recipes</span>
                                                
                                            </a>
                                        </li>
                                        <li>
                                            <a href="../members/groups-homerepair.html">
                                                <i class="fa fa-folder-o"></i>
                                                <span class="text">Home Repair / Remodeling</span>
                                                
                                            </a>
                                        </li>
                                        <li>
                                            <a href="../members/groups-sports.html">
                                                <i class="fa fa-folder-o"></i>
                                                <span class="text">Sports</span>
                                                
                                            </a>
                                        </li>
                                        <li>
                                            <a href="../members/groups-pets.html">
                                                <i class="fa fa-folder-o"></i>
                                                <span class="text">Pets</span>  
                                            </a>
                                        </li>
										<li>
                                            <a href="../members/groups-travel.html">
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
                                        <li><a href="../members/contact.html">Contact</a></li>
                                    </ul>
                                </div>
                                <!-- Links Widget End -->
                        </div>
                        <!-- Widget End -->
                    </div>
                </div>
            </div>

            <!-- Footer Widgets End -->
        </div>
        <!-- Footer Extra Start -->
        <div class="footer--extra bg-darker pt--30 pb--40 text-center">
            <div class="container">
                <!-- Widget Start -->
                <div class="widget">
                    <h2 class="h4 fw--700 widget--title">Recent Active Members-Hari this section should autopopulate
                    </h2>

                    <!-- Recent Active Members Widget Start -->
                    <div class="recent-active-members--widget style--2">
                        <div class="owl-carousel" data-owl-items="12" data-owl-nav="true" data-owl-speed="1200"
                            data-owl-responsive='{"0": {"items": "3"}, "481": {"items": "6"}, "768": {"items": "8"}, "992": {"items": "12"}}'>
                            <div class="img">
                                <a href="member-activity-personal.php"><img
                                        src="img/widgets-img/recent-active-members/01.jpg" alt=""></a>
                            </div>

                            <div class="img">
                                <a href="member-activity-personal.php"><img
                                        src="img/widgets-img/recent-active-members/02.jpg" alt=""></a>
                            </div>

                            <div class="img">
                                <a href="member-activity-personal.php"><img
                                        src="img/widgets-img/recent-active-members/03.jpg" alt=""></a>
                            </div>

                            <div class="img">
                                <a href="member-activity-personal.php"><img
                                        src="img/widgets-img/recent-active-members/04.jpg" alt=""></a>
                            </div>

                            <div class="img">
                                <a href="member-activity-personal.php"><img
                                        src="img/widgets-img/recent-active-members/05.jpg" alt=""></a>
                            </div>

                            <div class="img">
                                <a href="member-activity-personal.php"><img
                                        src="img/widgets-img/recent-active-members/06.jpg" alt=""></a>
                            </div>

                            <div class="img">
                                <a href="member-activity-personal.php"><img
                                        src="img/widgets-img/recent-active-members/07.jpg" alt=""></a>
                            </div>

                            <div class="img">
                                <a href="member-activity-personal.php"><img
                                        src="img/widgets-img/recent-active-members/08.jpg" alt=""></a>
                            </div>

                            <div class="img">
                                <a href="member-activity-personal.php"><img
                                        src="img/widgets-img/recent-active-members/09.jpg" alt=""></a>
                            </div>

                            <div class="img">
                                <a href="member-activity-personal.php"><img
                                        src="img/widgets-img/recent-active-members/10.jpg" alt=""></a>
                            </div>

                            <div class="img">
                                <a href="member-activity-personal.php"><img
                                        src="img/widgets-img/recent-active-members/11.jpg" alt=""></a>
                            </div>

                            <div class="img">
                                <a href="member-activity-personal.php"><img
                                        src="img/widgets-img/recent-active-members/12.jpg" alt=""></a>
                            </div>

                            <div class="img">
                                <a href="member-activity-personal.php"><img
                                        src="img/widgets-img/recent-active-members/13.jpg" alt=""></a>
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


    <!-- Back To Top Button End -->

    <!-- ==== Plugins Bundle ==== -->
    <script src="js/plugins.min.js"></script>

    <!-- ==== Main Script ==== -->
    <script src="js/main.js"></script>

</body>

</html>