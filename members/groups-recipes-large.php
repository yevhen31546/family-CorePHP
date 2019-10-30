<?php
session_start();
require_once '../config/config.php';
require_once BASE_PATH.'/includes/auth_validate.php';
$db = getDbInstance();
$db->join('tbl_recipes', 'tbl_users.id = tbl_recipes.rec_submit_by');
$db->where('tbl_recipes.id', $_GET['recipe']);
$row = $db->getOne('tbl_users');
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
                        <ul class="header--topbar-links nav ff--primary float--right">
                            <!--<li>
                                <a href="../cart.html" title="Cart" data-toggle="tooltip" data-placement="bottom">
                                    <i class="fa fa-shopping-basket"></i>
                                    <span class="badge">3</span>
                                </a>
                            </li>-->
                            <li>
                                <a href="#" class="btn-link">
                                    <i class="fa mr--8 fa-user-o"></i>
                                <span>My Account</span>
                            </a>
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
                                    <li><a href="../members/activity-fam.html"><span>My Family</span></a></li>
                                    <li><a href="../members/activity-frd.html"><span>My Friends</span></a></li>
                                  
                                </ul>
                            </li>
						
						
                          <!-- <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <span>Members</span>
                                    <i class="fa fa-caret-down"></i>
                                </a>
							   
								<ul class="dropdown-menu"><li>
									<a href="members.php"><span>Members</span></a></li>-->
                                
                            <li><a href="../members/members.php"><span>Members</span></a></li>
								
                               <!-- </ul>-->
                            
						
						
						
						
						<li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <span>Groups</span>
                                    <i class="fa fa-caret-down"></i>
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a href="../members/groups-church.html"><span>Church</span></a></li>
									<li><a href="../members/groups-events.html"><span>Events</span></a></li>
									<li><a href="../members/groups-homerepair.html"><span>Home Repairs</span></a></li>
									<li><a href="../members/groups-pets.html"><span>Pets</span></a></li>
									<li><a href="groups-recipes.php"><span>Recipes</span></a></li>
									<li><a href="../members/groups-sports.html"><span>Sports</span></a></li>
									<li><a href="../members/groups-travel.html"><span>Travel</span></a></li>
								
                                </ul>
                            </li>
                            
                            
                            <li><a href="../members/contact.html"><span>Contact</span></a></li>
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
                    <h2 class="h1 text-white">Favorite Recipes</h2>
                </div>

                <ul class="breadcrumb text-gray ff--primary">
                    <li><a href="../members/home.php" class="btn-link">Home</a></li>
                    <li class="active"><span class="text-primary">Groups</span></li>
                </ul>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Page Wrapper Start -->
        <section class="page--wrapper pt--80 pb--20">
            <div class="container">
                <div class="row">
                    <!-- Main Content Start -->
                    <div class="main--content col-md-12 pb--60">
                        <div class="main--content-inner">
                            <!-- Filter Nav Start -->
                            <!--<div class="filter--nav pb--30 clearfix">
                                <div class="filter--link float--left">
                                    <h2 class="h4">Add a Receipt (+)</h2>
                                </div>

                                <div class="filter--options float--right">
                                    <label>
                                        <span class="fs--14 ff--primary fw--500 text-darker">Receipt Type :</span>

                                        <select name="membersfilter" class="form-control form-sm" data-trigger="selectmenu">
                                          <option value="last-active" selected>Most Current Added</option>
                                            <option value="most-members">Breakfast</option>
                                            <option value="newly-created">Lunch</option>
                                            <option value="alphabetical">Dinner</option>
											<option value="alphabetical">Desserts</option>
											<option value="alphabetical">Family Favorite</option>
											<option value="alphabetical">Gluten Free</option>
											<option value="alphabetical">Vegetarian</option>
											
                                        </select>
                                    </label>
                                </div>
                            </div>-->
                            <!-- Filter Nav End -->
                            
                            <!-- Box Items Start -->
                            <div class="box--items-h">
                                <div class="row gutter--15 AdjustRow">
                                    <div class="col-md-12 col-xs-12 col-xxs-12">
                                        <!-- Box Item Start -->
                                        <div class="box--item text-center">
                                            <a href="group-home.html" class="img" data-overlay="0.1">
                                                <img src="<?php echo $row['rec_photo'];?>" width="800px" height="418px" alt="">
                                            </a>

                                            <div class="info">
                                                <div class="icon fs--18 text-lightest bg-primary">
                                                    <i class="fa fa-cutlery"></i>
                                                </div>

                                           <div class="title">
                                                    <h2 class="h2"><a href="group-home.html"><?php echo $row['rec_title'];?></a></h2>
													<p><h4>Recipe Type: <?php echo $row['rec_type'];?></h4></p>
                                                </div>

                                                <div class="desc text-darker">
													<p>Date: <?php echo $row['rec_date'];?> &nbsp;&nbsp;&nbsp;&nbsp;Created by: <?php echo $row['rec_create_by'];?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Submitted by: <?php echo $row['first_name'].' '.$row['last_name'];?></p>
												</div>
										
											
													<p class="float--left"><h4>Recipe Ingredients</h4></p>
													<p class="float--left"><h6><?php echo $row['rec_ingredient'];?></h6></p>
										
													<p class="float--left"><h4>Recipe Instructions</h4></p>
													<p class="float--left"><h6><?php echo $row['rec_instruction'];?></h6></p>
                                                
					                         </div>
                                        </div>
                                        <!-- Box Item End -->
                                    </div>

                            </div>
                    </div>
                    <!-- Main Content End -->
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

            </div>
            <!-- Footer Widgets End -->

            <!-- Footer Extra Start -->
            <div class="footer--extra bg-darker pt--30 pb--40 text-center">
                <div class="container">
                    <!-- Widget Start -->
                    <div class="widget">
                        <h2 class="h4 fw--700 widget--title">Recent Active Members</h2>

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