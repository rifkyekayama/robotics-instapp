
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
	<title>Elite Admin - University Admin Dashboard</title>
	<!-- Bootstrap Core CSS -->
	<link href="{{ asset('bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
	<!-- Menu CSS -->
	<link href="{{ asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css') }}" rel="stylesheet">
	<!-- Morris CSS -->
	<link href="{{ asset('plugins/bower_components/morrisjs/morris.css') }}" rel="stylesheet">
	<!-- animation CSS -->
	<link href="{{ asset('css/animate.css') }}" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<!-- color CSS -->
	<link href="{{ asset('css/colors/blue.css') }}" id="theme" rel="stylesheet">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
	<script>
		(function (i, s, o, g, r, a, m) {
			i['GoogleAnalyticsObject'] = r;
			i[r] = i[r] || function () {
				(i[r].q = i[r].q || []).push(arguments)
			}, i[r].l = 1 * new Date();
			a = s.createElement(o), m = s.getElementsByTagName(o)[0];
			a.async = 1;
			a.src = g;
			m.parentNode.insertBefore(a, m)
		})(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
		ga('create', 'UA-19175540-9', 'auto');
		ga('send', 'pageview');
	</script>
</head>

<body>
	<!-- Preloader -->
	<div class="preloader">
		<div class="cssload-speeding-wheel"></div>
	</div>
	<div id="wrapper">
		<!-- Navigation -->
		<nav class="navbar navbar-default navbar-static-top m-b-0">
			<div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
				<div class="top-left-part"><a class="logo" href="index.html"><b><img src="../plugins/images/eliteadmin-logo.png" alt="home" /></b><span class="hidden-xs"><strong>elite</strong>university</span></a></div>
				<ul class="nav navbar-top-links navbar-left hidden-xs">
					<li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
					<li>
						<form role="search" class="app-search hidden-xs">
							<input type="text" placeholder="Search..." class="form-control"> <a href="#"><i class="fa fa-search"></i></a> </form>
					</li>
				</ul>
				<ul class="nav navbar-top-links navbar-right pull-right">
					<li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-envelope"></i>
					<div class="notify"><span class="heartbit"></span><span class="point"></span></div>
					</a>
						<ul class="dropdown-menu mailbox animated bounceInDown">
							<li>
								<div class="drop-title">You have 4 new messages</div>
							</li>
							<li>
								<div class="message-center">
									<a href="#">
										<div class="user-img"> <img src="../plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
										<div class="mail-contnet">
											<h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
									</a>
									<a href="#">
										<div class="user-img"> <img src="../plugins/images/users/sonu.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
										<div class="mail-contnet">
											<h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
									</a>
									<a href="#">
										<div class="user-img"> <img src="../plugins/images/users/arijit.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
										<div class="mail-contnet">
											<h5>Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
									</a>
									<a href="#">
										<div class="user-img"> <img src="../plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
										<div class="mail-contnet">
											<h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
									</a>
								</div>
							</li>
							<li>
								<a class="text-center" href="javascript:void(0);"> <strong>See all notifications</strong> <i class="fa fa-angle-right"></i> </a>
							</li>
						</ul>
						<!-- /.dropdown-messages -->
					</li>
					<!-- /.dropdown -->
					<li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-note"></i>
		  <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
		  </a>
						<ul class="dropdown-menu dropdown-tasks animated slideInUp">
							<li>
								<a href="#">
									<div>
										<p> <strong>Task 1</strong> <span class="pull-right text-muted">40% Complete</span> </p>
										<div class="progress progress-striped active">
											<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
										</div>
									</div>
								</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">
									<div>
										<p> <strong>Task 2</strong> <span class="pull-right text-muted">20% Complete</span> </p>
										<div class="progress progress-striped active">
											<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"> <span class="sr-only">20% Complete</span> </div>
										</div>
									</div>
								</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">
									<div>
										<p> <strong>Task 3</strong> <span class="pull-right text-muted">60% Complete</span> </p>
										<div class="progress progress-striped active">
											<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"> <span class="sr-only">60% Complete (warning)</span> </div>
										</div>
									</div>
								</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">
									<div>
										<p> <strong>Task 4</strong> <span class="pull-right text-muted">80% Complete</span> </p>
										<div class="progress progress-striped active">
											<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> <span class="sr-only">80% Complete (danger)</span> </div>
										</div>
									</div>
								</a>
							</li>
							<li class="divider"></li>
							<li>
								<a class="text-center" href="#"> <strong>See All Tasks</strong> <i class="fa fa-angle-right"></i> </a>
							</li>
						</ul>
						<!-- /.dropdown-tasks -->
					</li>
					<!-- /.dropdown -->
					<li class="dropdown">
						<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="../plugins/images/users/1.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">Prof. Steave</b> </a>
						<ul class="dropdown-menu dropdown-user animated flipInY">
							<li><a href="javascript:void(0)"><i class="ti-user"></i>  My Profile</a></li>
							<li><a href="javascript:void(0)"><i class="ti-email"></i>  Inbox</a></li>
							<li><a href="javascript:void(0)"><i class="ti-settings"></i>  Account Setting</a></li>
							<li><a href="login.html"><i class="fa fa-power-off"></i>  Logout</a></li>
						</ul>
						<!-- /.dropdown-user -->
					</li>
					<li class="right-side-toggle"> <a class="waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>
					<!-- /.dropdown -->
				</ul>
			</div>
			<!-- /.navbar-header -->
			<!-- /.navbar-top-links -->
			<!-- /.navbar-static-side -->
		</nav>
		<!-- Left navbar-header -->
		<div class="navbar-default sidebar" role="navigation">
			<div class="sidebar-nav navbar-collapse slimscrollsidebar">
				<ul class="nav" id="side-menu">
					<li class="sidebar-search hidden-sm hidden-md hidden-lg">
						<!-- input-group -->
						<div class="input-group custom-search-form">
							<input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
							<button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
							</span> </div>
						<!-- /input-group -->
					</li>
					<li class="user-pro">
						<a href="#" class="waves-effect"><img src="../plugins/images/users/1.jpg" alt="user-img" class="img-circle"> <span class="hide-menu">Prof. Steve Gection<span class="fa arrow"></span></span>
						</a>
						<ul class="nav nav-second-level">
							<li><a href="javascript:void(0)"><i class="ti-user"></i> My Profile</a></li>
							<li><a href="javascript:void(0)"><i class="ti-email"></i> Inbox</a></li>
							<li><a href="javascript:void(0)"><i class="ti-settings"></i> Account Setting</a></li>
							<li><a href="login.html"><i class="fa fa-power-off"></i> Logout</a></li>
						</ul>
					</li>
					<li class="nav-small-cap m-t-10">--- Main Menu</li>
					<li> <a href="index.html" class="waves-effect"><i class="ti-dashboard p-r-10"></i> <span class="hide-menu">Dashboard</span></a> </li>
					<li> <a href="javascript:void(0);" class="waves-effect"><i class="linea-icon linea-basic fa-fw text-danger" data-icon="7"></i> <span class="hide-menu text-danger"> Multipurpose <span class="fa arrow"></span> <span class="label label-rouded label-danger pull-right">HOT</span></span></a>
						<ul class="nav nav-second-level">
							<li> <a href="../eliteadmin-hospital/index.html">Hospital Admin</a> </li>
							<li> <a href="../eliteadmin-crm/index.html">CRM Admin</a> </li>
							
							<li> <a href="../eliteadmin-music/index.html">Music Admin</a> </li>
							<li> <a href="../eliteadmin-real-estate/index.html">Real Estate Admin</a> </li>
							<li role="separator" class="divider"></li>
							<li> <a href="../eliteadmin-inverse/index.html">Inverse</a></li>
							<li> <a href="../eliteadmin-colors/index.html">Colors</a></li>
							<li> <a href="../eliteadmin/index.html">Eliteadmin</a></li>
							<li> <a href="../eliteadmin-wpmenu/index.html">Wpmenu</a></li>
							<li> <a href="../eliteadmin-ecommerce/index.html">Ecommerce</a></li>
							<li> <a href="../eliteadmin-modern/index.html">Modern</a></li>
							<li> <a href="../eliteadmin-inverse-php/index.html">Basic PHP</a></li>
							<li> <a href="../eliteadmin-material/index3.html">Material Design</a></li>
							<li> <a href="../eliteadmin-dark/index.html">Dark</a></li>
							<li> <a href="../eliteadmin-mini-sidebar/index3.html">Mini Sidebar</a></li>
							<li> <a href="../eliteadmin-horizontal-navbar/index3.html">Horizontal Boxed Nav</a></li>
							<li> <a href="../eliteadmin-horizontal-nav-fullwidth/index.html">Horizontal Full Nav</a></li>
							<li> <a href="../eliteadmin-iconbar/index4.html">Iconbar</a></li>
							<li> <a href="../eliteadmin-rtl/index.html">Eliteadmin RTL</a></li>
							<li> <a href="../eliteadmin-inverse-rtl/index.html">Inverse RTL</a></li>
						</ul>
					</li>
					<li> <a href="javascript:void(0);" class="waves-effect"><i class="icon-envelope p-r-10"></i> <span class="hide-menu"> Mailbox <span class="fa arrow"></span><span class="label label-rouded label-danger pull-right">3</span></span></a>
						<ul class="nav nav-second-level">
							<li> <a href="inbox.html">Inbox</a></li>
							<li> <a href="inbox-detail.html">Inbox detail</a></li>
							<li> <a href="compose.html">Compose mail</a></li>
						</ul>
					</li>
					<li class="nav-small-cap m-t-10">--- Professional</li>
					<li> <a href="events.html" class="waves-effect"><i class="ti-calendar p-r-10"></i> <span class="hide-menu">Events</span></a> </li>
					<li> <a href="javascript:void(0);" class="waves-effect"><i class="icon-people p-r-10"></i> <span class="hide-menu"> Professors <span class="fa arrow"></span></span></a>
						<ul class="nav nav-second-level">
							<li> <a href="professors.html">All Professors</a> </li>
							<li> <a href="add-professor.html">Add Professor</a> </li>
							<li> <a href="edit-professor.html">Edit Professor</a> </li>
							<li> <a href="professor-profile.html">Professor Profile</a> </li>
						</ul>
					</li>
					<li> <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-graduation-cap p-r-10"></i> <span class="hide-menu"> Students <span class="fa arrow"></span></span></a>
						<ul class="nav nav-second-level">
							<li> <a href="students.html">All Students</a> </li>
							<li> <a href="add-student.html">Add Student</a> </li>
							<li> <a href="edit-student.html">Edit Student</a> </li>
							<li> <a href="student-profile.html">Student Profile</a> </li>
						</ul>
					</li>
					<li> <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-bars p-r-10"></i> <span class="hide-menu"> Courses <span class="fa arrow"></span></span></a>
						<ul class="nav nav-second-level">
							<li> <a href="courses.html">All Courses</a> </li>
							<li> <a href="add-course.html">Add Course</a> </li>
							<li> <a href="edit-course.html">Edit Course</a> </li>
							<li> <a href="course-info.html">Course Information</a> </li>
						</ul>
					</li>
					<li> <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-book p-r-10"></i> <span class="hide-menu"> Library <span class="fa arrow"></span></span></a>
						<ul class="nav nav-second-level">
							<li> <a href="library-assets.html">Library Assets</a></li>
							<li> <a href="add-asset.html">Add Library Asset</a></li>
							<li> <a href="edit-asset.html">Edit Library Asset</a></li>
						</ul>
					</li>
					<li> <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-building p-r-10"></i> <span class="hide-menu"> Department <span class="fa arrow"></span></span></a>
						<ul class="nav nav-second-level">
							<li> <a href="departments.html">Departments</a></li>
							<li> <a href="add-department.html">Add Department</a></li>
							<li> <a href="edit-department.html">Edit Department</a></li>
						</ul>
					</li>
					<li> <a href="javascript:void(0);" class="waves-effect"><i class="icon-chart p-r-10"></i> <span class="hide-menu"> Reports <span class="fa arrow"></span></span></a>
						<ul class="nav nav-second-level">
							<li> <a href="general-report.html">General Report</a></li>
							<li> <a href="income-report.html">Income Report</a></li>
							<li> <a href="expense-report.html">Expense Report</a></li>
						</ul>
					</li>
					<li class="nav-small-cap m-t-10">--- Support</li>
					<li> <a href="#" class="waves-effect"><i data-icon="/" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">UI Elements<span class="fa arrow"></span> <span class="label label-rouded label-info pull-right">13</span> </span></a>
						<ul class="nav nav-second-level">
							<li><a href="panels-wells.html">Panels and Wells</a></li>
							<li><a href="panel-ui-block.html">Panels With BlockUI</a></li>
							<li><a href="buttons.html">Buttons</a></li>
							<li><a href="sweatalert.html">Sweat alert</a></li>
							<li><a href="typography.html">Typography</a></li>
							<li><a href="grid.html">Grid</a></li>
							<li><a href="tabs.html">Tabs</a></li>
							<li><a href="tab-stylish.html">Stylish Tabs</a></li>
							<li><a href="modals.html">Modals</a></li>
							<li><a href="progressbars.html">Progress Bars</a></li>
							<li><a href="notification.html">Notifications</a></li>
							<li><a href="carousel.html">Carousel</a></li>
							<li><a href="list-style.html">List & Media object</a></li>
							<li><a href="user-cards.html">User Cards</a></li>
							<li><a href="timeline.html">Timeline</a></li>
							<li><a href="timeline-horizontal.html">Horizontal Timeline</a></li>
							<li><a href="nestable.html">Nesteble</a></li>
							<li><a href="range-slider.html">Range Slider</a></li>
							<li><a href="bootstrap.html">Bootstrap UI</a></li>
							<li><a href="tooltip-stylish.html">Stylish Tooltips</a></li>
						</ul>
					</li>
					<li> <a href="#" class="waves-effect"><i data-icon="7" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Icons<span class="fa arrow"></span></span></a>
						<ul class="nav nav-second-level">
							<li> <a href="fontawesome.html">Font awesome</a> </li>
							<li> <a href="themifyicon.html">Themify Icons</a> </li>
							<li> <a href="simple-line.html">Simple line Icons</a> </li>
							<li><a href="linea-icon.html">Linea Icons</a></li>
							<li><a href="weather.html">Weather Icons</a></li>
						</ul>
					</li>
					<li> <a href="widgets.html" class="waves-effect"><i data-icon="P" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Widgets</span></a> </li>
					<li><a href="login.html" class="waves-effect"><i class="icon-logout fa-fw"></i> <span class="hide-menu">Log out</span></a></li>
				</ul>
				
			</div>
		</div>
		<!-- Left navbar-header end -->
		<!-- Page Content -->
		<div id="page-wrapper">
			<div class="container-fluid">
				<div class="row bg-title">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						<h4 class="page-title">University Dashboard</h4> </div>
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
						<ol class="breadcrumb">
							<li><a href="index.html">University</a></li>
							<li class="active">Dashboard</li>
						</ol>
					</div>
					<!-- /.col-lg-12 -->
				</div>
				<!-- .row -->
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					  <div class="white-box">
						<h3 class="box-title">HTML Course</h3>
						<div class="text-right"> <span class="text-muted">Monthly Fees</span>
						  <h1><sup><i class="ti-arrow-up text-success"></i></sup> $1200</h1>
						</div>
						<span class="text-success">20%</span>
						<div class="progress m-b-0">
						  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:20%;"> <span class="sr-only">20% Complete</span> </div>
						</div>
					  </div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					  <div class="white-box">
						<h3 class="box-title">Web Development Course</h3>
						<div class="text-right"> <span class="text-muted">Monthly Fees</span>
						  <h1><sup><i class="ti-arrow-down text-danger"></i></sup> $5000</h1>
						</div>
						<span class="text-danger">30%</span>
						<div class="progress m-b-0">
						  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:30%;"> <span class="sr-only">230% Complete</span> </div>
						</div>
					  </div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					  <div class="white-box">
						<h3 class="box-title">Web Designing Course</h3>
						<div class="text-right"> <span class="text-muted">Monthly Fees</span>
						  <h1><sup><i class="ti-arrow-up text-info"></i></sup> $8000</h1>
						</div>
						<span class="text-info">60%</span>
						<div class="progress m-b-0">
						  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:60%;"> <span class="sr-only">20% Complete</span> </div>
						</div>
					  </div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					  <div class="white-box">
						<h3 class="box-title">Android Development Course</h3>
						<div class="text-right"> <span class="text-muted">Yearly Fees</span>
						  <h1><sup><i class="ti-arrow-up text-inverse"></i></sup> $12000</h1>
						</div>
						<span class="text-inverse">80%</span>
						<div class="progress m-b-0">
						  <div class="progress-bar progress-bar-inverse" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:80%;"> <span class="sr-only">230% Complete</span> </div>
						</div>
					  </div>
					</div>
				  </div>
				<!-- /.row -->
				<!-- .row -->
				<div class="row">
					<div class="col-md-8 col-sm-6 col-xs-12">
						<div class="white-box">
							<h3 class="box-title m-b-0">University Earnings</h3>
							<span class="text-muted">All Earnings are in million $</span>
							<ul class="list-inline text-right">
								<li>
									<h5><i class="fa fa-circle m-r-5" style="color: #021d3a;"></i>Arts</h5> </li>
								<li>
									<h5><i class="fa fa-circle m-r-5" style="color: #00a5e5;"></i>Commerce</h5> </li>
								<li>
									<h5><i class="fa fa-circle m-r-5" style="color: #00c292;"></i>Science</h5> </li>
							</ul>
							<div id="morris-bar-chart" style="height:372px;"></div>
						</div>
					</div>
					<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
						<div class="white-box m-b-15">
							<h3 class="box-title">Earning From Medical college</h3>
							<div class="row">
								<div class="col-md-6 col-sm-6 col-xs-6  m-t-30">
									<h1 class="text-info">$64057</h1>
									<p class="text-muted">APRIL 2016</p> <b>(150 Sales)</b> </div>
								<div class="col-md-6 col-sm-6 col-xs-6">
									<div id="sparkline2dash" class="text-center"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
						<div class="white-box bg-info m-b-15">
							<h3 class="text-white box-title">Earning From Engineering college</h3>
							<div class="row">
								<div class="col-md-6 col-sm-6 col-xs-6  m-t-30">
									<h1 class="text-white">$30447</h1>
									<p class="light_op_text">APRIL 2016</p> <b class="text-white">(110 Sales)</b> </div>
								<div class="col-md-6 col-sm-6 col-xs-6">
									<div id="sales1" class="text-center"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				 
				<!-- /.row -->
				<div class="row">
				   
				   
					<div class="col-md-3 col-xs-12 col-sm-6">
						<img class="img-responsive" alt="user" src="../plugins/images/big/c2.jpg">
						<div class="white-box">
							<h4>Web Designing Course</h4>
							<div class="text-muted m-b-20"><span class="m-r-10"><i class="ti-alarm-clock"></i> 2 Year</span> <a class="text-muted m-l-10 m-r-10" href="#"><i class="fa fa-heart-o"></i> 38</a><span class="m-l-10"><i class="fa fa-usd"></i> 50</span></div>
							<p><span><i class="ti-alarm-clock"></i> Duration: 6 Months</span></p>
							<p><span><i class="ti-user"></i> Professor: Jane Doe</span></p>
							<p><span><i class="fa fa-graduation-cap"></i> Students: 200+</span></p>
							<button class="btn btn-success btn-rounded waves-effect waves-light m-t-10">More Details</button>
						</div>
					</div>
					<div class="col-md-3 col-xs-12 col-sm-6">
						<img class="img-responsive" alt="user" src="../plugins/images/big/c1.jpg">
						<div class="white-box">
							<h4>Ios Development Course</h4>
							<div class="text-muted m-b-20"><span class="m-r-10"><i class="ti-alarm-clock"></i> 2 Year</span> <a class="text-muted m-l-10 m-r-10" href="#"><i class="fa fa-heart-o"></i> 38</a><span class="m-l-10"><i class="fa fa-usd"></i> 50</span></div>
							<p><span><i class="ti-alarm-clock"></i> Duration: 6 Months</span></p>
							<p><span><i class="ti-user"></i> Professor: Jane Doe</span></p>
							<p><span><i class="fa fa-graduation-cap"></i> Students: 200+</span></p>
							<button class="btn btn-success btn-rounded waves-effect waves-light m-t-10">More Details</button>
						</div>
					</div>
					<div class="col-md-3 col-xs-12 col-sm-6">
						<img class="img-responsive" alt="user" src="../plugins/images/big/c4.jpg">
						<div class="white-box">
							<h4>Android Development Course</h4>
							<div class="text-muted m-b-20"><span class="m-r-10"><i class="ti-alarm-clock"></i> 2 Year</span> <a class="text-muted m-l-10 m-r-10" href="#"><i class="fa fa-heart-o"></i> 38</a><span class="m-l-10"><i class="fa fa-usd"></i> 50</span></div>
							<p><span><i class="ti-alarm-clock"></i> Duration: 6 Months</span></p>
							<p><span><i class="ti-user"></i> Professor: Jane Doe</span></p>
							<p><span><i class="fa fa-graduation-cap"></i> Students: 200+</span></p>
							<button class="btn btn-success btn-rounded waves-effect waves-light m-t-10">More Details</button>
						</div>
					</div>
					<div class="col-md-3 col-xs-12 col-sm-6">
						<img class="img-responsive" alt="user" src="../plugins/images/big/c3.jpg">
						<div class="white-box">
							<h4>Web Development Course</h4>
							<div class="text-muted m-b-20"><span class="m-r-10"><i class="ti-alarm-clock"></i> 2 Year</span> <a class="text-muted m-l-10 m-r-10" href="#"><i class="fa fa-heart-o"></i> 38</a><span class="m-l-10"><i class="fa fa-usd"></i> 50</span></div>
							<p><span><i class="ti-alarm-clock"></i> Duration: 6 Months</span></p>
							<p><span><i class="ti-user"></i> Professor: Jane Doe</span></p>
							<p><span><i class="fa fa-graduation-cap"></i> Students: 200+</span></p>
							
							<button class="btn btn-success btn-rounded waves-effect waves-light m-t-10">More Details</button>
						</div>
					</div>
				</div>
				<!-- .right-sidebar -->
				<div class="right-sidebar">
					<div class="slimscrollright">
						<div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
						<div class="r-panel-body">
							<ul>
								<li><b>Layout Options</b></li>
								<li>
									<div class="checkbox checkbox-info">
										<input id="checkbox1" type="checkbox" class="fxhdr">
										<label for="checkbox1"> Fix Header </label>
									</div>
								</li>
								<li>
									<div class="checkbox checkbox-warning">
										<input id="checkbox2" type="checkbox" class="fxsdr">
										<label for="checkbox2"> Fix Sidebar </label>
									</div>
								</li>
								<li>
									<div class="checkbox checkbox-success">
										<input id="checkbox4" type="checkbox" class="open-close">
										<label for="checkbox4"> Toggle Sidebar </label>
									</div>
								</li>
							</ul>
							<ul id="themecolors" class="m-t-20">
								<li><b>With Light sidebar</b></li>
								<li><a href="javascript:void(0)" theme="default" class="default-theme">1</a></li>
								<li><a href="javascript:void(0)" theme="green" class="green-theme">2</a></li>
								<li><a href="javascript:void(0)" theme="gray" class="yellow-theme">3</a></li>
								<li><a href="javascript:void(0)" theme="blue" class="blue-theme working">4</a></li>
								<li><a href="javascript:void(0)" theme="purple" class="purple-theme">5</a></li>
								<li><a href="javascript:void(0)" theme="megna" class="megna-theme">6</a></li>
								<li><b>With Dark sidebar</b></li>
								<br/>
								<li><a href="javascript:void(0)" theme="default-dark" class="default-dark-theme">7</a></li>
								<li><a href="javascript:void(0)" theme="green-dark" class="green-dark-theme">8</a></li>
								<li><a href="javascript:void(0)" theme="gray-dark" class="yellow-dark-theme">9</a></li>
								<li><a href="javascript:void(0)" theme="blue-dark" class="blue-dark-theme">10</a></li>
								<li><a href="javascript:void(0)" theme="purple-dark" class="purple-dark-theme">11</a></li>
								<li><a href="javascript:void(0)" theme="megna-dark" class="megna-dark-theme">12</a></li>
							</ul>
							<ul class="m-t-20 chatonline">
								<li><b>Chat option</b></li>
								<li>
									<a href="javascript:void(0)"><img src="../plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
								</li>
								<li>
									<a href="javascript:void(0)"><img src="../plugins/images/users/genu.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
								</li>
								<li>
									<a href="javascript:void(0)"><img src="../plugins/images/users/ritesh.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
								</li>
								<li>
									<a href="javascript:void(0)"><img src="../plugins/images/users/arijit.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
								</li>
								<li>
									<a href="javascript:void(0)"><img src="../plugins/images/users/govinda.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
								</li>
								<li>
									<a href="javascript:void(0)"><img src="../plugins/images/users/hritik.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
								</li>
								<li>
									<a href="javascript:void(0)"><img src="../plugins/images/users/john.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
								</li>
								<li>
									<a href="javascript:void(0)"><img src="../plugins/images/users/pawandeep.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /.right-sidebar -->
			</div>
			<!-- /.container-fluid -->
			<footer class="footer text-center"> 2016 &copy; Elite Admin brought to you by themedesigner.in </footer>
		</div>
		<!-- /#page-wrapper -->
	</div>
	<!-- /#wrapper -->
	<!-- jQuery -->
	<script src="{{ asset('plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="{{ asset('bootstrap/dist/js/bootstrap.min.js') }}"></script>
	<!-- Menu Plugin JavaScript -->
	<script src="{{ asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>
	<!--slimscroll JavaScript -->
	<script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
	<!--Wave Effects -->
	<script src="{{ asset('js/waves.js') }}"></script>
	<!--Morris JavaScript -->
	<script src="{{ asset('plugins/bower_components/raphael/raphael-min.js') }}"></script>
	<script src="{{ asset('plugins/bower_components/morrisjs/morris.js') }}"></script>
	<!-- Sparkline chart JavaScript -->
	<script src="{{ asset('plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
	<script src="{{ asset('plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js') }}"></script>
	<!-- Custom Theme JavaScript -->
	<script src="{{ asset('js/custom.min.js') }}"></script>
	<script src="{{ asset('js/dashboard1.js') }}"></script>
	
	<!--Style Switcher -->
	<script src="{{ asset('plugins/bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>
</body>

</html>