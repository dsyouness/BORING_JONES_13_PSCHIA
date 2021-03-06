<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>Psych.IA</title>
		<meta name="description" content="Psych.IA">
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="assets/images/favicon.ico">

		<!-- Bootstrap CSS -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		
		<!-- Font Awesome CSS -->
		<link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
		
		<!-- Custom CSS -->
		<link href="assets/css/style.css" rel="stylesheet" type="text/css" />
		
		<!-- BEGIN CSS for this page -->
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css"/>
		<!-- END CSS for this page -->
		
</head>

<body class="adminbody">

<div id="main">

	<!-- top bar navigation -->
	<div class="headerbar">

		<!-- LOGO -->
        <div class="headerbar-left">
			<a href="index.html" class="logo"><img alt="Logo" src="assets/images/logo.png" /> <span>Pysch.IA</span></a>
        </div>

        <nav class="navbar-custom">

                    <ul class="list-inline float-right mb-0">
						
						<li class="list-inline-item dropdown notif">
                            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fa fa-fw fa-question-circle"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5><small>Help and Support</small></h5>
                                </div>

                                <!-- item-->
                                <a target="_blank" href="#" class="dropdown-item notify-item">                                    
                                    <p class="notify-details ml-0">
                                        <b></b>
                                        <span>Contact Us</span>
                                    </p>
                                </a>

                                <!-- item-->
                                <a target="_blank" href="" class="dropdown-item notify-item">                                    
                                    <p class="notify-details ml-0">
                                        
                                    </p>
                                </a>                               

                                

                            </div>
                        </li>
						
                        <li class="list-inline-item dropdown notif">
                            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fa fa-fw fa-envelope-o"></i><span class="notif-bullet"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5><small><span class="label label-danger pull-xs-right">12</span>Contact Messages</small></h5>
                                </div>

                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">                                    
                                    <p class="notify-details ml-0">
                                        <b>Jokn Doe</b>
                                        <span>New message received</span>
                                        <small class="text-muted">2 minutes ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">                                    
                                    <p class="notify-details ml-0">
                                        <b>Michael Jackson</b>
                                        <span>New message received</span>
                                        <small class="text-muted">15 minutes ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">                                    
                                    <p class="notify-details ml-0">
                                        <b>Foxy Johnes</b>
                                        <span>New message received</span>
                                        <small class="text-muted">Yesterday, 13:30</small>
                                    </p>
                                </a>

                                <!-- All-->
                                <a href="#" class="dropdown-item notify-item notify-all">
                                    View All
                                </a>

                            </div>
                        </li>
                        
						<li class="list-inline-item dropdown notif">
                            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fa fa-fw fa-bell-o"></i><span class="notif-bullet"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg">
								<!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5><small><span class="label label-danger pull-xs-right">5</span>Allerts</small></h5>
                                </div>
								
                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-faded">
                                        <img src="assets/images/avatars/avatar2.png" alt="img" class="rounded-circle img-fluid">
                                    </div>
                                    <p class="notify-details">
                                        <b>John Doe</b>
                                        <span>User registration</span>
                                        <small class="text-muted">3 minutes ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-faded">
                                        <img src="assets/images/avatars/avatar3.png" alt="img" class="rounded-circle img-fluid">
                                    </div>
                                    <p class="notify-details">
                                        <b>Michael Cox</b>
                                        <span>Task 2 completed</span>
                                        <small class="text-muted">12 minutes ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-faded">
                                        <img src="assets/images/avatars/avatar4.png" alt="img" class="rounded-circle img-fluid">
                                    </div>
                                    <p class="notify-details">
                                        <b>Michelle Dolores</b>
                                        <span>New job completed</span>
                                        <small class="text-muted">35 minutes ago</small>
                                    </p>
                                </a>

                                <!-- All-->
                                <a href="#" class="dropdown-item notify-item notify-all">
                                    View All Allerts
                                </a>

                            </div>
                        </li>

                        <li class="list-inline-item dropdown notif">
                            <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="assets/images/avatars/admin.png" alt="Profile image" class="avatar-rounded">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="text-overflow"><small>Hello, admin</small> </h5>
                                </div>

                                <!-- item-->
                                <a href="pro-profile.html" class="dropdown-item notify-item">
                                    <i class="fa fa-user"></i> <span>Profile</span>
                                </a>

                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">
                                    <i class="fa fa-power-off"></i> <span>Logout</span>
                                </a>
								
								<!-- item-->
                                <a target="_blank" href="https://www.pikeadmin.com" class="dropdown-item notify-item">
                                    <i class="fa fa-external-link"></i> <span>Pike Admin</span>
                                </a>
                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left">
								<i class="fa fa-fw fa-bars"></i>
                            </button>
                        </li>                        
                    </ul>

        </nav>

	</div>
	<!-- End Navigation -->
	
 
	<!-- Left Sidebar -->
	<div class="left main-sidebar">
	
		<div class="sidebar-inner leftscroll">

			<div id="sidebar-menu">
        
			<ul>

					<li class="submenu">
						<a class="active" href="index.html"><i class="fa fa-fw fa-bars"></i><span> Dashboard </span> </a>
                    </li>

					<li class="submenu">
                        <a href="charts.php"><i class="fa fa-fw fa-area-chart"></i><span> Profil of patient </span> </a>
                    </li>
					
				
            </ul>

            <div class="clearfix"></div>

			</div>
        
			<div class="clearfix"></div>

		</div>

	</div>
	<!-- End Sidebar -->


    <div class="content-page">
	
		<!-- Start content -->
        <div class="content">
            
			<div class="container-fluid">
					
						<div class="row">
									<div class="col-xl-12">
											<div class="breadcrumb-holder">
													<h1 class="main-title float-left">Dashboard</h1>
													<ol class="breadcrumb float-right">
														<li class="breadcrumb-item">Home</li>
														<li class="breadcrumb-item active">Dashboard</li>
													</ol>
													<div class="clearfix"></div>
											</div>
									</div>
						</div>
						<!-- end row -->

						
							<div class="row">
									<!--<div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
											<div class="card-box noradius noborder bg-default">
													<i class="fa fa-file-text-o float-right text-white"></i>
													<h6 class="text-white text-uppercase m-b-20">Orders</h6>
													<h1 class="m-b-20 text-white counter">1,587</h1>
													<span class="text-white">15 New Orders</span>
											</div>
									</div>

									<div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
											<div class="card-box noradius noborder bg-warning">
													<i class="fa fa-bar-chart float-right text-white"></i>
													<h6 class="text-white text-uppercase m-b-20">Visitors</h6>
													<h1 class="m-b-20 text-white counter">250</h1>
													<span class="text-white">Bounce rate: 25%</span>
											</div>
									</div>-->

									<div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
											<div class="card-box noradius noborder bg-info">
													<i class="fa fa-user-o float-right text-white"></i>
													<h6 class="text-white text-uppercase m-b-20">List of patients</h6>
													<h1 class="m-b-20 text-white counter">50</h1>
													<span class="text-white">15 New patients</span>
											</div>
									</div>

									<div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
											<div class="card-box noradius noborder bg-danger">
													<i class="fa fa-bell-o float-right text-white"></i>
													<h6 class="text-white text-uppercase m-b-20">Notifications</h6>
													<h1 class="m-b-20 text-white counter">58</h1>
													<span class="text-white">3 New Notifications</span>
											</div>
									</div>
							</div>
							<!-- end row -->


							
							<div class="row">
							
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">						
										<div class="card mb-3">
											<div class="card-header">
												<h3><i class="fa fa-line-chart"></i>Number of consultations by Month</h3>
												
											</div>
												
											<div class="card-body">
												<canvas id="lineChart"></canvas>
											</div>							
											<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
										</div><!-- end card-->					
									</div>

									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-3">						
										<div class="card mb-3">
											<div class="card-header">
												<h3><i class="fa fa-star-o"></i>Score</h3>
												
											</div>
												
											<div class="card-body">
												<p class="font-600 m-b-5">Ashton Cox<span class="text-primary pull-right"><b>95%</b></span></p>
												<div class="progress">
												<div class="progress-bar progress-bar-striped progress-xs bg-primary" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="95"></div>
												</div>
												
												<div class="m-b-20"></div>
												
												<p class="font-600 m-b-5">Fiona Green <span class="text-primary pull-right"><b>88%</b></span></p>
												<div class="progress">
												<div class="progress-bar progress-bar-striped progress-xs bg-primary" role="progressbar" style="width: 88%" aria-valuenow="88" aria-valuemin="0" aria-valuemax="88"></div>
												</div>
												
												<div class="m-b-20"></div>
												
												<p class="font-600 m-b-5">Herrod Chandler<span class="text-info pull-right"><b>75%</b></span></p>
												<div class="progress">
												<div class="progress-bar progress-bar-striped progress-xs bg-info" role="progressbar" style="width: 78%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="75"></div>
												</div>

												<div class="m-b-20"></div>
												
												<p class="font-600 m-b-5">Jena Gaines<span class="text-info pull-right"><b>70%</b></span></p>
												<div class="progress">
												<div class="progress-bar progress-bar-striped progress-xs bg-info" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="70"></div>
												</div>

												<div class="m-b-20"></div>
												
												<p class="font-600 m-b-5">Brielle Williamson<span class="text-warning pull-right"><b>68%</b></span></p>
												<div class="progress">
												<div class="progress-bar progress-bar-striped progress-xs bg-warning" role="progressbar" style="width: 68%" aria-valuenow="68" aria-valuemin="0" aria-valuemax="68"></div>
												</div>

												<div class="m-b-20"></div>
												
												<p class="font-600 m-b-5">Colleen Hurst <span class="text-warning pull-right"><b>65%</b></span></p>
												<div class="progress">
												<div class="progress-bar progress-bar-striped progress-xs bg-warning" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="65"></div>
												</div>	

												<div class="m-b-20"></div>
												
												<p class="font-600 m-b-5">Donna Snider<span class="text-danger pull-right"><b>55%</b></span></p>
												<div class="progress">
												<div class="progress-bar progress-bar-striped progress-xs bg-danger" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="55"></div>
												</div>	

												<div class="m-b-20"></div>
												
												<p class="font-600 m-b-5">Airi Satou<span class="text-danger pull-right"><b>40%</b></span></p>
												<div class="progress">
												<div class="progress-bar progress-bar-striped progress-xs bg-danger" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="40"></div>
												</div>									
											</div>
											<div class="card-footer small text-muted">Updated today at 11:11 AM</div>
										</div><!-- end card-->					
									</div>
									
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-3">						
										<div class="card mb-3">
											<div class="card-header">
												<h3><i class="fa fa-envelope-o"></i> List of Patients</h3>
												
											</div>
												
											<div class="card-body">
												
												<div class="widget-messages nicescroll" style="height: 400px;">
																<a href="#">
																	<div class="message-item">
																		<div class="message-user-img"><img src="assets/images/avatars/avatar2.png" class="avatar-circle" alt=""></div>
																		<p class="message-item-user">John Doe</p>
																		<!--<p class="message-item-msg">Hello. I want to buy your product</p>
																		<p class="message-item-date">11:50 PM</p>-->
																	</div>
																</a>
																<a href="#">
																	<div class="message-item">
																		<div class="message-user-img"><img src="assets/images/avatars/avatar5.png" class="avatar-circle" alt=""></div>
																		<p class="message-item-user">Ashton Cox</p>
																		<!--<p class="message-item-msg">Great job for this task</p>
																		<p class="message-item-date">14:25 PM</p>-->
																	</div>
																</a>
																<a href="#">
																	<div class="message-item">
																		<div class="message-user-img"><img src="assets/images/avatars/avatar6.png" class="avatar-circle" alt=""></div>
																		<p class="message-item-user">Colleen Hurst</p>
																		<!--<p class="message-item-msg">I have a new project for you</p>
																		<p class="message-item-date">13:20 PM</p>-->
																	</div>
																</a>
																<a href="#">
																	<div class="message-item">
																		<div class="message-user-img"><img src="assets/images/avatars/avatar10.png" class="avatar-circle" alt=""></div>
																		<p class="message-item-user">Fiona Green</p>
																		<!--<p class="message-item-msg">Nice to meet you</p>
																		<p class="message-item-date">15:45 PM</p>-->
																	</div>
																</a>
																<a href="#">
																	<div class="message-item">
																		<div class="message-user-img"><img src="assets/images/avatars/avatar2.png" class="avatar-circle" alt=""></div>
																		<p class="message-item-user">Donna Snider</p>
																		<!--<p class="message-item-msg">I have a new project for you</p>
																		<p class="message-item-date">15:45 AM</p>-->
																	</div>
																</a>
																<a href="#">
																	<div class="message-item">
																		<div class="message-user-img"><img src="assets/images/avatars/avatar5.png" class="avatar-circle" alt=""></div>
																		<p class="message-item-user">Garrett Winters</p>
																		<!--<p class="message-item-msg">I have a new project for you</p>
																		<p class="message-item-date">15:45 AM</p>-->
																	</div>
																</a>
																<a href="#">
																	<div class="message-item">
																		<div class="message-user-img"><img src="assets/images/avatars/avatar6.png" class="avatar-circle" alt=""></div>
																		<p class="message-item-user">Herrod Chandler</p>
																		<!--<p class="message-item-msg">Hello! I'm available for this job</p>
																		<p class="message-item-date">15:45 AM</p>-->
																	</div>
																</a>
																<a href="#">
																	<div class="message-item">
																		<div class="message-user-img"><img src="assets/images/avatars/avatar10.png" class="avatar-circle" alt=""></div>
																		<p class="message-item-user">Jena Gaines</p>
																		<!--<p class="message-item-msg">I have a new project for you</p>
																		<p class="message-item-date">15:45 AM</p>-->
																	</div>
																</a>
																<a href="#">
																	<div class="message-item">
																		<div class="message-user-img"><img src="assets/images/avatars/avatar2.png" class="avatar-circle" alt=""></div>
																		<p class="message-item-user">Airi Satou</p>
																		<!--<p class="message-item-msg">I have a new project for you</p>
																		<p class="message-item-date">15:45 AM</p>-->
																	</div>
																</a>
																<a href="#">
																	<div class="message-item">
																		<div class="message-user-img"><img src="assets/images/avatars/avatar10.png" class="avatar-circle" alt=""></div>
																		<p class="message-item-user">Brielle Williamson</p>
																		<!--<p class="message-item-msg">I have a new project for you</p>
																		<p class="message-item-date">15:45 AM</p>-->
																	</div>
																</a>
															</div>
												
											</div>
											<div class="card-footer small text-muted">Updated today at 11:10 AM</div>
										</div><!-- end card-->					
									</div>
									
							</div>
							<!-- end row -->
							
							
							



            </div>
			<!-- END container-fluid -->

		</div>
		<!-- END content -->

    </div>
	<!-- END content-page -->
    
	<footer class="footer">
		<!--<span class="text-right">
		Copyright <a target="_blank" href="#">Your Website</a>
		</span>
		<span class="float-right">
		Powered by <a target="_blank" href="https://www.pikeadmin.com"><b>Pike Admin</b></a>
		</span>-->
	</footer>

