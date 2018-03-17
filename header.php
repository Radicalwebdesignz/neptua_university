<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta charset="utf-8">
        <meta name="description" content="Neptua University">
        <meta name="author" content="Manohar">
        <title>Neptua | University</title>

        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Font Awesome Icons -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        
        <!-- Custom CSS -->
        <link href="assets/css/style.css" rel="stylesheet">
        
        <!-- Google Fonts - Use: " font-family: 'Raleway', sans-serif; " to reference it-->
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
        
        <!-- Slick Slider -->
        <link rel="stylesheet" type="text/css" href="assets/slick/slick.css">
        <link rel="stylesheet" type="text/css" href="assets/slick/slick-theme.css">
        
        <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <div class='scrolltop'>
            <div class='scroll icon'>
                <i class="fas fa-angle-up"></i>
            </div>
        </div>

        <!-- Header Section -->
        <header>
            <nav class="navbar navbar-default navbar-expand-lg navbar-toggleable-md navbar-dark nav-color fixed-top">
                <a class="pl-4 navbar-brand" href="index.php"><img src="assets/img/logo.png" class="img img-fluid"><h4 class="pl-2 d-inline">NEPTUA UNIVERSITY</h4></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto small">
                        <li class="nav-item <?php if($currentPage =='home'){echo 'active';}?>">
                            <a class="nav-link" href="index.php">HOME</a>
                        </li>
                        <li class="nav-item <?php if($currentPage =='about'){echo 'active';}?>">
                            <a class="nav-link" href="aboutus.php">ABOUT</a>
                        </li>
                        <li class="nav-item dropdown <?php if($currentPage =='courses'){echo 'active';}?>">
                            <a class="nav-link dropdown-toggle" href="courses.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">COURSES&nbsp;&nbsp;<span class="p-1 badge badge-color">New</span></a>
                            <ul class="dropdown-menu mega-dropdown" aria-labelledby="navbarDropdown">
                                <div class="container">
                                    <div class="row p-5 bg-light border-light">
                                        <div class="col-md-3 courses">
                                            <a href="#"><h5 class="default-color"><b><i class="fas fa-book"></i>&nbsp;&nbsp;New Courses&nbsp;&nbsp;<span class="badge badge-info">info</span></b></h5></a>
                                            <p class="py-3 text-muted">Our modern institution is interested in cultivating an environment where young students can come together and learn in a creative environment.</p>
                                            <p class="hover-color default-color text-muted"><i class="fas fa-chevron-circle-right"></i>&nbsp;&nbsp;<a class="text-muted" href="#">Popular Courses</a></p>
                                            <p class="hover-color default-color text-muted"><i class="fas fa-chevron-circle-right"></i>&nbsp;&nbsp;<a class="text-muted" href="#">Upcoming Events</a></p>
                                            <p class="hover-color default-color text-muted"><i class="fas fa-chevron-circle-right"></i>&nbsp;&nbsp;<a class="text-muted" href="#">Exceptional Facilities</a></p>
                                            <p class="hover-color default-color text-muted pb-3"><i class="fas fa-chevron-circle-right"></i>&nbsp;&nbsp;<a class="text-muted" href="#">Application Process</a></p>
                                        </div>
                                        <div class="col-md-3 text-center more-courses">
                                            <a href="#">
                                                <img src="assets/img/science.jpg" class="img img-fluid">
                                                <p class="default-color py-2"><b>Sports Science</b></p>
                                            </a>    
                                            <a href="#">    
                                                <img src="assets/img/biology.jpg" class="img img-fluid">
                                                <p class="default-color py-2"><b>Biology</b></p>
                                            </a>
                                        </div>
                                        <div class="col-md-3 text-center more-courses">
                                            <a href="#">
                                                <img src="assets/img/physics.jpg" class="img img-fluid">
                                                <p class="default-color py-2"><b>Physics</b></p>
                                            </a>
                                            <a href="#">
                                                <img src="assets/img/design.jpg" class="img img-fluid">
                                                <p class="default-color py-2"><b>Graphic Design</b></p>
                                            </a>
                                        </div>
                                        <div class="col-md-3 course-bg">
                                            
                                        </div>
                                    </div>
                                </div>    
                            </ul>
                        </li>
                        <li class="nav-item dropdown <?php if($currentPage =='events'){echo 'active';}?>">
                            <a class="nav-link dropdown-toggle" href="events.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">EVENTS</a>
                            <ul class="dropdown-menu mega-dropdown" aria-labelledby="navbarDropdown">
                                <div class="container">
                                    <div class="row bg-light border-light">
                                        <div class="col-md-3 py-5">
                                            <h5 class="text-center default-color"><b>Business Seminar</b>&nbsp;&nbsp;<span class="badge badge-success">$99</span></h5>
                                            <img src="assets/img/seminar1.jpg" class="img img-fluid">
                                            <p class="m-0 mt-3">July 16, 2018 @ 5:00 pm</p>    
                                            <p class="m-0 mb-3">December 16, 2018 @ 8:00 pm</p>
                                            <button class="btn btn-custom default-bg-color">Find Out More</button>    
                                        </div>
                                        <div class="col-md-3 py-5">
                                            <h5 class="text-center default-color"><b>English Seminar</b>&nbsp;&nbsp;<span class="badge badge-success">$49</span></h5>
                                            <img src="assets/img/seminar2.jpg" class="img img-fluid">
                                            <p class="m-0 mt-3">July 10, 2018 @ 2:00 pm</p>
                                            <p class="m-0 mb-3">December 12, 2018 @ 1:00 pm</p>
                                            <button class="btn btn-custom default-bg-color">Find Out More</button>
                                        </div>
                                        <div class="col-md-3 py-5">
                                            <h5 class="text-center default-color"><b>Politic Seminar</b>&nbsp;&nbsp;<span class="badge badge-primary">free</span></h5>
                                            <img src="assets/img/seminar3.jpg" class="img img-fluid">
                                            <p class="m-0 mt-3">July 22, 2018 @ 4:00 pm</p>
                                            <p class="m-0 mb-3">December 21, 2018 @ 5:00 pm</p>
                                            <button class="btn btn-custom default-bg-color">Find Out More</button>
                                        </div>
                                        <div class="col-md-3 text-center events-bg">
                                            <div>
                                            <h4 class="default-color pt-5"><b>Discover our New Events</b></h4>
                                            <p class="pt-2">Our modern institution is interested in cultivating an environment where young students can come together and learn in a creative environment.</p>
                                            <p>Our modern institution is cultivating an environment.</p>
                                            <button class="btn btn-custom default-bg-color">Upcoming Events</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>    
                            </ul>
                        </li>
                        <li class="nav-item <?php if($currentPage =='facilities'){echo 'active';}?>">
                            <a class="nav-link" href="facilities.php">FACILITIES</a>
                        </li>
                        <li class="nav-item <?php if($currentPage =='news'){echo 'active';}?>">
                            <a class="nav-link" id="nav-bg" href="news.php">NEWS</a>
                        </li>
                        <li class="nav-item <?php if($currentPage =='admissions'){echo 'active';}?>">
                            <a class="nav-link" id="nav-bg" href="admissions.php">ADMISSIONS</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>