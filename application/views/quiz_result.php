<!DOCTYPE html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>eLearning | Home</title>
<!-- Favicon -->
<link rel="shortcut icon" href="<?php echo base_url();?>assets/img/favicon.ico" type="image/x-icon">
<!-- Font awesome -->
<link href="<?php echo base_url();?>assets/css/font-awesome.css" rel="stylesheet">
<!-- Bootstrap -->
<link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">
<!-- Slick slider -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/slick.css">
<!-- Theme color -->
<link id="switcher" href="<?php echo base_url();?>assets/css/theme-color/default-theme.css" rel="stylesheet">
<!-- Main style sheet -->
<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!--START SCROLL TOP BUTTON -->
<a class="scrollToTop" href="#"> <i class="fa fa-angle-up"></i> </a>
<!-- END SCROLL TOP BUTTON -->
<!-- Start header  -->
<header id="mu-header">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="mu-header-area">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"> </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
              <div class="mu-header-top-right">
                <nav>
                  <ul class="mu-top-social-nav">
                    <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                    <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                    <li><a href="#"><span class="fa fa-youtube"></span></a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- End header  -->
<!-- Start menu -->
<section id="mu-menu">
  <nav class="navbar navbar-default" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <!-- LOGO -->
        <!-- TEXT BASED LOGO -->
        <a class="navbar-brand" href="<?php echo base_url();?>"><i class="fa fa-university"></i><span>myeLearning</span></a>
        <!-- IMG BASED LOGO  -->
        <!-- <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="logo"></a> -->
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
          <li class="active"><a href="<?php echo base_url();?>">Home</a></li>
          <li class="dropdown"><a href="<?php echo base_url();?>courses">Courses</a></li>
          <li><a href="<?php echo base_url();?>mycourses">My Courses</a></li>
          <li><a href="#" id="mu-search-icon"><i class="fa fa-search"></i></a></li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </nav>
</section>
<!-- End menu -->
<!-- Start search box -->
<div id="mu-search">
  <div class="mu-search-area">
    <button class="mu-search-close"><span class="fa fa-close"></span></button>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <form class="mu-search-form">
            <input type="search" placeholder="Type Your Keyword(s) & Hit Enter">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End search box -->
<!-- Page breadcrumb -->
<section id="mu-page-breadcrumb">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="mu-page-breadcrumb-area">
          <h2>My Result</h2>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url();?>">Home</a></li>
            <li class="active">Result</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End breadcrumb -->
<section id="mu-course-content" style="padding:50px;">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
	       Total Question : 4 <br>
		   Score : <?php echo $myscore;?>%
	       <!--<a href="<?php //echo base_url();?>mycourses/certificate">Get Certificate</a>-->	   
      </div>
	</div>
  </div>
</section>
<!-- Start footer -->
<footer id="mu-footer">
  <!-- start footer top -->
  <div class="mu-footer-top">
    <div class="container">
      <div class="mu-footer-top-area">
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-3">
            <div class="mu-footer-widget">
              <h4>Information</h4>
              <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="">Features</a></li>
                <li><a href="">Course</a></li>
                <li><a href="">Event</a></li>
                <li><a href="">Sitemap</a></li>
                <li><a href="">Term Of Use</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3">
            <div class="mu-footer-widget">
              <h4>Student Help</h4>
              <ul>
                <li><a href="">Get Started</a></li>
                <li><a href="#">My Questions</a></li>
                <li><a href="">Download Files</a></li>
                <li><a href="">Latest Course</a></li>
                <li><a href="">Academic News</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3">
            <div class="mu-footer-widget">
              <h4>News letter</h4>
              <p>Get latest update, news & academic offers</p>
              <form class="mu-subscribe-form">
                <input type="email" placeholder="Type your Email">
                <button class="mu-subscribe-btn" type="submit">Subscribe!</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end footer top -->
  <!-- start footer bottom -->
  <div class="mu-footer-bottom">
    <div class="container">
      <div class="mu-footer-bottom-area">
        <p>&copy; All Right Reserved.</p>
      </div>
    </div>
  </div>
  <!-- end footer bottom -->
</footer>
<!-- End footer -->
<!-- jQuery library -->
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
<!-- Slick slider -->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/slick.js"></script>
<!-- Counter -->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/waypoints.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.counterup.js"></script>
<!-- Custom js -->
<script src="<?php echo base_url();?>assets/js/custom.js"></script>
</body>
</html>  	  