</div>
<!-- END main -->

<script src="assets/js/modernizr.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/moment.min.js"></script>
		
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/detect.js"></script>
<script src="assets/js/fastclick.js"></script>
<script src="assets/js/jquery.blockUI.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>

<!-- App js -->
<script src="assets/js/pikeadmin.js"></script>

<!-- BEGIN Java Script for this page -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

	<!-- Counter-Up-->
	<script src="assets/plugins/waypoints/lib/jquery.waypoints.min.js"></script>
	<script src="assets/plugins/counterup/jquery.counterup.min.js"></script>			

	<script>
		$(document).ready(function() {
			// data-tables
			$('#example1').DataTable();
					
			// counter-up
			$('.counter').counterUp({
				delay: 10,
				time: 600
			});
		} );		
	</script>
	
	<script>
	var ctx1 = document.getElementById("lineChart").getContext('2d');
	var lineChart = new Chart(ctx1, {
		type: 'bar',
		data: {
			labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
			datasets: [{
					label: 'Dataset 1',
					backgroundColor: '#3EB9DC',
					data: [10, 14, 6, 7, 13, 9, 13, 16, 11, 8, 12, 9] 
				}, {
					label: 'Dataset 2',
					backgroundColor: '#EBEFF3',
					data: [12, 14, 6, 7, 13, 6, 13, 16, 10, 8, 11, 12]
				}]
				
		},
		options: {
						tooltips: {
							mode: 'index',
							intersect: false
						},
						responsive: true,
						scales: {
							xAxes: [{
								stacked: true,
							}],
							yAxes: [{
								stacked: true
							}]
						}
					}
	});


	var ctx2 = document.getElementById("pieChart").getContext('2d');
	var pieChart = new Chart(ctx2, {
		type: 'pie',
		data: {
				datasets: [{
					data: [12, 19, 3, 5, 2, 3],
					backgroundColor: [
						'rgba(255,99,132,1)',
						'rgba(54, 162, 235, 1)',
						'rgba(255, 206, 86, 1)',
						'rgba(75, 192, 192, 1)',
						'rgba(153, 102, 255, 1)',
						'rgba(255, 159, 64, 1)'
					],
					label: 'Dataset 1'
				}],
				labels: [
					"Red",
					"Orange",
					"Yellow",
					"Green",
					"Blue"
				]
			},
			options: {
				responsive: true
			}
	 
	});


	var ctx3 = document.getElementById("doughnutChart").getContext('2d');
	var doughnutChart = new Chart(ctx3, {
		type: 'doughnut',
		data: {
				datasets: [{
					data: [12, 19, 3, 5, 2, 3],
					backgroundColor: [
						'rgba(255,99,132,1)',
						'rgba(54, 162, 235, 1)',
						'rgba(255, 206, 86, 1)',
						'rgba(75, 192, 192, 1)',
						'rgba(153, 102, 255, 1)',
						'rgba(255, 159, 64, 1)'
					],
					label: 'Dataset 1'
				}],
				labels: [
					"Red",
					"Orange",
					"Yellow",
					"Green",
					"Blue"
				]
			},
			options: {
				responsive: true
			}
	 
	});
	</script>
<!-- END Java Script for this page -->

</body>
</html>